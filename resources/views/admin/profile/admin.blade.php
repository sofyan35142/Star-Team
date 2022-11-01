@extends('admin.index.index')

@section('content')

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />


    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="0MjIUPhqNgzfdBvHYUi8hPIKT4bCRfWbRTmBQEkI">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />

    <!-- Include Styles -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('template/demo/assets/vendor/fonts/boxiconse04f.css?id=7bed0c381d8a5b57f43c7bd313947977')}}" />
    <link rel="stylesheet" href="{{asset('template/demo/assets/vendor/fonts/fontawesomeb34a.css?id=f55d5b6721febc124275199b7dddbb5b')}}" />
    <link rel="stylesheet" href="{{asset('template/demo/assets/vendor/fonts/flag-iconsc977.css?id=7018802e2db10780041f73a184e4bebe')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('template/demo/assets/vendor/css/rtl/core29d0.css?id=7ea028d8943e4d11544610602e504b70')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('template/demo/assets/vendor/css/rtl/theme-defaultde12.css?id=3cdafbb15e4b7f9cbb567018a632af10')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('template/demo/assets/css/demo6e6a.css?id=8a804dae81f41c0f9fcbef2fa8316bdd')}}" />


    <link rel="stylesheet" href="{{asset('template/demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbarb440.css?id=d9fa6469688548dca3b7e6bd32cb0dc6')}}" />
    <link rel="stylesheet" href="{{asset('template/demo/assets/vendor/libs/typeahead-js/typeahead3881.css?id=8fc311b79b2aeabf94b343b6337656cf')}}" />

    <!-- Vendor Styles -->
    <link rel="stylesheet" href="{{asset('template/demo/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('template/demo/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('template/demo/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">


    <!-- Page Styles -->
    <link rel="stylesheet" href="{{asset('template/demo/assets/vendor/css/pages/page-profile.css')}}" />

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- laravel style -->
    <script src="{{asset('template/demo/assets/vendor/js/helpers.js')}}"></script>
    <!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{asset('template/demo/assets/vendor/js/template-customizer.js')}}"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{asset('template/demo/assets/js/config.js')}}"></script>

  <script>
    window.templateCustomizer = new TemplateCustomizer({
      cssPath: '',
      themesPath: '',
      defaultShowDropdownOnHover: true, // true/false (for horizontal layout only)
      displayCustomizer: true,
      lang: 'en',
      pathResolver: function(path) {
        var resolvedPaths = {
          // Core stylesheets
                      'core.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=7ea028d8943e4d11544610602e504b70',
            'core-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=4d3d0e2ab14ecbed2083861be9812a6f',

          // Themes
                      'theme-default.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=3cdafbb15e4b7f9cbb567018a632af10',
            'theme-default-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=05dbf7c059f1493714333faa2b3b9551',
                      'theme-bordered.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=d6c71dfec8b2243aaa4ff471ffcb4e24',
            'theme-bordered-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=f6ff29f111b4fa9e7eaf2b1123ef9dfe',
                      'theme-semi-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=ab4aad06ff175954e3058d7dc07cca0d',
            'theme-semi-dark-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=366f5c60c757a1a9970a4c91c66b0cb2',
                  }
        return resolvedPaths[path] || path;
      },
      'controls': ["rtl","style","layoutType","showDropdownOnHover","layoutNavbarFixed","layoutFooterFixed","themes"],
    });
  </script>
  <!-- beautify ignore:end -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
</head>


<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4">
        Profile
    </h4>

    <!-- Header -->
    <div class="row">

        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header-banner">
                    <img src="{{asset('template/demo/assets/img/pages/profile-banner.png')}}" alt="Banner image" class="rounded-top mb-4">
                </div>
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img src="{{asset('template/demo/assets/img/avatars/1.png')}}" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{ Auth::user()->username }}</h4>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <!--/ Header -->

    <!-- Navbar pills -->

    <!--/ Navbar pills -->

    <!-- User Profile Content -->
    <div class="row">
        <div class="card">
            <div class="col-xl-4 col-lg-5 col-md-5">
                <!-- About User -->

                <div class="card-body">
                    <small class="text-muted text-uppercase">About</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-semibold mx-2">Nama Lengkap:</span> <span>{{ Auth::user()->username }}</span></li>
                        <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-semibold mx-2">Email:</span> <span>{{ Auth::user()->email }}</span></li>


                    </ul>
                    <!-- <div class="col-12">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editadmin">Edit</button>
                    </div> -->
                </div>
                <!-- @foreach ($data as $row)
                <div class="modal fade" id="editadmin" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                        <div class="modal-content p-3 p-md-5">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h4 class="card-title">Edit Data</h4>
                                <form action="/editadmin/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama
                                            Lengkap</label>
                                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ $row->username }} ">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ $row->email }} ">
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary">Edit
                                            Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach -->
            </div>
            <!--/ About User -->







            <!-- Include Scripts -->
            <!-- BEGIN: Vendor JS-->
            <script src="{{asset('template/demo/assets/vendor/libs/jquery/jquery40f4.js?id=96645acf88116df9c36bef6153b3a51a')}}"></script>
            <script src="{{asset('template/demo/assets/vendor/libs/popper/popper885d.js?id=c8510634b3d8cded74bbe30a2b593d87')}}"></script>
            <script src="{{asset('template/demo/assets/vendor/js/bootstrap0983.js?id=1f50b74ded465d298b282b4562bdaf8c')}}"></script>
            <script src="{{asset('template/demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar4d5e.js?id=9d86308b7c41e76a7dc8472907865b83')}}"></script>
            <script src="{{asset('template/demo/assets/vendor/libs/hammer/hammerc38e.js?id=2a80ebd1aa77a9e33ec54b68ee8de5e0')}}"></script>
            <script src="{{asset('template/demo/assets/vendor/libs/i18n/i18n5fec.js?id=5dd0894a4cb5357ba8a20df3187b6d9b')}}"></script>
            <script src="{{asset('template/demo/assets/vendor/libs/typeahead-js/typeaheada766.js?id=8c315d7e2e7b09a04d8e8efead923241')}}"></script>
            <script src="{{asset('template/demo/assets/vendor/js/menu7d39.js?id=f45ec38086f86335b91fc2fdcaaadab8')}}"></script>
            <script src="{{asset('template/demo/assets/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
            <script src="{{asset('template/demo/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
            <script src="{{asset('template/demo/assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
            <script src="{{asset('template/demo/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
            <script src="{{asset('template/demo/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js')}}"></script>
            <!-- END: Page Vendor JS-->
            <!-- BEGIN: Theme JS-->
            <script src="{{asset('template/demo/assets/js/mainc3d7.js?id=3c628e87a9befaa350e1f822744b8142')}}"></script>

            <!-- END: Theme JS-->
            <!-- Pricing Modal JS-->
            <!-- END: Pricing Modal JS-->
            <!-- BEGIN: Page JS-->
            <script src="{{asset('template/demo/assets/js/pages-profile.js')}}"></script>
            <!-- END: Page JS-->


            @include("koneksi.js")
            @endsection
