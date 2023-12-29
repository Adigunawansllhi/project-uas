@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Horizontal Form</h3>
        </div>
        <form class="form-horizontal" action={{ route('pengiriman-store') }} method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Resi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="resi"
                            value="{{ \App\Models\Pengiriman::generateResi() }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Kirim</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tgl_kirim" name="tgl_kirim"
                            placeholder="Tanggal Kirim">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pengirim</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pengirim" placeholder="Pengirim">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Rute</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="rute_id" required>
                            <option value="" selected disabled>Pilih Rute</option>
                            @foreach ($rute as $r)
                                <option value="{{ $r->id }}">{{ $r->rute }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Penerima</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="penerima" placeholder="Penerima">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No Telp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_telp_penerima" placeholder="No Telp Penerima">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="kat_id" required>
                            <option value="" selected disabled>Pilih Kategori</option>
                            @foreach ($kat as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pcs</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pcs" placeholder="Pcs">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Total Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="total_harga" placeholder="Total Harga">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-danger">Simpan</button>
                <a href="#" class="btn btn-default float-right">Batal</a>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var today = new Date();
            var day = today.getDate();
            var month = today.getMonth() + 1; // January is 0!
            var year = today.getFullYear();

            if (day < 10) {
                day = '0' + day;
            }

            if (month < 10) {
                month = '0' + month;
            }

            var currentDate = year + '-' + month + '-' + day;

            // Set the value of the date input
            document.getElementById('tgl_kirim').value = currentDate;
        });
    </script>
@endsection
