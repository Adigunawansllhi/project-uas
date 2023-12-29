@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cetak Data Agenda</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('filter_laporan') }}" method="GET">
                <div class="row">
                    <div class="col">
                        <label class="fw-semibold">Tanggal Awal</label>
                        <input type="date" class="form-control" name="start_date">
                    </div>
                    <div class="col">
                        <label class="fw-semibold">Tanggal Akhir</label>
                        <input type="date" class="form-control" name="end_date">
                    </div>
                </div>
                <div class="button mt-3">
                    <button type="submit" class="btn btn-danger">Filter</button>
                    <button type="button" class="btn btn-secondary" onclick="clearFilter()">Clear Filter</button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="card">
        <div class="card-header">
            @if (isset($start_date) && isset($end_date))
                <p>Data Tanggal : {{ $start_date }} sampai {{ $end_date }}</p>
            @else
                <p>Semua Data</p>
            @endif
        </div>
        <div class="button d-flex justify-content-end m-3">
            @if (isset($start_date) && isset($end_date))
                <a href="{{ route('filter_print', ['start_date' => $start_date, 'end_date' => $end_date]) }}"
                    class="btn btn-danger">Cetak</a>
            @else
                <a href="{{ route('filter_print') }}" class="btn btn-danger">Cetak Semua
                    Data</a>
            @endif
        </div>

        <div class="card-body">
            @if ($data->isEmpty())
                <p class="text-danger text-center">Tidak ada data yang sesuai dengan filter.</p>
            @else
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width : 30px">NO</th>
                            <th style="width : 100px">Resi</th>
                            <th>Tanggal</th>
                            <th>Pengirim</th>
                            <th>Tujuan</th>
                            <th>Penerima</th>
                            <th>No Telp</th>
                            <th>Kategori</th>
                            <th>Pcs</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $d->resi }}</td>
                                <td>{{ $d->tgl_kirim }}</td>
                                <td>{{ $d->pengirim }}</td>
                                <td>{{ $d->rute->rute }}</td>
                                <td>{{ $d->penerima }}</td>
                                <td>{{ $d->no_telp_penerima }}</td>
                                <td>{{ $d->kat->nama_kategori }}</td>
                                <td>{{ $d->pcs }}</td>
                                <td>{{ 'Rp ' . number_format($d->total_harga, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
