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
                <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
                    <div class="module category-style">
                        <div class="akunuserhead">
                            <img class="imgakun" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="gambar user">
                            <h4 class="namakun">Cak Satria</h4>
                        </div>
                        <div class="modcontent">
                            <div class="box-category">
                                <ul id="cat_accordion" class="list-group">
                                    <li class="hadchild cutom-parent-li"><a href="#"
                                            class="cutom-parent"><i class="fa-solid fa-user ikon"></i>       Akun Saya<span class="dcjq-icon"></span></a> <span
                                            class="button-view  fa fa-plus-square-o"></span>
                                        <ul style="display: none;">
                                            <li><a href="/profiluser">Profile</a></li>
                                            <li><a href="/alamat">Alamat</a></li>
                                            <li><a href="/ubahpass">Ubah Password</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="/pesanansaya" class="cutom-parent"><i class="fa-solid fa-book ikon"></i>       Pesanan Saya</a>
                                        <span class="dcjq-icon"></span>
                                    </li>
                                    <li class=""><a href="/notifikasi" class="cutom-parent"><i class="fa-solid fa-bell ikon"></i>    Notifikasi</a> <span
                                            class="dcjq-icon"></span></li>
                                    <li class=""><a href="/vouchertoko" class="cutom-parent"><i class="fa-sharp fa-solid fa-ticket-simple ikon"></i> Voucher saya</a> <span
                                            class="dcjq-icon"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </aside>
                <!--Left Part End -->

                <!--Middle Part Start-->
                <div id="content" class="col-md-9 col-sm-8">
                    <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Alamat Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group row">
                <label class="col-lg-1 col-form-label" for="val-username">Nama</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="val-username" name="username" placeholder="nama">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label" for="val-username">No Telepon</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="val-username" name="username" placeholder="No Telepon">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label" for="val-username">Provinsi</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="val-username" name="Provinsi" placeholder="provinsi">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label" for="val-username">Kota</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="val-username" name="Kota" placeholder="kota" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label" for="val-username">Kecamatan</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="val-username" name="kecamatan" placeholder="kecamatan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label" for="val-username">Kode Pos</label>
                <div class="col-lg-6">
                    <input type="number" class="form-control" id="val-username" name="KodePos" placeholder="KodePos">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-1 col-form-label" for="val-username">Nama Jalan, Gedung, No.Rumah</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="val-username" name="namajalan" placeholder="Nama Jalan, Gedung, No.Rumah">
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>

    {{-- Modal Ubah --}}
    <div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ubah Alamat Anda</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-lg-5 col-form-label" for="val-username">Nama</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-username" name="username" value="M. Sofyan ">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-5 col-form-label" for="val-username">No Telepon</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-username" name="username" placeholder="No Telepon" value="(+62)87859990555">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-5 col-form-label" for="val-username">Provinsi</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-username" name="Provinsi" placeholder="provinsi" value="Jawa Timur">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-5 col-form-label" for="val-username">Kota/Kabupaten</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-username" name="Kota" placeholder="kota" value="Kab. Pasuruan">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-5 col-form-label" for="val-username">Kecamatan</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-username" name="kecamatan" placeholder="kecamatan" value=" Kec. Sukorejo">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-5 col-form-label" for="val-username">Kode Pos</label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" id="val-username" name="KodePos" value="67161">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-5 col-form-label" for="val-username">Nama Jalan, Gedung, No.Rumah</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-username" name="namajalan" value="Jl. Taman Safari Indonesia II, Dusun. Gendol">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
  </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td style="width: 50%; vertical-align: top;" class="text-left">Alamat Saya <h4 class="text-right alamathead"><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">+ Tambah Alamat Baru</a>
                                </h4></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td class="text-left"><b>M. Sofyan</b> | (+62)87859990555
                                    <br>Jl. Taman Safari indonesia II,Dusun. Gendol, Kec. Sukorejo, Kab. Pasuruan
                                    <div style="float: right">
                                        <div style="margin-left: 90px ;">
                                            <button class="btn btn-outline-danger"><a class="btn-text-right" data-toggle="modal" data-target="#exampleModall">Ubah</a></button>
                                        </div>
                                        <div style="margin-top:15px;">
                                            <button class="btn btn-outline-danger"><a class="btn-text-right">Atur
                                                    Sebagai Utama</a></button>
                                        </div>
                                    </div>


                                    <br>Jawa Timur
                                    <br>67161
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-outline-danger">Utama </button>


                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Toko Barokah
                                    <br>jl. Melati, kec. Genteng Kab. Pasuruan
                                    <div style="float: right">
                                        <div style="margin-left: 90px ;">
                                            <button class="btn btn-outline-danger"><a class="btn-text-right">Ubah</a></button>
                                        </div>
                                        <div style="margin-top:15px;">
                                            <button class="btn btn-outline-danger"><a class="btn-text-right">Atur
                                                    Sebagai Utama</a></button>
                                        </div>
                                    </div>

                                    <br>Jawa Timur
                                    <br>67161
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-outline-secondary">Alamat
                                        Toko</button>
                                    <button type="button" class="btn btn-outline-secondary">Alamat
                                        Pemgembalian</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--Middle Part End-->
        </div>
        <!-- //Main Container -->
    </div>


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

</body>

</html>
