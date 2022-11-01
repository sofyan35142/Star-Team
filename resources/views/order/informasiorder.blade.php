
<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include("landingpage.layout.head")

<body class="res layout-1 layout-subpage">

    <div id="wrapper" class="wrapper-fluid banners-effect-5">


    <!-- Header Container  -->
    @include("landingpage.layout.header")
    <!-- //Header Container  -->

	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb" style="margin-bottom: 16px">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Informasi Order</a></li>
        </ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">Informasi Order</h2>

				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2" class="text-left">Detail Order</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> <b>ID Pemesanan:</b> #214521
								<br>
								<b>Tanggal Pemesanan:</b> 20/06/2022</td>
							<td style="width: 50%;" class="text-left"> <b>Metode Pembayaran:</b> Bayar di Tempat
								<br>
								<b>Metode pengiriman:</b> J&T </td>
						</tr>
					</tbody>
				</table>
				
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td style="width: 50%; vertical-align: top;" class="text-left">Alamat Pemesan</td>
							<td style="width: 50%; vertical-align: top;" class="text-left">Alamat Pengiriman</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">M. Sofyan
								<br>Jl. Taman Safasi, Kec. Sukorejo, Kab. Pasuruan
                                <br>Jawa Timur
								<br>Indonesia</td>
							<td class="text-left">Toko Barokah
								<br>jl. Melati, kec. Genteng Kab. Pasuruan
								<br>Jawa Timur
								<br>Indonesia</td>
						</tr>
					</tbody>
				</table>
                <div class="main-container container">
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
                                  <td class="text-center"><a><img width="60px" src="landingpage/image/catalog/demo/product/funiture/10.jpg" alt="Handuk" title="Handuk" class="img-thumbnail"></a></td>
                                  <td class="text-left"><a href="product.html">Handuk</a></td>
                                  <td class="text-left"><div class="input-group btn-block" style="min-width: 100px;">
                                      <input type="text" name="quantity" value="1" size="1" class="form-control">
                                      <span class="input-group-btn">
                                      <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                                      <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                                      </span></div></td>
                                  <td class="text-right">Rp. 50.000</td>
                                  <td class="text-right">Rp. 50.000</td>
                                </tr>
                              </tbody>
                              <tfoot>
                                <tr>
                                  <td class="text-right" colspan="4"><strong>Sub-Total Produk:</strong></td>
                                  <td class="text-right">Rp. 50.000</td>
                                </tr>
                                <tr>
                                  <td class="text-right" colspan="4"><strong>Sub-Total Pengiriman:</strong></td>
                                  <td class="text-right">Rp. 20.000</td>
                                </tr>
                                <tr>
                                  <td class="text-right" colspan="4"><strong>Biaya Admin</strong>:</strong></td>
                                  <td class="text-right">Rp. 2.500</td>
                                </tr>
                                <tr>
                                  <td class="text-right" colspan="4"><strong>Total Pembayaran:</strong></td>
                                  <td class="text-right">Rp, 72.500</td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                        </div>
                    </div>
                  </div>
                  			<!--Right Part Start -->
            <aside class="col-sm-3 hidden-xs" id="column-right">
				<h2 class="subtitle">Account</h2>
                    <div class="list-group">
                        <ul class="list-item">
                            <li><a href="#">Akun Saya</a>
                            </li>
                            <li><a href="#">Alamat</a>
                            </li>
                            <li><a href="wishlist.html">Produk Favorit</a>
                            </li>
                            <li><a href="#">Histori Order</a>
                            </li>
                            <li><a href="#">Reward Points</a>
                            </li>
                            <li><a href="#">Returns</a>
                            </li>
                            <li><a href="#">Transactions</a>
                            </li>
                            <li><a href="#">Recurring payments</a>
                            </li>
                        </ul>
                    </div>			
                </aside>
			<!--Right Part End -->
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td class="text-left">Tanggal</td>
							<td class="text-left">Status</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">20/06/2016</td>
							<td class="text-left">Dikemas</td>
						</tr>
						<tr>
							<td class="text-left">21/06/2016</td>
							<td class="text-left">Dikirim</td>
						</tr>
						<tr>
							<td class="text-left">24/06/2016</td>
							<td class="text-left">diterima</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!--Middle Part End-->
		</div>
	</div>

	<!-- Footer Container -->
    @include("landingpage.layout.footer")
    <!-- //end Footer Container -->

    </div>


<!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="js/themejs/libs.js"></script>
	<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>


	<!-- Theme files
	============================================ -->


	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="js/themejs/application.js"></script>



</body>
</html>
