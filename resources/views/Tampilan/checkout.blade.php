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
                <li><a href="/halutama"><i class="fa fa-home"></i></a></li>
                <li><a href="/checkout">Checkout</a></li>

            </ul>

            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h2 class="title">Checkout</h2>
                    <div class="so-onepagecheckout row">
                        <div class="col-left col-sm-3">
                            <div class="panel panel-default">
                                {{-- <div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-sign-in"></i> Create an Account or Login</h4>
					</div> --}}
                                {{-- <div class="panel-body">
							<div class="radio">
							  <label>
								<input type="radio" value="register" name="account">
								Register Account</label>
							</div>
							<div class="radio">
							  <label>
								<input type="radio" checked="checked" value="guest" name="account">
								Guest Checkout</label>
							</div>
							<div class="radio">
							  <label>
								<input type="radio" value="returning" name="account">
								Returning Customer</label>
							</div>
					  </div> --}}
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-user"></i> Kontak</h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="account">
                                        <div class="form-group required">
                                            <label for="input-payment-firstname" class="control-label">Nama
                                                Lengkap</label>
                                            <input type="text" class="form-control" id="input-payment-firstname"
                                                placeholder="Nama Lengkap" value="" name="firstname">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-telephone" class="control-label">NO
                                                Handphone</label>
                                            <input type="text" class="form-control" id="input-payment-telephone"
                                                placeholder="08******" value="" name="telephone">
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-book"></i> Alamat </h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="address" class="required">
                                        <div class="form-group">
                                            <label for="input-payment-company" class="control-label">Provinsi</label>
                                            <input type="text" class="form-control" id="input-payment-company"
                                                placeholder="Provinsi" value="" name="company">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-address-1" class="control-label">Kota</label>
                                            <input type="text" class="form-control" id="input-payment-address-1"
                                                placeholder="Kota" value="" name="address_1">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-payment-address-2" class="control-label">Kecamatan</label>
                                            <input type="text" class="form-control" id="input-payment-address-2"
                                                placeholder="Kecamatan" value="" name="address_2">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-city" class="control-label">Kode Pos</label>
                                            <input type="text" class="form-control" id="input-payment-city"
                                                placeholder="Kode Pos" value="" name="city">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-postcode" class="control-label">Nama Jalan,
                                                Gedung, No. Rumah</label>
                                            <input type="text" class="form-control" id="input-payment-postcode"
                                                placeholder="Nama Jalan, Gedung, No. Rumah" value=""
                                                name="postcode">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-postcode" class="control-label">Detail Lainya
                                                (Cth:Blok/Unit No., Patokan)</label>
                                            <input type="text" class="form-control" id="input-payment-postcode"
                                                placeholder="Detail Lainya (Cth:Blok/Unit No., Patokan)"
                                                value="" name="postcode">
                                        </div>
                                        <H4>Pengaturan</H4>
                                        <div class="form-group required">
                                            <label for="input-payment-postcode" class="control-label">Tandai
                                                Sebagai</label>
                                            <div class="wrapper">
                                                <input type="radio" class="siu" name="select" id="one">
                                                <input type="radio" class="siu" name="select" id="two">
                                                <label for="one" class="option option-1">
                                                    <span>Rumah</span>
                                                </label>
                                                <label for="two" class="option option-2">
                                                    <span>Kantor</span>
                                                </label>

                                            </div>

                                        </div>

                                        {{-- <div class="checkbox">
								<label>
								  <input type="checkbox" checked="checked" value="1" name="shipping_address">
								  My delivery and billing addresses are the same.</label>
							  </div> --}}
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="col-right col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-default no-padding">
                                        <div class="col-sm-6 checkout-shipping-methods">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-truck"></i> Pengiriman</h4>
                                            </div>
                                            <div class="panel-body ">
                                                <p>Silahkan Pilih Pengiriman :</p>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" checked="checked" name="Free Shipping">
                                                        JNE</label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Flat Shipping Rate">
                                                        J&T</label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Flat Shipping Rate">
                                                        Sicepat</label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-6  checkout-payment-methods">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-credit-card"></i> Pembayaran
                                                </h4>
                                            </div>
                                            <div class="panel-body">
                                                <p>Silahkan Pilih Pembayaran :</p>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" checked="checked"
                                                            name="Cash On Delivery"> Bri</label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Mandiri">Mandiri</label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Bca">Bca</label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Cod">Cod</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>



                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-ticket"></i> Apakah Anda Mempunyai
                                                Voucher?</h4>
                                        </div>
                                        <div class="panel-body row">
                                            <div class="col-sm-6 ">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="input-coupon"
                                                        placeholder="Silahkan Pilih Voucher Anda" value=""
                                                        name="Voucher">
                                                    <span class="input-group-btn">
                                                        <input type="button" class="btn btn-primary"
                                                            data-loading-text="Loading..." id="button-coupon"
                                                            value="Gunakan Voucher">
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="input-voucher"
                                                        placeholder="Masukkan kode Voucher " value=""
                                                        name="voucher">
                                                    <span class="input-group-btn">
                                                        <input type="submit" class="btn btn-primary"
                                                            data-loading-text="Loading..." id="button-voucher"
                                                            value="Gunakan Kode voucher Anda">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Keranjang
                                                belanja</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <td class="text-center">Foto</td>
                                                            <td class="text-left">Nama Produk</td>
                                                            <td class="text-left">Jumlah</td>
                                                            <td class="text-right">Harga</td>
                                                            <td class="text-right">Total</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center"><a href="product.html"><img
                                                                        width="60px"
                                                                        src="{{ asset('landingpage/image/catalog/demo/product/funiture/10.jpg') }}"
                                                                        alt="Xitefun Causal Wear Fancy Shoes"
                                                                        title="Xitefun Causal Wear Fancy Shoes"
                                                                        class="img-thumbnail"></a></td>
                                                            <td class="text-left"><a href="product.html">Handuk</a>
                                                            </td>
                                                            <td class="text-left">
                                                                <div class="input-group btn-block"
                                                                    style="min-width: 100px;">
                                                                    <input type="number" min="1"
                                                                        name="quantity" value="1" size="1"
                                                                        class="form-control">
                                                                    <span class="input-group-btn">
                                                                        <button type="submit" data-toggle="tooltip"
                                                                            title="Update" class="btn btn-primary"><i
                                                                                class="fa fa-refresh"></i></button>
                                                                        <button type="button" data-toggle="tooltip"
                                                                            title="Remove" class="btn btn-danger"
                                                                            onClick=""><i
                                                                                class="fa fa-times-circle"></i></button>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">Rp. 50000</td>
                                                            <td class="text-right">Rp. 50000</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-right" colspan="4"><strong>Sub-Total
                                                                    Produk:</strong></td>
                                                            <td class="text-right">Rp. 50000</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right" colspan="4"><strong>Sub-Total
                                                                    Pengiriman:</strong></td>
                                                            <td class="text-right">Rp. 20000</td>
                                                        </tr>
                                                        {{-- <tr>
									<td class="text-right" colspan="4"><strong>Eco Tax (-2.00):</strong></td>
									<td class="text-right">$3.75.00</td>
								  </tr> --}}
                                                        <tr>
                                                            <td class="text-right" colspan="4"><strong>Biaya
                                                                    Admin:</strong></td>
                                                            <td class="text-right">Rp. 2500</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right" colspan="4"><strong>Total
                                                                    Pembayaran:</strong></td>
                                                            <td class="text-right">Rp. 72500</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-pencil"></i> Pesan </h4>
                                        </div>
                                        <div class="panel-body">
                                            <textarea rows="4" class="form-control" id="confirm_comment" name="comments"
                                                placeholder="Silahkan tinggalkan pesan"></textarea>
                                            <br>
                                            <label class="control-label" for="confirm_agree">
                                                {{-- <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
							  <span>Saya telah membaca dan menyetujui <a class="agree" href="#"><b>Istilah &amp; Kondisi</b></a></span> </label> --}}
                                                <div class="buttons">
                                                    <div class="pull-right"><a href="/historiorder"
                                                            class="btn btn-primary">Konfirmasi Pesanan</a></div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Middle Part End -->

        </div>
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
    <script type="text/javascript" src="{{ asset('landingpage/js/jquery-2.2.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landingpage/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landingpage/js/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landingpage/js/themejs/libs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landingpage/js/unveil/jquery.unveil.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landingpage/js/countdown/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landingpage/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('landingpage/js/datetimepicker/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landingpage/js/datetimepicker/bootstrap-datetimepicker.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('landingpage/js/jquery-ui/jquery-ui.min.js') }}"></script>


    <!-- Theme files
 ============================================ -->


    <script type="text/javascript" src="{{ asset('landingpage/js/themejs/so_megamenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landingpage/js/themejs/addtocart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landingpage/js/themejs/application.js') }}"></script>
    <style>
        .wrapper {
            display: inline-flex;
            height: 100px;
            width: 250px;
            align-items: center;
        }

        .wrapper .option {
            background: #fff;
            height: 25%;
            width: 25%;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            border-radius: 5px;
            padding: 0 5px;
            border: 1px transparent #180f2f;
            transition: all 0.5s ease;
            margin: 0 10px;
        }

        .siu {
            display: none;
        }

        input#one:checked~.option-1,
        input#two:checked~.option-2 {
            background: #180f2f;
            border-color: #180f2f;
        }

        input#one:checked~.option-1 span,
        input#two:checked~.option-2 span {
            color: #fff;
        }

        .wrapper .option span {
            font-size: 15px;
        }
    </style>
</body>

</html>
