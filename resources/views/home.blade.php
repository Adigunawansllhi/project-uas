@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $pengiriman }}<sup style="font-size: 20px"></sup></h3>

                        <p>Pengiriman</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shipping-fast"></i>

                    </div>
                    <a href="{{ route('pengiriman') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $rute }}<sup style="font-size: 20px"></sup></h3>

                        <p>Rute</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-route"></i>

                    </div>
                    <a href="{{ route('rute') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $kat }}<sup style="font-size: 20px"></sup></h3>

                        <p>Kategori</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-list-alt"></i>

                    </div>
                    <a href="{{ route('kategori') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>\
@endsection
