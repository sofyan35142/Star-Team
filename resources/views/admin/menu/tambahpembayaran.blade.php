@extends('admin.index.index')

@section('content')

@include("koneksi.css")



<body>

    <div class="container">
        <div class="main-panel">

            <div class="content-wrapper">
                <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Data Pembayaran</h4>
                            <form action="/insertpemb" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Pembayaran</label>
                                    <input type="text" name="nama_pemb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('nama_pemb')
                                    <div class="alert alert-danger">Harus di isi</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Upload Foto Pembayaran</label>
                                    <input type="file" name="foto_pemb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('foto_pemb')
                                    <div class="alert alert-danger">Upload foto dengan ekstensi: jpg, jpeg, png, gif, svg</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    @include("koneksi.js")
</body>
@endsection
