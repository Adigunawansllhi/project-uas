@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Horizontal Form</h3>
        </div>
        <form class="form-horizontal" action="{{ route('kategori-update', ['id' => $data->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_kategori" placeholder="kategori"
                            value="{{ $data->nama_kategori }}">
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
