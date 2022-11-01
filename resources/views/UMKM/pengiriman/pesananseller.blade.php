@extends('UMKM.penjual')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <nav class="nav nav-pills flex-column flex-sm-row col-lg-12">
                                <a id="btn-semua" class="flex-sm-fill text-sm-center nav-link active aktip" aria-current="page"
                                    href="#">Semua</a>
                                <a id="btn-belumbayar" class="flex-sm-fill text-sm-center nav-link" aria-current="page"
                                    href="#">Belum bayar</a>
                                <a id="btn-dikemas" class="flex-sm-fill text-sm-center nav-link" href="#">Dikemas</a>
                                <a id="btn-dikirim" class="flex-sm-fill text-sm-center nav-link" href="#">Dikirim</a>
                                <a id="btn-selesai" class="flex-sm-fill text-sm-center nav-link" href="#"
                                    tabindex="-1">Selesai</a>
                                <a id="btn-dibatalkan" class="flex-sm-fill text-sm-center nav-link" href="#"
                                    tabindex="-1">Dibatalkan</a>
                                <a id="btn-pengembalian" class="flex-sm-fill text-sm-center nav-link" href="#"
                                    tabindex="-1">Pengembalian</a>
                                <a id="btn-pengirimangagal" class="flex-sm-fill text-sm-center nav-link" href="#"
                                    tabindex="-1">Pengiriman Gagal</a>
                            </nav>
                        </div>
                        {{-- @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                        @endif --}}

                        {{-- CARD SEMUA --}}
                        <div id="tblsemua" class="card-body">
                            <h4 class="card-title">Prosescek</h4>
                        </div>
                        {{-- CARD DIKEMAS --}}
                        <div id="tbldikemas" class="card-body">
                            <div class="table-responsive">
                                <div class="default-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home">Semua 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile">Perlu diproses 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#contact">Telah Diproses 1</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab-konten">
                                        <div class="tab-pane fade active show" id="home" role="tabpanel">
                                            <h4 class="card-title">2 Pesanan</h4>
                                            <table id="table1" class="display" style="min-width: 845px;">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th>No.</th>
                                                        <th style="width:80px">Produk</th>
                                                        <th>Harga Total</th>
                                                        <th>Status</th>
                                                        <th>Jasa pengiriman</th>
                                                        <th class="panjangth">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    {{-- @foreach ($data as $produk) --}}
                                                    <tr style="color:#89879f;">
                                                        <td> {{ $no++ }}</td>
                                                        <td class="produkisi"><img src="fotoproduk/jamtangan.jfif"
                                                                alt="Jam Tangan" height="100px" width="100px">
                                                            <div class="namaproduk">Jam tangan<br>x1</div>
                                                        </td>
                                                        <td>rp.10000</td>
                                                        <td>Perlu dikirim</td>
                                                        <td>JNE express</td>
                                                        <td><a href="" style="color: blue" data-toggle="modal"
                                                                data-target="#exampleModalCenter">Atur pengiriman</a></td>
                                                    </tr>
                                                    <tr style="color:#89879f;">
                                                        <td> {{ $no++ }}</td>
                                                        <td class="produkisi"><img src="fotoproduk/jamtangan.jfif"
                                                                alt="Jam Tangan" height="100px" width="100px">
                                                            <div class="namaproduk">Jam tangan<br>x1</div>
                                                        </td>
                                                        <td>rp.10000</td>
                                                        <td>Perlu dikirim</td>
                                                        <td>JNE express</td>
                                                        <td><a href="/rincianperludikirim" style="color: blue">Lihat Rincian
                                                                Pengiriman</a><br><a href="" style="color: blue"
                                                                data-toggle="modal" data-target="#exampleModalCenter">Cetak
                                                                Label</a></td>
                                                    </tr>
                                                    {{-- @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel">
                                            <h4 class="card-title">1 Pesanan</h4>
                                            <table id="tabeldnjk" class="display" style="min-width: 845px;">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th>No.</th>
                                                        <th style="width: 80px">Produk</th>
                                                        <th>Harga Total</th>
                                                        <th>Status</th>
                                                        <th>Jasa pengiriman</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    {{-- @foreach ($data as $produk) --}}
                                                    <tr style="color:#89879f;">
                                                        <td> {{ $no++ }}</td>
                                                        <td class="produkisi"><img src="fotoproduk/jamtangan.jfif"
                                                                alt="Jam Tangan" height="100px" width="100px">
                                                            <div class="namaproduk">Jam tangan<br>x1</div>
                                                        <td>rp.10000</td>
                                                        <td>Perlu dikirim</td>
                                                        <td>JNE express</td>
                                                        <td><a href="" style="color: blue" data-toggle="modal"
                                                                data-target="#exampleModalCenter">Atur pengiriman</a></td>
                                                    </tr>
                                                    {{-- @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="contact">
                                            <table id="tabeltelahdiproses" class="display" style="min-width: 845px;">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th>No.</th>
                                                        <th style="width: 80px">Produk</th>
                                                        <th>Harga Total</th>
                                                        <th>Status</th>
                                                        <th>Jasa pengiriman</th>
                                                        <th class="panjangth">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    {{-- @foreach ($data as $produk) --}}
                                                    <tr style="color:#89879f;">
                                                        <td> {{ $no++ }}</td>
                                                        <td class="produkisi"><img src="fotoproduk/jamtangan.jfif"
                                                                alt="Jam Tangan" height="100px" width="100px">
                                                            <div class="namaproduk">Jam tangan<br>x1</div>
                                                        <td>rp.10000</td>
                                                        <td>Perlu dikirim</td>
                                                        <td>JNE express</td>
                                                        <td><a href="/rincianperludikirim" style="color: blue">Lihat
                                                                Rincian
                                                                Pengiriman</a><br><a href="" style="color: blue"
                                                                data-toggle="modal"
                                                                data-target="#exampleModalCenter">Cetak
                                                                Label</a></td>
                                                    </tr>
                                                    {{-- @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- CARD BELUM BAYAR --}}
                            <div id="tblbelumbayar" class="card-body">
                                <h4 class="card-title">1 Pesanan belum bayar</h4>
                                <div class="table-responsive">
                                    <div class="default-tab">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home">Semua</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile">Perlu diproses</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#contact">Telah Diproses</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content tab-konten">
                                            <div class="tab-pane fade active show" id="home" role="tabpanel">
                                                <table id="table1" class="display" style="min-width: 845px;">
                                                    <thead>
                                                        <tr style="text-align: center;">
                                                            <th>No.</th>
                                                            <th colspan="3" style="text-align: left">Produk</th>
                                                            <th>Harga Total</th>
                                                            <th>Status</th>
                                                            <th>Jasa pengiriman</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $no = 1;
                                                        @endphp
                                                        {{-- @foreach ($data as $produk) --}}
                                                        <tr style="color:#89879f;text-align:center;">
                                                            <td> {{ $no++ }}</td>
                                                            <td>ini foto</td>
                                                            <td>Earphone</td>
                                                            <td>x1</td>
                                                            <td>rp.10000</td>
                                                            <td>Perlu dikirim</td>
                                                            <td>JNE express</td>
                                                            <td><a href="" style="color: blue" data-toggle="modal"
                                                                    data-target="#exampleModalCenter">Atur pengiriman</a>
                                                            </td>
                                                        </tr>
                                                        {{-- @endforeach --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel">
                                                <table id="table2" class="display" style="min-width: 845px">
                                                    <thead>
                                                        <tr style="text-align: center;">
                                                            <th>No.</th>
                                                            <th colspan="3" style="text-align: left">Produk</th>
                                                            <th>Harga Total</th>
                                                            <th>Status</th>
                                                            <th>Jasa pengiriman</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $no = 1;
                                                        @endphp
                                                        {{-- @foreach ($data as $produk) --}}
                                                        <tr style="color:#89879f;text-align:center;">
                                                            <td> {{ $no++ }}</td>
                                                            <td>ini foto</td>
                                                            <td>Earphone</td>
                                                            <td>x1</td>
                                                            <td>rp.10000</td>
                                                            <td>Perlu dikirim</td>
                                                            <td>JNE express</td>
                                                            <td><a href="" style="color: blue" data-toggle="modal"
                                                                    data-target="#exampleModalCenter">Atur pengiriman</a>
                                                            </td>
                                                        </tr>
                                                        {{-- @endforeach --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="contact">
                                                <table id="table3" class="display" style="min-width: 845px">
                                                    <thead>
                                                        <tr style="text-align: center;">
                                                            <th>No.</th>
                                                            <th colspan="3" style="text-align: left">Produk</th>
                                                            <th>Harga Total</th>
                                                            <th>Status</th>
                                                            <th>Jasa pengiriman</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $no = 1;
                                                        @endphp
                                                        {{-- @foreach ($data as $produk) --}}
                                                        <tr style="color:#89879f;text-align:center;">
                                                            <td> {{ $no++ }}</td>
                                                            <td>ini foto</td>
                                                            <td>Earphone</td>
                                                            <td>x1</td>
                                                            <td>rp.10000</td>
                                                            <td>Perlu dikirim</td>
                                                            <td>JNE express</td>
                                                            <td><a href="" style="color: blue" data-toggle="modal"
                                                                    data-target="#exampleModalCenter">Atur pengiriman</a>
                                                            </td>
                                                        </tr>
                                                        {{-- @endforeach --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- CARD DIKIRIM --}}
                        <div id="tbldikirim" class="card-body">
                            <h4 class="card-title">1 Pesanan dikirim</h4>
                            <div class="table-responsive">
                                <table id="tabeldikirim" class="display" style="min-width: 500px">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Produk</th>
                                            <th>Jumlah Harus Dibayar</th>
                                            <th>Status | Hitung Mundur</th>
                                            <th>Semua Jasa pengiriman</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        {{-- @foreach ($data as $produk) --}}
                                        <tr>
                                            <td> {{ $no++ }}</td>
                                            <td><img class="imagedikirim" src="fotoproduk/bedakpigeon.jpg"
                                                    alt="Bedak Pigeon" width="100px">Bedak</td>
                                            <td>Rp90.000 </td>
                                            <td> <strong>Sudah dikirim</strong> <br />
                                                Menunggu konfirmasi pembeli menerima produk</td>
                                            <td> <strong>Reguler (cashless)</strong> <br /> J&T Express <br /> JP245643987
                                            </td>
                                            <td><a href="/rinciandikirim" style="color: blue">Periksa Rincian </a> </td>
                                        </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        {{-- @foreach ($data as $produk) --}}
                                        <tr>
                                            <td> {{ $no++ }}</td>
                                            <td><img class="imagedikirim" src="fotoproduk/blushon.jfif" alt="Blushon"
                                                    width="100px">Blushon</td>
                                            <td>Rp75.000 </td>
                                            <td> <strong>Sudah dikirim</strong> <br />
                                                Menunggu konfirmasi pembeli menerima produk</td>
                                            <td> <strong>Reguler (cashless)</strong> <br /> J&T Express <br /> JP2987637452
                                            </td>
                                            <td><a href="/rinciandikirim" style="color: blue">Periksa Rincian </a> </td>
                                        </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- CARD SELESAI --}}
                        <div id="tblselesai" class="card-body">
                            <div class="table-responsive">
                                <h4 class="card-title">1 Pesanan Telah selesai</h4>
                                <table id="tableselesai" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>N0.</th>
                                            <th>Produk</th>
                                            <th>Harga Total</th>
                                            <th>Status</th>
                                            <th>Jasa Kirim</th>
                                            <th>No.pesanan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="produkisi"><img src="fotoproduk/jamtangan.jfif" alt="Jam Tangan"
                                                    height="100px" width="100px">
                                                <div class="namaproduk">Jam tangan<br>x1</div>
                                            </td>
                                            <td>Rp.500.000</td>
                                            <td>Menunggu pembeli menilai produk</td>
                                            <td>Jne Expres</td>
                                            <td>#7237872289</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- CARD DIBATALKAN --}}
                        <div id="tbldibatalkan" class="card-body">
                            <h4 class="card-title">2 Pesanan</h4>
                            <div class="table-responsive">
                                <div class="default-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home">Semua</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile">Menunggu Respon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#contact">Dibatalkan</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab-konten">
                                        <div class="tab-pane fade active show" id="home" role="tabpanel">
                                            <table id="tabeldibatalkan1" class="display" style="min-width: 845px">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th>No.</th>
                                                        <th colspan="3" style="text-align: ">Produk</th>
                                                        <th>Harga</th>
                                                        <th>Status</th>
                                                        <th>Jasa pengiriman</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    {{-- @foreach ($data as $produk) --}}
                                                    <tr style="color:#89879f;text-align:center;">
                                                        <td> {{ $no++ }}</td>
                                                        <td><img src="fotoproduk/oneset.jfif" alt="One Set"
                                                                width="100px"></td>
                                                        <td>One Set</td>
                                                        <td>x1</td>
                                                        <td>Rp.10000
                                                            <br>COD(Cash On Delivery)</br>
                                                        </td>
                                                        <td>Dibatalkan
                                                            <br>Dibatalkan Pembeli</br>
                                                        </td>
                                                        <td>JNE express</td>
                                                        <td><a href="/pengembalian" style="color: blue">Rincian
                                                                Pesanan</a></td>


                                                    </tr>
                                                    <tr style="color:#89879f;text-align:center;">
                                                        <td> {{ $no++ }}</td>
                                                        <td><img src="fotoproduk/liptint.jfif" alt="Lip Tint"
                                                                width="100px"z></td>
                                                        <td>Lip Tin</td>
                                                        <td>x1</td>
                                                        <td>Rp.10000
                                                            <br>Online Payment</br>
                                                        </td>
                                                        <td>Dibatalkan
                                                            <br>Dibatalkan Pembeli</br>
                                                        </td>
                                                        <td>Reguler (Cashless)
                                                            <br>JNT Express</br>
                                                        </td>
                                                        <td><a href="/pengembalian" style="color: blue">Rincian
                                                                Pesanan</a></td>


                                                    </tr>
                                                    {{-- @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="profile" role="tabpanel">
                                            <table id="tabeldibatalkan2" class="display" style="min-width: 845px">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th>No.</th>
                                                        <th colspan="3" style="text-align: ">Produk</th>
                                                        <th>Harga</th>
                                                        <th>Status</th>
                                                        <th>Jasa pengiriman</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    {{-- @foreach ($data as $produk) --}}
                                                    <tr style="color:#89879f;text-align:center;">
                                                        <td> {{ $no++ }}</td>
                                                        <td><img src="fotoproduk/liptint.jfif" alt="Lip Tint"
                                                                width="100px"></td>
                                                        <td>Lip Tin</td>
                                                        <td>x1</td>
                                                        <td>Rp.10000
                                                            <br>Online Payment</br>
                                                        </td>
                                                        <td>Dibatalkan
                                                            <br>Dibatalkan Pembeli</br>
                                                        </td>
                                                        <td>Reguler (Cashless)
                                                            <br>JNT Express</br>
                                                        </td>
                                                        <td><a href="/pengembalian" style="color: blue">Rincian
                                                                Pesanan</a></td>
                                                    </tr>
                                                    {{-- @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="contact">
                                            <table id="tabeldibatalkan3" class="display" style="min-width: 845px">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th>No.</th>
                                                        <th colspan="3" style="text-align: ">Produk</th>
                                                        <th>Harga</th>
                                                        <th>Status</th>
                                                        <th>Jasa pengiriman</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    {{-- @foreach ($data as $produk) --}}
                                                    <tr style="color:#89879f;text-align:center;">
                                                        <td> {{ $no++ }}</td>
                                                        <td><img src="fotoproduk/oneset.jfif" alt="One Set"
                                                                width="100px"></td>
                                                        <td>One Set</td>
                                                        <td>x1</td>
                                                        <td>Rp.10000
                                                            <br>COD(Cash On Delivery)</br>
                                                        </td>
                                                        <td>Dibatalkan
                                                            <br>Dibatalkan Pembeli</br>
                                                        </td>
                                                        <td>JNE express</td>
                                                        <td><a href="/pengembalian" style="color: blue">Rincian
                                                                Pesanan</a></td>
                                                    </tr>
                                                    {{-- @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- CARD PENGEMBALIAN --}}
                        <div id="tblpengembalian" class="card-body">
                            <h4 class="card-title">1 Pesanan pengembalian</h4>
                        </div>
                        {{-- CARD PENGIRIMAN GAGAL --}}
                        <div id="tblpengirimangagal" class="card-body">
                            <h4 class="card-title">1 Pesanan pengiriman gagal</h4>
                        </div>
                        {{-- END CARD --}}
                        {{-- modal pengiriman --}}
                        <div class="modal fade" id="exampleModalCenter">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div id="modalkonten1" class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Kirim Pesanan</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <a id="antarcounter" href="#"
                                                        class="btn btn-square btn-outline-primary cardtittle">
                                                        <div style="padding: 0" class="card-body tal">
                                                            <p class="titlepeng">Saya akan
                                                                antar ke Counter</p>
                                                            <p class="card-text colorb">Anda
                                                                Dapat
                                                                mengirim paket anda di
                                                                cabang Si
                                                                Cepat REG terdekat di Kota
                                                                anda
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <a id="jemputpickup" href="#"
                                                        class="btn btn-square btn-outline-primary cardtittle">
                                                        <div style="padding: 0" class="card-body tal">
                                                            <p class="titlepeng">Saya akan
                                                                menggunakan Jasa Pick-up</p>
                                                            <br>
                                                            <p class="card-text colorb">Si
                                                                Cepat re akan mengambil
                                                                paket dari alamat anda
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="modal-footer1" class="modal-footer">
                                        <button data-toggle="modal" type="button"
                                            class="btn btn-primary button-confirm">Konfirmasi</button>
                                    </div>
                                    <div id="modal-footer2" class="modal-footer">
                                        <button data-toggle="modal" type="button"
                                            class="btn btn-primary nextantarcounter">Konfirmasi</button>
                                    </div>
                                    <div id="modal-footer3" class="modal-footer">
                                        <button data-toggle="modal" type="button"
                                            class="btn btn-primary nextjemputpickup">Konfirmasi</button>
                                    </div>
                                </div>
                                <div id="modalkontenaturpickup" class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Atur Pickup</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Opsi Pengiriman <br> SiCepat REG</p>
                                        <p>Tanggal<br>
                                        <div class="form-group">
                                            <button type="radio"
                                                class="btn btn-square btn-outline-primary mr-2">Senin</button>
                                            <button type="radio"
                                                class="btn btn-square btn-outline-primary mr-2">Selasa</button>
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Waktu</label>
                                            <select class="form-control" id="sel1">
                                                <option>5:00pm - 11:00pm</option>
                                                <option>6:00pm - </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Catatan</label>
                                            <input type="text" class="form-control input-default "
                                                placeholder="Mohon Masukkan">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat Toko</label>
                                            <div class="card-alamat">
                                                Zaki almukhtarom(Jukik) 081252055995<br>
                                                Sukorejo,desa.sebandung RT02 RW04 (Rumah cat
                                                putih)<br>
                                                KAB. PASURUAN - SUKOREJO<br>
                                                JAWA TIMUR<br>
                                                ID 67161
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="btn-kembali" data-toggle="modal" type="button"
                                            class="btn btn-secondary">Kembali</button>
                                        <button data-toggle="modal" data-target="#modalpickup" type="button"
                                            class="btn btn-primary">Konfirmasi</button>
                                    </div>
                                </div>
                                <div id="modalkontenantarcounter" class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Kirim # 221026DP7CUV0N</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p style="font-size: 17px"><b>[Antar ke
                                                Counter]</b></p>
                                        <p>Antar paket Anda ke counter J&T terdekat di kota
                                            Anda dengan mengikuti petunjuk <br>berikut:</p>

                                        <p>Cetak dan tempelkan label pengiriman J&T Express
                                            dengan no. resi otomatis yang didapatkan dari
                                            Seller
                                            Centre Shopee ke paket Anda.
                                            Temukan counter J&T Express terdekat pada
                                            <a style="color: blue"
                                                href="https://jet.co.id/finddroppoint">https://jet.co.id/finddroppoint</a>
                                            atau hubungi
                                            021-8066-1888
                                            Bawa paket Anda ke counter J&T Express terdekat.
                                            Mohon untuk tidak membayar biaya pengiriman
                                            apapun
                                            di counter.
                                            Mohon untuk mengantarkan paket Anda ke counter
                                            J&T
                                            Express terdekat dengan alamat toko yang Anda
                                            daftarkan di Shopee. Jika Anda mengantarkan
                                            paket di
                                            luar wilayah alamat yang terdaftar, maka Shopee
                                            tidak akan bertanggung jawab atas perbedaan
                                            ongkir
                                            yang akan berpengaruh pada jumlah pelepasan dana
                                            Anda.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="btn-kembali2" data-toggle="modal" type="button"
                                            class="btn btn-secondary">Kembali</button>
                                        <button data-toggle="modal" data-target="#modalpickup" type="button"
                                            class="btn btn-primary">Konfirmasi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includjak.jsjak');
    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
