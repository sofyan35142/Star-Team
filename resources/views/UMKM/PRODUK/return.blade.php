
<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!-- Basic page needs
    ============================================ -->
    <title>MarketPlace</title>
    <meta charset="utf-8">
    <meta name="keywords"
        content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description"
        content="eMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/png" href="landingpage/image/catalog/mara.png" />


    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('landingpage/css/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('landingpage/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/css/themecss/lib.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/js/minicolors/miniColors.css') }}" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="{{ asset('landingpage/css/themecss/so_searchpro.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/css/themecss/so_megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/css/themecss/so-categories.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/css/themecss/so-listing-tabs.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/css/themecss/so-newletter-popup.css') }}" rel="stylesheet">

    <link href="{{ asset('landingpage/css/footer/footer1.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/css/header/header1.css') }}" rel="stylesheet">
    <link id="color_scheme" href="{{ asset('landingpage/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/css/responsive.css') }}" rel="stylesheet">

    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700' rel='stylesheet'
        type='text/css'>
    <style type="text/css">
        body {
            font-family: 'Roboto', sans-serif
        }
    </style>

</head>

<body class="res layout-subpage layout-1 banners-effect-5">
    <div id="wrapper" class="wrapper-fluid">
        <!-- Header Container  -->
        <header id="header" class=" typeheader-1">
            <!-- Header Top -->
            <div class="header-top hidden-compact">
                <div class="container">
                    <div class="row">
                        <div class="header-top-left col-lg-7 col-md-8 col-sm-6 col-xs-4">
                            <div class="hidden-sm hidden-xs welcome-msg"><b>Selamat datang di MarketPlace Sukorejo !</b>
                            </div>

                            <ul class="top-link list-inline hidden-lg hidden-md">
                                <li class="account" id="my_account">
                                    <a href="#" title="My Account " class="btn-xs dropdown-toggle"
                                        data-toggle="dropdown"> <span class="hidden-xs">My Account </span> <span
                                            class="fa fa-caret-down"></span>
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
                                    <div class="btn-group currencies-block">
                                        {{-- <form action="https://demo.smartaddons.com/templates/html/emarket/index.html" method="post" enctype="multipart/form-data" id="currency">
                                            <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                                <span class="icon icon-credit "></span> $ US Dollar <span class="fa fa-angle-down"></span>
                                            </a>
                                            <ul class="dropdown-menu btn-xs">
                                                <li> <a href="#">(€)&nbsp;Euro</a></li>
                                                <li> <a href="#">(£)&nbsp;Pounds </a></li>
                                                <li> <a href="#">($)&nbsp;US Dollar </a></li>
                                            </ul>
                                        </form> --}}
                                    </div>
                                </li>
                                <li class="language">
                                    <div class="btn-group languages-block ">
                                        <form action="https://demo.smartaddons.com/templates/html/emarket/index.html"
                                            method="post" enctype="multipart/form-data" id="bt-language">
                                            {{-- <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                                <img src="landingpage/image/catalog/flags/gb.png" alt="English" title="English">
                                                <span class="">Indonesia</span>
                                                <span class="fa fa-angle-down"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index.html"><img class="image_flag" src="landingpage/image/catalog/flags/gb.png" alt="English" title="English" /> Indonesia </a></li>
                                                <li> <a href="index.html"> <img class="image_flag" src="landingpage/image/catalog/flags/ar.png" alt="Arabic" title="Arabic" /> Indonesia </a> </li>
                                            </ul> --}}
                                        </form>
                                    </div>

                                </li>
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
                            <div class="logo"><a href="index.html"><img
                                        src="{{ asset('landingpage/image/catalog/999.png') }}" width="200px"
                                        title="Your Store" alt="Your Store" /></a></div>
                            {{-- <div class="logo"><a href="index.html"><img src="landingpage/image/catalog/marpla.png"
                                        width="110px" title="Your Store" alt="Your Store" /></a></div> --}}
                        </div>
                        <!-- //end Logo -->

                        <!-- Main menu -->
                        <div class="main-menu col-lg-6 col-md-7 ">
                            <div class="responsive so-megamenu megamenu-style-dev">
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

                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu" data-transition="slide"
                                                        data-animationtime="250">
                                                        <li class="home hover">
                                                            {{-- <a href="index.html">Beranda <b class="caret"></b></a> --}}
                                                            <!-- <div class="sub-menu" style="width:100%;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="index.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border"
                                                                                        src="landingpage/image/catalog/menu/home-1.jpg"
                                                                                        alt="">

                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    (Default)</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home2.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border"
                                                                                        src="landingpage/image/catalog/menu/home-2.jpg"
                                                                                        alt="">

                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 2</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home3.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border"
                                                                                        src="landingpage/image/catalog/menu/home-3.jpg"
                                                                                        alt="">

                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 3</h3>
                                                                            </a>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home4.html" class="image-link">
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border"
                                                                                        src="landingpage/image/catalog/menu/home-4.jpg"
                                                                                        alt="">

                                                                                </span>
                                                                                <h3 class="figcaption">Home page -
                                                                                    Layout 4</h3>
                                                                            </a>

                                                                        </div>

                                                                        <div class="col-md-15">
                                                                        <a href="#" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="image/demo/feature/comming-soon.png" alt="">

                                                                            </span>
                                                                            <h3 class="figcaption">Comming soon</h3>
                                                                        </a>

                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                {{-- <strong>Fitur</strong>
                                                                <img class="label-hot" src="landingpage/image/catalog/menu/new-icon.png" alt="icon items">
                                                                <strong>Features</strong>
                                                                <img class="label-hot" src="landingpage/image/catalog/menu/new-icon.png" alt="icon items">
                                                                <b class="caret"></b>
                                                                <img class="label-hot"
                                                                    src="landingpage/image/catalog/menu/new-icon.png"
                                                                    alt="icon items">
                                                                <b class="caret"></b> --}}
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; right: auto;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">Listing
                                                                                    pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="category.html">Category
                                                                                                Page 1 </a></li>
                                                                                        <li><a href="category-v2.html">Category
                                                                                                Page 2</a></li>
                                                                                        <li><a href="category-v3.html">Category
                                                                                                Page 3</a></li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">Product
                                                                                    pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="product.html">Product
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            {{-- <a href="#" class="clearfix">
                                                                <strong>Halaman</strong>
                                                                <b class="caret"></b>
                                                            </a> --}}
                                                            <div class="sub-menu" style="width: 40%; ">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item"
                                                                                        href="faq.html">FAQ</a></li>

                                                                                <li><a class="subcategory_item"
                                                                                        href="sitemap.html">Site
                                                                                        Map</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="contact.html">Contact
                                                                                        us</a></li>
                                                                                <li><a class="subcategory_item"
                                                                                        href="banner-effect.html">Banner
                                                                                        Effect</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6">
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            {{-- <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Kategori</strong>
                                                                <img class="label-hot" src="landingpage/image/catalog/menu/hot-icon.png" alt="icon items">
                                                                <strong>Categories</strong>
                                                                <img class="label-hot" src="landingpage/image/catalog/menu/hot-icon.png" alt="icon items">

                                                                <b class="caret"></b>
                                                            </a> --}}
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
                                                        </li>

                                                        <!-- <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Accessories</strong>

                                                            </a>

                                                        </li> -->
                                                        {{-- <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="/blog" class="clearfix">
                                                                <strong>Blog</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li> --}}


                                                    </ul>

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
                                            href="/login">Masuk</a> Atau <a href="/registrasi">Daftar</a></li>
                                    {{-- <li class="log login"><i class="fa fa-lock"></i> <a class="link-lg"
                                            href="/login">Login </a> or <a href="/registrasi">Register</a></li> --}}
                                </ul>
                            </div>
                            <div class="telephone hidden-xs hidden-sm hidden-md">
                                {{-- <ul class="blank">
                                    <li><a href="#"><i class="fa fa-truck"></i>track your order</a></li>
                                    <li><a href="#"><i class="fa fa-phone-square"></i>Hotline (+123)4 567
                                            890</a></li>
                                </ul> --}}
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
                                                            All Categories
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="navbar-header">
                                                <button type="button" id="show-verticalmenu" data-toggle="collapse"
                                                    class="navbar-toggle">
                                                    <i class="fa fa-bars"></i>
                                                    <span> All Categories </span>
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
                                                                    <img src="{{ asset('landingpage/image/catalog/menu/icons/ico10.png') }}"
                                                                        alt="icon">
                                                                    <span>Gifts & Toys</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="60">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Apparel</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Accessories
                                                                                                                for
                                                                                                                Tablet
                                                                                                                PC</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Accessories
                                                                                                                for i
                                                                                                                Pad</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Accessories
                                                                                                                for
                                                                                                                iPhone</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Bags,
                                                                                                                Holiday
                                                                                                                Supplies</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Car
                                                                                                                Alarms
                                                                                                                and
                                                                                                                Security</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Car
                                                                                                                Audio
                                                                                                                &amp;
                                                                                                                Speakers</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Cables
                                                                                                        &amp;
                                                                                                        Connectors</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Cameras
                                                                                                                &amp;
                                                                                                                Photo</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Electronics</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Outdoor
                                                                                                                &amp;
                                                                                                                Traveling</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Camping
                                                                                                        &amp; Hiking</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Earings</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Shaving
                                                                                                                &amp;
                                                                                                                Hair
                                                                                                                Removal</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Salon
                                                                                                                &amp;
                                                                                                                Spa
                                                                                                                Equipment</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Smartphone
                                                                                                        &amp;
                                                                                                        Tablets</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Sports
                                                                                                                &amp;
                                                                                                                Outdoors</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Bath
                                                                                                                &amp;
                                                                                                                Body</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Gadgets
                                                                                                                &amp;
                                                                                                                Auto
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Bags,
                                                                                                        Holiday
                                                                                                        Supplies</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#"
                                                                                                                onclick="window.location = '18_46.html';">Battereries
                                                                                                                &amp;
                                                                                                                Chargers</a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                onclick="window.location = '24_64.html';">Bath
                                                                                                                &amp;
                                                                                                                Body</a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                onclick="window.location = '18_45.html';">Headphones,
                                                                                                                Headsets</a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                onclick="window.location = '18_30.html';">Home
                                                                                                                Audio</a>
                                                                                                        </li>
                                                                                                    </ul>
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
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="{{ asset('landingpage/image/catalog/menu/icons/ico1.png') }}"
                                                                        alt="icon">
                                                                    <span>Fashion & Accessories</span>

                                                                </a>
                                                            </li>
                                                            <li class="item-vertical  style1 with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <span class="label"></span>
                                                                    <img src="{{ asset('landingpage/image/catalog/menu/icons/ico9.png') }}"
                                                                        alt="icon">
                                                                    <span>Electronic</span>

                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="40">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="#"
                                                                                                        class="main-menu">Smartphone</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Esdipiscing</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Scanners</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Apple</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Dell</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Scanners</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li><a href="#"
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
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row banner">
                                                                                    <a href="#">
                                                                                        <img src="{{ asset('landingpage/image/catalog/menu/megabanner/vbanner1.jpg') }}"
                                                                                            alt="banner1">
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
                                                                    <img src="{{ asset('landingpage/image/catalog/menu/icons/ico7.png') }}"
                                                                        alt="icon">
                                                                    <span>Health &amp; Beauty</span>
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
                                                                                                        class="main-menu">Car
                                                                                                        Alarms and
                                                                                                        Security</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Car
                                                                                                                Audio
                                                                                                                &amp;
                                                                                                                Speakers</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Gadgets
                                                                                                                &amp;
                                                                                                                Auto
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Gadgets
                                                                                                                &amp;
                                                                                                                Auto
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Headphones,
                                                                                                                Headsets</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
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
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Electronics</a>
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
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Sports
                                                                                                        &amp;
                                                                                                        Outdoors</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Flashlights
                                                                                                                &amp;
                                                                                                                Lamps</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Fragrances</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Fishing</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">FPV
                                                                                                                System
                                                                                                                &amp;
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">More
                                                                                                        Car
                                                                                                        Accessories</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Lighter
                                                                                                                &amp;
                                                                                                                Cigar
                                                                                                                Supplies</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Mp3
                                                                                                                Players
                                                                                                                &amp;
                                                                                                                Accessories</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Men
                                                                                                                Watches</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Mobile
                                                                                                                Accessories</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Gadgets
                                                                                                        &amp; Auto
                                                                                                        Parts</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Gift
                                                                                                                &amp;
                                                                                                                Lifestyle
                                                                                                                Gadgets</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Gift
                                                                                                                for
                                                                                                                Man</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Gift
                                                                                                                for
                                                                                                                Woman</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Gift
                                                                                                                for
                                                                                                                Woman</a>
                                                                                                        </li>
                                                                                                    </ul>
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
                                                            <li class="item-vertical css-menu with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">

                                                                    {{-- <img src="landingpage/image/catalog/menu/icons/ico6.png"
                                                                        alt="icon"> --}}
                                                                    <span></span>
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
                                                                                                        class="main-menu">Headphones,
                                                                                                        Headsets</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Home
                                                                                                        Audio</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Health
                                                                                                        &amp; Beauty</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Helicopters
                                                                                                        &amp; Parts</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Helicopters
                                                                                                        &amp; Parts</a>
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
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="{{ asset('landingpage/image/catalog/menu/icons/ico5.png') }}"
                                                                        alt="icon">
                                                                    <span>Health & Beauty</span>

                                                                </a>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="{{ asset('landingpage/image/catalog/menu/icons/ico4.png') }}"
                                                                        alt="icon">
                                                                    <span>Bathroom</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="{{ asset('landingpage/image/catalog/menu/icons/ico3.png') }}"
                                                                        alt="icon">
                                                                    <span>Metallurgy</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="{{ asset('landingpage/image/catalog/menu/icons/ico2.png') }}"
                                                                        alt="icon">
                                                                    <span>Bedroom</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>

                                                                <a href="#" class="clearfix">
                                                                    <img src="{{ asset('landingpage/image/catalog/menu/icons/ico1.png') }}"
                                                                        alt="icon">
                                                                    <span>Health &amp; Beauty</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" style="display: none;">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="{{asset('landingpage/image/catalog/menu/icons/ico11.png')}}"
                                                                        alt="icon">
                                                                    <span>Toys &amp; Hobbies </span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" style="display: none;">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="{{asset('landingpage/image/catalog/menu/icons/ico12.png')}}"
                                                                        alt="icon">
                                                                    <span>Jewelry &amp; Watches</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" style="display: none;">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="{{asset('landingpage/image/catalog/menu/icons/ico9.png')}}"
                                                                        alt="icon">
                                                                    <span>Home &amp; Lights</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" style="display: none;">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="{{asset('landingpage/image/catalog/menu/icons/ico6.png')}}"
                                                                        alt="icon">
                                                                    <span>Metallurgy</span>
                                                                </a>
                                                            </li>

                                                            <li class="loadmore">
                                                                <i class="fa fa-plus-square-o"></i>
                                                                <span class="more-view">More Categories</span>
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
                                    <form method="GET"
                                        action="https://demo.smartaddons.com/templates/html/emarket/index.html">
                                        <div id="search0" class="search input-group form-group">
                                            <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                                <select class="no-border" name="category_id">
                                                    <option value="0">All Categories</option>
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
                                            </div>

                                            <input class="autosearch-input form-control" type="text"
                                                value="" size="50" autocomplete="off"
                                                placeholder="Keyword here..." name="search">
                                            <span class="input-group-btn">
                                                <button type="submit" class="button-search btn btn-primary"
                                                    name="submit_search"><i class="fa fa-search"></i></button>
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
                            <div class="shopping_cart">
                                <div id="cart" class="btn-shopping-cart">

                                    <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle"
                                        data-toggle="dropdown" aria-expanded="true">
                                        <div class="shopcart">
                                            <span class="icon-c">
                                                <i class="fa fa-shopping-bag"></i>
                                            </span>
                                            <div class="shopcart-inner">
                                                <p class="text-shopping-cart">

                                                    My cart
                                                </p>

                                                <span class="total-shopping-cart cart-total-full">
                                                    <span class="items_cart">0</span><span class="items_cart2">
                                                        item(s)</span><span class="items_carts"> - $0.00 </span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>

                                    <ul class="dropdown-menu pull-right shoppingcart-box">
                                        <li>
                                            <p class="text-center empty">Your shopping cart is empty!</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!--//cart-->

                            <ul class="wishlist-comp hidden-md hidden-sm hidden-xs">
                                <li class="compare hidden-xs"><a href="#" class="top-link-compare"
                                        title="Compare "><i class="fa fa-refresh"></i></a>
                                </li>
                                <li class="wishlist hidden-xs"><a href="#" id="wishlist-total"
                                        class="top-link-wishlist" title="Wish List (0) "><i
                                            class="fa fa-heart"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </header>
        <!-- //Header Container  -->

        <!-- Main Container  -->
        <div class="main-container container">
            <ul class="breadcrumb">
                {{-- <li><a href="/"><i class="fa fa-sign-in"></i></a></li> --}}
                {{-- <li><a href="#">Smartphone & Tablets</a></li> --}}
                {{-- <li><a href="#">{{ $produk->nama_produk }}</a></li> --}}

            </ul>

            <div class="row">

                <!--Left Part Start -->
                {{-- <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
                <div class="module category-style">
                    <h3 class="modtitle">Categories</h3>
                    <div class="modcontent">
                        <div class="box-category">
                            <ul id="cat_accordion" class="list-group">
                                <li class="hadchild"><a href="category.html" class="cutom-parent">Smartphone & Tablets</a>   <span class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: block;">
                                        <li><a href="category.html">Men's Watches</a></li>
                                        <li><a href="category.html">Women's Watches</a></li>
                                        <li><a href="category.html">Kids' Watches</a></li>
                                        <li><a href="category.html">Accessories</a></li>
                                    </ul>
                                </li>
                                <li class="hadchild"><a class="cutom-parent" href="category.html">Electronics</a>   <span class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: none;">
                                        <li><a href="category.html">Cycling</a></li>
                                        <li><a href="category.html">Running</a></li>
                                        <li><a href="category.html">Swimming</a></li>
                                        <li><a href="category.html">Football</a></li>
                                        <li><a href="category.html">Golf</a></li>
                                        <li><a href="category.html">Windsurfing</a></li>
                                    </ul>
                                </li>
                                <li class="hadchild"><a href="category.html" class="cutom-parent">Shoes</a>   <span class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: none;">
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                    </ul>
                                </li>
                                <li class="hadchild"><a href="category.html" class="cutom-parent">Watches</a>  <span class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: none;">
                                        <li><a href="category.html">Men's Watches</a></li>
                                        <li><a href="category.html">Women's Watches</a></li>
                                        <li><a href="category.html">Kids' Watches</a></li>
                                        <li><a href="category.html">Accessories</a></li>
                                    </ul>
                                </li>
                                <li class="hadchild"><a href="category.html" class="cutom-parent">Jewellery</a>    <span class="button-view  fa fa-plus-square-o"></span>
                                    <ul style="display: none;">
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                        <li><a href="category.html">Sub Categories</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="category.html" class="cutom-parent">Health &amp; Beauty</a>  <span class="dcjq-icon"></span></li>
                                <li class=""><a href="category.html" class="cutom-parent">Kids &amp; Babies</a>    <span class="dcjq-icon"></span></li>
                                <li class=""><a href="category.html" class="cutom-parent">Sports</a>  <span class="dcjq-icon"></span></li>
                                <li class=""><a href="category.html" class="cutom-parent">Home &amp; Garden</a><span class="dcjq-icon"></span></li>
                                <li class=""><a href="category.html" class="cutom-parent">Wines &amp; Spirits</a>  <span class="dcjq-icon"></span></li>
                            </ul>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="module product-simple">
                    <h3 class="modtitle">
                        <span>Latest products</span>
                    </h3>
                    <div class="modcontent">
                        <div class="extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class=" extraslider-inner">
                                <div class="item ">
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Mandouille short ">
                                                    <img src="landingpage/image/catalog/demo/product/80/8.jpg" alt="Mandouille short">
                                                    </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Mandouille short">Mandouille short </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">$55.00 </span>&nbsp;&nbsp;

                                                <span class="price-old">$76.00 </span>&nbsp;

                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Xancetta bresao ">
                                                        <img src="landingpage/image/catalog/demo/product/80/7.jpg" alt="Xancetta bresao">
                                                        </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Xancetta bresao">
                                                            Xancetta bresao 
                                                        </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">$80.00 </span>&nbsp;&nbsp;

                                                <span class="price-old">$89.00 </span>&nbsp;



                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Sausage cowbee ">
                                                            <img src="landingpage/image/catalog/demo/product/80/6.jpg" alt="Sausage cowbee">
                                                            </a>
                                            </div>
                                           
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Sausage cowbee">
                                                            Sausage cowbee 
                                                        </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                           
                                            <div class="content_price price">
                                                <span class="price product-price">
                                                                $66.00 
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
                                                <a href="#" target="_self" title="Chicken swinesha ">
                                                <img src="landingpage/image/catalog/demo/product/80/5.jpg" alt="Chicken swinesha">
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Chicken swinesha">
                                                            Chicken swinesha 
                                                        </a>
                                            </div>
                                             <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">$45.00 </span>&nbsp;&nbsp;

                                                <span class="price-old">$56.00 </span>&nbsp;



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
                          <img src="landingpage/image/catalog/banners/banner-sidebar.jpg" alt="Banner Image"> 
                        </a>
                      </div>
                    </div>
                </div>
            </aside> --}}
                <!--Left Part End -->

                <!--Middle Part Start-->
{{--     
                <div id="content" class="col-md-9 col-sm-8">

                    <div class="product-view row">
                        <div class="left-content-product">
 --}}
                            {{-- <div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
                                <div class="large-image  ">
                                    <img itemprop="image" class="product-image-zoom"
                                        src="{{ asset('fotoproduk/' . $produk->foto_produk) }}" height="400px"
                                        data-zoom-image="landingpage/image/catalog/demo/product/funiture/1.jpg"
                                        title="Chicken swinesha" alt="Chicken swinesha">
                                </div> --}}
                                {{-- <a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i
                                        class="fa fa-youtube-play"></i></a> --}}

                                {{-- <div id="thumb-slider" class="yt-content-slider full_slider owl-drag" data-rtl="yes"
                                    data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6"
                                    data-margin="10" data-items_column0="4" data-items_column1="3"
                                    data-items_column2="4" data-items_column3="1" data-items_column4="1"
                                    data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no"
                                    data-hoverpause="yes">
                                    <a data-index="0" class="img thumbnail "
                                        data-image="landingpage/image/catalog/demo/product/funiture/1.jpg"
                                        title="Chicken swinesha">
                                        <img src="landingpage/image/catalog/demo/product/funiture/1.jpg"
                                            title="Chicken swinesha" alt="Chicken swinesha">
                                    </a>
                                    <a data-index="1" class="img thumbnail "
                                        data-image="landingpage/image/catalog/demo/product/funiture/2.jpg"
                                        title="Chicken swinesha">
                                        <img src="landingpage/image/catalog/demo/product/funiture/2.jpg"
                                            title="Chicken swinesha" alt="Chicken swinesha">
                                    </a>
                                    <a data-index="2" class="img thumbnail "
                                        data-image="landingpage/image/catalog/demo/product/funiture/3.jpg"
                                        title="Chicken swinesha">
                                        <img src="landingpage/image/catalog/demo/product/funiture/3.jpg"
                                            title="Chicken swinesha" alt="Chicken swinesha">
                                    </a>
                                    <a data-index="3" class="img thumbnail "
                                        data-image="landingpage/image/catalog/demo/product/funiture/4.jpg"
                                        title="Chicken swinesha">
                                        <img src="landingpage/image/catalog/demo/product/funiture/4.jpg"
                                            title="Chicken swinesha" alt="Chicken swinesha">
                                    </a>
                                    <a data-index="4" class="img thumbnail "
                                        data-image="landingpage/image/catalog/demo/product/funiture/5.jpg"
                                        title="Chicken swinesha">
                                        <img src="landingpage/image/catalog/demo/product/funiture/5.jpg"
                                            title="Chicken swinesha" alt="Chicken swinesha">
                                    </a>
                                </div> --}}

                            </div>

<!-- //Header Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Return</a></li>
    </ul>
    
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
            <h2 class="title">Pengembalian Produk</h2>
            <p>Silakan lengkapi formulir di bawah ini untuk meminta pengembalian produk.</p>

            <form class="form-horizontal">
                <fieldset>
                    <legend>informasi pemesanan</legend>
                    <div class="form-group required">
                        <label for="input-firstname" class="col-sm-2 control-label">Nama depan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-firstname" placeholder="Nama depan" value="" name="firstname">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-lastname" class="col-sm-2 control-label">Nama Belakang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-lastname" placeholder="Nama Belakang" value="" name="lastname">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-telephone" class="col-sm-2 control-label">No.Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-notelepon" placeholder="Notelepon" value="" name="telephone">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="input-date-ordered" class="col-sm-2 control-label">Tanggal pemesanan</label>
                        <div class="col-sm-3">
                            <div class="input-group date">
                                <input type="text" class="form-control" id="input-date-ordered" data-date-format="YYYY-MM-DD" placeholder="Tanggal pemesanan" value="" name="date_ordered"><span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>informasi produk</legend>
                    <div class="form-group required">
                        <label for="input-product" class="col-sm-2 control-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-product" placeholder="Nama Produk" value="" name="product">
                        </div>
                    </div>
                  
                    <div class="form-group required">
                        <label class="col-sm-2 control-label">Alasan untuk kembali</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" value="1" name="return_reason_id"> Mati Saat Tiba</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="3" name="return_reason_id"> kesalahan pemesanan</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="2" name="return_reason_id"> Menerima Barang Salah</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="5" name="return_reason_id"> Lainnya
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label">Produk dibuka</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" value="1" name="opened"> Ya
                            </label>
                            <label class="radio-inline">
                                <input type="radio" checked="checked" value="0" name="opened"> Tidak
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-comment" class="col-sm-2 control-label">Rincian lainnya</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="input-comment" placeholder="Rincian lainnya" rows="10" name="comment"></textarea>
                        </div>
                    </div>
                </fieldset>
                <div class="buttons clearfix">
                    <div class="pull-left"><a class="btn btn-default buttonGray" href="#">Kembali</a>
                    </div>
                    <div class="pull-right">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
            </form>


        </div>

    <!-- Footer Container -->
    @include("landingpage.layout.footer")
    <!-- //end Footer Container -->

    </div>








    <!-- Include Libs & Plugins
 ============================================ -->
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
 ============================================ -->
    <script type="text/javascript" src="landingpage/js/themejs/homepage.js"></script>

    <script type="text/javascript" src="landingpage/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="landingpage/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="landingpage/js/themejs/application.js"></script>
    <!-- 		 -->

</body>

</html>
