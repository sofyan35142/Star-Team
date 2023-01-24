<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    @include('landingpage.layout.head')
</head>

<body class="res layout-1 layout-subpage">

    @include('landingpage.layout.header')
    <!-- //Header Container  -->

    <!-- Main Container  -->

    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="/halutama"><i class="fa fa-home"></i></a></li>
            <li><a href="/favorit">Flash Sale</a></li>
        </ul>
        <div class="module deals-layout1 flashsalewrap">
            <h3 class="modtitle"><span>Flash Sale</span></h3>
            <div class="modcontent">
                <div id="so_deal_1" class="so-deal style2">
                    <div class="extraslider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no"
                        data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="2"
                        data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1"
                        data-arrows="yes" data-pagination="yes" data-lazyload="yes" data-loop="no"
                        data-hoverpause="yes">
                        <div class="item">
                            <div class="product-thumb">
                                <div class="row">
                                    <div class="inner">
                                        <div class="item-right col-lg-6 col-md-7 col-sm-7 col-xs-12" style="left:39%">
                                            <div class="caption">
                                                <!--countdown box-->
                                                <div class="item-time-w">
                                                    <div class="time-title"></div>
                                                    <div class="item-time">
                                                        <div class="item-timer">
                                                            <div class="clockdiv" data-date="11 02,2022 00:00:00">
                                                                <div class="time-item time-day">
                                                                    <div class="num-time days"></div>
                                                                    <div class="name-time">Hari</div>
                                                                </div>
                                                                <div class="time-item time-hour">
                                                                    <div class="num-time hours"></div>
                                                                    <div class="name-time">Jam</div>
                                                                </div>
                                                                <div class="time-item time-min">
                                                                    <div class="num-time minutes"></div>
                                                                    <div class="name-time">Menit</div>
                                                                </div>
                                                                <div class="time-item time-sec">
                                                                    <div class="num-time seconds"></div>
                                                                    <div class="name-time">Detik</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end countdown box-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="product-thumb transition ">
                            <div class="row">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" onclick="jam1()">08.00</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" onclick="jam2()">12.00</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" onclick="jam3()">24.00</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>


    <div class="module listingtab1-custom listingtab-layout1">
        {{-- <h3 class="modtitle"><span>Flash Sale</span></h3> --}}
        <div id="so_listing_tabs_2" class="so-listing-tabs first-load">
            <div class="loadeding"></div>
            <div class="ltabs-wrap">
                <div class="ltabs-items-container products-list grid">
                    <!--Begin Items-->
                    <div class="ltabs-items ltabs-items-selected items-category-51" data-total="1">
                        <div class="ltabs-items-inner ltabs-slider" id="blok">
                            <!-- item listing tab -->
                            <div class="ltabs-item">
                                <div id="jam1">
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Sepatu Converse">
                                                        <img src="fotoproduk/CONVERSETINGGI.jpeg" alt="image"
                                                            height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -16%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price"> <span class="price-new">Rp.460.999</span>
                                                        <span class="price-old">Rp.500.999</span>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Sepatu Converse"
                                                            target="_self">Sepatu Converse</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/270/ola6.jfif') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -61%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.250.999</span>
                                                            <span class="price-old">Rp.500.999</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan" target="_self">Bet
                                                            Tenis Meja</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/80/last3.jpg') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -50%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.300.000</span>
                                                            <span class="price-old">Rp.599.999</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan"
                                                            target="_self">Sarung
                                                            Wadimor</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/80/top2.jfif') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -70%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.80.000</span>
                                                            <span class="price-old">Rp.400.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan"
                                                            target="_self">Laptop
                                                            Asus </a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/80/top4.jfif') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -66%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.300.000</span>
                                                            <span class="price-old">Rp.750.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan"
                                                            target="_self">Sepatu
                                                            Lari Nike</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <h1>Jam 2</h1> --}}
                                <div id="jam2">
                                    <div class="item-inner product-layout transition product-grid">

                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/80/8.jpg') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -40%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.220.000</span>
                                                            <span class="price-old">Rp.420.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan"
                                                            target="_self">Sofa</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/80/top3.webp') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -30%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.400.000</span>
                                                            <span class="price-old">Rp.600.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan" target="_self">Tas
                                                            Eiger</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/80/5.jpg') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -81%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.30.000</span>
                                                            <span class="price-old">Rp.125.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan" target="_self">Vas
                                                            Bunga</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/80/last4.jfif') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -50%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.250.000</span>
                                                            <span class="price-old">Rp.500.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan"
                                                            target="_self">Helm
                                                            Ink Ori</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/funiture/14.jpg') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -79%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.50.000</span>
                                                            <span class="price-old">Rp.210.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan"
                                                            target="_self">Lampu
                                                            Tidur</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/funiture/ele1.png') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -50%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.750.000</span>
                                                            <span class="price-old">Rp.1.250.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan" target="_self">Tv
                                                            Lcd
                                                            Polytron</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/funiture/ola7.jfif') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -25%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.230.000</span>
                                                            <span class="price-old">Rp.330.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan"
                                                            target="_self">Sarung
                                                            Tangan Kiper</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/270/ele7.jfif') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -44%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.660.000</span>
                                                            <span class="price-old">Rp.128.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan"
                                                            target="_self">Kulkas
                                                            2 Pintu</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/270/foto4.jpeg') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -50%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.200.000</span>
                                                            <span class="price-old">Rp.400.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan"
                                                            target="_self">Sepatu
                                                            sneakers</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Samyang Cheese">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/270/ola3.webp') }}"
                                                            alt="image" height="200px" width="200px"
                                                            height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -70%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.60.000</span>
                                                            <span class="price-old">Rp.180.000</span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="/detailproduk" title="Samyang Cheese"
                                                            target="_self">Jersey Basket</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <h1>Jam 3</h1> --}}
                                <div id="jam3">
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/270/ele9.webp') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -50%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span
                                                                class="price-new">Rp.1.200.000</span>
                                                            <span class="price-old">Rp.2.400.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan"
                                                            target="_self">Mesin Cuci</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/270/produk1.jfif') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -70%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.40.999</span>
                                                            <span class="price-old">Rp.129.999</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan"
                                                            target="_self">shampo head and shoulder</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">

                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Jam Tangan">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/270/foto3.jpeg') }}"
                                                            alt="Jam Tangan" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -70%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.30.000</span>
                                                            <span class="price-old">Rp.80.000</span>
                                                        </div>
                                                    </div>

                                                    <h4><a href="/detailproduk" title="Jam Tangan"
                                                            target="_self">Sweater</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Popsocket">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/270/ola1.jpg') }}"
                                                            alt="Popsocket" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -47%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.440.999</span>
                                                            <span class="price-old">Rp.759.999</span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="/detailproduk" title="Popsocket"
                                                            target="_self">Sepatu Futsal Specs</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Sling Bag">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/270/ola4.jpg') }}"
                                                            alt="image" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span
                                                                class="price-new">Rp.1.300.000</span>
                                                            <span class="price-old">Rp.3.800.000</span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="/detailproduk" title="Sling Bag"
                                                            target="_self">Raket Badminton Yonex</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                            <div class="box-label"> <span class="label-product label-sale"> -77%
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Mouse Pad">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/270/produk3.jpg') }}"
                                                            alt="image" height="200px" width="200px">
                                                    </a>
                                                </div>

                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.60.999</span>
                                                            <span class="price-old">Rp.120.999</span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="/detailproduk" title="Mouse Pad"
                                                            target="_self">Listerine</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                            <div class="box-label"> <span class="label-product label-sale"> -50%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Sweater">
                                                        <img src="{{ asset('landingpage/image/catalog/demo/product/270/ola5.jfif') }}"
                                                            alt="image" height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -30%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.220.000</span>
                                                            <span class="price-old">Rp.330.000</span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="/detailproduk" title="Sweater" target="_self">Bola
                                                            Futsal Ortuseight</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Nail Polish">
                                                        <img src="{{ asset('emarket/image/catalog/demo/product/270/14.jpg') }}"
                                                            alt="image" height="200px" width="200px">

                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -25%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Tambahkan ke Keranjang" onclick="cart.add('60 ');">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <span>Tambahkan ke Keranjang </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.100.000</span>
                                                            <span class="price-old">Rp.150.000</span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="/detailproduk" title="Nail Polish"
                                                            target="_self">Jam Dinding Rusak</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Kaos Kaki">
                                                        <img src="fotoproduk/sekakik.jpg" alt="image"
                                                            height="200px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -60%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Add to cart" onclick="cart.add('60 ');"> <i
                                                            class="fa fa-shopping-basket"></i>
                                                        <span>Add to cart </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.7.000</span>
                                                            <span class="price-old">Rp.28.000</span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="/detailproduk" title="Kaos Kaki" target="_self">Kaos
                                                            Kaki</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container second_img">
                                                    <a href="/detailproduk" target="_self" title="Kulot Ribbon">
                                                        <img src="fotoproduk/kulot.jpg" alt="image" height="200px"
                                                            width="200px">
                                                    </a>
                                                </div>
                                                <div class="box-label"> <span class="label-product label-sale">
                                                        -75%
                                                    </span>
                                                </div>
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart btn-button"
                                                        title="Add to cart" onclick="cart.add('60 ');"> <i
                                                            class="fa fa-shopping-basket"></i>
                                                        <span>Add to cart </span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <div class="price">
                                                        <div class="price"> <span class="price-new">Rp.15.000</span>
                                                            <span class="price-old">Rp.40.000</span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="/detailproduk" title="Kulot Ribbon"
                                                            target="_self">Kulot Ribbon</a>
                                                        <a href="#"><button
                                                                class="btn btn-danger">Beli</button></a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end item listing tab -->
                            </div>
                        </div>
                        <div class="ltabs-items items-category-51 grid" data-total="14">
                            <div class="ltabs-loading"></div>
                            <div class="ltabs-wrap">
                                <div class="ltabs-items-container products-list grid">
                                    <!--Begin Items-->
                                    <div class="ltabs-items ltabs-items-selected items-category-51" data-total="14">
                                        <div class="ltabs-items-inner ltabs-slider">
                                            <!-- item listing tab -->
                                            <div class="ltabs-item">
                                                <div class="item-inner product-layout transition product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="/detailproduk" target="_self"
                                                                    title="Sepatu Converse">
                                                                    <img src="fotoproduk/CONVERSETINGGI.jpeg"
                                                                        alt="image" height="200px" width="200px">
                                                                </a>
                                                            </div>
                                                            <div class="box-label"> <span
                                                                    class="label-product label-sale"> -44% </span>
                                                            </div>
                                                            <div class="button-group so-quickview cartinfo--left">
                                                                <button type="button" class="addToCart btn-button"
                                                                    title="Tambahkan ke Keranjang"
                                                                    onclick="cart.add('60 ');"> <i
                                                                        class="fa fa-shopping-basket"></i>
                                                                    <span>Tambahkan ke Keranjang </span>
                                                                </button>

                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <div class="price"> <span
                                                                        class="price-new">Rp.330.999</span>
                                                                    <span class="price-old">Rp.500.999</span>
                                                                </div>

                                                                <h4><a href="/detailproduk" title="Sepatu Converse"
                                                                        target="_self">Sepatu Converse</a>
                                                                    <a href="#"><button
                                                                            class="btn btn-danger">Beli</button></a>
                                                                </h4>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="item-inner product-layout transition product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block">

                                                            <div class="product-image-container second_img">
                                                                <a href="/detailproduk" target="_self"
                                                                    title="Jam Tangan">
                                                                    <img src="{{ asset('landingpage/image/catalog/demo/product/270/ola6.jfif') }}"
                                                                        alt="Jam Tangan" height="200px"
                                                                        width="200px">
                                                                </a>
                                                            </div>
                                                            <div class="box-label"> <span
                                                                    class="label-product label-sale"> -16% </span>
                                                            </div>
                                                            <div class="button-group so-quickview cartinfo--left">
                                                                <button type="button" class="addToCart btn-button"
                                                                    title="Tambahkan ke Keranjang"
                                                                    onclick="cart.add('60 ');"> <i
                                                                        class="fa fa-shopping-basket"></i>
                                                                    <span>Tambahkan ke Keranjang </span>
                                                                </button>

                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <div class="price">
                                                                    <div class="price"> <span
                                                                            class="price-new">Rp.439.999</span>
                                                                        <span class="price-old">Rp.599.999</span>
                                                                    </div>
                                                                </div>

                                                                <h4><a href="/detailproduk" title="Jam Tangan"
                                                                        target="_self">Bet Tenis Meja</a>
                                                                    <a href="#"><button
                                                                            class="btn btn-danger">Beli</button></a>
                                                                </h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item-inner product-layout transition product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="/detailproduk" target="_self"
                                                                    title="Samyang Cheese">
                                                                    <img src="{{ asset('landingpage/image/catalog/demo/product/270/ola3.webp') }}"
                                                                        alt="image" height="200px" width="200px"
                                                                        height="200px" width="200px">
                                                                </a>
                                                            </div>
                                                            <div class="box-label"> <span
                                                                    class="label-product label-sale"> -16% </span>
                                                            </div>
                                                            <div class="button-group so-quickview cartinfo--left">
                                                                <button type="button" class="addToCart btn-button"
                                                                    title="Tambahkan ke Keranjang"
                                                                    onclick="cart.add('60 ');"> <i
                                                                        class="fa fa-shopping-basket"></i>
                                                                    <span>Tambahkan ke Keranjang </span>
                                                                </button>

                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <div class="price">
                                                                    <div class="price"> <span
                                                                            class="price-new">Rp.420.999</span>
                                                                        <span class="price-old">Rp.480.999</span>
                                                                    </div>
                                                                </div>
                                                                <h4><a href="/detailproduk" title="Samyang Cheese"
                                                                        target="_self">Jersey Basket</a>
                                                                    <a href="#"><button
                                                                            class="btn btn-danger">Beli</button></a>
                                                                </h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item-inner product-layout transition product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="/detailproduk" target="_self"
                                                                    title="Popsocket">
                                                                    <img src="{{ asset('landingpage/image/catalog/demo/product/270/ola1.jpg') }}"
                                                                        alt="Popsocket" height="200px"
                                                                        width="200px">
                                                                </a>
                                                            </div>
                                                            <div class="box-label"> <span
                                                                    class="label-product label-sale"> -16% </span>
                                                            </div>
                                                            <div class="button-group so-quickview cartinfo--left">
                                                                <button type="button" class="addToCart btn-button"
                                                                    title="Tambahkan ke Keranjang"
                                                                    onclick="cart.add('60 ');"> <i
                                                                        class="fa fa-shopping-basket"></i>
                                                                    <span>Tambahkan ke Keranjang </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <div class="price">
                                                                    <div class="price"> <span
                                                                            class="price-new">Rp.420.999</span>
                                                                        <span class="price-old">Rp.480.999</span>
                                                                    </div>
                                                                </div>
                                                                <h4><a href="/detailproduk" title="Popsocket"
                                                                        target="_self">Sepatu Futsal Specs</a>
                                                                    <a href="#"><button
                                                                            class="btn btn-danger">Beli</button></a>
                                                                </h4>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="item-inner product-layout transition product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="/detailproduk" target="_self"
                                                                    title="Sling Bag">
                                                                    <img src="{{ asset('landingpage/image/catalog/demo/product/270/ola4.jpg') }}"
                                                                        alt="image" height="200px" width="200px">
                                                                </a>
                                                            </div>
                                                            <div class="button-group so-quickview cartinfo--left">
                                                                <button type="button" class="addToCart btn-button"
                                                                    title="Tambahkan ke Keranjang"
                                                                    onclick="cart.add('60 ');"> <i
                                                                        class="fa fa-shopping-basket"></i>
                                                                    <span>Tambahkan ke Keranjang </span>
                                                                </button>

                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <div class="price">
                                                                    <div class="price"> <span class="price-new">Rp.
                                                                            65.000</span>
                                                                        <span class="price-old">Rp.90.000</span>
                                                                    </div>
                                                                </div>
                                                                <h4><a href="/detailproduk" title="Sling Bag"
                                                                        target="_self">Raket Badminton Yonex</a>
                                                                    <a href="#"><button
                                                                            class="btn btn-danger">Beli</button></a>
                                                                </h4>

                                                            </div>
                                                        </div>
                                                        <div class="box-label"> <span
                                                                class="label-product label-sale">
                                                                -16% </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item-inner product-layout transition product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="/detailproduk" target="_self"
                                                                    title="Mouse Pad">
                                                                    <img src="{{ asset('landingpage/image/catalog/demo/product/270/produk3.jpg') }}"
                                                                        alt="image" height="200px"
                                                                        width="200px">
                                                                </a>
                                                            </div>

                                                            <div class="button-group so-quickview cartinfo--left">
                                                                <button type="button" class="addToCart btn-button"
                                                                    title="Tambahkan ke Keranjang"
                                                                    onclick="cart.add('60 ');"> <i
                                                                        class="fa fa-shopping-basket"></i>
                                                                    <span>Tambahkan ke Keranjang </span>
                                                                </button>

                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <div class="price">
                                                                    <div class="price"> <span
                                                                            class="price-new">Rp.420.999</span>
                                                                        <span class="price-old">Rp.480.999</span>
                                                                    </div>
                                                                </div>
                                                                <h4><a href="/detailproduk" title="Mouse Pad"
                                                                        target="_self">Listerine</a>
                                                                    <a href="#"><button
                                                                            class="btn btn-danger">Beli</button></a>
                                                                </h4>

                                                            </div>
                                                        </div>
                                                        <div class="box-label"> <span
                                                                class="label-product label-sale">
                                                                -16% </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-inner product-layout transition product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="/detailproduk" target="_self"
                                                                    title="Sweater">
                                                                    <img src="{{ asset('landingpage/image/catalog/demo/product/270/ola5.jfif') }}"
                                                                        alt="image" height="200px"
                                                                        width="200px">
                                                                </a>
                                                            </div>
                                                            <div class="box-label"> <span
                                                                    class="label-product label-sale"> -16% </span>
                                                            </div>
                                                            <div class="button-group so-quickview cartinfo--left">
                                                                <button type="button" class="addToCart btn-button"
                                                                    title="Tambahkan ke Keranjang"
                                                                    onclick="cart.add('60 ');"> <i
                                                                        class="fa fa-shopping-basket"></i>
                                                                    <span>Tambahkan ke Keranjang </span>
                                                                </button>

                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <div class="price">
                                                                    <div class="price"> <span
                                                                            class="price-new">Rp.420.999</span>
                                                                        <span class="price-old">Rp.480.999</span>
                                                                    </div>
                                                                </div>
                                                                <h4><a href="/detailproduk" title="Sweater"
                                                                        target="_self">Bola Futsal Ortuseight</a>
                                                                    <a href="#"><button
                                                                            class="btn btn-danger">Beli</button></a>
                                                                </h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-inner product-layout transition product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="/detailproduk" target="_self"
                                                                    title="Nail Polish">
                                                                    <img src="{{ asset('emarket/image/catalog/demo/product/270/14.jpg') }}"
                                                                        alt="image" height="200px"
                                                                        width="200px">

                                                                </a>
                                                            </div>
                                                            <div class="box-label"> <span
                                                                    class="label-product label-sale"> -25% </span>
                                                            </div>
                                                            <div class="button-group so-quickview cartinfo--left">
                                                                <button type="button" class="addToCart btn-button"
                                                                    title="Tambahkan ke Keranjang"
                                                                    onclick="cart.add('60 ');"> <i
                                                                        class="fa fa-shopping-basket"></i>
                                                                    <span>Tambahkan ke Keranjang </span>
                                                                </button>

                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <div class="price">
                                                                    <div class="price"> <span
                                                                            class="price-new">Rp.100.000</span>
                                                                        <span class="price-old">Rp.150.000</span>
                                                                    </div>
                                                                </div>
                                                                <h4><a href="/detailproduk" title="Nail Polish"
                                                                        target="_self">Jam Dinding Rusak</a>
                                                                    <a href="#"><button
                                                                            class="btn btn-danger">Beli</button></a>
                                                                </h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-inner product-layout transition product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="/detailproduk" target="_self"
                                                                    title="Kaos Kaki">
                                                                    <img src="fotoproduk/sekakik.jpg" alt="image"
                                                                        height="200px" width="200px">
                                                                </a>
                                                            </div>
                                                            <div class="box-label"> <span
                                                                    class="label-product label-sale"> -16% </span>
                                                            </div>
                                                            <div class="button-group so-quickview cartinfo--left">
                                                                <button type="button" class="addToCart btn-button"
                                                                    title="Add to cart" onclick="cart.add('60 ');">
                                                                    <i class="fa fa-shopping-basket"></i>
                                                                    <span>Add to cart </span>
                                                                </button>

                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <div class="price">
                                                                    <div class="price"> <span
                                                                            class="price-new">Rp.420.999</span>
                                                                        <span class="price-old">Rp.480.999</span>
                                                                    </div>
                                                                </div>
                                                                <h4><a href="/detailproduk" title="Kaos Kaki"
                                                                        target="_self">Kaos Kaki</a>
                                                                    <a href="#"><button
                                                                            class="btn btn-danger">Beli</button></a>
                                                                </h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-inner product-layout transition product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="/detailproduk" target="_self"
                                                                    title="Kulot Ribbon">
                                                                    <img src="fotoproduk/kulot.jpg" alt="image"
                                                                        height="200px" width="200px">
                                                                </a>
                                                            </div>
                                                            <div class="box-label"> <span
                                                                    class="label-product label-sale"> -16% </span>
                                                            </div>
                                                            <div class="button-group so-quickview cartinfo--left">
                                                                <button type="button" class="addToCart btn-button"
                                                                    title="Add to cart" onclick="cart.add('60 ');">
                                                                    <i class="fa fa-shopping-basket"></i>
                                                                    <span>Add to cart </span>
                                                                </button>

                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <div class="price">
                                                                    <div class="price"> <span
                                                                            class="price-new">Rp.420.999</span>
                                                                        <span class="price-old">Rp.480.999</span>
                                                                    </div>
                                                                </div>
                                                                <h4><a href="/detailproduk" title="Kulot Ribbon"
                                                                        target="_self">Kulot Ribbon</a>
                                                                    <a href="#"><button
                                                                            class="btn btn-danger">Beli</button></a>
                                                                </h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ltabs-items  items-category-53 grid" data-total="14">
                                            <div class="ltabs-loading"></div>
                                        </div>
                                        <!--End Items-->
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- //Main Container -->


    <!-- Footer Container -->
    <!-- /Footer Top Container -->
    @include('landingpage.layout.footer')
    <!-- //end Footer Container -->


    <!-- Include Libs & Plugins

                    <============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
        const jamsatu = document.getElementById('jam1');
        const jamdua = document.getElementById('jam2');
        const jamtiga = document.getElementById('jam3');
        jamsatu.style.display = 'block';
        jamdua.style.display = 'none';
        jamtiga.style.display = 'none';


        function jam1() {
            jamsatu.style.display = 'block';
            jamdua.style.display = 'none';
            jamtiga.style.display = 'none';
        }

        function jam2() {
            jamsatu.style.display = 'none';
            jamdua.style.display = 'block';
            jamtiga.style.display = 'none';
        }

        function jam3() {
            jamsatu.style.display = 'none';
            jamdua.style.display = 'none';
            jamtiga.style.display = 'block';
        }
    </script>
    <script type="text/javascript" src="landingpage/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="landingpage/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="landingpage/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="landingpage/js/themejs/libs.js"></script>
    <script type="text/javascript" src="landingpage/js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="landingpage/js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="landingpage/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="landingpage/js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="landingpage/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="landingpage/js/jquery-ui/jquery-ui.min.js"></script>


    <!-- Theme files
 ============================================ -->


    <script type="text/javascript" src="landingpage/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="landingpage/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="landingpage/js/themejs/application.js"></script>
    <script>
        document.addEventListener('readystatechange', event => {
            if (event.target.readyState === "complete") {
                var clockdiv = document.getElementsByClassName("clockdiv");
                var countDownDate = new Array();
                for (var i = 0; i < clockdiv.length; i++) {
                    countDownDate[i] = new Array();
                    countDownDate[i]['el'] = clockdiv[i];
                    countDownDate[i]['time'] = new Date(clockdiv[i].getAttribute('data-date')).getTime();
                    countDownDate[i]['days'] = 0;
                    countDownDate[i]['hours'] = 0;
                    countDownDate[i]['seconds'] = 0;
                    countDownDate[i]['minutes'] = 0;
                }

                var countdownfunction = setInterval(function() {
                    for (var i = 0; i < countDownDate.length; i++) {
                        var now = new Date().getTime();
                        var distance = countDownDate[i]['time'] - now;
                        countDownDate[i]['days'] = Math.floor(distance / (1000 * 60 * 60 * 24));
                        countDownDate[i]['hours'] = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 *
                            60 * 60));
                        countDownDate[i]['minutes'] = Math.floor((distance % (1000 * 60 * 60)) / (1000 *
                            60));
                        countDownDate[i]['seconds'] = Math.floor((distance % (1000 * 60)) / 1000);

                        if (distance < 0) {
                            countDownDate[i]['el'].querySelector('.days').innerHTML = 0;
                            countDownDate[i]['el'].querySelector('.hours').innerHTML = 0;
                            countDownDate[i]['el'].querySelector('.minutes').innerHTML = 0;
                            countDownDate[i]['el'].querySelector('.seconds').innerHTML = 0;
                        } else {
                            countDownDate[i]['el'].querySelector('.days').innerHTML = countDownDate[i][
                                'days'
                            ];
                            countDownDate[i]['el'].querySelector('.hours').innerHTML = countDownDate[i][
                                'hours'
                            ];
                            countDownDate[i]['el'].querySelector('.minutes').innerHTML = countDownDate[i][
                                'minutes'
                            ];
                            countDownDate[i]['el'].querySelector('.seconds').innerHTML = countDownDate[i][
                                'seconds'
                            ];
                        }

                    }
                }, 1000);
            }
        });
    </script>
</body>

</html>
