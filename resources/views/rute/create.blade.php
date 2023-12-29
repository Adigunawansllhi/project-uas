@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Horizontal Form</h3>
        </div>
        <form class="form-horizontal" action="{{ route('rute-store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Rute</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="rute" placeholder="Rute">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-danger">Simpan</button>
                <button type="submit" class="btn btn-default float-right">Batal</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
@endsection
