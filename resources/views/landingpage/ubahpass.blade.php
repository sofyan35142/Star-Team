<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    @include('landingpage.layout.head')

</head>

<body class="res layout-subpage layout-1 banners-effect-5 akunuser">
    <div id="wrapper" class="wrapper-fluid">
        <!-- Header Container  -->
        @include('landingpage.layout.header')
        <!-- //Header Container  -->

        <!-- Main Container  -->
        <div class="main-container container">


            <div class="row">
                <!--Left Part Start -->
                @include('sidebaruser')
                <!--Left Part End -->

                <!--Middle Part Start-->
                <div id="content" class="col-md-9 col-sm-8" style="background: #f2f2f2">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ubah Password</h4>
                            </div>
                            <br>
                            <div class="container">
                                <div class="card-body col-12">
                                    <div class="form-validation">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-1 col-form-label" for="val-username">Password Saat Ini</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-Password" name="Password" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-1 col-form-label" for="val-password">Password Yang Baru</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-password" name="password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-1 col-form-label" for="val-email">Konfirmasi Password</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-email" name="email" >
                                                    </div>
                                                </div>

                                            </div>

                                            <button style="width:16%;margin-left:32%;" type="button" class="btn btn-primary btnprof">Ubah Password</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Middle Part End-->
            </div>
        </div>
    </div>
    <!-- //Main Container -->


    <!-- Footer Container -->
    @include('landingpage.layout.footer')
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
    <!---->
    <script>
        function preview() {
            frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
</body>

</html>
