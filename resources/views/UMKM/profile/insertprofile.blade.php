@extends('admin.index.index')

@section('content')

@include("koneksi.css")


<body>

  <!-- row -->
  <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Validation</h4>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="/insert" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Username
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-username" name="username" placeholder="{{ Auth::user()->username}}">
                                    </div>
                                    @error('username')
                                    <div class="alert alert-danger">Isi Username</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-email" name="email" placeholder="">
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger">Isi Email</div>
                                    @enderror
                                </div>
                                {{-- <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-password">Password
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="val-password" name="password" placeholder="Choose a safe one..">
                                    </div>
                                </div> --}}
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-confirm-password">No.Telpon<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="notelp" name="notelp" placeholder="">
                                    </div>
                                    @error('notelp')
                                    <div class="alert alert-danger">Isi No.Telpon</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Alamat<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="alamat" name="alamat" rows="5" placeholder="">
                                    </div>
                                    @error('alamat')
                                    <div class="alert alert-danger">Isi Alamat</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Jenis Kelamin<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Laki-laki
                                        </label>
            </br>
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Perempuan
                                        </label>
                                    </div>
                                    @error('jenis_kelamin')
                                    <div class="alert alert-danger">Pilih Jenis Kelamin</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
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
            text: "Menghapus akun dengan username" + pemb + "",
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
