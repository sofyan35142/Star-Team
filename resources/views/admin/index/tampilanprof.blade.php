@extends('UMKM.penjual')

@section('content')
    <!--**********************************
                Sidebar end
            ***********************************-->

    <!--**********************************
                Content body start
            ***********************************-->

    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile card card-body px-3 pt-3 pb-0">
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo">
                                    <img src="{{ asset('fototoko/' .$user->foto) }}" class="cover-photo" alt="" height="300" >
                                </div>
                            </div>
                            <div class="profile-info">
                                <div class="profile-photo">
                                    <img src="{{ asset('fotowajah/' .$user->foto_wajah) }}" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="profile-details">
                                    <p>Username: {{ $user->username }}</p>
                                    <div class="profile-name px-3 pt-2">
                                        <span class="fw-semibold d-block">

                                        </span>
                                    </div>
                                    <p>Email: {{ $user->email }}</p>
                                    <div class="profile-email px-2 pt-2">
                                        <span class="fw-semibold d-block">

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    {{-- <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Posts</a>
								</li> --}}
                                    <li class="nav-item"><a href="#about-me" data-toggle="tab"
                                            class="nav-link active show">Profile</a>

                                    </li>
                                        {{-- <li class="nav-item"><a href="#profile-settings" data-toggle="tab"
                                                class="nav-link">Setting</a>
                                        </li> --}}
                                </ul>
                                <div class="tab-content">
                                    <div id="my-posts" class="tab-pane fade">
                                        <div class="my-post-content pt-3">
                                            <div class="post-input">
                                                <a href="javascript:void()" class="btn btn-primary light px-3"><i
                                                        class="fa fa-link"></i> </a>
                                                <a href="javascript:void()" class="btn btn-primary light mr-1 px-3"><i
                                                        class="fa fa-camera"></i> </a><a href="javascript:void()"
                                                    class="btn btn-primary">Post</a>
                                            </div>
                                            <div class="text-center mb-2"><a href="javascript:void()"
                                                    class="btn btn-primary">Load More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="about-me" class="tab-pane fade active show">
                                        <div class="profile-about-me">
                                        </div>
                                        <div class="profile-personal-info">
                                            <h4 class="text-primary mb-4"></h4>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">username <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>{{ $user->username }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Nama Toko <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>{{ $user->nama_toko }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>{{ $user->email }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">NO Telepon <span class="pull-right">:</span></h5>
                                                </div>
                                                <div class="col-9"><span>{{ $user->notelp }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Jenis Kelamin <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>{{ $user->jenis_kelamin }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Alamat <span class="pull-right">:</span></h5>
                                                </div>
                                                <div class="col-9"><span>{{ $user->alamat }}</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="profile-settings" class="tab-pane fade">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                {{-- <h4 class="text-primary">Account Setting</h4> --}}
                                                <form class="form-valide" action="/insert" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="val-username">Username
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" class="form-control"
                                                                        id="val-username" name="username"
                                                                        placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="val-email">Email <span
                                                                        class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" class="form-control"
                                                                        id="val-email" name="email" placeholder="">
                                                                </div>
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
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="val-confirm-password">No.Telpon<span
                                                                        class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" class="form-control"
                                                                        id="notelp" name="notelp" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="val-suggestions">Alamat<span
                                                                        class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" class="form-control"
                                                                        id="alamat" name="alamat" rows="5"
                                                                        placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="val-suggestions">Jenis Kelamin<span
                                                                        class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="jenis_kelamin" value="Laki-laki"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        Laki-laki
                                                                    </label>
                                                                    </br>
                                                                    <input class="form-check-input" type="radio"
                                                                        name="jenis_kelamin" value="Perempuan"
                                                                        id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        Perempuan
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-lg-8 ml-auto">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--**********************************
                Content body end
            ***********************************-->


    <!--**********************************
                Footer start
            ***********************************-->

    <!--**********************************
                Footer end
            ***********************************-->

    <!--**********************************
               Support ticket button start
            ***********************************-->

    <!--**********************************
               Support ticket button end
            ***********************************-->


    </div>
    <!--**********************************
            Main wrapper end
        ***********************************-->

    <!--removeIf(production)-->

    <!--**********************************
            Scripts
        ***********************************-->
    </body>

    </html>
@endsection
