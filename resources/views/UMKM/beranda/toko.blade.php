@extends("UMKM.penjual")
@section("content")
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row"> 
        <div class="col-xl-3 col-lg-6 col-sm-6">
          <div class="widget-stat card bg-danger">
            <div class="card-body  p-4">
              <div class="media">
                <span class="mr-3">
                  <i class="la la-users"></i>
                </span>
                <div class="media-body text-white">
                  <p class="mb-1">Produk saya</p>
                  <h3 class="text-white">{{ $jumlahproduk }}</h3>

                </div>
              </div>
            </div>
          </div>
                  </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
          <div class="widget-stat card bg-warning">
            <div class="card-body p-4">
              <div class="media">
                <span class="mr-3">
                  <i class="la la-user"></i>
                </span>
                <div class="media-body text-white">
                  <p class="mb-1">Pesanan Masuk</p>
                  <h3 class="text-white"></h3>

                </div>
              </div>
            </div>
          </div>
                  </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
          <div class="widget-stat card bg-secondary">
            <div class="card-body p-4">
              <div class="media">
                <span class="mr-3">
                  <i class="la la-graduation-cap"></i>
                </span>
                <div class="media-body text-white">
                  <p class="mb-1">Pesanan Dikirim</p>
                  <h3 class="text-white"></h3>

                </div>
              </div>
            </div>
          </div>
                  </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
          <div class="widget-stat card bg-danger">
            <div class="card-body p-4">
              <div class="media">
                <span class="mr-3">
                  <i class="la la-dollar"></i>
                </span>
                <div class="media-body text-white">
                  <p class="mb-1">Pesanan Diterima</p>
                  <h3 class="text-white"></h3>

                </div>
              </div>
            </div>
          </div>
                  </div>
                  
<div class="col-xl-3 col-xxl-4 col-lg-12 col-md-12">
  <div class="card bg-primary text-white">
    <div class="card-header pb-0 border-0">
      <h4 class="card-title text-white">PRODUK TERLARIS</h4></div>
      <div class="card-body"> 
        <div class="widget-media">
        <ul class="timeline">
         <li>
        <div class="timeline-panel">
        <div class="media mr-2">
            <img alt="image" width="50" src="/fotoproduk/converse.jpeg"></div>
        <div class="media-body">
            <h5 class="mb-1 text-white">Converse Dewasa</h5> </div>
          <div class="dropdown">
        <button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Edit</a>
            <a class="dropdown-item" href="#">Delete</a>
        </div>
        </div>
        </div> 
        </li>
        </ul>
      </div>
      </div>
      </div>

<div class="col-xl-8 col-xxl-8 col-lg-12 col-md-12">
  <div class="card">
    <div class="card-header border-0 pb-0">
      <h4 class="card-title">Pesanan Masuk </h4> </div>
      <div class="card-body">
      <div class="table-responsive">
      <table class="table table-responsive-sm mb-0">
       <thead>
        <tr>
        <th style="width:20px;">
        <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
        <input type="checkbox" class="custom-control-input" id="checkAll" required="">
        <label class="custom-control-label" for="checkAll"></label>  </div>
        </th>
        <th><strong>STATUS.</strong></th>
        <th><strong>NAMA</strong></th>
        <th><strong>TANGGAL</strong></th>
        <th><strong>BARANG</strong></th>
        <th style="width:85px;"><strong>EDIT</strong></th>
        </tr>
       </thead>
      <tbody>
        <tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
          <td><div class="custom-control custom-checkbox check-lg mr-3">
            <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
            <label class="custom-control-label" for="customCheckBox2"></label></div>
          </td>
          <td><b>1</b></td>
          <td>Sinyo</td>
          <td>01 August 2021</td>
          <td>Converse Dewasa</td>
          <td><a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
          </td>
          </tr>
      </tbody>
      </table>
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

@endsection
