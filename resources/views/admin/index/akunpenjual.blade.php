@extends('admin.index.index')

@section('content')

@include("koneksi.css")


<body>

    <!-- row -->
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Akun Penjual</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-light" id="example">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Produk</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @php
                                $no = 1;
                                @endphp
                               @foreach ($data as $penjual)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $penjual->username }}</td>
                                            <td>{{ $penjual->email }}</td>
                                            <td>{{ $penjual->level }}</td>
                                            <td>
                                                <a href="/tampilanprof/{{ $penjual->id }}" class="btn btn"><i class="fa-solid fa-user"></i></a>
                                            </td>
                                            <td>
                                                <a href="/tampilanproduk/{{ $penjual->id }}" class="btn btn-danger"></a>

                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-danger despenjual" data-id="{{ $penjual->id }}" data-username="{{ $penjual->username }}"><i class="fa-sharp fa-solid fa-trash"></i></a>
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
    $('.despenjual').click(function() {
        var pembid = $(this).attr('data-id');
        var pemb = $(this).attr('data-username');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Menghapus akun dengan username " + pemb + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/despenjual/" + pembid + ""
                Swal.fire(
                    'Terhapus!',
                    'Akun Dengan Username ' + pemb + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>


@endsection
