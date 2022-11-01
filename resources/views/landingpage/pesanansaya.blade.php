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

                    {{-- <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                                    onclick="tes2()">Belum Bayar</a>
                                            </li>
                                            <li class="nav-item col-sm-2"><a data-toggle="tab" class="nav-link"
                                                    onclick="tes3()">Dikemas</a>
                                            </li>
                                            <li class="nav-item col-sm-2"><a data-toggle="tab" class="nav-link"
                                                    onclick="tes4()">Dikirim</a>
                                            </li>
                                            <li class="nav-item col-sm-2"><a data-toggle="tab" class="nav-link"
                                                    onclick="tes5()">Selesai</a>
                                            </li>
                                            <li class="nav-item col-sm-2"><a data-toggle="tab" class="nav-link"
                                                    onclick="tes6()">Dibatalkan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-12 container mb-3 mt-3">
                        <nav class="nav nav-pills flex-column flex-sm-row">
                            <a id="btn-semua" onclick="tes1()" class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#">Semua</a>
                            <a id="btn-belumbayar" onclick="tes2()" class="flex-sm-fill text-sm-center nav-link" aria-current="page" href="#">Belum bayar</a>
                            <a id="btn-dikemas" onclick="tes3()" class="flex-sm-fill text-sm-center nav-link" href="#">Dikemas</a>
                            <a id="btn-dikirim" onclick="tes4()" class="flex-sm-fill text-sm-center nav-link" href="#">Dikirim</a>
                            <a id="btn-selesai" onclick="tes5()" class="flex-sm-fill text-sm-center nav-link" href="#" tabindex="-1">Selesai</a>
                            <a id="btn-dibatalkan" onclick="tes6()" class="flex-sm-fill text-sm-center nav-link" href="#" tabindex="-1">Dibatalkan</a>
                        </nav>
                    </div>

                    <table class="table table-hover" id="semua" >
                        <tbody>
                            <tr>
                                <td class="text-left" style="width: 1100px;">
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
                                                    <span class="text-danger text-light"> Belum Bayar</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div style="float: left">
                                                <img src="fotoproduk/kulot.jpg" alt="Pastrami bacon" height="100px"
                                                    width="100px">
                                            </div>
                                            <div style="float: right">
                                                <b>Rp.50.000,00</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Kulot</h3>
                                                M, Coklat <br />
                                                1x
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row pesananrow">
                                                <div class="col-4 text-bottom">
                                                    <span>Toko memberi ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span
                                                            class="font-size-lg">Rp.50.000,00</span></div>
                                                    <div class="mt-5">
                                                        <button class="btn btn-danger"><a href="/checkout">Bayar Sekarang</a></button>
                                                        <button class="btn btn-secondary">Hubungi penjual</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="width: 1100px;">
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
                                                    <span class="text-danger text-light"> Selesai</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 my-3">
                                                    <div style="float: left">
                                                        <img src="fotoproduk/oneset.jfif" alt="Pastrami bacon"
                                                            height="100px" width="100px">
                                                    </div>
                                                    <div style="float: right">
                                                        <b>Rp.150.000,00</b>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h3>Oneset</h3>
                                                        L, Biru <br />
                                                        1x
                                                    </div>
                                                </div>
                                                <div class="col-12 my-3">
                                                    <div style="float: left">
                                                        <img src="fotoproduk/sweater.jpg" alt="Pastrami bacon"
                                                            height="100px" width="100px">
                                                    </div>
                                                    <div style="float: right">
                                                        <b>Rp.70.000,00</b>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h3>Sweeter Oversize</h3>
                                                        Hitam <br />
                                                        1x
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom" style="text-align:end;">
                                                    <span>Toko memberi ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span
                                                            class="font-size-lg">Rp.220.000,00</span></div>
                                                    <div class="mt-5">
                                                        <a href="/detailproduk"><button class="btn btn-danger">Beli Lagi</button></a>
                                                        <a href="/informasiorder"><button class="btn btn-secondary">Informasi Order</button></a>
                                                        <button class="btn btn-secondary">Hubungi penjual</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="width: 1100px;">
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
                                                    <span class="text-danger text-light"> Dikemas</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div style="float: left">
                                                <img src="fotoproduk/case.jfif" alt="Pastrami bacon" height="100px"
                                                    width="100px">
                                            </div>
                                            <div style="float: right">
                                                <b>Rp.45.000,00</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Soft Case</h3>
                                                Coklat <br />
                                                1x
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom">
                                                    <span>Toko memberi ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span
                                                            class="font-size-lg">Rp.45.000,00</span>
                                                    </div>
                                                    <div class="mt-5">
                                                        <button class="btn btn-secondary">Hubungi penjual</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="width: 1100px;">
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
                                                    <span class="text-danger text-light"> Dikirim</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div style="float: left">
                                                <img src="fotoproduk/slingbag.webp" alt="Pastrami bacon" height="100px"
                                                    width="100px">
                                            </div>
                                            <div style="float: right">
                                                <b>Rp.45.000.000,00</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Slingbag pria</h3>
                                                Hitam <br />
                                                1x
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom">
                                                    <span>Toko memberi ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span
                                                            class="font-size-lg">Rp.45.000,00</span></div>
                                                    <div class="mt-5">
                                                        <button class="btn btn-secondary">Pesanan Diterima</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" style="width: 1100px;">
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
                                                    <span class="text-danger text-light"> Dibatalkan</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div style="float: left">
                                                <img src="fotoproduk/jamtangan.jfif" alt="Pastrami bacon" height="100px"
                                                    width="100px">
                                            </div>
                                            <div style="float: right">
                                                <b>Rp.250.000,00</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Jam Tanggan Pria</h3>
                                                 Coklat <br />
                                                1x
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom">
                                                    <span>Toko memberi ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span
                                                            class="font-size-lg">Rp.250.000,00</span></div>
                                                    <div class="mt-5">
                                                        <a href="/detailproduk"><button class="btn btn-danger">Beli Lagi</button></a>
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
                                <td class="text-left" style="width: 1100px;">
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
                                                    <span class="text-danger text-light"> Belum Dibayar</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div style="float: left">
                                                <img src="fotoproduk/kulot.jpg" alt="Pastrami bacon" height="100px"
                                                    width="100px">
                                            </div>
                                            <div style="float: right">
                                                <b>Rp.50.000,00</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Kulot</h3>
                                                M, Coklat <br />
                                                1x
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom">
                                                    <span>Toko memberi ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span
                                                            class="font-size-lg">Rp.50.000,00</span></div>
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
                                <td class="text-left" style="width: 1100px;">
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
                                                    <span class="text-danger text-light"> Dikemas</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div style="float: left">
                                                <img src="fotoproduk/case.jfif" alt="Pastrami bacon" height="100px"
                                                    width="100px">
                                            </div>
                                            <div style="float: right">
                                                <b>Rp.45.000,00</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Soft Case</h3>
                                                Coklat <br />
                                                1x
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom">
                                                    <span>Toko memberi ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span
                                                            class="font-size-lg">Rp.45.000,00</span></div>
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
                        <tbody>
                            <tr>
                                <td class="text-left" style="width: 1100px;">
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
                                                <div class="statusdikirimwrapper">
                                                    <span class="statusdikirim"> 15-10-2022 07:26 Paket sedang di bawa kurir menuju ke lokasimu.</span>
                                                    <span class="text-danger text-light statusdikirim"> <a href="/tampilan"> Dikirim</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div style="float: left">
                                                <img src="fotoproduk/slingbag.webp" alt="Pastrami bacon" height="100px"
                                                    width="100px">
                                            </div>
                                            <div style="float: right">
                                                <b>Rp.45.000.000,00</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Slingbag pria</h3>
                                                 Hitam <br />
                                                1x
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom">
                                                    <span>Toko memberi ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span
                                                            class="font-size-lg">Rp.45.000,00</span></div>
                                                    <div class="mt-5">
                                                        <button class="btn btn-secondary">Pesanan Diterima</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover" id="selesai" style="display: none;">
                        <tbody>
                            <tr>
                                <td class="text-left" style="width: 1100px;">
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
                                                    <span class="text-danger text-light"> Selesai</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 my-3">
                                                    <div style="float: left">
                                                        <img src="fotoproduk/oneset.jfif" alt="Pastrami bacon"
                                                            height="100px" width="100px">
                                                    </div>
                                                    <div style="float: right">
                                                        <b>Rp.150.000,00</b>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h3>Oneset</h3>
                                                        L, Biru <br />
                                                        1x
                                                    </div>
                                                </div>
                                                <div class="col-12 my-3">
                                                    <div style="float: left">
                                                        <img src="fotoproduk/sweater.jpg" alt="Pastrami bacon"
                                                            height="100px" width="100px">
                                                    </div>
                                                    <div style="float: right">
                                                        <b>Rp.70.000,00</b>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h3>Sweeter Oversize</h3>
                                                        Hitam <br />
                                                        1x
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom" style="text-align:end;">
                                                    <span>Toko memberi ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span
                                                            class="font-size-lg">Rp.220.000,00</span></div>
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
                        <tbody>
                            <tr>
                                <td class="text-left" style="width: 1100px;">
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
                                                    <span class="text-danger text-light"> Dibatalkan</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div style="float: left">
                                                <img src="fotoproduk/jamtangan.jfif" alt="Pastrami bacon" height="100px"
                                                    width="100px">
                                            </div>
                                            <div style="float: right">
                                                <b>Rp.250.000,00</b>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3>Jam Tanggan Pria</h3>
                                                 Coklat <br />
                                                1x
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-4 text-bottom">
                                                    <span>Toko memberi ulasan</span>
                                                </div>
                                                <div class="col-8" style="text-align: right; margin-bottom: 3px;">
                                                    <div class="div">Total Pesanan: <span
                                                            class="font-size-lg">Rp.250.000,00</span></div>
                                                    <div class="mt-5">
                                                        <a href="/detailproduk"><button class="btn btn-danger">Beli Lagi</button></a>
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
        var btnsemua = document.getElementById('btn-semua');
        var btnbelumbayar = document.getElementById('btn-belumbayar');
        var btndikemas = document.getElementById('btn-dikemas');
        var btndikirim = document.getElementById('btn-dikirim');
        var btnselesai = document.getElementById('btn-selesai');
        var btndibatalkan = document.getElementById('btn-dibatalkan');

        function tes1() {
            btnsemua.classList.add('active');
            btnbelumbayar.classList.remove('active');
            btndikemas.classList.remove('active');
            btndikirim.classList.remove('active');
            btnselesai.classList.remove('active');
            btndibatalkan.classList.remove('active');
            semua.style.display = 'block';
            belumBayar.style.display = 'none';
            dikemas.style.display = 'none';
            dikirim.style.display = 'none';
            selesai.style.display = 'none';
            dibatalkan.style.display = 'none';
        }

        function tes2() {
            btnsemua.classList.remove('active');
            btnbelumbayar.classList.add('active');
            btndikemas.classList.remove('active');
            btndikirim.classList.remove('active');
            btnselesai.classList.remove('active');
            btndibatalkan.classList.remove('active');
            semua.style.display = 'none';
            belumBayar.style.display = 'block';
            dikemas.style.display = 'none';
            dikirim.style.display = 'none';
            selesai.style.display = 'none';
            dibatalkan.style.display = 'none';
        }

        function tes3() {
            btnsemua.classList.remove('active');
            btnbelumbayar.classList.remove('active');
            btndikemas.classList.add('active');
            btndikirim.classList.remove('active');
            btnselesai.classList.remove('active');
            btndibatalkan.classList.remove('active');
            semua.style.display = 'none';
            belumBayar.style.display = 'none';
            dikemas.style.display = 'block';
            dikirim.style.display = 'none';
            selesai.style.display = 'none';
            dibatalkan.style.display = 'none';
        }

        function tes4() {
            btnsemua.classList.remove('active');
            btnbelumbayar.classList.remove('active');
            btndikemas.classList.remove('active');
            btndikirim.classList.add('active');
            btnselesai.classList.remove('active');
            btndibatalkan.classList.remove('active');
            semua.style.display = 'none';
            belumBayar.style.display = 'none';
            dikemas.style.display = 'none';
            dikirim.style.display = 'block';
            selesai.style.display = 'none';
            dibatalkan.style.display = 'none';
        }

        function tes5() {
            btnsemua.classList.remove('active');
            btnbelumbayar.classList.remove('active');
            btndikemas.classList.remove('active');
            btndikirim.classList.remove('active');
            btnselesai.classList.add('active');
            btndibatalkan.classList.remove('active');
            semua.style.display = 'none';
            belumBayar.style.display = 'none';
            dikemas.style.display = 'none';
            dikirim.style.display = 'none';
            selesai.style.display = 'block';
            dibatalkan.style.display = 'none';
        }

        function tes6() {
            btnsemua.classList.remove('active');
            btnbelumbayar.classList.remove('active');
            btndikemas.classList.remove('active');
            btndikirim.classList.remove('active');
            btnselesai.classList.remove('active');
            btndibatalkan.classList.add('active');
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
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
</body>

</html>
