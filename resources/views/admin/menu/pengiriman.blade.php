
@extends('admin.index.index')

@section('content')

@include("koneksi.css")


<body>

    <!-- row -->


    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pengiriman Yang Tersedia</h4>
                </div>
                <div class="col-12">
                    <a class="btn btn-primary" href="/addpengiriman">Tambah +</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-light" id="example">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Ekspedisi</th>
                                    <th scope="col">Foto Ekspedisi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $row->nama_eksp }}</td>

                                    <td>
                                        <img src="{{ asset('fotoeksp/'.$row->foto) }}" alt="" style="width: 80px; height:80px;">
                                    </td>
                                    <td>


                                        <a href="#" class="btn btn-danger deleteeksp" data-id="{{ $row->id }}" data-eksp="{{ $row->nama_eksp }}"><i class="fa-sharp fa-solid fa-trash"></i></a>



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
    $('.deleteeksp').click(function() {
        var ekspid = $(this).attr('data-id');
        var eksp = $(this).attr('data-eksp');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Data pengiriman " + eksp + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deleteeksp/" + ekspid + ""
                Swal.fire(
                    'Terhapus!',
                    'Data pembayaran ' + eksp + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>



@endsection
