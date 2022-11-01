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
                <div id="content" class="col-md-9 col-sm-8">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            {{-- <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Posts</a>
                                        </li> --}}
                                            <li class="nav-item col-sm-2"><a data-toggle="tab"
                                                class="nav-link active show" onclick="tes1()">Semua</a>
                                            </li>
                                            <li class="nav-item col-sm-2"><a data-toggle="tab"
                                                class="nav-link" onclick="tes2()">Belum Bayar</a>
                                            </li>
                                            <li class="nav-item col-sm-2"><a data-toggle="tab"
                                                class="nav-link" onclick="tes3()">Dikemas</a>
                                            </li>
                                            <li class="nav-item col-sm-2"><a data-toggle="tab"
                                                class="nav-link" onclick="tes4()">Dikirim</a>
                                            </li>
                                            <li class="nav-item col-sm-2"><a data-toggle="tab"
                                                class="nav-link" onclick="tes5()">Selesai</a>
                                            </li>
                                            <li class="nav-item col-sm-2"><a data-toggle="tab"
                                                class="nav-link" onclick="tes6()">Dibatalkan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover" id="semua">
                        <tbody>
                            <tr>
                                <td class="text-left">
                                    <div class="card col-12">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="row pesananrow">
                                                        <div class="col">
                                                            <p>NAMA TOKO</p>
                                                        </div>
                                                        <div class="col-10">
                                                            <a class="btn btn-md btn-primary">Kunjungi toko</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <span class="text-danger text-dark"> Belum Dibayar</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div style="float: left">
                                                <img src="fotoproduk/kulot.jpg" alt="Pastrami bacon" height="100px" width="100px">
                                            </div>
                                            <div style="float: right">
                                                <b>Rp.50.000,00</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Kulot</h3>
                                                M, Coklat <br/>
                                                1x
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row pesananrow">
                                                <div class="col-4 text-bottom">
                                                    <span>Toko membri ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span class="font-size-lg">Rp.50.000,00</span></div>
                                                    <div class="mt-5">
                                                        <button class="btn btn-danger">Bayar Sekarang</button>
                                                        <button class="btn btn-secondary">Hubungi penjual</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">
                                        <div class="card col-12">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="row pesananrow">
                                                            <div class="col">
                                                                <p>NAMA TOKO</p>
                                                            </div>
                                                            <div class="col-10">
                                                                <a class="btn btn-md btn-primary">Kunjungi toko</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <span class="text-danger text-dark"> Selesai</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 my-3">
                                                        <div style="float: left">
                                                            <img src="fotoproduk/oneset.jfif" alt="Pastrami bacon" height="100px" width="100px">
                                                        </div>
                                                        <div style="float: right">
                                                            <b>Rp.150.000,00</b>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h3>Oneset</h3>
                                                            L, Biru <br/>
                                                            1x
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-3">
                                                        <div style="float: left">
                                                            <img src="fotoproduk/sweater.jpg" alt="Pastrami bacon" height="100px" width="100px">
                                                        </div>
                                                        <div style="float: right">
                                                            <b>Rp.70.000,00</b>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h3>Sweeter Oversize</h3>
                                                            Hitam <br/>
                                                            1x
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col-4 text-bottom" style="text-align:end;">
                                                        <span>Toko membri ulasan</span>
                                                    </div>
                                                    <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                        <div class="div">Total Pesanan: <span class="font-size-lg">Rp.220.000,00</span></div>
                                                        <div class="mt-5">
                                                            <button class="btn btn-danger">Beli Lagi</button>
                                                            <button class="btn btn-secondary">Hubungi penjual</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">
                                    <div class="card col-12">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="row pesananrow">
                                                        <div class="col">
                                                            <p>NAMA TOKO</p>
                                                        </div>
                                                        <div class="col-10">
                                                            <a class="btn btn-md btn-primary">Kunjungi toko</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <span class="text-danger text-dark"> Dikemas</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div style="float: left">
                                                <img src="fotoproduk/case.jfif" alt="Pastrami bacon" height="100px" width="100px">
                                            </div>
                                            <div style="float: right">
                                                <b>Rp.45.000,00</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Soft Case</h3>
                                                Coklat <br/>
                                                1x
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom">
                                                    <span>Toko membri ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span class="font-size-lg">Rp.45.000,00</span></div>
                                                    <div class="mt-5">
                                                        <button class="btn btn-secondary">Hubungi penjual</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover" id="belum-bayar" style="display: none;">
                        <tbody>
                            <tr>
                                <td class="text-left">
                                    <div class="card col-12">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p>NAMA TOKO</p>
                                                        </div>
                                                        <div class="col-10">
                                                            <a class="btn btn-md btn-primary">Kunjungi toko</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <span class="text-danger text-dark"> Belum Dibayar</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div style="float: left">
                                                <img src="fotoproduk/kulot.jpg" alt="Pastrami bacon" height="100px" width="100px">
                                            </div>
                                            <div style="float: right">
                                                <b>Rp.50.000,00</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Kulot</h3>
                                                M, Coklat <br/>
                                                1x
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom">
                                                    <span>Toko membri ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span class="font-size-lg">Rp.50.000,00</span></div>
                                                    <div class="mt-5">
                                                        <button class="btn btn-danger">Bayar Sekarang</button>
                                                        <button class="btn btn-secondary">Hubungi penjual</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover" id="dikemas" style="display: none;">
                        <tbody>
                            <tr>
                                <td class="text-left">
                                    <div class="card col-12">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p>NAMA TOKO</p>
                                                        </div>
                                                        <div class="col-10">
                                                            <a class="btn btn-md btn-primary">Kunjungi toko</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <span class="text-danger text-dark"> Dikemas</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div style="float: left">
                                                <img src="fotoproduk/case.jfif" alt="Pastrami bacon" height="100px" width="100px">
                                            </div>
                                            <div style="float: right">
                                                <b>Rp.45.000,00</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Soft Case</h3>
                                                Coklat <br/>
                                                1x
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom">
                                                    <span>Toko membri ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span class="font-size-lg">Rp.45.000,00</span></div>
                                                    <div class="mt-5">
                                                        <button class="btn btn-secondary">Hubungi penjual</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover" id="dikirim" style="display: none;">

                    </table>
                    <table class="table table-hover" id="selesai" style="display: none;">
                        <tbody>
                            <tr>
                                <td class="text-left">
                                    <div class="card col-12">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p>NAMA TOKO</p>
                                                        </div>
                                                        <div class="col-10">
                                                            <a class="btn btn-md btn-primary">Kunjungi toko</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <span class="text-danger text-dark"> Selesai</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 my-3">
                                                    <div style="float: left">
                                                        <img src="fotoproduk/oneset.jfif" alt="Pastrami bacon" height="100px" width="100px">
                                                    </div>
                                                    <div style="float: right">
                                                        <b>Rp.150.000,00</b>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h3>Oneset</h3>
                                                        L, Biru <br/>
                                                        1x
                                                    </div>
                                                </div>
                                                <div class="col-12 my-3">
                                                    <div style="float: left">
                                                        <img src="fotoproduk/sweater.jpg" alt="Pastrami bacon" height="100px" width="100px">
                                                    </div>
                                                    <div style="float: right">
                                                        <b>Rp.70.000,00</b>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h3>Sweeter Oversize</h3>
                                                        Hitam <br/>
                                                        1x
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom" style="text-align:end;">
                                                    <span>Toko membri ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span class="font-size-lg">Rp.220.000,00</span></div>
                                                    <div class="mt-5">
                                                        <button class="btn btn-danger">Beli Lagi</button>
                                                        <button class="btn btn-secondary">Hubungi penjual</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover" id="dibatalkan" style="display: none;">

                    </table>


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
        const semua = document.getElementById('semua');
        const belumBayar = document.getElementById('belum-bayar');
        const dikemas = document.getElementById('dikemas');
        const dikirim = document.getElementById('dikirim');
        const selesai = document.getElementById('selesai');
        const dibatalkan = document.getElementById('dibatalkan');

        function tes1(){
                semua.style.display = 'block';
                belumBayar.style.display = 'none';
                dikemas.style.display = 'none';
                dikirim.style.display = 'none';
                selesai.style.display = 'none';
                dibatalkan.style.display = 'none';
        }
        function tes2(){
                semua.style.display = 'none';
                belumBayar.style.display = 'block';
                dikemas.style.display = 'none';
                dikirim.style.display = 'none';
                selesai.style.display = 'none';
                dibatalkan.style.display = 'none';
        }
        function tes3(){
                semua.style.display = 'none';
                belumBayar.style.display = 'none';
                dikemas.style.display = 'block';
                dikirim.style.display = 'none';
                selesai.style.display = 'none';
                dibatalkan.style.display = 'none';
        }
        function tes4(){
                semua.style.display = 'none';
                belumBayar.style.display = 'none';
                dikemas.style.display = 'none';
                dikirim.style.display = 'block';
                selesai.style.display = 'none';
                dibatalkan.style.display = 'none';
        }
        function tes5(){
                semua.style.display = 'none';
                belumBayar.style.display = 'none';
                dikemas.style.display = 'none';
                dikirim.style.display = 'none';
                selesai.style.display = 'block';
                dibatalkan.style.display = 'none';
        }
        function tes6    (){
                semua.style.display = 'none';
                belumBayar.style.display = 'none';
                dikemas.style.display = 'none';
                dikirim.style.display = 'none';
                selesai.style.display = 'none';
                dibatalkan.style.display = 'block';
        }
    </script>
    <script>
        function preview() {
            frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
</body>

</html>
