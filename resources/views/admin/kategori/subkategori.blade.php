@extends('admin.index.index')

@section('content')

@include('koneksi.css')

<body>

    <!-- row -->


    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sub Kategori</h4>
                </div>
                <div class="col-12">
                    <a class="btn btn-primary" href="/addsubkategori">Tambah +</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-light" id="example">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Sub Kategori</th>

                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($data as $subkat)
                                <tr>
                                    <th scope="kat">{{ $no++ }}</th>
                                    <td>{{ $subkat->kategori->kategori }}</td>
                                    <td>{{ $subkat->subkategori }}</td>


                                    <td>


                                        <a href="#" class="btn btn-danger deletesubkat" data-id="{{ $subkat->id }}" data-sub="{{ $subkat->subkategori }}"><i class="fa-sharp fa-solid fa-trash"></i></a>


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
    $('.deletesubkat').click(function() {
        var subid = $(this).attr('data-id');
        var sub = $(this).attr('data-sub');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus Sub Kategori " + sub + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletesubkat/" + subid + ""
                Swal.fire(
                    'Terhapus!',
                    'Sub Kategori ' + sub + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>


@endsection