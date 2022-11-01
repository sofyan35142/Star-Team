@extends("UMKM.PRODUK.extendproduk")
@section("konten")
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ubah produk</h4>
                    </div>
                    <div class="card-body">
                        <form action="/editproduk/{{$data->id_produk}}" enctype="multipart/form-data" id="step-form-horizontal" class="step-form-horizontal" method="POST">
                            @csrf
                            <div>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Foto produk</label>
                                                <img src="{{asset("fotoproduk/" . $data->foto_produk)}}" alt="pap" width="200px" height="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="foto_produk" class="custom-file-input">
                                                <label class="custom-file-label">Masukkan foto produk</label>
                                            </div>
                                        </div>
                                        <input type="hidden" name="foto_produk" value="{{$data->foto_produk}}">
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Nama produk</label>
                                                <input type="text" value="{{$data->nama_produk}}" name="nama_produk" class="form-control" placeholder="Mohon masukkan" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Harga</label>
                                                <input type="number" value="{{$data->harga}}" name="harga" class="form-control" placeholder="Masukkan harga" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Stock</label>
                                                <input type="number" value="{{$data->stock}}" name="stock" class="form-control" placeholder="Masukkan harga" required>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <button type="submit" class="btn btn-primary">Ubah produk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
