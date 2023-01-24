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
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Keranjang belanja</a></li>
            </ul>

            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h2 class="title">Keranjang Belanja</h2>
                    <div class="table-responsive form-group">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td class="text-center"><input type="checkbox"></td>
                                    <td class="text-center">Foto</td>
                                    <td class="text-left">Nama Produk</td>
                                    <td class="text-left">Variasi</td>
                                    <td class="text-left">Ukuran</td>
                                    <td class="text-left">Kuantitas</td>
                                    <td class="text-right">Harga Satuan</td>
                                    <td class="text-right">Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><input type="checkbox"></td>
                                    <td class="text-center"><a href="product.html"><img width="70px"
                                                src="../landingpage/image/catalog/demo/product/funiture/10.jpg"
                                                alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop"
                                                class="img-thumbnail" /></a></td>
                                    <td class="text-left"><a href="product.html">Handuk</a><br />
                                    </td>
                                    <td class="text-left">Hijau</td>
                                    <td class="text-left">20cm</td>
                                    <td class="text-left" width="200px">
                                        <div class="input-group btn-block quantity">
                                            <input type="number" name="quantity" min="1" value="1"
                                                size="1" class="form-control" />
                                            <span class="input-group-btn">
                                                <button type="submit" data-toggle="tooltip" title="Update"
                                                    class="btn btn-primary"><i class="fa fa-clone"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Remove"
                                                    class="btn btn-danger" onClick=""><i
                                                        class="fa fa-times-circle"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-right">Rp.20.000</td>
                                    <td class="text-right">Rp.20.000</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><input type="checkbox"></td>
                                    <td class="text-center"><a href="product.html"><img width="70px"
                                                src="../landingpage/image/catalog/demo/product/270/produk5.jfif"
                                                alt="Xitefun Causal Wear Fancy Shoes"
                                                title="Xitefun Causal Wear Fancy Shoes" class="img-thumbnail" /></a>
                                    </td>
                                    <td class="text-left"><a href="product.html">Sikat gigi</a></td>
                                    <td class="text-left">Dewasa</td>
                                    <td class="text-left">-</td>
                                    <td class="text-left" width="200px">
                                        <div class="input-group btn-block quantity">
                                            <input type="number" name="quantity" min="1" value="1"
                                                size="1" class="form-control" />
                                            <span class="input-group-btn">
                                                <button type="submit" data-toggle="tooltip" title="Update"
                                                    class="btn btn-primary"><i class="fa fa-clone"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Remove"
                                                    class="btn btn-danger" onClick=""><i
                                                        class="fa fa-times-circle"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-right">Rp.30.000</td>
                                    <td class="text-right">Rp.30.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-8">
                            <table class="table table-bordered">
                                <tbody>
                                    {{-- <tr>
                                        <td class="text-right">
                                            <strong>Sub-Total:</strong>
                                        </td>
                                        <td class="text-right">$168.71</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <strong>Flat Shipping Rate:</strong>
                                        </td>
                                        <td class="text-right">$4.69</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <strong>Eco Tax (-2.00):</strong>
                                        </td>
                                        <td class="text-right">$5.62</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <strong>VAT (20%):</strong>
                                        </td>
                                        <td class="text-right">$34.68</td>
                                    </tr> --}}
                                    <tr>
                                        <td class="text-right" colspan="4"><strong>Sub-Total Produk:</strong></td>
                                        <td class="text-right">Rp. 50000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="4"><strong>Biaya Admin:</strong></td>
                                        <td class="text-right">Rp. 2500</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="4"><strong>Total Pembayaran:</strong></td>
                                        <td class="text-right">Rp. 52500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="pull-left"><a href="/halutama" class="btn btn-primary">Lanjutkan Belanja</a>
                        </div>
                        <div class="pull-right"><a href="/checkout" class="btn btn-primary">Checkout</a></div>
                    </div>
                </div>
                <!--Middle Part End -->
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
