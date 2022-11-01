<!DOCTYPE html>
@include('landingpage.layout.head')

<body class="res layout-subpage layout-1 banners-effect-5">
    <div id="wrapper" class="wrapper-fluid">
        <!-- Header Container  -->
        @include('landingpage.layout.header')
        <!-- //Header Container  -->
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
                                        <li><a href="#">Ubah Password</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="/pesanansaya" class="cutom-parent"><i class="fa-solid fa-book ikon"></i>       Pesanan Saya</a>
                                    <span class="dcjq-icon"></span>
                                </li>
                                <li class=""><a href="/notifikasi" class="cutom-parent"><i class="fa-solid fa-bell ikon"></i>    Notifikasi</a> <span
                                        class="dcjq-icon"></span></li>
                                <li class=""><a href="/voucher" class="cutom-parent"><i class="fa-sharp fa-solid fa-ticket-simple ikon"></i> Voucher saya</a> <span
                                        class="dcjq-icon"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </aside>

        <div class="row mt-5 mb-5">
            <div class="col-md-12 container mb-3">
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a id="btn-semua" class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#">Semua</a>
                    <a id="btn-gratis-ongkir" class="flex-sm-fill text-sm-center nav-link" href="#">Gratis Ongkir</a>
                    <a id="btn-diskon" class="flex-sm-fill text-sm-center nav-link" href="#">Diskon</a>
                    <a id="btn-voucher" class="flex-sm-fill text-sm-center nav-link" href="#" tabindex="-1"
                    >Voucher Toko</a>
                </nav>
            </div>

            <div class="col-md-12 container">
                <div class="row" id="semua">
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Gratis Ongkir </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Gratis Ongkir </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Diskon 10% </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Diskon 10% </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Voucher Toko</h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">KLAIM</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Voucher Toko</h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">KLAIM</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="gratis-ongkir">
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Gratis Ongkir </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Gratis Ongkir </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Gratis Ongkir </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Gratis Ongkir </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="diskon">
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Diskon 10% </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Diskon 10% </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Diskon 10% </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Diskon 10% </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="voucher">
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Voucher Toko </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Voucher Toko </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Voucher Toko </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="landingpage/crop.png" alt="Pastrami bacon" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Voucher Toko </h3>
                                        <p>s/d 16.10.22</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-row justify-content-end">
                                        <button class="btn btn-primary">PAKAI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('landingpage.layout.footer')
    <script>
        $(document).ready(function(){
            $('#gratis-ongkir').css('display', 'none');
            $('#diskon').css('display', 'none');
            $('#voucher').css('display', 'none');

            $('#btn-semua').click(function(){
                var active = document.querySelector(".active")
                active.classList.remove("active");
                $(this).addClass('active')
                $('#semua').css('display', 'flex');
                $('#gratis-ongkir').css('display', 'none');
                $('#diskon').css('display', 'none');
                $('#voucher').css('display', 'none');
            })
            $('#btn-gratis-ongkir').click(function(e){
                var active = document.querySelector(".active")
                active.classList.remove("active");
                $(this).addClass('active')

                $('#semua').css('display', 'none');
                $('#gratis-ongkir').css('display', 'flex');
                $('#diskon').css('display', 'none');
                $('#voucher').css('display', 'none');
            })
            $('#btn-diskon').click(function(){
                var active = document.querySelector(".active")
                active.classList.remove("active");
                $(this).addClass('active')
                $('#semua').css('display', 'none');
                $('#gratis-ongkir').css('display', 'none');
                $('#diskon').css('display', 'flex');
                $('#voucher').css('display', 'none');
            })
            $('#btn-voucher').click(function(){
                var active = document.querySelector(".active")
                active.classList.remove("active");
                $(this).addClass('active')
                $('#semua').css('display', 'none');
                $('#gratis-ongkir').css('display', 'none');
                $('#diskon').css('display', 'none');
                $('#voucher').css('display', 'flex');
            })
        })
    </script>

</body>
