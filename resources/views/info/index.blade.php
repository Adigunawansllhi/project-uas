@extends('layouts.app')
@section('content')
    <div class="col-8 m-auto">

        <div class="card card-danger card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('AdminLTE') }}/dist/img/myfoto.jpg"
                        alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">Adi Gunawan Silalahi</h3>
                <p class="text-muted text-center">0702212056</p>

                <a href="https://github.com/Adigunawansllhi" class="btn btn-danger  btn-block"><b>Follow</b></a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Mata Kuliah</strong>
                <p class="text-muted">Pemograman Berbasis Web Lanjutan/SI1/V/2023</p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Universitas</strong>
                <p class="text-muted">Universitas Islam Negeri Sumatera Utara</p>
                <hr>
                <strong><i class="fas fa-chalkboard-teacher"></i> Dosen Pengampu</strong>
                <p class="text-muted">Suendri, M.Kom</p>
                <hr>
                <strong><i class="far fa-file-alt mr-1"></i> Deskripsi Tugas</strong>
                <p class="text-muted">Aplikasi ini merupakan aplikasi yang dibuat guna menyelesaikan Ujian Semester.
                    Aplikasi ini dirancang dengan bahasa pemograman PHP dan menggunakan framework Laravel 10. Studi Kasus
                    aplikasi ini adalah
                    pengiriman barang oleh salah satu jasa travel yaitu "Flores Travel" </p>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
