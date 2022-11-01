@extends('admin.index.index')

@section('content')
    @include('koneksi.css')
    <div class="row">
        <div class="box-top hidden-lg hidden-md hidden-sm ">
            <div class="module sohomepage-slider ">
                <div class="yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no"
                    data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1"
                    data-items_column1="1" data-items_column2="1" data-items_column3="1"
                    data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes"
                    data-loop="no" data-hoverpause="yes">
                    <div class="yt-content-slide">
                        <a href="#"><img src="landingpage/image/catalog/slideshow/home1/slider-1.jpg"
                                alt="slider1" class="img-responsive"></a>
                        <a href="" class="btn btn-warning">Edit</a>
                    </div>
                    <br/>>
                    <div class="yt-content-slide">
                        <a href="#"><img src="landingpage/image/catalog/slideshow/home1/slider-2.jpg"
                                alt="slider2" class="img-responsive"></a>
                        <a href="" class="btn btn-warning">Edit</a>
                    </div>
                    <br/>
                    <div class="yt-content-slide">
                        <a href="#"><img src="landingpage/image/catalog/slideshow/home1/slider-3.jpg"
                                alt="slider3" class="img-responsive"></a>
                        <a href="" class="btn btn-warning">Edit</a>
                    </div>
                </div>
                <div class="loadeding"></div>
            </div>
            <br/>
        </div>
      
            <div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5 col-xxl-12">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="landingpage/image/catalog/banners/banner1.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xxl-12">
                                <div class="new-arrival-content position-relative">
                                    <h4>Solid Women's V-neck Dark T-Shirt</h4>
                                    <p class="price">$320.00</p>
                                    <td>
                                        <a href="" class="btn btn-warning">Edit</a>
                                    </td>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="col-lg-12 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid"
                                                src="landingpage/image/catalog/banners/banner2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">
                                        <h4>Solid Women's V-neck Dark T-Shirt</h4>
                                        <p class="price">$320.00</p>
                                        <td>
                                            <a href="" class="btn btn-warning">Edit</a>
                                        </td>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                @include('koneksi.js')
            @endsection
