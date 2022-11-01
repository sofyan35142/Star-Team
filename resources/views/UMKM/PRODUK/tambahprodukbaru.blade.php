@extends('UMKM.penjual')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah produk baru</h4>
                        </div>
                        <div class="card-body">
                            <form action="/jualproduk" enctype="multipart/form-data" id="step-form-horizontal"
                                class="step-form-horizontal" method="POST">
                                @csrf
                                <div>
                                    <section>
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <h5 class="text-label" style="margin-bottom:25px">Informasi produk</h5>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Foto Produk</label>
                                                    <label for="img1"><i class="fa-solid fa-plus"
                                                            style="font-size: 24px;border:1px solid black;padding:25px; margin-left: 10px;"></i></label>
                                                    <input id="img1" type="file" name="foto_produk"
                                                        style="display: none">
                                                    <label for="img2"><i class="fa-solid fa-plus"
                                                            style="font-size: 24px;border:1px solid black;padding:25px; margin-left: 10px;"></i></label>
                                                    <input id="img2" type="file" name="foto_produk2"
                                                        style="display: none">
                                                    <label for="img3"><i class="fa-solid fa-plus"
                                                            style="font-size: 24px;border:1px solid black;padding:25px; margin-left: 10px;"></i></label>
                                                    <input id="img3" type="file" name="foto_produk3"
                                                        style="display: none">
                                                    <label for="img4"><i class="fa-solid fa-plus"
                                                            style="font-size: 24px;border:1px solid black;padding:25px; margin-left: 10px;"></i></label>
                                                    <input id="img4" type="file" name="foto_produk4"
                                                        style="display: none">
                                                    <label for="img5"><i class="fa-solid fa-plus"
                                                            style="font-size: 24px;border:1px solid black;padding:25px; margin-left: 10px;"></i></label>
                                                    <input id="img5" type="file" name="foto_produk5"
                                                        style="display: none">
                                                    <label for="img6"><i class="fa-solid fa-plus"
                                                            style="font-size: 24px;border:1px solid black;padding:25px; margin-left: 10px;"></i></label>
                                                    <input id="img6" type="file" name="foto_produk6"
                                                        style="display: none">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Nama produk</label>
                                                    <input type="text" name="nama_produk" class="form-control"
                                                        placeholder="Mohon masukkan" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Deskripsi</label>
                                                    <textarea class="form-control" name="descproduk" rows="4" id="comment"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Kategori</label>
                                                    <select class="form-control" name="kategori_produk">
                                                        @foreach ($datakat as $dk)
                                                            <option value="{{ $dk->id }}">{{ $dk->kategori }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Etalase</label>
                                                    <select class="form-control" name="id_kategori">

                                                        @foreach ($datapro as $dc)
                                                            <option value="{{ $dc->id }}">{{ $dc->kategori }}</option>
                                                        @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <h5 class="text-label" style="margin-bottom:25px">Informasi penjualan</h5>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Variasi</label>
                                                        <div id="tesa">
                                                            <input type="text" name="variasi" class="form-control"
                                                                placeholder="contoh:XL,L,M,merah,biru" required>
                                                        </div>
                                                        <div id='input-cont'>
                                                            {{-- <input type="text" name="variasi1" class="form-control"
                                                                    placeholder="pilihan:XL,L,M," required> --}}
                                                        </div>
                                                        <div class="mt-2 form-row">
                                                            <input type="button" onclick="tambahinput()"
                                                                class="btn btn-outline-primary ml-2" value="Tambah Pilihan">
                                                            <input type="button" onclick="remove()"
                                                                class="btn btn-outline-primary ml-2" value="hapus pilihan">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Harga</label>
                                                        <input type="number" name="harga" class="form-control"
                                                            placeholder="Masukkan harga" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Stock</label>
                                                        <input type="number" name="stock" class="form-control"
                                                            placeholder="Masukkan stock" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <h5 class="text-label" style="margin-bottom:25px">Pengiriman</h5>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <label for="">Berat</label>
                                                    <div class="input-group">
                                                        <input type="text" name="berat_produk" class="form-control"
                                                            placeholder="0">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">gr</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <label>Ukuran paket</label>
                                                    <div class="form-row">
                                                        <div class="input-group col-md-6 mb-2">
                                                            <input type="text" class="form-control" placeholder="L"
                                                                name="ulp">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">cm</span>
                                                            </div>
                                                        </div>
                                                        <div class="input-group col-md-6 mb-2">
                                                            <input type="text" class="form-control" placeholder="P"
                                                                name="upp">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">cm</span>
                                                            </div>
                                                        </div>
                                                        <div class="input-group col-md-6 mb-2">
                                                            <input type="text" class="form-control" placeholder="T"
                                                                name="utp">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">cm</span>
                                                            </div>
                                                        </div>
                                                        <div class="input-group col-md-6 mb-2">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text">Ekspedisi</label>
                                                            </div>
                                                            <select class="form-control" name="ekspedisi">
                                                                <option selected>Choose...</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </section>
                                    <input type="submit" class="btn btn-primary">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script>
            // var addinput = document.getElementById('input-cont');
            // var addmorefield = document.getElementById('addfield');
            // var remove = document.getElementById('');

            // Call addInput() function on button click
            // function addinput(){
            //     var newfield = document.createNewElement('input');
            //     newfield.setAttribute('type','text');
            //     newfield.setAttribute('name','variasi[]');
            //     newfield.setAttribute('class','form-control');
            //     newfield.setAttribute('Placeholder','Contoh:U,k,l');
            // }
            // remove.onclick = function(){
            //     var tags = addinput.getElementByTagName('input');
            //     if(tags.lenght > 2){
            //         addinput.remove(tags[(tags.lenght)-1])
            //     }
            // }
        </script>
        <script>
            const container = document.getElementById('input-cont');
            var maxInputAllowed = 4;
            var inputCount = 0;
            // Call addInput() function on button click
            function tambahinput() {
                inputCount++; // Increment input count by one
                if (inputCount > 4) {
                    alert('Maximal 5 fields.');
                    return;
                }
                let input = document.createElement('input');
                input.setAttribute('type', 'text');
                input.setAttribute('id', 'pilihan');
                input.setAttribute('name', 'variasi[]');
                input.setAttribute('class', 'form-control mt-2');
                input.setAttribute('Placeholder', 'contoh:XL,L,M,merah,biru');
                container.appendChild(input);
            }

            function remove() {
                var parent = document.getElementById("input-cont");
                parent.removeChild(parent.lastChild);
            }
        </script>
    @endsection
