    @extends('UMKM.penjual')
    @section('content')
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->

                <body>

                    <!-- row -->


                    <div class="container">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Kategori Penjual</h4>
                                </div>
                                <div class="col-12">
                                    <a class="btn btn-primary" href="/kategoricreate">Tambah +</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-light" id="example">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($data as $dp)
                                                    <tr>
                                                        <th scope="dp">{{ $no++ }}</th>
                                                        <td>{{ $dp->kategori }}</td>
                                                        <td>
                                                            <a href="/pilihproduk" class="btn btn-warning">Tambah
                                                                Produk</a>

                                                            <a href="#" class="btn btn-danger delete"
                                                                data-id="{{ $dp->id }}"
                                                                data-kategori="{{ $dp->kategori }}">Hapus</a>


                                                        </td>

                                                    </tr>
@endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection
