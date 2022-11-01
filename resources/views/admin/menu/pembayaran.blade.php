@extends('admin.index.index')

@section('content')

@include("koneksi.css")


<body>

    <!-- row -->


    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pembayaran Yang Tersedia</h4>
                </div>
                <div class="col-12">
                    <a class="btn btn-primary" href="/addpembayaran">Tambah +</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-light" id="example">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Jenis Pembayaran</th>
                                    <th scope="col">Foto Pembayaran</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($datapemb as $dp)
                                <tr>
                                    <th scope="dp">{{ $no++ }}</th>
                                    <td>{{ $dp->nama_pemb }}</td>

                                    <td>
                                        <img src="{{ asset('fotopemb/'.$dp->foto_pemb) }}" alt="" style="width: 80px; height:80px;">
                                    </td>
                                    <td>
                                        <!-- <a href="/tampilpembayaran/{{ $dp->id }}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#tampilpembayaran{{ $dp->id }}">Edit</a> -->

                                        <a href="#" class="btn btn-danger deletepemb" data-id="{{ $dp->id }}" data-pemb="{{ $dp->nama_pemb }}"><i class="fa-sharp fa-solid fa-trash"></i></a>


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

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->

    @include("koneksi.js")
</body>
<script>
    @if(Session::get('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>
<script>
    $('.deletepemb').click(function() {
        var pembid = $(this).attr('data-id');
        var pemb = $(this).attr('data-pemb');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus data pembayaran " + pemb + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletepemb/" + pembid + ""
                Swal.fire(
                    'Terhapus!',
                    'Data pembayaran ' + pemb + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>


@endsection
