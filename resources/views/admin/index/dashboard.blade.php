@extends('admin.index.index')

@section('content')

@include("koneksi.css")

            <div class="col-xl-9 col-xxl-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-secondary">
                        <div class="card-body p-4">
                        <div class="media">
                            <span class="mr-3">
                            <i class="la la-categories"></i>
                            </span>
                            <div class="media-body text-white">
                            <h5 class="mb-1 text-white">{{$kategori}}</h5>
                            <p class="mb-1">Kategori</p>
                            <h3 class="text-white"></h3>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-success">
                        <div class="card-body p-4">
                        <div class="media">
                            <span class="mr-3">
                            <i class="la la-user"></i>
                            </span>
                            <div class="media-body text-white">
                            <h5 class="text-white mb-1">{{$penjual}}</h5>
                            <p class="mb-1">Penjual</p>
                            <h3 class="text-white"></h3>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-primary">
                        <div class="card-body p-4">
                        <div class="media">
                            <span class="mr-3">
                            <i class="la la-user"></i>
                            </span>
                            <div class="media-body text-white">
                            <h5 class="text-white mb-1">{{$pembayaran}}</h5>
                            <p class="mb-1">Pembayaran</p>
                            <h3 class="text-white"></h3>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-succes">
                        <div class="card-body p-4">
                        <div class="media">
                            <span class="mr-3">
                            <i class="la la-graduation-cap"></i>
                            </span>
                            <div class="media-body text-black">
                            <h5 class="mb-1">{{$pengiriman}}</h5>
                            <p class="mb-1">Pengiriman</p>
                            <h3 class="text-black"></h3>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

@endsection
