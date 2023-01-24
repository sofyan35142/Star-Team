    <header id="header" class=" typeheader-1">
        <!-- Header Top -->
        <div class="header-top hidden-compact">
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-lg-7 col-md-8 col-sm-6 col-xs-4">
                        <div class="hidden-sm hidden-xs welcome-msg"><b><a href="/toko"></a>Selamat datang di
                                MarketPlace Sukorejo !</b>
                        </div>
                        <ul class="top-link list-inline hidden-lg hidden-md">
                            <li class="account" id="my_account">
                                <a href="#" title="My Account " class="btn-xs dropdown-toggle"
                                    data-toggle="dropdown">
                                    <span class="hidden-xs">Akun Saya </span> <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="dropdown-menu ">
                                    <li><a href="/register"><i class="fa fa-user"></i> Register</a></li>
                                    <li><a href="/login"><i class="fa fa-pencil-square-o"></i> Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header-top-right collapsed-block col-lg-5 col-md-4 col-sm-6 col-xs-8">
                        <ul class="top-link list-inline lang-curr">
                            <li class="currency">
                                {{-- <div class="btn-group currencies-block">
                                            <form action="https://demo.smartaddons.com/templates/html/emarket/index.html"
                                                method="post" enctype="multipart/form-data" id="currency">
                                                <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                                    <span class="icon icon-credit "></span> $ US Dollar <span
                                                        class="fa fa-angle-down"></span>
                                                </a>
                                                <ul class="dropdown-menu btn-xs">
                                                    <li> <a href="#">(€)&nbsp;Euro</a></li>
                                                    <li> <a href="#">(£)&nbsp;Pounds </a></li>
                                                    <li> <a href="#">($)&nbsp;US Dollar </a></li>
                                                </ul>
                                            </form>
                                        </div> --}}
                            </li>
                            {{-- <li class="language">
                                        <div class="btn-group languages-block ">
                                            <form action="https://demo.smartaddons.com/templates/html/emarket/index.html"
                                                method="post" enctype="multipart/form-data" id="bt-language">
                                                <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                                    <img src="landingpage/image/catalog/flags/gb.png" alt="English"
                                                        title="English">
                                                    <span class="">English</span>
                                                    <span class="fa fa-angle-down"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="index.html"><img class="image_flag"
                                                                src="landingpage/image/catalog/flags/gb.png"
                                                                alt="English" title="English" /> English </a></li>
                                                    <li> <a href="index.html"> <img class="image_flag"
                                                                src="landingpage/image/catalog/flags/ar.png"
                                                                alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                                </ul>
                                            </form>
                                        </div>

                                    </li> --}}
                        </ul>



                    </div>
                </div>
            </div>
        </div>
        <!-- //Header Top -->

        <!-- Header center -->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="logo"><a href="#"><img src="landingpage/image/catalog/4.png"
                                    title="Your Store" alt="Your Store" /></a></div>
                    </div>
                    <!-- //end Logo -->

                    <!-- Main menu -->
                    <div class="main-menu col-lg-6 col-md-7 ">
                        <div class="responsive so-megamenu megamenu-style-dev menuhead">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal open ">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse"
                                            class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu" data-transition="slide"
                                                        data-animationtime="250">
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="/" class="clearfix">
                                                                <strong>Beranda</strong>

                                                            </a>

                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong> Fitur</strong>

                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 60%; right: auto;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="column">

                                                                                <div class="row">

                                                                                    <ul class="row-list">

                                                                                        <li><a href="/keranjang">Keranjang
                                                                                                Belanja</a></li>
                                                                                        <li><a href="/historiorder">Riwayat
                                                                                                Pesanan</a></li>
                                                                                        <li><a href="/favorit">Produk
                                                                                                Favorit</a></li>
                                                                                        <li><a
                                                                                                href="/voucher">Voucher</a>
                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="col-md-3">
                                                                                <div class="column">
                                                                                    <a href="#"
                                                                                        class="title-submenu">Product
                                                                                        pages</a>
                                                                                    <div>
                                                                                        <ul class="row-list">
                                                                                            <li><a href="/detailproduk">Product
                                                                                                    page 1</a></li>
                                                                                            <li><a href="product-v2.html">Product
                                                                                                    page 2</a></li>
                                                                                            <!-- <li><a href="product-v3.html">Image size - small</a></li> -->
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="column">
                                                                                    <a href="#"
                                                                                        class="title-submenu">Shopping
                                                                                        pages</a>
                                                                                    <div>
                                                                                        <ul class="row-list">
                                                                                            <li><a href="cart.html">Shopping
                                                                                                    Cart Page</a></li>
                                                                                            <li><a href="checkout.html">Checkout
                                                                                                    Page</a></li>
                                                                                            <li><a href="compare.html">Compare
                                                                                                    Page</a></li>
                                                                                            <li><a href="wishlist.html">Wishlist
                                                                                                    Page</a></li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="column">
                                                                                    <a href="#"
                                                                                        class="title-submenu">My Account
                                                                                        pages</a>
                                                                                    <div>
                                                                                        <ul class="row-list">
                                                                                            <li><a href="login.html">Login
                                                                                                    Page</a></li>
                                                                                            <li><a href="register.html">Register
                                                                                                    Page</a></li>
                                                                                            <li><a href="my-account.html">My
                                                                                                    Account</a></li>
                                                                                            <li><a
                                                                                                    href="order-history.html">Order
                                                                                                    History</a></li>
                                                                                            <li><a
                                                                                                    href="order-information.html">Order
                                                                                                    Information</a></li>
                                                                                            <li><a href="return.html">Product
                                                                                                    Returns</a></li>
                                                                                            <li><a
                                                                                                    href="gift-voucher.html">Gift
                                                                                                    Voucher</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Halaman</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 60%; right: auto; ">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-8">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item"
                                                                                        href="/faqs">FAQ</a></li>

                                                                                <li><a class="subcategory_item"
                                                                                        href="/kebijakanpriv">Kebijakan
                                                                                        Privasi</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="/hub">Kontak Kami</a>
                                                                                </li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="/about">Tentang Kami</a>
                                                                                </li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="/syarat">Syarat &
                                                                                        Ketentuan</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        {{-- <div class="col-md-6">
                                                                                <ul class="row-list">
                                                                                    <li><a class="subcategory_item"
                                                                                            href="about-us.html">About Us
                                                                                            1</a></li>
                                                                                    <li><a class="subcategory_item"
                                                                                            href="about-us-2.html">About Us
                                                                                            2</a></li>
                                                                                    <li><a class="subcategory_item"
                                                                                            href="about-us-3.html">About Us
                                                                                            3</a></li>
                                                                                    <li><a class="subcategory_item"
                                                                                            href="about-us-4.html">About Us
                                                                                            4</a></li>
                                                                                </ul>
                                                                            </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        {{-- <li class="with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <strong>Categories</strong>
                                                                    <img class="label-hot"
                                                                        src="landingpage/image/catalog/menu/hot-icon.png"
                                                                        alt="icon items">

                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" style="width: 100%; display: none;">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-3 img img1">
                                                                                        <a href="#"><img
                                                                                                src="landingpage/image/catalog/menu/megabanner/image-1.jpg"
                                                                                                alt="banner1"></a>
                                                                                    </div>
                                                                                    <div class="col-md-3 img img2">
                                                                                        <a href="#"><img
                                                                                                src="landingpage/image/catalog/menu/megabanner/image-2.jpg"
                                                                                                alt="banner2"></a>
                                                                                    </div>
                                                                                    <div class="col-md-3 img img3">
                                                                                        <a href="#"><img
                                                                                                src="landingpage/image/catalog/menu/megabanner/image-3.jpg"
                                                                                                alt="banner3"></a>
                                                                                    </div>
                                                                                    <div class="col-md-3 img img4">
                                                                                        <a href="#"><img
                                                                                                src="landingpage/image/catalog/menu/megabanner/image-4.jpg"
                                                                                                alt="banner4"></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <a href="#"
                                                                                    class="title-submenu">Automotive</a>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Car
                                                                                                        Alarms and
                                                                                                        Security</a></li>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Car
                                                                                                        Audio &amp;
                                                                                                        Speakers</a></li>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Gadgets
                                                                                                        &amp; Auto Parts</a>
                                                                                                </li>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">More
                                                                                                        Car Accessories</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <a href="#"
                                                                                    class="title-submenu">Funitures</a>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Bathroom</a>
                                                                                                </li>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Bedroom</a>
                                                                                                </li>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Decor</a>
                                                                                                </li>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Living
                                                                                                        room</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <a href="#"
                                                                                    class="title-submenu">Jewelry &amp;
                                                                                    Watches</a>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Earings</a>
                                                                                                </li>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Wedding
                                                                                                        Rings</a></li>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Men
                                                                                                        Watches</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <a href="#"
                                                                                    class="title-submenu">Electronics</a>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Computer</a>
                                                                                                </li>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Smartphone</a>
                                                                                                </li>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Tablets</a>
                                                                                                </li>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Monitors</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li> --}}

                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="/parentkat" class="clearfix">
                                                                <strong>Kategori</strong>

                                                            </a>

                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="/blog" class="clearfix">
                                                                <strong>Blog</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>


                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- //end Main menu -->

                    <div class="middle-right col-lg-4 col-md-3 col-sm-6 col-xs-8">
                        <div class="signin-w  hidden-sm hidden-xs">
                            <ul class="signin-link blank">
                                <li class="log login"><i class="fa fa-lock"></i> <a class="link-lg"
                                        href="/login">Masuk
                                    </a> atau <a href="/registrasi">Daftar</a>

                                    <i class="fa-solid fa-user"></i><a
                                        style="{{ Route::currentRouteNamed('profiluser', 'notifikasi', 'alamat', 'sidebarpenjual', 'vouchertoko', 'pesanansaya') ? 'display:none' : '' }}"
                                        href="/profiluser"> Profile Saya</a>
                                </li>
                            </ul>
                        </div>
                        <div class="telephone hidden-xs hidden-sm hidden-md">
                            <ul class="blank">
                            </ul>
                        </div>


                    </div>

                </div>

            </div>
        </div>
        <!-- //Header center -->

        <!-- Header Bottom -->
        <div class="header-bottom hidden-compact">
            <div class="container">
                <div class="row">

                    <div class="bottom1 menu-vertical col-lg-2 col-md-3 col-sm-3">
                        <div class="responsive so-megamenu megamenu-style-dev ">
                            <div class="so-vertical-menu ">
                                <nav class="navbar-default">

                                    <div class="container-megamenu vertical">
                                        <div id="menuHeading">
                                            <div class="megamenuToogle-wrapper">
                                                <div class="megamenuToogle-pattern">
                                                    <div class="container">
                                                        <div>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                        Semua Kategori
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="navbar-header">
                                            <button type="button" id="show-verticalmenu" data-toggle="collapse"
                                                class="navbar-toggle">
                                                <i class="fa fa-bars"></i>
                                                <span> Semua Kategori </span>
                                            </button>
                                        </div>
                                        <div class="vertical-wrapper">
                                            <span id="remove-verticalmenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu">
                                                        <li class="item-vertical  with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <span>Hadiah & Mainan</span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="20">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-sm-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="/kategorilanding"
                                                                                                    class="main-menu">Boneka
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/kategorilanding"
                                                                                                    class="main-menu">Games</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/kategorilanding"
                                                                                                    class="main-menu">
                                                                                                    Souvenir Pesta</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/kategorilanding"
                                                                                                    class="main-menu">
                                                                                                    Paket Hadiah</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/kategorilanding"
                                                                                                    class="main-menu">Mainan
                                                                                                    Olahraga</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="item-vertical   with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="/parentkat" class="clearfix">
                                                                <span>Fashion & Aksesoris</span>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="20">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-sm-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="/kategorilanding"
                                                                                                    class="main-menu">Pakaian
                                                                                                    Pria
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/kategorilanding"
                                                                                                    class="main-menu">Pakaian
                                                                                                    Wanita</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/kategorilanding"
                                                                                                    class="main-menu">
                                                                                                    Pakaian Anak</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/kategorilanding"
                                                                                                    class="main-menu">
                                                                                                    Aksesoris Rambut</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/kategorilanding"
                                                                                                    class="main-menu">Aksesoris
                                                                                                    Fashion</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/kategorilanding"
                                                                                                    class="main-menu">Perhiasan</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="item-vertical  style1 with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="/parentkat" class="clearfix">
                                                                <span class="label"></span>
                                                                <span>Elektronik</span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="20">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a
                                                                                                    href="#">Lampu</a>
                                                                                                <ul>

                                                                                                    <li><a
                                                                                                            href="#">Kabel</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="#">Stop
                                                                                                            Kontak</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="#"></a>
                                                                                                    </li>

                                                                                                </ul>
                                                                                            </li>
                                                                                            {{-- <li><a href="#"
                                                                                                            class="main-menu">Electronics</a>
                                                                                                        <ul>
                                                                                                            <li><a
                                                                                                                    href="#">Asdipiscing</a>
                                                                                                            </li>
                                                                                                            <li><a
                                                                                                                    href="#">Diam
                                                                                                                    sit</a>
                                                                                                            </li>
                                                                                                            <li><a
                                                                                                                    href="#">Labore
                                                                                                                    et</a>
                                                                                                            </li>
                                                                                                            <li><a
                                                                                                                    href="#">Monitors</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li> --}}
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row banner">
                                                                                <a href="#">
                                                                                    {{-- <img src="landingpage/image/catalog/menu/megabanner/vbanner1.jpg" --}}
                                                                                    {{-- alt="banner1"> --}}
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="item-vertical with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <span>Kesehatan &amp; Kecantikan</span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="60">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#"
                                                                                                    class="main-menu">
                                                                                                </a>
                                                                                                <ul>
                                                                                                    <li><a
                                                                                                            href="#">Obat-Obatan</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="#">Perawatan
                                                                                                            Mulut</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="#">P3K</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="#">Sarung
                                                                                                            Tangan</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            {{-- <li>
                                                                                                        <a href="24.html"
                                                                                                            onclick="window.location = '24.html';"
                                                                                                            class="main-menu">Health
                                                                                                            &amp; Beauty</a>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Home
                                                                                                                    Audio</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Helicopters
                                                                                                                    &amp;
                                                                                                                    Parts</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Outdoor
                                                                                                                    &amp;
                                                                                                                    Traveling</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Toys
                                                                                                                    &amp;
                                                                                                                    Hobbies</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li> --}}
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                {{-- <div class="col-md-4 static-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#"
                                                                                                            class="main-menu">Elektronik</a>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Earings</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Salon
                                                                                                                    &amp;
                                                                                                                    Spa
                                                                                                                    Equipment</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Shaving
                                                                                                                    &amp;
                                                                                                                    Hair
                                                                                                                    Removal</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a
                                                                                                                    href="#">Smartphone
                                                                                                                    &amp;
                                                                                                                    Tablets</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="/kategorilanding"
                                                                                                            class="main-menu">Setrika</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="/kategorilanding"
                                                                                                            class="main-menu">
                                                                                                        Mesin Cuci</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="/kategorilanding"
                                                                                                            class="main-menu">Dispenser</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="/kategorilanding"
                                                                                                            class="main-menu">
                                                                                                        Lampu</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="/kategorilanding"
                                                                                                            class="main-menu">
                                                                                                        Stop Kontak</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="/kategorilanding"
                                                                                                            class="main-menu">
                                                                                                        kipas Angin</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="/kategorilanding"
                                                                                                            class="main-menu">
                                                                                                        AC</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="item-vertical css-menu with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="/parentkat" class="clearfix">
                                                                <span>Smartphone </span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="20">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-sm-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="#"
                                                                                                    class="main-menu">Headphones
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#"
                                                                                                    class="main-menu">Charger</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#"
                                                                                                    class="main-menu">
                                                                                                    SD
                                                                                                    card</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#"
                                                                                                    class="main-menu">
                                                                                                    headset</a>
                                                                                            </li>
                                                                                            {{-- <li>
                                                                                                        <a href="#"
                                                                                                            class="main-menu">Helicopters
                                                                                                            &amp; Parts</a>
                                                                                                    </li> --}}
                                                                                            <a href="/kategorilanding"
                                                                                                class="main-menu">Handphone
                                                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Charger</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu"> SD card</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">
                                                                Headphones</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Headset</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Speaker</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </li>
                    <li class="item-vertical  with-sub-menu hover">
                        <p class="close-menu"></p>
                        <a href="/parentkat" class="clearfix">
                            <span>Kecantikan</span>
                        </a>
                        <div class="sub-menu" data-subwidth="20">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 hover-menu">
                                                <div class="menu">
                                                    <ul>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Hair Care
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Body Care</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu"> Skin
                                                                Care</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">
                                                                Make Up</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Perawatan
                                                                Kuku</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-vertical with-sub-menu hover">
                        <p class="close-menu"></p>
                        <a href="/parentkat" class="clearfix">
                            <span>Kesehatan </span>
                            <b class="caret"></b>
                        </a>
                        <div class="sub-menu" data-subwidth="20">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 hover-menu">
                                                <div class="menu">
                                                    <ul>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Perawatan
                                                                Mulut
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding"
                                                                class="main-menu">Obat-obatan</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu"> Masker</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">
                                                                P3K</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Obat
                                                                Tradisional</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-vertical   with-sub-menu hover">
                        <p class="close-menu"></p>
                        <a href="/parentkat" class="clearfix">
                            <span>Makanan & Minuman</span>
                        </a>
                        <div class="sub-menu" data-subwidth="20">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 hover-menu">
                                                <div class="menu">
                                                    <ul>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Bahan Pokok
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Susu &
                                                                Olahan</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu"> Makanan
                                                                Ringan</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">
                                                                Makanan Instan</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Menu
                                                                Sarapan</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Segar &
                                                                Beku</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-vertical   with-sub-menu hover">
                        <p class="close-menu"></p>
                        <a href="/parentkat" class="clearfix">
                            <span>Kamar mandi</span>
                        </a>
                        <div class="sub-menu" data-subwidth="20">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 hover-menu">
                                                <div class="menu">
                                                    <ul>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Handuk
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Rak</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu"> Tempat
                                                                Sabun</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">
                                                                Kloset</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Sikat &
                                                                Spons</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-vertical   with-sub-menu hover">
                        <p class="close-menu"></p>
                        <a href="/parentkat" class="clearfix">
                            <span>Alas Kaki</span>
                        </a>
                        <div class="sub-menu" data-subwidth="20">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 hover-menu">
                                                <div class="menu">
                                                    <ul>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Sepatu
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Sandal</a>
                                                        </li>
                                                        {{-- <li>
                                                                                                        <a href="/kategorilanding"
                                                                                                            class="main-menu"> SD card</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="/kategorilanding"
                                                                                                            class="main-menu">
                                                                                                        headset</a>
                                                                                                    </li> --}}
                                                        {{-- <li>
                                                                                                        <a href="/kategorilanding"
                                                                                                            class="main-menu">Helicopters
                                                                                                            &amp; Parts</a>
                                                                                                    </li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-vertical  with-sub-menu hover">
                        <p class="close-menu"></p>
                        <a href="/parentkat" class="clearfix">
                            <span>Ibu & Bayi</span>
                        </a>
                        <div class="sub-menu" data-subwidth="20">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 hover-menu">
                                                <div class="menu">
                                                    <ul>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Vitamin
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Boneka</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu"> Popok</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">
                                                                Kamar Bayi</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Edukatif</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Travelling
                                                                Kit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-vertical   with-sub-menu hover" style="display: none;">
                        <p class="close-menu"></p>
                        <a href="/parentkat" class="clearfix">
                            <span>Hobi </span>
                        </a>
                        <div class="sub-menu" data-subwidth="20">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 hover-menu">
                                                <div class="menu">
                                                    <ul>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Mainan &
                                                                Games
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Action
                                                                Figure</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu"> CD & DVD</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">
                                                                Koleksi Penggemar</a>
                                                        </li>
                                                        {{-- <li>
                                                                                                        <a href="/kategorilanding"
                                                                                                            class="main-menu">Helicopters
                                                                                                            &amp; Parts</a>
                                                                                                    </li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-vertical   with-sub-menu hover" style="display: none;">
                        <p class="close-menu"></p>
                        <a href="/parentkat" class="clearfix">
                            <span>Alat Tulis & Buku</span>
                        </a>
                        <div class="sub-menu" data-subwidth="20">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 hover-menu">
                                                <div class="menu">
                                                    <ul>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Buku Tulis
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Alat
                                                                Tulis</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Perlengkapan
                                                                Menggambar</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">
                                                                Surat Menyurat</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Tali &
                                                                Selotip</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-vertical   with-sub-menu hover" style="display: none;">
                        <p class="close-menu"></p>
                        <a href="/parentkat" class="clearfix">
                            <span>Perlengkapan Rumah </span>
                        </a>
                        <div class="sub-menu" data-subwidth="20">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 hover-menu">
                                                <div class="menu">
                                                    <ul>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Rak
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Alat
                                                                Makan</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu"> Meja</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">
                                                                Kursi</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Lemari</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Selimut</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Wallpaper
                                                                Dinding</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-vertical   with-sub-menu hover" style="display: none;">
                        <p class="close-menu"></p>
                        <a href="/parentkat" class="clearfix">
                            <span>Olahraga</span>
                        </a>
                        <div class="sub-menu" data-subwidth="20">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 hover-menu">
                                                <div class="menu">
                                                    <ul>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Alat Pancing
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Sepatu
                                                                Olahraga</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">
                                                                Bersepeda</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">
                                                                Hiking</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Diving
                                                                Renang</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Sepak
                                                                Bola</a>
                                                        </li>
                                                        <li>
                                                            <a href="/kategorilanding" class="main-menu">Fitness</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-vertical" style="display: none;">
                        <p class="close-menu"></p>
                        <a href="/parentkat" class="clearfix">
                            <span>Lainnya</span>
                        </a>
                    </li>

                    <li class="loadmore">
                        <i class="fa fa-plus-square-o"></i>
                        <span class="more-view">Lebih banyak kategori</span>
                    </li>

                    </ul>
                </div>
            </div>
        </div>
        </div>
        </nav>
        </div>
        </div>

        </div>

        <!-- Search -->
        <div class="bottom2 col-lg-7 col-md-6 col-sm-6">
            <div class="search-header-w">
                <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i>
                </div>

                <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                    <form method="GET" action="/pencarian">
                        <div id="search0" class="search input-group form-group">
                            {{-- <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                                    <select class="no-border" name="category_id">
                                                        <option value="0">Semua Kategori</option>
                                                        <option value="78">Apparel</option>
                                                        <option value="77">Cables &amp; Connectors</option>
                                                        <option value="82">Cameras &amp; Photo</option>
                                                        <option value="80">Flashlights &amp; Lamps</option>
                                                        <option value="81">Mobile Accessories</option>
                                                        <option value="79">Video Games</option>
                                                        <option value="20">Jewelry &amp; Watches</option>
                                                        <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings
                                                        </option>
                                                        <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding
                                                            Rings</option>
                                                        <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men
                                                            Watches</option>
                                                    </select>
                                                </div> --}}

                            <input class="autosearch-input form-control" type="text" value=""
                                size="50" autocomplete="off" placeholder="Cari Toko,Produk" name="search">
                            <span class="input-group-btn">
                                <button type="submit" class="button-search btn btn-primary" name="submit_search"><i
                                        class="fa fa-search"></i></button>
                            </span>
                        </div>
                        <input type="hidden" name="route" value="product/search" />
                    </form>
                </div>
            </div>
        </div>
        <!-- //end Search -->

        <!-- Secondary menu -->
        <div class="bottom3 col-lg-3 col-md-3 col-sm-3">


            <!--cart-->
            <div
                class="shopping_cart {{ Route::is('keranjang', 'checkout', 'historiorder', 'informasiorder') ? 'none' : '' }}">
                <div id="cart" class="btn-shopping-cart">

                    <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle"
                        data-toggle="dropdown" aria-expanded="true">
                        <div class="shopcart">
                            <span class="icon-c">
                                <i class="fa fa-shopping-bag"></i>
                            </span>
                            <div class="shopcart-inner">
                                <p class="text-shopping-cart">

                                    Keranjangku
                                </p>

                                <span class="total-shopping-cart cart-total-full">

                                    <span class="items_cart">2</span><span class="items_cart2">
                                        barang</span><span class="items_carts"></span>
                                </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                        <li>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="text-center" style="width:70px">
                                            <a href="#">
                                                <img src="../landingpage/image/catalog/demo/product/270/produk5.jfif"
                                                    style="width:70px" alt="Yutculpa ullamcon"
                                                    title="Yutculpa ullamco" class="preview">
                                            </a>
                                        </td>
                                        <td class="text-left"> <a class="cart_product_name" href="#">Sikat
                                                Gigi</a>
                                        </td>
                                        <td class="text-center">x1</td>
                                        <td class="text-center">Rp.80.000</td>
                                        <td class="text-right">
                                            <a href="#" class="fa fa-edit"></a>
                                        </td>
                                        <td class="text-right">
                                            <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width:70px">
                                            <a href="#">
                                                <img src="landingpage/image/catalog/demo/product/funiture/10.jpg"
                                                    style="width:70px" alt="Xancetta bresao" title="Xancetta bresao"
                                                    class="preview">
                                            </a>
                                        </td>
                                        <td class="text-left"> <a class="cart_product_name" href="#">Handuk</a>
                                        </td>
                                        <td class="text-center">x1</td>
                                        <td class="text-center">Rp.60.000</td>
                                        <td class="text-right">
                                            <a href="#" class="fa fa-edit"></a>
                                        </td>
                                        <td class="text-right">
                                            <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            <div>
                                <table class="table table-bordered">

                                </table>
                                <p class="text-right"> <a class="btn view-cart" href="/keranjang"><i
                                            class="fa fa-shopping-cart"></i>Keranjang</a>&nbsp;&nbsp;&nbsp;
                                    {{-- <a class="btn btn-mega checkout-cart" href="/keranjang"><i class="fa fa-share"></i>Checkout</a>  --}}
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <!--//cart-->

            <ul class="wishlist-comp hidden-md hidden-sm hidden-xs">

                <li class="wishlist hidden-xs"><a href="/favorit" id="wishlist-total" class="top-link-wishlist"
                        title="Wish List (0) "><i class="fa fa-heart"></i></a>
                </li>
            </ul>
        </div>

        </div>
        </div>

        </div>
    </header>
