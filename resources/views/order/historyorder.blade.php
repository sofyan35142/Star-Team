
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
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Order History</a></li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">Order History</h2>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-center">Foto Produk</td>
								<td class="text-center">Nama Produk</td>
								<td class="text-center">ID Pemesanan</td>
								<td class="text-center">Jumlah Pemesanan</td>
								<td class="text-center">Tanggal Pemesanan</td>
								<td class="text-center">Tanggal Diterima</td>
								<td class="text-center">Total</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">
									<a href="/detailproduk"><img src="landingpage/image/catalog/demo/product/80/4.jpg" width="85" class="img-thumbnail" title="iPhone 13 Pro" alt="Handuk" src="landingpage/image/catalog/demo/product/funiture/4.jpg">
									</a>
								</td>
								<td class="text-left"><a href="product.html">Handuk </a>
								</td>
								<td class="text-center">#1565245</td>
								<td class="text-center">1</td>
								<td class="text-center">20/08/2022</td>
								<td class="text-center">28/08/2022</td>
								<td class="text-center">Rp. 50.000</td>
								<td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="/informasiorder" data-original-title="View"><i class="fa fa-eye"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs" id="column-right">
				<h2 class="subtitle">Account</h2>
<div class="list-group">
	<ul class="list-item">
		<li><a href="#">Akun Saya</a>
		</li>
		<li><a href="#">Alamat</a>
		</li>
		<li><a href="/favorit">Produk Favorit</a>
		</li>
		<li><a href="#">Histori Order</a>
		</li>
		<li><a href="#">Returns</a>
		</li>
		<li><a href="#">Transaksi</a>
	</ul>
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->


	<!-- Footer Container -->
    <footer class="footer-container typefooter-1">
        <!-- Footer Top Container -->
        <section class="footer-top">
            <div class="container ftop">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 ">

                        <div class="module newsletter-footer1">
                            <div class="newsletter" style="width:100%   ; background-color: #fff ; ">

                                <div class="title-block">
                                    <div class="page-heading font-title">
                                        Signup for Newsletter
                                    </div>
                                    <div class="promotext">We’ll never share your email address with a third-party. </div>
                                </div>

                                <div class="block_content">
                                    <form method="post" id="signup" name="signup" class="form-group form-inline signup send-mail">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
                                            </div>
                                            <div class="subcribe">
                                                <button class="btn btn-primary btn-default font-title" type="submit" onclick="return subscribe_newsletter();" name="submit">
                                            Subscribe
                                        </button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                                <!--/.modcontent-->

                            </div>

                        </div>




                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                        <ul class="socials">
                            <li class="facebook"><a class="_blank" href="https://www.facebook.com/MagenTech" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                            <li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                            <li class="google_plus"><a class="_blank" href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa fa-google-plus"></i><span>Google Plus</span></a></li>
                            <li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                        </ul>


                    </div>
                </div>
            </div>
        </section>
        <!-- /Footer Top Container -->

        <div class="footer-middle ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-style">
                        <div class="infos-footer">
                            <a href="#"><img src="landingpage/image/catalog/logo-footer.png" alt="image"></a>
                            <ul class="menu">
                                <li class="adres">
                                    San Luis potosí, centro historico, 78000 san luis potosí, SPL, Mexico
                                </li>
                                <li class="phone">
                                    (+0214)0 315 215 - (+0214)0 315 215
                                </li>
                                <li class="mail">
                                    <a href="mailto:contact@opencartworks.com">contact@opencartworks.com</a>
                                </li>
                                <li class="time">
                                    Open time: 8:00AM - 6:00PM
                                </li>
                            </ul>
                        </div>


                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col-style">
                        <div class="box-information box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Information</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Warranty And Services</a></li>
                                        <li><a href="#">Support 24/7 page</a></li>
                                        <li><a href="#">Product Registration</a></li>
                                        <li><a href="#">Product Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col-style">
                        <div class="box-account box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">My Account</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Gift Certificates</a></li>
                                        <li><a href="#">Affiliates</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Custom Link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col-style">
                        <div class="box-service box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Services</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Site Map</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Custom Link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-style">


                        <div class="module box-footer so-instagram-gallery-ltr">

                            <h4 class="modtitle">Instagram Gallery</h4>


                            <div class="form-group">

                            </div>

                            <div class="modcontent">
                                <div class="so-instagram-gallery button-type2 4" id="instagram17356972741514990310">
                                    <div class="instagram-items-inner instagram00-5 instagram01-4 instagram02-3 instagram03-2 instagram04-1">

                                        <div class="instagram-item 0  first-item ">

                                            <div class="instagram_users">
                                                <div class="img_users">
                                                    <a title="Emarket" data-href="https://www.instagram.com/p/BWcLaN9DQfW/" class="instagram_gallery_image gallery_image_instagram17356972741514990310" href="../../../../scontent.cdninstagram.com/t51.2885-15/s320x320/e35/19985119_1789473437940076_2055170824985378816_nb25f.jpg?taken-by=swhotdeal">
                                                        <img class="image_users" src="../../../../scontent.cdninstagram.com/t51.2885-15/s320x320/e35/19985119_1789473437940076_2055170824985378816_n.jpg" title="Emarket" alt="Emarket">
                                                    </a>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="instagram-item 1 ">

                                            <div class="instagram_users">
                                                <div class="img_users">
                                                    <a title="Emarket" data-href="https://www.instagram.com/p/BWcLY9XDLRu/" class="instagram_gallery_image gallery_image_instagram17356972741514990310" href="../../../../scontent.cdninstagram.com/t51.2885-15/s320x320/e35/19955766_152435575317196_2812535432292597760_nb25f.jpg?taken-by=swhotdeal">
                                                        <img class="image_users" src="../../../../scontent.cdninstagram.com/t51.2885-15/s320x320/e35/19955766_152435575317196_2812535432292597760_n.jpg" title="Emarket" alt="Emarket">
                                                    </a>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="instagram-item 2 ">

                                            <div class="instagram_users">
                                                <div class="img_users">
                                                    <a title="Emarket" data-href="https://www.instagram.com/p/BWcLT-rD17U/" class="instagram_gallery_image gallery_image_instagram17356972741514990310" href="../../../../scontent.cdninstagram.com/t51.2885-15/s320x320/e35/19933192_2345189812372940_1937990403319922688_nb25f.jpg?taken-by=swhotdeal">
                                                        <img class="image_users" src="../../../../scontent.cdninstagram.com/t51.2885-15/s320x320/e35/19933192_2345189812372940_1937990403319922688_n.jpg" title="Emarket" alt="Emarket">
                                                    </a>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="instagram-item 3 ">

                                            <div class="instagram_users">
                                                <div class="img_users">
                                                    <a title="Emarket" data-href="https://www.instagram.com/p/BWcLS_vjGhx/" class="instagram_gallery_image gallery_image_instagram17356972741514990310" href="../../../../scontent.cdninstagram.com/t51.2885-15/s320x320/e35/19984602_1912942795641671_1075249881506906112_nb25f.jpg?taken-by=swhotdeal">
                                                        <img class="image_users" src="../../../../scontent.cdninstagram.com/t51.2885-15/s320x320/e35/19984602_1912942795641671_1075249881506906112_n.jpg" title="Emarket" alt="Emarket">
                                                    </a>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="instagram-item 4 ">

                                            <div class="instagram_users">
                                                <div class="img_users">
                                                    <a title="Emarket" data-href="https://www.instagram.com/p/BWcLSNnDpJp/" class="instagram_gallery_image gallery_image_instagram17356972741514990310" href="../../../../scontent.cdninstagram.com/t51.2885-15/s320x320/e35/19985191_1485570878166875_6297995079118225408_nb25f.jpg?taken-by=swhotdeal">
                                                        <img class="image_users" src="../../../../scontent.cdninstagram.com/t51.2885-15/s320x320/e35/19985191_1485570878166875_6297995079118225408_n.jpg" title="Emarket" alt="Emarket">
                                                    </a>
                                                </div>
                                            </div>


                                        </div>


                                    </div>
                                    <!--/.instagram-items-inner-->

                                </div>
                            </div>
                            <!-- /.modcontent-->


                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-style">
                        <ul class="footer-links font-title">
                            <li><a href="#">Online Shopping</a></li>
                            <li><a href="#">Promotions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Most Populars</a></li>
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Special Products</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Payments</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Refunds</a></li>
                            <li><a href="#">Warantee</a></li>
                            <li><a href="#">Promotions</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Our Stores</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Checkout</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-12 col-xs-12 text-center">
                        <img src="landingpage/image/catalog/demo/payment/payment.png" alt="imgpayment">
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Container -->
        <div class="footer-bottom ">
            <div class="container">
                <div class="copyright">
                    Copyright © Designed & Developed by TeamStar 2022<a href="http://www.opencartworks.com/" target="_blank">OpenCartWorks.Com</a>
                </div>
            </div>
        </div>
        <!-- /Footer Bottom Container -->


            <!--Back To Top-->
        <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
    </footer>
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


	<script type="text/javascript" src="landingpage/js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="landingpage/js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="landingpage/js/themejs/application.js"></script>


</body>
</html>
