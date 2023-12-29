@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Horizontal Form</h3>
        </div>
        <form class="form-horizontal" action="{{ route('pengiriman-update', ['id' => $data->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Resi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="resi" placeholder="kategori"
                            value="{{ $data->resi }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Kirim</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_kirim" placeholder="kategori"
                            value="{{ $data->tgl_kirim }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pengirim</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pengirim" placeholder="kategori"
                            value="{{ $data->pengirim }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Rute</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="rute_id" required>
                            @foreach ($rute as $r)
                                <option value="{{ $r->id }}" {{ $data->rute->id == $r->id ? 'selected' : '' }}>
                                    {{ $r->rute }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Penerima</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="penerima" placeholder="kategori"
                            value="{{ $data->penerima }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No Telp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_telp_penerima" placeholder="kategori"
                            value="{{ $data->no_telp_penerima }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="kat_id" required>
                            @foreach ($kat as $k)
                                <option value="{{ $k->id }}" {{ $data->kat->id == $k->id ? 'selected' : '' }}>
                                    {{ $k->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pcs</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pcs" placeholder="kategori"
                            value="{{ $data->pcs }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Total Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="total_harga" placeholder="kategori"
                            value="{{ $data->total_harga }}">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-danger" onclick="confirmUpdate()">Update</button>
                <button type="submit" class="btn btn-default float-right">Batal</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>

    <script>
        function confirmUpdate() {
            Swal.fire({
                title: 'Konfirmasi!',
                text: 'Apakah anda yakin ingin mengubah data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, saya yakin!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If the user clicks "Yes", submit the form
                    document.querySelector('form').submit();
                }
            });
        }
    </script>
@endsection
