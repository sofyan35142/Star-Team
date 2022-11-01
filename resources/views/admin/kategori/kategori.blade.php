@extends('admin.index.index')

@section('content')

@include('koneksi.css')

<body>

    <!-- row -->


    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kategori</h4>
                </div>
                <div class="col-12">
                    <a class="btn btn-primary" href="/addkategori">Tambah +</a>
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
                                        <!-- <a href="/tampilpembayaran/{{ $dp->id }}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#tampilpembayaran{{ $dp->id }}">Edit</a> -->

                                        <a href="#" class="btn btn-danger deletekat" data-id="{{ $dp->id }}" data-kat="{{ $dp->kategori }}"><i class="fa-sharp fa-solid fa-trash"></i></a>


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

    @include('koneksi.js')
</body>
<script>
    @if(Session::get('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>
<script>
    $('.deletekat').click(function() {
        var katid = $(this).attr('data-id');
        var kat = $(this).attr('data-kat');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus Kategori " + kat + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletekat/" + katid + ""
                Swal.fire(
                    'Terhapus!',
                    'Kategori ' + kat + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>


@endsection