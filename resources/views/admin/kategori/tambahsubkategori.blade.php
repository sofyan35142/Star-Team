@extends('admin.index.index')

@section('content')

<head>

    @include('koneksi.css')

</head>



<body>

    <div class="container">
        <div class="main-panel">

            <div class="content-wrapper">
                <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Sub Kategori</h4>
                            <form action="/insertsubkat" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <select class="form-select" name="kategori_id" aria-label="Default select example">

                                        <option selected>Pilih kategori</option>
                                        @foreach ($datakategori as $data)
                                        <option value="{{$data->id}}">{{$data->kategori}}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id')
                                    <div class="alert alert-danger">Pilih Kategori!</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Sub Kategori</label>
                                    <input type="text" name="subkategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    @error('subkategori')
                                    <div class="alert alert-danger">Harus di isi!</div>
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

    @include('koneksi.js')
</body>
@endsection