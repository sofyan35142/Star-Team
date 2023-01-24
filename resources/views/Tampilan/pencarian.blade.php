<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

@include('landingpage.layout.head')

<body class="res layout-1">

    <div id="wrapper" class="wrapper-fluid banners-effect-5">


        <!-- Header Container  -->
        @include('landingpage.layout.header')
        <!-- //Header Container  -->

        <!-- Main Container  -->
        <div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="/halutama"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Pencarian "Make Up" </a></li>
            </ul>

            <div class="row">

                <div class="main-container container">

                    {{-- <div class="slick-search-item-result">
                        <h1 class="slick-search-result-header">

                            <span class="slick-search-result-header__text">Hasil pencarian untuk '
                                <span class="slick-search-result-header__text-highlight"
                                    style="color: rgb(238, 77, 45); font-weight: 400;">gantungan
                                </span>'
                            </span>
                        </h1>
                    </div> --}}


                </div>
                <!--Left Part Start -->
                <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
                    <div class="module category-style">
                        <h3 class="modtitle">Filter</h3>
                        <div class="modcontent">
                            <div class="box-category">
                                <ul id="cat_accordion" class="list-group">
                                    <li class="hadchild"><a href="category.html" class="cutom-parent">Metode Pembayaran
                                        </a>
                                        <span class="button-view  fa fa-plus-square-o"></span>
                                        <ul style="display: block;">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Transfer
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="hadchild"><a class="cutom-parent" href="category.html">Lokasi</a>
                                        <span class="button-view  fa fa-plus-square-o"></span>
                                        <ul style="display: none;">
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Jabodetabek
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        DKI Jakarta
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Jawa Barat
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Jawa Timur
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Jawa Tengah
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                       Kepulauan Riau
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Banten
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Sumatera Utara
                                                    </label>
                                                </div><li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        DI Yogyakarta
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Bali
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Lampung
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Sulawesi Selatan
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Sumatera Selatan
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Riau
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Jambi
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Kalimantan Timur
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Kalimantan Selatan
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Kalimantan Barat
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Dalam Negeri
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Luar Negeri
                                                    </label>
                                                </div></li>
                                        </ul>
                                    </li>
                                    <li class="hadchild"><a href="category.html" class="cutom-parent">Berdasarkan
                                            Kategori</a>
                                        <span class="button-view  fa fa-plus-square-o"></span>
                                        <ul style="display: none;">
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Aksesoris Make Up
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Lipstik
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                       Kosmetik Wajah
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Kosmetik Mata
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Perawatan wajah
                                                    </label>
                                                </div></li>
                                        </ul>
                                    </li>
                                    <li class="hadchild"><a href="category.html" class="cutom-parent">Batas Harga</a>
                                        <span class="button-view  fa fa-plus-square-o"></span>
                                        <ul style="display: none;">
                                            <div class="shopee-price-range-filter__inputs">
                                                <input type="text" maxlength="13" class="shopee-price-range-filter__input" placeholder="Rp MIN" value="">
                                                <div class="shopee-price-range-filter__range-line">
                                            </div>
                                            <br/>
                                                    <input type="text" maxlength="13" class="shopee-price-range-filter__input" placeholder="Rp MAKS" value=""></div>
                                        </ul>
                                    </li>
                                    <div class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><a href="">Terapkan</a></div>
                                    <li class="hadchild"><a href="category.html" class="cutom-parent">Opsi Pengiriman</a></a>
                                        <span class="button-view  fa fa-plus-square-o"></span>
                                        <ul style="display: none;">
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Reguler
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Hemat
                                                    </label>
                                                </div></li>
                                            <li><div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Kargo
                                                    </label>
                                                </div></li>
                                            <li><div class="form-switch">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Sameday
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                    <div class="module product-simple">
                        <h3 class="modtitle">
                            <span>Produk Terbaru</span>
                        </h3>
                        <div class="modcontent">
                            <div class="extraslider">
                                <!-- Begin extraslider-inner -->
                                <div class="yt-content-slider extraslider-inner">
                                    <div class="item ">
                                        <div class="product-layout item-inner style1 ">
                                            <div class="item-image">
                                                <div class="item-img-info">
                                                    <a href="#" target="_self" title="Set Brush ">
                                                        <img src="fotoproduk/setbrush.jpg"
                                                            alt="Mandouille short">
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <a href="/detailproduk" target="_self"
                                                        title="Set Brush">Set Brush </a>
                                                </div>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                </div>
                                                <div class="content_price price">
                                                    <span class="price-new product-price">Rp.73.000</span>&nbsp;&nbsp;

                                                    <span class="price-old">Rp.77.900</span>&nbsp;

                                                </div>
                                            </div>
                                            <!-- End item-info -->
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                        <div class="product-layout item-inner style1 ">
                                            <div class="item-image">
                                                <div class="item-img-info">
                                                    <a href="/detailproduk" target="_self" title="Pensil Alis ">
                                                        <img src="fotoproduk/pensilalis.jfif" alt="Pensil Alis">
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <a href="/detailproduk" target="_self" title="Pensil Alis">
                                                        Pensil Alis
                                                    </a>
                                                </div>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                </div>
                                                <div class="content_price price">
                                                    <span class="price-new product-price">Rp.10.000 </span>&nbsp;&nbsp;

                                                    <span class="price-old">Rp.8.400 </span>&nbsp;



                                                </div>
                                            </div>
                                            <!-- End item-info -->
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                        <div class="product-layout item-inner style1 ">
                                            <div class="item-image">
                                                <div class="item-img-info">
                                                    <a href="/detailproduk" target="_self" title="Penjepit Bulu Mata ">
                                                        <img src="fotoproduk/pbulmat.jpg" alt="Penjepit Bulu Mata">
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <a href="/detailproduk" target="_self" title="Penjepit Bulu Mata">
                                                        Penjepit Bulu Mata
                                                    </a>
                                                </div>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                </div>

                                                <div class="content_price price">
                                                    <span class="price product-price">
                                                        Rp13.000
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- End item-info -->
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                        <div class="product-layout item-inner style1 ">
                                            <div class="item-image">
                                                <div class="item-img-info">
                                                    <a href="/detailproduk" target="_self" title="Highlighter ">
                                                        <img src="fotoproduk/higlighter.jpeg" alt="Highlighter">
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <a href="/detailproduk" target="_self" title="Highlighter">
                                                        Highlighter
                                                    </a>
                                                </div>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i></span>
                                                </div>
                                                <div class="content_price price">
                                                    <span class="price-new product-price">Rp.78.000
                                                    </span>&nbsp;&nbsp;

                                                    <span class="price-old">Rp.80.600 </span>&nbsp;



                                                </div>
                                            </div>
                                            <!-- End item-info -->
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                </div>
                                <!--End extraslider-inner -->
                            </div>
                        </div>
                    </div>
                    <div class="module banner-left hidden-xs ">
                        <div class="banner-sidebar banners">
                            <div>
                                <a title="Banner Image" href="#">
                                    <img src="landingpage/image/catalog/banners/emina.jpg" alt="Banner Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
                <!--Left Part End -->

                <!--Middle Part Start-->
                <div id="content" class="col-md-9 col-sm-8">
                    <div class="products-category">

                        <div class="category-derc">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="banners">
                                        <div>
                                            <a href="#"><img
                                                    src="landingpage/image/catalog/banners/makeover.jpeg"
                                                    alt="img cate"><br></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Filters -->
                        <div class="product-filter product-filter-top filters-panel">
                            <div class="row">
                                <div class="col-md-5 col-sm-3 col-xs-12 view-mode">
                                    <h3>Urutkan</h3>
                                    <div class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><a href="">Terkait</a></div>
                                    <div class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><a href="">Terbaru</a></div>
                                    <div class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><a href="">Terlaris</a></div>
                                </div>
                                <div class="short-by-show form-inline text-right col-md-7 col-sm-9 col-xs-12">
                                    <div class="form-group short-by">
                                        <label class="control-label" for="input-sort">Sort By:</label>
                                        <select id="input-sort" class="form-control"
                                            onchange="location = this.value;">
                                            <option value="" selected="selected">Default</option>
                                            <option value="">Nama (A - Z)</option>
                                            <option value="">Nama (Z - A)</option>
                                            <option value="">Harga (Rendah &gt; Tinggi)</option>
                                            <option value="">Harga (Tinggi &gt; Rendah)</option>
                                            <option value="">Ulasan (Tertinggi)</option>
                                            <option value="">Ulasan (Terendah)</option>
                                            <option value="">Model (A - Z)</option>
                                            <option value="">Model (Z - A)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-limit">Show:</label>
                                        <select id="input-limit" class="form-control"
                                            onchange="location = this.value;">
                                            <option value="" selected="selected">15</option>
                                            <option value="">25</option>
                                            <option value="">50</option>
                                            <option value="">75</option>
                                            <option value="">100</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                                <ul class="pagination">
                                    <li class="active"><span>1</span></li>
                                    <li><a href="">2</a></li><li><a href="">&gt;</a></li>
                                    <li><a href="">&gt;|</a></li>
                                </ul>
                            </div> -->
                            </div>
                        </div>
                        <!-- //end Filters -->
                        <!--changed listings-->
                        <div class="products-list row nopadding-xs so-filter-gird">

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Fondation">
                                                <img src="fotoproduk/fondation.jfif" alt="image">

                                            </a>
                                        </div>
                                        <div class="box-label"> <span class="label-product label-sale"> -2% </span>
                                        </div>
                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button" title="Add to cart"
                                                onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Fondation" target="_self">Fodation FIT ME</a></h4>
                                            <div class="price"> <span class="price-new">Rp.77.420</span>
                                                <span class="price-old">Rp.79.000</span>
                                            </div>
                                            <div class="description item-desc">
                                                <p>Fondation FIT ME</p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Bulu Mata ">
                                                <img src="fotoproduk/bulmat.webp" alt="image">

                                            </a>
                                        </div>

                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button" title="Add to cart"
                                                onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Bulu Mata "
                                                    target="_self">Bulu Mata  </a></h4>
                                            <div class="price">Rp.5.999
                                            </div>
                                            <div class="description item-desc">
                                                <p>Bulu Mata Palsu</p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Bedak Pigeon ">
                                                <img src="fotoproduk/bedakpigeon.jpg" alt="image">

                                            </a>
                                        </div>
                                        <div class="box-label"> <span class="label-product label-sale"> -13%
                                            </span><span class="label-product label-new"> New </span></div>
                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button" title="Add to cart"
                                                onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Bedak Pigeon " target="_self">Compact Powder </a></h4>
                                            <div class="price"> <span class="price-new">Rp.28.000</span>
                                                <span class="price-old">Rp.32.000</span>
                                            </div>
                                            <div class="description item-desc">
                                                <p>Bedak Pigeon || Bedak Padat </p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Blush On">
                                                <img src="fotoproduk/blushon.jfif" alt="image">

                                            </a>
                                        </div>

                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button" title="Add to cart"
                                                onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Blush On"
                                                    target="_self">Blush On</a></h4>
                                            <div class="price">Rp.68.000
                                            </div>
                                            <div class="description item-desc">
                                                <p>Blush On
                                                </p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Bedak Tabur">
                                                <img src="fotoproduk/bedaktabur.jpg" alt="image">

                                            </a>
                                        </div>

                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button" title="Add to cart"
                                                onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Bedak Tabur"
                                                    target="_self">Loose Powder</a></h4>
                                            <div class="price">Rp.36.000
                                            </div>
                                            <div class="description item-desc">
                                                <p>Bedak Tabur Emina</p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Concelear">
                                                <img src="fotoproduk/concelear.jpg" alt="image">

                                            </a>
                                        </div>
                                        <div class="box-label"> <span class="label-product label-new"> New </span>
                                        </div>
                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button" title="Add to cart"
                                                onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Concelear"
                                                    target="_self">Concelear</a></h4>
                                            <div class="price"> Rp75.000
                                            </div>
                                            <div class="description item-desc">
                                                <p>Concelear Wardah </p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Cetakan Alis">
                                                <img src="fotoproduk/cetakanalis.jfif" alt="image">

                                            </a>
                                        </div>

                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button" title="Add to cart"
                                                onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Cetakan Alis"
                                                    target="_self">Cetakan Alis</a></h4>
                                            <div class="price">Rp.4.000
                                            </div>
                                            <div class="description item-desc">
                                                <p>Memudahkan anda membentuk alis </p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Contour Stick">
                                                <img src="fotoproduk/contourstick.jfif" alt="image">

                                            </a>
                                        </div>
                                        <div class="box-label"><span class="label-product label-new"> New </span>
                                        </div>
                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button" title="Add to cart"
                                                onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Contour Stick" target="_self">Contour Stick</a></h4>
                                            <div class="price"> Rp79.000
                                            </div>
                                            <div class="description item-desc">
                                                <p>bisa digunakan untuk semua usb, tersedia 3 colokan </p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Eyebrow Focallure">
                                                <img src="fotoproduk/eyebrow.jfif" alt="image">

                                            </a>
                                        </div>

                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button" title="Add to cart"
                                                onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Eyebrow Focallure" target="_self">Eyebrow Focallure</a></h4>
                                            <div class="price">Rp.21.000
                                            </div>
                                            <div class="description item-desc">
                                                <p>Eyebrow Focallure </p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Eye Shadow">
                                                <img src="fotoproduk/eyeshadow.jfif" alt="image">

                                            </a>
                                        </div>

                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button" title="Add to cart"
                                                onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Eye Shadow"
                                                    target="_self">Eye Shadow</a></h4>
                                            <div class="price">Rp.86.000
                                            </div>
                                            <div class="description item-desc">
                                                <p>Eye Shadow </p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Lip Balm ">
                                                <img src="fotoproduk/lipbalm.jfif" alt="image">

                                            </a>
                                        </div>
                                        <div class="box-label"> <span class="label-product label-sale"> -5%
                                            </span><span class="label-product label-new"> New </span></div>
                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button"
                                                title="Add to cart" onclick="cart.add('60 ');"> <i
                                                    class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Lip Balm "
                                                    target="_self">Lip Balm Nivea</a></h4>
                                            <div class="price"> <span class="price-new">Rp.32.700</span>
                                                <span class="price-old">Rp.35.000</span>
                                            </div>
                                            <div class="description item-desc">
                                                <p>Lip Balm </p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Mascara">
                                                <img src="fotoproduk/maskara.webp" alt="image">

                                            </a>
                                        </div>

                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button"
                                                title="Add to cart" onclick="cart.add('60 ');"> <i
                                                    class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Mascara" target="_self">Mascara Maybelline</a></h4>
                                            <div class="price">Rp.91.000
                                            </div>
                                            <div class="description item-desc">
                                                <p>agar bulumata anda lentik</p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Lipstik">
                                                <img src="fotoproduk/lipstik.jpg" alt="image">

                                            </a>
                                        </div>

                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button"
                                                title="Add to cart" onclick="cart.add('60 ');"> <i
                                                    class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Lipstik" target="_self">Lipstick Wardah</a></h4>
                                            <div class="price">Rp.45.200
                                            </div>
                                            <div class="description item-desc">
                                                <p>ayo pilih shademu!</p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Lip Cream Pink Flash">
                                                <img src="fotoproduk/lipcream.webp" alt="image">

                                            </a>
                                        </div>
                                        <div class="box-label"> <span class="label-product label-new"> New </span>
                                        </div>
                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button"
                                                title="Add to cart" onclick="cart.add('60 ');"> <i
                                                    class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Lip Cream Pink Flash"
                                                    target="_self">Lip Cream Pink Flash</a></h4>
                                            <div class="price"> Rp21.000
                                            </div>
                                            <div class="description item-desc">
                                                <p>Lip Cream Pink Flash </p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="/detailproduk" target="_self" title="Luxcrime">
                                                <img src="fotoproduk/luxcrime.jpg" alt="image">

                                            </a>
                                        </div>

                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart btn-button"
                                                title="Add to cart" onclick="cart.add('60 ');"> <i
                                                    class="fa fa-shopping-basket"></i>
                                                <span>Add to cart </span>
                                            </button>
                                            <button type="button" class="wishlist btn-button"
                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                    class="fa fa-heart"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button"
                                                title="Compare this Product " onclick="compare.add('60');"><i
                                                    class="fa fa-refresh"></i><span>Compare this Product</span>
                                            </button>
                                            <!--quickview-->
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                href="quickview.html" title="Quick view"
                                                data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                    view</span></a>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4><a href="/detailproduk" title="Luxcrime" target="_self">Luxcrime</a>
                                            </h4>
                                            <div class="price">Rp.98.000
                                            </div>
                                            <div class="description item-desc">
                                                <p>Luxcrime  </p>
                                            </div>
                                            <div class="list-block">
                                                <button class="addToCart btn-button" type="button"
                                                    title="Add to Cart" onclick="cart.add('101', '1');"><i
                                                        class="fa fa-shopping-basket"></i>
                                                </button>
                                                <button class="wishlist btn-button" type="button"
                                                    title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                        class="fa fa-heart"></i>
                                                </button>
                                                <button class="compare btn-button" type="button"
                                                    title="Compare this Product" onclick="compare.add('101');"><i
                                                        class="fa fa-refresh"></i>
                                                </button>
                                                <!--quickview-->
                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                    href="quickview.html" title="Quick view"
                                                    data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--// End Changed listings-->
                        <!-- Filters -->
                        <div class="product-filter product-filter-bottom filters-panel">
                            <div class="row">
                                <div class="col-sm-6 text-left"></div>
                                <div class="col-sm-6 text-right">Showing 1 to 15 of 15 (1 Pages)</div>
                            </div>
                        </div>
                        <!-- //end Filters -->

                    </div>

                </div>


                <!--Middle Part End-->
            </div>
        </div>
        <!-- //Main Container -->


        <!-- Footer Container -->
        @include('landingpage.layout.footer')
        <!-- //end Footer Container -->

    </div>


    <!-- Cpanel Block -->
    <div id="sp-cpanel_btn" class="isDown visible-lg">
        <i class="fa fa-cog"></i>
    </div>

    <!-- Include Libs & Plugins
== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
== -->


    <script type="text/javascript" src="landingpage/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="landingpage/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="landingpage/js/themejs/application.js"></script>
    <script type="text/javascript">
        <!--
        // Check if Cookie exists
        if ($.cookie('display')) {
            view = $.cookie('display');
        } else {
            view = 'grid';
        }
        if (view) display(view);
        //
        -->
    </script>
</body>




<!-- //Header Container  -->




</html>
