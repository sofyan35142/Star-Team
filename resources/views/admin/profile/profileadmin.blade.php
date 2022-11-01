@extends('admin.index.index')

@section('content')

@include("koneksi.css")

<!--**********************************
            Sidebar end
        ***********************************-->

<!--**********************************
            Content body start
        ***********************************-->
<div class="container">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Hi, welcome back!</h4>
					<p class="mb-0">Your business dashboard template</p>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
				</ol>
			</div>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="profile card card-body px-3 pt-3 pb-0">
					<div class="profile-head">
						<div class="photo-content">
							<div class="cover-photo"></div>
						</div>
						<div class="profile-info">
							<div class="profile-photo">
								<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
							</div>
							<div class="profile-details">
								<p>Username: {{ Auth::user()->username }}</p>
								<div class="profile-name px-3 pt-2">
									<span class="fw-semibold d-block">

									</span>
								</div>

								<p>Email: {{ Auth::user()->email }}</p>
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
								<li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link">Posts</a>
								</li>
								<li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">About Me</a>

								</li>
								<li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Setting</a>
								</li>
							</ul>
							<div class="tab-content">
								<div id="my-posts" class="tab-pane fade">
									<div class="my-post-content pt-3">
										<div class="post-input">
											<a href="javascript:void()" class="btn btn-primary light px-3"><i class="fa fa-link"></i> </a>
											<a href="javascript:void()" class="btn btn-primary light mr-1 px-3"><i class="fa fa-camera"></i> </a><a href="javascript:void()" class="btn btn-primary">Post</a>
										</div>
										<div class="text-center mb-2"><a href="javascript:void()" class="btn btn-primary">Load More</a>
										</div>
									</div>
								</div>
								<div id="about-me" class="tab-pane fade active show">
									<div class="profile-about-me">
									</div>
									<div class="profile-personal-info">
										<h4 class="text-primary mb-4">Personal Information</h4>
										<div class="row mb-2">
											<div class="col-3">
												<h5 class="f-w-500">Username <span class="pull-right">:</span>
												</h5>
											</div>
											<div class="col-9"><span>{{ Auth::user()->username }}</span>
											</div>
										</div>
										<div class="row mb-2">
											<div class="col-3">
												<h5 class="f-w-500">Email <span class="pull-right">:</span>
												</h5>
											</div>
											<div class="col-9"><span>{{ Auth::user()->email }}</span>
											</div>
										</div>

									</div>
								</div>
								<div id="profile-settings" class="tab-pane fade">
									<div class="pt-3">
										<div class="settings-form">
											<h4 class="text-primary">Account Setting</h4>
											<form action="/ubahprofile" method="post">
												@csrf
												<div class="form-row">
													<div class="form-group col-md-6">
														<label>Email</label>
														<input type="email" name="email" placeholder="Email" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Password</label>
														<input type="password" name="password" placeholder="Password" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label>Username</label>
													<input type="text" placeholder="1234 Main St" name="username" class="form-control">
												</div>
												{{-- <div class="form-group">
                                                                <label>Address 2</label>
                                                                <input type="text" placeholder="Apartment, studio, or floor" class="form-control">
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>City</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label>State</label>
                                                                    <select class="form-control" id="inputState">
                                                                        <option selected="">Choose...</option>
                                                                        <option>Option 1</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-2">
                                                                    <label>Zip</label>
                                                                    <input type="text" class="form-control">
                                                                </div> --}}
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="gridCheck">
												<label class="custom-control-label" for="gridCheck"> Check me out</label>
											</div>
										</div>
										<button class="btn btn-primary" type="submit">Sign
											in</button>
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
@include("koneksi.js")

</body>

</html>

@endsection
