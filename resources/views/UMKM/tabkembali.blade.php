@extends('UMKM.penjual')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        
                        {{-- @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                        @endif --}}
                        <div class="card-body">
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
                                            <table id="table1" class="display" style="min-width: 845px">
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
                                                        <td><img src="fotoproduk/oneset.jfif"  alt="One Set" width="100px"></td>
                                                        <td>One Set</td>
                                                        <td>x1</td>
                                                        <td>Rp.10000
                                                            <br>COD(Cash On Delivery)</br>
                                                        </td>
                                                        <td>Dibatalkan
                                                            <br>Dibatalkan Pembeli</br>
                                                        </td>
                                                        <td>JNE express</td>
                                                        <td><a href="/pengembalian" style="color: blue" >Rincian Pesanan</a></td>
                                                     
                                                       
                                                    </tr>
                                                    <tr style="color:#89879f;text-align:center;">
                                                        <td> {{ $no++ }}</td>
                                                        <td><img src="fotoproduk/liptint.jfif"  alt="Lip Tint" width="100px"z></td>
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
                                                        <td><a href="/pengembalian" style="color: blue" >Rincian Pesanan</a></td>
                                                    
                                                       
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
                                                        <td><img src="fotoproduk/liptint.jfif"  alt="Lip Tint" width="100px"></td>
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
                                                        <td><a href="/pengembalian" style="color: blue" >Rincian Pesanan</a></td>
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
                                                        <td><img src="fotoproduk/oneset.jfif"  alt="One Set" width="100px"></td>
                                                        <td>One Set</td>
                                                        <td>x1</td>
                                                        <td>Rp.10000
                                                            <br>COD(Cash On Delivery)</br>
                                                        </td>
                                                        <td>Dibatalkan
                                                            <br>Dibatalkan Pembeli</br>
                                                        </td>
                                                        <td>JNE express</td>
                                                        <td><a href="/pengembalian" style="color: blue" >Rincian Pesanan</a></td>
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
                </div>
            </div>
        </div>
    </div>
@endsection
