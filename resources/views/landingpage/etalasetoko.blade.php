<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

@include("landingpage.layout.head")

<body class="res layout-1">

    <div id="wrapper" class="wrapper-fluid banners-effect-5">


        <!-- Header Container  -->
        @include("landingpage.layout.header")
        <!-- //Header Container  -->

        <!-- Main Container  -->
        <div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="/halutama"><i class="fa fa-home"></i></a></li>
                <li><a href="/halamantoko">Toko</a></li>
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
                                                <img class="foto_toko" src="https://i.pinimg.com/236x/ef/48/22/ef4822c661caf17de63d2c272500cfcb.jpg"
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
                                                            <label for=""><i class="fa-solid fa-shop fnt"></i></label>
                                                            <label class="fnt" for="manufacturer_1">Produk : 443</label>
                                                        </li>
                                                        <li>
                                                            <label for=""><i class="fa-solid fa-user-plus fnt"></i></label>
                                                            <label class="fnt" for="manufacturer_1">Mengikuti : 112</label>
                                                        </li>
                                                        <li>
                                                            <label for=""><i class="fa-solid fa-user-check fnt"></i></label>
                                                            <label class="fnt" for="manufacturer_1">Bergabung : Sejak 6 tahun yang lalu</label>
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
                                                            <label for=""><i class="fnt fa-solid fa-users"></i></label>
                                                            <label class="fnt" for="manufacturer_1">Pengikut : 1001</label>
                                                        </li>
                                                        <li>
                                                            <label for=""><i class="fa-solid fa-star fnt"></i></label>
                                                            <label class="fnt" for="manufacturer_1">4.6(200RB penilaian)</label>
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
                                        <div class="btn btn-default grid active" data-view="grid"
                                            data-toggle="tooltip" data-original-title="Grid"><a
                                                href="/produktoko">Semua Produk</a></div>

                                            <select id="input-sort" class="btn btn-default grid active" onchange="location = this.value;">
                                                    <option value="" selected="selected">Etalase Produk</option>
                                                    <option value=""><a href="">Baju</a></option>
                                                    <option value=""><a href="">Elektronik</a></option>
                                                    <option value=""><a href="">Dapur</a></option>
                                            </select>
                                    </div>

                                </div>
                                <div class="short-by-show form-inline text-right col-md-7 col-sm-7 col-xs-12">
                                    <div class="form-group short-by">
                                        <label class="control-label" for="input-sort">Urutkan berdasarkan:</label>
                                        <select id="input-sort" class="form-control"
                                            onchange="location = this.value;">
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
                        <div class="products-list row nopadding-xs so-filter-gird grid">

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Chicken swinesha">
                                                <img src="landingpage/image/catalog/demo/product/funiture/1.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/2.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                            <h4><a href="product.html" title="Chicken swinesha"
                                                    target="_self">Chicken swinesha</a></h4>
                                            <div class="price"> <span class="price-new">$46.00</span>
                                                <span class="price-old">$55.00</span>
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
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Cupim should ">
                                                <img src="landingpage/image/catalog/demo/product/funiture/3.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/4.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                            <h4><a href="product.html" title="Cupim should " target="_self">Cupim
                                                    should </a></h4>
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
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Doenpuis consuat ">
                                                <img src="landingpage/image/catalog/demo/product/funiture/5.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/6.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                                    target="_self">Doenpuis consuat </a></h4>
                                            <div class="price"> <span class="price-new">$66.00</span>
                                                <span class="price-old">$76.00</span>
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
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Drutick lanaeger">
                                                <img src="landingpage/image/catalog/demo/product/funiture/7.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/8.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                            <h4><a href="product.html" title="Drutick lanaeger"
                                                    target="_self">Drutick lanaeger</a></h4>
                                            <div class="price">$80.00
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
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Ercitation incididunt">
                                                <img src="landingpage/image/catalog/demo/product/funiture/9.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/10.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                            <h4><a href="product.html" title="Ercitation incididunt"
                                                    target="_self">Ercitation incididunt</a></h4>
                                            <div class="price">$75.00
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
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Fatback picanha">
                                                <img src="landingpage/image/catalog/demo/product/funiture/11.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/12.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                            <h4><a href="product.html" title="Fatback picanha"
                                                    target="_self">Fatback picanha</a></h4>
                                            <div class="price"> $84.00
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
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Jalapeno dolore">
                                                <img src="landingpage/image/catalog/demo/product/funiture/13.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/14.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                            <h4><a href="product.html" title="Jalapeno dolore"
                                                    target="_self">Jalapeno dolore</a></h4>
                                            <div class="price">$98.00
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
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Mapicola incididuv">
                                                <img src="landingpage/image/catalog/demo/product/funiture/15.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/16.jpg"
                                                    class="img-2 img-responsive" alt="image">
                                            </a>
                                        </div>
                                        <div class="box-label"><span class="label-product label-new"> New </span>
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
                                            <h4><a href="product.html" title="Mapicola incididuv"
                                                    target="_self">Mapicola incididuv</a></h4>
                                            <div class="price"> $96.00
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
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Ullamco occaeca">
                                                <img src="landingpage/image/catalog/demo/product/funiture/17.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/18.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                            <h4><a href="product.html" title="Ullamco occaeca"
                                                    target="_self">Ullamco occaeca</a></h4>
                                            <div class="price">$67.00
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
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Pariatur porking">
                                                <img src="landingpage/image/catalog/demo/product/funiture/19.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/20.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                            <h4><a href="product.html" title="Pariatur porking"
                                                    target="_self">Pariatur porking</a></h4>
                                            <div class="price">$79.00
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
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Doenpuis consuat ">
                                                <img src="landingpage/image/catalog/demo/product/funiture/6.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/5.jpg"
                                                    class="img-2 img-responsive" alt="image">
                                            </a>
                                        </div>
                                        <div class="box-label"> <span class="label-product label-sale"> -13%
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
                                            <h4><a href="product.html" title="Doenpuis consuat "
                                                    target="_self">Doenpuis consuat </a></h4>
                                            <div class="price"> <span class="price-new">$66.00</span>
                                                <span class="price-old">$76.00</span>
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
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Drutick lanaeger">
                                                <img src="landingpage/image/catalog/demo/product/funiture/8.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/7.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                            <h4><a href="product.html" title="Drutick lanaeger"
                                                    target="_self">Drutick lanaeger</a></h4>
                                            <div class="price">$80.00
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
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Ercitation incididunt">
                                                <img src="landingpage/image/catalog/demo/product/funiture/10.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/9.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                            <h4><a href="product.html" title="Ercitation incididunt"
                                                    target="_self">Ercitation incididunt</a></h4>
                                            <div class="price">$75.00
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
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Fatback picanha">
                                                <img src="landingpage/image/catalog/demo/product/funiture/4.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/11.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                            <h4><a href="product.html" title="Fatback picanha"
                                                    target="_self">Fatback picanha</a></h4>
                                            <div class="price"> $84.00
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
                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Jalapeno dolore">
                                                <img src="landingpage/image/catalog/demo/product/funiture/14.jpg"
                                                    class="img-1 img-responsive" alt="image">
                                                <img src="landingpage/image/catalog/demo/product/funiture/13.jpg"
                                                    class="img-2 img-responsive" alt="image">
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
                                            <h4><a href="product.html" title="Jalapeno dolore"
                                                    target="_self">Jalapeno dolore</a></h4>
                                            <div class="price">$98.00
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
    <footer class="footer-container typefooter-1">
        <!-- Footer Top Container -->
        <section class="footer-top">
            <div class="container ftop">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 ">

                        <div class="module newsletter-footer1">
                            <div class="newsletter" style="width:100%   ; background-color: #fff ; ">

                                <div class="title-block">
                                    <div class="page-heading font-title">
                                        Signup for Newsletter
                                    </div>
                                    <div class="promotext">We’ll never share your email address with a third-party. </div>
                                </div>

                                <div class="block_content">
                                    <form method="post" id="signup" name="signup" class="form-group form-inline signup send-mail">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
                                            </div>
                                            <div class="subcribe">
                                                <button class="btn btn-primary btn-default font-title" type="submit" onclick="return subscribe_newsletter();" name="submit">
                                            Subscribe
                                        </button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                                <!--/.modcontent-->

                            </div>

                        </div>




                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                        <ul class="socials">
                            <li class="facebook"><a class="_blank" href="https://www.facebook.com/MagenTech" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                            <li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                            <li class="google_plus"><a class="_blank" href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa fa-google-plus"></i><span>Google Plus</span></a></li>
                            <li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                        </ul>


                    </div>
                </div>
            </div>
        </section>
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

</body>

</html>
