@extends('UMKM.penjual')

@section('content')

<head>
    @include("koneksi.css")
</head>

                    <!-- Content wrapper -->
                    <div class="content-wrapper">

                      <!-- Content -->
                                <div class="container-xxl flex-grow-1 container-p-y">

                          <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Account Settings /</span> Account
              </h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bx bx-lock-alt me-1"></i> Security</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bx bx-detail me-1"></i> Billing & Plans</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bx bx-bell me-1"></i> Notifications</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bx bx-link-alt me-1"></i> Connections</a></li>
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <form class="d-flex align-items-start align-items-sm-center gap-4" action="/ubahfoto" method="post" enctype="multipart/form-data">
                        @csrf
                        <img src="/fotoproduk/{{ Auth::user()->foto }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" class="account-file-input" name="foto" hidden accept="image/png, image/jpeg" />
                          </label>
                          <button type="sumbit" class="btn btn-label-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">simpan</span>
                          </button>

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                      <form action="/ubahprofile" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Username</label>
                            <input class="form-control" type="text" name="username" value="{{ Auth::user()->username }}" autofocus />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                          </div> 
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="text" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="john.doe@example.com" />
                          </div>
                       <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="organization" name="organization" value="ThemeSelection" />
                          </div>
                       <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Nomor Telepon</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"></span>
                              <input type="text" id="nomortelpon" name="notelp" class="form-control" placeholder="no telp" />
                            </div>
                          </div>
                       <div class="mb-3 col-md-6">
                            <label for="lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="lahir" name="lahir" placeholder="Tanggal Lahir" />
                          </div>
                       <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Maps</label>
                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="231465" maxlength="6" />
                          </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper  d-none">
                        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search{{asset('assets.')}}" aria-label="Search{{asset('assets.')}}">
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>

                </nav>
                <!-- / Navbar -->
                <!-- END: Navbar-->


                <!-- Content wrapper -->
                <div class="content-wrapper">

                    @yield('content')

                    <!-- pricingModal -->
                    <!--/ pricingModal -->

                </div>
                <!-- / Content -->

               
                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    <!--/ Layout Content -->



    @include("koneksi.js")

    @yield('footer_bawah')
</body>


@endsection
