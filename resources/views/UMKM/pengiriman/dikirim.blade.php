@extends("UMKM.penjual")
@section("content")
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dikirim</h4>
                    </div>
                    {{-- @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                        @endif --}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 500px">
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
                                        <td> {{$no++}}</td>
                                        <td><img src="fotoproduk/bedakpigeon.jpg"  alt="Bedak Pigeon" width="100px">Bedak</td>
                                        <td>Rp90.000 </td>
                                        <td> <strong>Sudah dikirim</strong> <br/>
                                             Menunggu konfirmasi pembeli menerima produk</td>
                                        <td> <strong>Reguler (cashless)</strong> <br/>  J&T Express     <br/>   JP245643987</td>
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
                                        <td> {{$no++}}</td>
                                        <td><img src="fotoproduk/blushon.jfif"  alt="Blushon" width="100px">Blushon</td>
                                        <td>Rp75.000 </td>
                                        <td> <strong>Sudah dikirim</strong> <br/>
                                             Menunggu konfirmasi pembeli menerima produk</td>
                                        <td> <strong>Reguler (cashless)</strong> <br/>  J&T Express     <br/>   JP2987637452</td>
                                        <td><a href="/rinciandikirim" style="color: blue">Periksa Rincian </a> </td>
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
@endsection
