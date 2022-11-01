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

                    <div class="table-responsive bgwhite">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td class="text-left">
                                        <h3 class="notif">Alamat Pengiriman</h3>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td style="width: 35%">
                                        <ul>
                                            <div style="float: right">
                                            </div>
                                            <div>
                                                <b>Zaki Almukhtarom</b><br>
                                                (+62) 81252055995<br>
                                                Jalan Smpn II, RT.2/RW.4, Sebandung, Sukorejo<br>(depan pak kades), KAB.
                                                PASURUAN, SUKOREJO,<br>JAWA TIMUR, ID, 67161
                                            </div>

                                        </ul>
                                    </td>
                                    <td>
                                        <ul style="border-left:1px solid #f2f2f2;padding-left:15px">
                                            <div style="float: right">
                                            </div>
                                            <div class="statuspengiriman">
                                                {{-- <i class="fa-regular fa-circle"></i> 15-10-2022 08:39
                                                Paket telah diterima Zaki Almukhtarom Yang bersangkutan.. Penerima: Zaki
                                                Almukhtarom. Lihat Bukti Pengiriman<br> --}}
                                                <i class="fa-solid fa-circle"></i> 15-10-2022 07:26
                                                Paket sedang di bawa kurir menuju ke lokasimu.<br>
                                                <i class="fa-regular fa-circle"></i> 15-10-2022 06:24
                                                Paket telah sampai di gudang PANDAAN.<br>
                                                <i class="fa-regular fa-circle"></i> 14-10-2022 20:02
                                                Paket telah dikirim dari hub PASURUAN.<br>
                                                <i class="fa-regular fa-circle"></i> 14-10-2022 17:30
                                                Paket telah sampai di gudang PASURUAN.<br>
                                                <i class="fa-regular fa-circle"></i> 14-10-2022 03:42
                                                Paket telah dikirim dari gudang sortir PROBOLINGGO.<br>
                                                <i class="fa-regular fa-circle"></i> 14-10-2022 03:20
                                                Paket telah sampai di gudang sortir PROBOLINGGO.<br>
                                                <i class="fa-regular fa-circle"></i> 13-10-2022 22:53
                                                Paket telah dikirim dari gudang sortir SURABAYA.<br>
                                                <i class="fa-regular fa-circle"></i> 13-10-2022 18:36
                                                Paket telah sampai di gudang sortir SURABAYA.<br>
                                                <i class="fa-regular fa-circle"></i> 13-10-2022 17:58
                                                Paket telah dikirim dari hub SURABAYA.<br>
                                                <i class="fa-regular fa-circle"></i> 13-10-2022 14:01
                                                Paket telah sampai di gudang SURABAYA.<br>
                                                <i class="fa-regular fa-circle"></i> 13-10-2022 12:42
                                                Paket telah dikirim dari hub SURABAYA.<br>
                                                <i class="fa-regular fa-circle"></i> 13-10-2022 10:23
                                                Paket telah diserahkan kepada kurir.<br>
                                                <i class="fa-regular fa-circle"></i> 13-10-2022 09:34
                                                Pengirim telah mengatur pengiriman. Menunggu paket diserahkan ke pihak
                                                jasa kirim.<br>
                                            </div>
                                        </ul>
                                    </td>


                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td class="text-left">
                                        <h3 class="notif">Barokah store</h3>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td style="width: 15%">
                                        <ul>
                                            <div style="float: right">
                                            </div>
                                            <div style="float: left">
                                                <div>
                                                    <img src="http://127.0.0.1:8000/landingpage/image/catalog/demo/product/270/produk5.jfif"
                                                        alt="gambarproduk" width="100px" height="100px">
                                                </div>
                                            </div>
                                        </ul>
                                    </td>
                                    <td colspan="2">

                                        Sikat Gigi merk slibaw<br>
                                        1x<br>
                                        {{-- <div style="float: right">Rp.15.000</div> --}}
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <br>
                                        <br>
                                        <div style="float: right">Rp.50.000</div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-right" colspan="4"><strong>Sub-Total Produk:</strong></td>
                                    <td class="text-right">Rp. 50000</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="4"><strong>Sub-Total Pengiriman:</strong></td>
                                    <td class="text-right">Rp. 20000</td>
                                </tr>

                                <tr>
                                    <td class="text-right" colspan="4"><strong>Biaya Admin:</strong></td>
                                    <td class="text-right">Rp. 2500</td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="4"><strong>Total Pembayaran:</strong></td>
                                    <td class="text-right">Rp. 72500</td>
                                </tr>
                            </tfoot>
                        </table>
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
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
</body>

</html>
