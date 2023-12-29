@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data kategori</h3>
        </div>
        <div class="button d-flex justify-content-end m-3">
            <a href="{{ route('kategori-create') }}" class="btn btn-danger"> <i class="fas fa-plus-circle"></i> Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th style="width : 50px">NO</th>
                        <th>Kategori</th>
                        <th style="width : 200px">Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($data as $d)
                    <tbody>
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->nama_kategori }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('kategori-edit', ['id' => $d->id]) }}" class="btn btn-danger"
                                        style="border-radius: 5px; margin-right: 5px;">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('kategori-delete', ['id' => $d->id]) }}" method="POST"
                                        id="deleteForm{{ $d->id }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="button" class="btn btn-danger" style="border-radius: 5px;"
                                            onclick="confirmDelete({{ $d->id }})">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                @endforeach
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Konfirmasi!',
                text: 'Apakah anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If the user clicks "Yes", submit the form
                    document.getElementById('deleteForm' + id).submit();
                }
            });
        }
    </script>
@endsection
