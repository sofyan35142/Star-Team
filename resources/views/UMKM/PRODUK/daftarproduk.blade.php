@extends("UMKM.penjual")
@section("content")
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Produk anda</h4>
                            </div>
                            {{-- @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{session('success')}}
                                </div>
                                @endif --}}
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Foto Produk</th>
                                                <th>Variasi</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Stock</th>
                                                {{-- <th>Penjualan</th> --}}
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data as $produk)
                                            <tr>
                                                <td> {{$no++}}</td>
                                                <td><img src="{{asset("fotoproduk/" . $produk->foto_produk)}}" alt="pap" width="100px" height></td>
                                                <td>{{$produk->variasi}}</td>
                                                <td>{{$produk->nama_produk}}</td>
                                                <td>Rp.{{$produk->harga}}</td>
                                                <td>{{$produk->stock}}</td>
                                                <td>
                                                    <div class="d-flex">
														<a href="/editprodukshow/{{$produk->id_produk}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" data-id="{{ $produk->id_produk}}" data-nama="{{$produk->nama_produk}}" class="btn btn-danger shadow btn-xs sharp swadikap"><i class="fa fa-trash swadikap"></i></a>
                                          			</div>
                                                </td>
                                            </tr>
                                            @endforeach
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
