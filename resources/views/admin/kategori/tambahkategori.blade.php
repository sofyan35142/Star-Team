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
                            <h4 class="card-title">Tambah Kategori</h4>
                            <form action="/insertkat" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <input type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('kategori')
                                    <div class="alert alert-danger">Harus di isi</div>
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