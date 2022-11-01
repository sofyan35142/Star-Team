<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

@include('landingpage.layout.head')

<body class="res layout-1">

    <div id="wrapper" class="wrapper-fluid banners-effect-5">


        <!-- Header Container  -->

        @include("landingpage.layout.header")

        <!-- //Header Container  -->

        <!-- Main Container  -->
        <div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="/halutama"><i class="fa fa-home"></i></a></li>
                <li><a href="/halamantoko">Halaman Toko</a></li>
            </ul>

            <div class="row">

                <!--Middle Part Start-->
                <div id="content" class="col-md-12 col-sm-12">

                    <div class="products-category">


                        <!--Content Top -->
                        <div class="module filter-v3">

                            <div class="modcontent ">
                                <form class="type_2">

                                    <div class="table_layout filter-row">
                                        <div class="table_row">
                                            <!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell" style="z-index: 103;">
                                                <img class="foto_toko"
                                                    src="https://i.pinimg.com/236x/ef/48/22/ef4822c661caf17de63d2c272500cfcb.jpg"
                                                    alt="foto toko">
                                                <div class="destoko-a">
                                                    <h2>Barokah store</h2>
                                                    <p><i class="fa-solid fa-location-pin"></i> Kab.Pasuruan</p>
                                                    {{-- <h2 style="float: right;position: relative;left:-11px"><i class="fa-solid fa-house"></i></h2> --}}
                                                </div>
                                                {{-- <label for="" style="position: relative;
                                                left: 132px;
                                                bottom: 45px;">ikon lokasi</label> --}}
                                            </div>
                                            <!--/ .table_cell -->
                                            <!-- - - - - - - - - - - - - - End of category filter - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - SUB CATEGORY - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <fieldset>
                                                    <ul class="checkboxes_list">
                                                        <li>
                                                            <label for=""><i
                                                                    class="fa-solid fa-shop fnt"></i></label>
                                                            <label class="fnt" for="manufacturer_1">Produk :
                                                                443</label>
                                                        </li>
                                                        <li>
                                                            <label for=""><i
                                                                    class="fa-solid fa-user-plus fnt"></i></label>
                                                            <label class="fnt" for="manufacturer_1">Mengikuti :
                                                                112</label>
                                                        </li>
                                                        <li>
                                                            <label for=""><i
                                                                    class="fa-solid fa-user-check fnt"></i></label>
                                                            <label class="fnt" for="manufacturer_1">Bergabung : Sejak
                                                                6 tahun yang lalu</label>
                                                        </li>
                                                    </ul>

                                                </fieldset>

                                            </div>
                                            <!--/ .table_cell -->
                                            <!-- - - - - - - - - - - - - - End SUB CATEGORY - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <fieldset>
                                                    <ul class="checkboxes_list">
                                                        <li>
                                                            <label for=""><i
                                                                    class="fnt fa-solid fa-users"></i></label>
                                                            <label class="fnt" for="manufacturer_1">Pengikut :
                                                                1001</label>
                                                        </li>
                                                        <li>
                                                            <label for=""><i
                                                                    class="fa-solid fa-star fnt"></i></label>
                                                            <label class="fnt" for="manufacturer_1">4.6(200RB
                                                                penilaian)</label>
                                                        </li>
                                                        {{-- <li>
                                                            <label for=""><i class="fa-solid fa-user-check fnt"></i></label>
                                                            <label class="fnt" for="manufacturer_1">Bergabung : Sejak 6 tahun yang lalu</label>
                                                        </li> --}}
                                                    </ul>

                                                </fieldset>

                                            </div>
                                            <!--/ .table_cell -->
                                            <!-- - - - - - - - - - - - - - End manufacturer - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                            <!--/ .table_cell -->

                                            <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

                                            <!--/ .table_cell -->

                                            <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .table_row -->

                                    </div>
                                    <!--/ .table_layout -->



                                </form>
                            </div>

                        </div>
                        <!--Content Top End -->


                        <!-- Filters -->
                        <div class="product-filter product-filter-top filters-panel">
                            <div class="row">
                                <div class="col-sm-5 view-mode">

                                    <div class="list-view">

                                        <div class="btn btn-default list" data-view="list" data-toggle="tooltip"
                                            data-original-title="List"><a href="">Semua Produk</a></div>
                                            <select id="input-sort" class="btn btn-default grid active" onchange="location = this.value;">
                                                <option value="" selected="selected">Etalase Produk</option>
                                                <option value=""><a href="">Baju</a></option>
                                                <option value=""><a href="">Elektronik</a></option>
                                                <option value=""><a href="">Peralatan dapur</a></option>
                                        </select>
                                    </div>
                                </div>
                       
                                <div class="short-by-show form-inline text-right col-md-7 col-sm-7 col-xs-12">
                                    <div class="form-group short-by">
                                        <label class="control-label" for="input-sort">Sort By:</label>
                                        <select id="input-sort" class="form-control" onchange="location = this.value;">
                                            <option value="" selected="selected">Default</option>
                                            <option value="">Name (A - Z)</option>
                                            <option value="">Name (Z - A)</option>
                                            <option value="">Price (Low &gt; High)</option>
                                            <option value="">Price (High &gt; Low)</option>
                                            <option value="">Rating (Highest)</option>
                                            <option value="">Rating (Lowest)</option>
                                            <option value="">Model (A - Z)</option>
                                            <option value="">Model (Z - A)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-limit">Show:</label>
                                        <select id="input-limit" class="form-control" onchange="location = this.value;">
                                            <option value="" selected="selected">15</option>
                                            <option value="">25</option>
                                            <option value="">50</option>
                                            <option value="">75</option>
                                            <option value="">100</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //end Filters -->

                    <!--changed listings-->

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Nail Polish">
                                                <img src="fotoproduk/nailpolish.webp"
                                                     alt="image">

                                            </a>
                                        </div>
                                        <div class="box-label"> <span class="label-product label-sale"> -16% </span>
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
                                            <h4><a href="product.html" title="Nail Polish"
                                                    target="_self">Nail Polish</a></h4>
                                            <div class="price"> <span class="price-new">Rp. 7.000</span>
                                                <span class="price-old">Rp. 9.000</span>
                                            </div>
                                            <div class="description item-desc hidden">
                                                <p>Percantik kuku anda dengan kutek diatas ini </p>
                                            </div>
                                            <div class="list-block hidden">
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
                                            <a href="product.html" target="_self" title="Kaos Kaki ">
                                                <img src="fotoproduk/sekakik.jpg"
                                                     alt="image">

                                            </a>
                                        </div>
                                        <h4><a href="product.html" title="Doenpuis consuat " target="_self">celana
                                                Tartan
                                                Pria </a></h4>
                                        <div class="price"> <span class="price-new">Rp. 96.000</span>
                                            <span class="price-old">Rp.89.000</span>
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
                                            <h4><a href="product.html" title="Kaos Kaki " target="_self">Kaos Kaki </a></h4>
                                            <div class="price">$70.00
                                            </div>
                                            <div class="description item-desc hidden">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                                    erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                                                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                                    . </p>
                                            </div>
                                            <div class="list-block hidden">
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
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Ercitation incididunt">
                                            <img src="fotoproduk/pendekchino.webp" alt="image">

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
                                        <h4><a href="product.html" title="Ercitation incididunt"
                                                target="_self">Uniqlo Chino Pendek</a></h4>
                                        <div class="price">Rp. 95.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>For male </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Cupim should ">
                                            <img src="fotoproduk/sepatubayi.jfif" alt="image">

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
                                        <h4><a href="product.html" title="Cupim should " target="_self">Sepatu
                                                Bayi </a></h4>
                                        <div class="price">Rp. 45.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Untuk anak usia 7-10 bulan </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Jalapeno dolore">
                                            <img src="fotoproduk/bajukodok.webp" alt="image">

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
                                        <h4><a href="product.html" title="Jalapeno dolore" target="_self">Baju
                                                Kodok</a></h4>
                                        <div class="price">Rp.98.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Baju Kodok </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Drutick lanaeger">
                                            <img src="fotoproduk/sneakersw.jfif" alt="image">

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
                                        <h4><a href="product.html" title="Drutick lanaeger"
                                                target="_self">Sneakers
                                                Wanita</a></h4>
                                        <div class="price">Rp. 188.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>sepatu untuk wanita</p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Chicken swinesha">
                                            <img src="fotoproduk/baju1.webp" alt="image">

                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-sale"> -16% </span>
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
                                        <h4><a href="product.html" title="Chicken swinesha" target="_self">Blouse
                                                Wanita </a></h4>
                                        <div class="price"> <span class="price-new">Rp. 46.000</span>
                                            <span class="price-old">Rp. 55.000</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Fashion wanita ala korea</p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Doenpuis consuat ">
                                            <img src="fotoproduk/sepatulari.webp" alt="image">

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
                                        <h4><a href="product.html" title="Doenpuis consuat "
                                                target="_self">Running Shoes </a></h4>
                                        <div class="price"> <span class="price-new">Rp. 466.000</span>
                                            <span class="price-old">Rp.476.000</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Kemeja pria S, M L, XL </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Chicken swinesha">
                                            <img src="fotoproduk/jeanswanita.webp" alt="image">

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
                                        <h4><a href="product.html" title="Chicken swinesha" target="_self">Jeans
                                                Wanita </a></h4>
                                        <div class="price"> <span class="price-new">Rp. 96.000</span>

                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Fashion wanita ala korea</p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Fatback picanha">
                                            <img src="fotoproduk/jaketbayi.jfif" alt="image">

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
                                        <h4><a href="product.html" title="Fatback picanha" target="_self">Jaket
                                                Bayi</a></h4>
                                        <div class="price"> Rp. 124.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Jaket bayi umur 6-10 bulan </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Cupim should ">
                                            <img src="fotoproduk/bajuanak.jpg" alt="image">

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
                                        <h4><a href="product.html" title="Cupim should " target="_self">Pakaian
                                                Anak </a></h4>
                                        <div class="price">Rp. 70.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Untuk anak usia 7-10 tahun </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Ercitation incididunt">
                                            <img src="fotoproduk/bajupria.jfif" alt="image">

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
                                        <h4><a href="product.html" title="Ercitation incididunt"
                                                target="_self">Baju Pria</a></h4>
                                        <div class="price">Rp. 75.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>For male </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Drutick lanaeger">
                                            <img src="fotoproduk/kulot.jpg" alt="image">

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
                                        <h4><a href="product.html" title="Drutick lanaeger" target="_self">Kulot
                                                Wanita</a></h4>
                                        <div class="price">Rp. 58.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Kulot untuk wanita</p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Chicken swinesha">
                                            <img src="fotoproduk/converse.jpeg" alt="image">

                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-sale"> -16% </span>
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
                                        <h4><a href="product.html" title="Chicken swinesha" target="_self">Sepatu
                                                Converse </a></h4>
                                        <div class="price"> <span class="price-new">Rp. 246.000</span>
                                            <span class="price-old">Rp. 235.000</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Sepatu</p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Cupim should ">
                                            <img src="fotoproduk/celanaanak.jpg" alt="image">

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
                                        <h4><a href="product.html" title="Cupim should " target="_self">Celana
                                                Anak </a></h4>
                                        <div class="price">Rp. 49.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Untuk anak usia 7-10 tahun </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Ercitation incididunt">
                                            <img src="fotoproduk/sneakersp.webp" alt="image">

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
                                        <h4><a href="product.html" title="Ercitation incididunt"
                                                target="_self">Sneakers Pria</a></h4>
                                        <div class="price">Rp. 575.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>For male </p>
                                        </div>
                                        <div class="list-block hidden">
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

                    {{-- produk etalase --}}
                    <div class="products-list row nopadding-xs so-filter-gird grid" id="etalase-baju"
                        style="display: none;">

                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.html" target="_self" title="Chicken swinesha">
                                            <img src="fotoproduk/baju1.webp" alt="image">

                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-sale"> -16% </span>
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
                                        <h4><a href="product.html" title="Chicken swinesha" target="_self">Blouse
                                                Wanita </a></h4>
                                        <div class="price"> <span class="price-new">Rp. 46.000</span>
                                            <span class="price-old">Rp. 55.000</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Fashion wanita ala korea</p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Cupim should ">
                                            <img src="fotoproduk/bajuanak.jpg" alt="image">

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
                                        <h4><a href="product.html" title="Cupim should " target="_self">Pakaian
                                                Anak </a></h4>
                                        <div class="price">Rp. 70.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Untuk anak usia 7-10 tahun </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Doenpuis consuat ">
                                            <img src="fotoproduk/kemeja.webp" alt="image">

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
                                        <h4><a href="product.html" title="Doenpuis consuat " target="_self">Kemeja
                                                Pria </a></h4>
                                        <div class="price"> <span class="price-new">Rp. 66.000</span>
                                            <span class="price-old">Rp.76.000</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Kemeja pria S, M L, XL </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Drutick lanaeger">
                                            <img src="fotoproduk/blouse.jfif" alt="image">

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
                                        <h4><a href="product.html" title="Drutick lanaeger" target="_self">Blush
                                                Wanita</a></h4>
                                        <div class="price">Rp. 88.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Blouse untuk wanita</p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Ercitation incididunt">
                                            <img src="fotoproduk/bajupria.jfif" alt="image">

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
                                        <h4><a href="product.html" title="Ercitation incididunt"
                                                target="_self">Baju Pria</a></h4>
                                        <div class="price">Rp. 75.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>For male </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Fatback picanha">
                                            <img src="fotoproduk/jaketbayi.jfif" alt="image">

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
                                        <h4><a href="product.html" title="Fatback picanha" target="_self">Jaket
                                                Bayi</a></h4>
                                        <div class="price"> Rp. 124.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Jaket bayi umur 6-10 bulan </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Jalapeno dolore">
                                            <img src="fotoproduk/bajukodok.webp" alt="image">

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
                                        <h4><a href="product.html" title="Jalapeno dolore" target="_self">Baju
                                                Kodok</a></h4>
                                        <div class="price">Rp.98.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Baju Kodok </p>
                                        </div>
                                        <div class="list-block hidden">
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



                    <div class="products-list row nopadding-xs so-filter-gird grid" id="etalase-celana"
                        style="display: none;">

                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.html" target="_self" title="Chicken swinesha">
                                            <img src="fotoproduk/jeanswanita.webp" alt="image">

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
                                        <h4><a href="product.html" title="Chicken swinesha" target="_self">Jeans
                                                Wanita </a></h4>
                                        <div class="price"> <span class="price-new">Rp. 96.000</span>

                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Fashion wanita ala korea</p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Cupim should ">
                                            <img src="fotoproduk/celanaanak.jpg" alt="image">

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
                                        <h4><a href="product.html" title="Cupim should " target="_self">Celana
                                                Anak </a></h4>
                                        <div class="price">Rp. 49.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Untuk anak usia 7-10 tahun </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Doenpuis consuat ">
                                            <img src="fotoproduk/tartanpria.jpg" alt="image">

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
                                        <h4><a href="product.html" title="Doenpuis consuat " target="_self">celana
                                                Tartan
                                                Pria </a></h4>
                                        <div class="price"> <span class="price-new">Rp. 96.000</span>
                                            <span class="price-old">Rp.89.000</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Celana pria S, M L, XL </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Drutick lanaeger">
                                            <img src="fotoproduk/kulot.jpg" alt="image">

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
                                        <h4><a href="product.html" title="Drutick lanaeger" target="_self">Kulot
                                                Wanita</a></h4>
                                        <div class="price">Rp. 58.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Kulot untuk wanita</p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Ercitation incididunt">
                                            <img src="fotoproduk/pendekchino.webp" alt="image">

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
                                        <h4><a href="product.html" title="Ercitation incididunt"
                                                target="_self">Uniqlo Chino Pendek</a></h4>
                                        <div class="price">Rp. 95.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>For male </p>
                                        </div>
                                        <div class="list-block hidden">
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




                    <div class="products-list row nopadding-xs so-filter-gird grid" id="etalase-sepatu"
                        style="display: none;">

                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.html" target="_self" title="Chicken swinesha">
                                            <img src="fotoproduk/converse.jpeg" alt="image">

                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-sale"> -16% </span>
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
                                        <h4><a href="product.html" title="Chicken swinesha" target="_self">Sepatu
                                                Converse </a></h4>
                                        <div class="price"> <span class="price-new">Rp. 246.000</span>
                                            <span class="price-old">Rp. 235.000</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Sepatu</p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Cupim should ">
                                            <img src="fotoproduk/sepatubayi.jfif" alt="image">

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
                                        <h4><a href="product.html" title="Cupim should " target="_self">Sepatu
                                                Bayi </a></h4>
                                        <div class="price">Rp. 45.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Untuk anak usia 7-10 bulan </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Doenpuis consuat ">
                                            <img src="fotoproduk/sepatulari.webp" alt="image">

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
                                        <h4><a href="product.html" title="Doenpuis consuat "
                                                target="_self">Running Shoes </a></h4>
                                        <div class="price"> <span class="price-new">Rp. 466.000</span>
                                            <span class="price-old">Rp.476.000</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Kemeja pria S, M L, XL </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Drutick lanaeger">
                                            <img src="fotoproduk/sneakersw.jfif" alt="image">

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
                                        <h4><a href="product.html" title="Drutick lanaeger"
                                                target="_self">Sneakers
                                                Wanita</a></h4>
                                        <div class="price">Rp. 188.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>sepatu untuk wanita</p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Ercitation incididunt">
                                            <img src="fotoproduk/sneakersp.webp" alt="image">

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
                                        <h4><a href="product.html" title="Ercitation incididunt"
                                                target="_self">Sneakers Pria</a></h4>
                                        <div class="price">Rp. 575.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>For male </p>
                                        </div>
                                        <div class="list-block hidden">
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
                                        <a href="product.html" target="_self" title="Fatback picanha">
                                            <img src="fotoproduk/sneakersww.jfif" alt="image">

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
                                        <h4><a href="product.html" title="Fatback picanha" target="_self">Sneakers
                                                Wanita</a></h4>
                                        <div class="price"> Rp. 124.000
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>sneakers </p>
                                        </div>
                                        <div class="list-block hidden">
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



        </div>
        <!--Middle Part End-->
    </div>
    <!-- //Main Container -->


    <!-- Footer Container -->
    <!-- /Footer Top Container -->
    @include('landingpage.layout.footer')
    <!-- //end Footer Container -->

    </div>


    <!-- Include Libs & Plugins
 ============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../landingpage/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="../landingpage/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../landingpage/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../landingpage/js/themejs/libs.js"></script>
    <script type="text/javascript" src="../landingpage/js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="../landingpage/js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="../landingpage/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="../landingpage/js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="../landingpage/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="../landingpage/js/jquery-ui/jquery-ui.min.js"></script>


    <!-- Theme files
 ============================================ -->


    <script type="text/javascript" src="../landingpage/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="../landingpage/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="../landingpage/js/themejs/application.js"></script>

    <script>
        const produk = document.getElementById('produk');
        const etalasebaju = document.getElementById('etalase-baju');
        const etalasecelana = document.getElementById('etalase-celana');
        const etalasesepatu = document.getElementById('etalase-sepatu');


        function tes1() {
            produk.style.display = 'block';
            etalasebaju.style.display = 'none';
            etalasecelana.style.display = 'none';
            etalasesepatu.style.display = 'none';

        }



        function tes2() {
            produk.style.display = 'none';
            etalasebaju.style.display = 'block';
            etalasecelana.style.display = 'none';
            etalasesepatu.style.display = 'none';

        }

        function tes3() {
            produk.style.display = 'none';
            etalasebaju.style.display = 'none';
            etalasecelana.style.display = 'block';
            etalasesepatu.style.display = 'none';

        }

        function tes4() {
            produk.style.display = 'none';
            etalasebaju.style.display = 'none';
            etalasecelana.style.display = 'none';
            etalasesepatu.style.display = 'block';

        }
    </script>
    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

</body>

</html>
