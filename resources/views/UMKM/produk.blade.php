@extends('UMKM.penjual')

@section('content')

<head>
    @include("koneksi.css")
</head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />

<div class="content-wrapper">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">

      <h4 class="fw-bold py-3 mb-4">Produk yang anda jual<span class="text-muted fw-light"><button class="btn btn-primary btn-lg" data-bs-toggle="modal"
        data-bs-target="#jualprodukform" style="float: right" type="button">Jual Produk</button></span>
      </h4>
      <!-- Grid Card -->
      {{-- <h6 class="pb-1 mb-4 text-muted">Grid Card</h6> --}}
      <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
          @foreach ($data as $produk )
          <div class="col">
              <div class="card h-100">
                  <img class="card-img-top"
                      src="{{ asset('fotoproduk/'. $produk->foto_produk) }}"
                      alt="Card image cap" height="200px" />
                  <div class="card-body">
                      <h5 class="card-title">Nama Produk: {{$produk->nama_produk}}</h5>
                      <p class="card-text">Stock: {{$produk->stock}} <br> Harga: {{$produk->harga}}
                      </p>
                      <button data-bs-toggle="modal"
                      data-bs-target="#jualprodukformedit{{$produk->id_produk}}" class="btn btn-primary">Edit</button>
                      <a type="button" class="btn btn-danger delete" data-id="{{$produk->id_produk}}" data-nama="{{$produk->nama_produk}}" href="#">Hapus</a>
                  </div>
              </div>
          </div>
          <div class="modal fade" id="jualprodukformedit{{$produk->id_produk}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3>Edit produk anda</h3>
                        </div>
                        <form id="editUserForm" action="/editproduk/{{$produk->id_produk}}" class="row g-3" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Masukkan nama produk" aria-describedby="floatingInputHelp" name="nama_produk" value="{{$produk->nama_produk}}" />
                                    <label for="floatingInput">Nama Produk</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="Masukkan " aria-describedby="floatingInputHelp" name="stock" value="{{$produk->stock}}"/>
                                    <label for="floatingInput">Stock</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="Masukkan harga" aria-describedby="floatingInputHelp" name="harga" value="{{$produk->harga}}"/>
                                    <label for="floatingInput">Harga</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <img src="{{asset("fotoproduk/" . $produk->foto_produk)}}" alt="pap" width="100px" height>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="inputGroupFile02" name="foto_produk">
                                  </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1 ">Submit</button>
                                <button type="reset" class="btn btn-label-secondary"
                                    data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
          @endforeach
      </div>
  </div>
</div>
<div class="modal fade" id="jualprodukform" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
      <div class="modal-content p-3 p-md-5">
          <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal"
                  aria-label="Close"></button>
              <div class="text-center mb-4">
                  <h3>Tambahkan produk yang ingin dijual</h3>
              </div>
              <form id="editUserForm" action="/jualproduk" class="row g-3" enctype="multipart/form-data" method="POST">
                  @csrf
                  <div class="col-12">
                      <div class="form-floating">
                          <input type="text" class="form-control" id="floatingInput" placeholder="Masukkan nama produk" aria-describedby="floatingInputHelp" name="nama_produk" />
                          <label for="floatingInput">Nama Produk</label>
                        </div>
                  </div>
                  <div class="col-12">
                      <div class="form-floating">
                          <input type="number" class="form-control" id="floatingInput" placeholder="Masukkan " aria-describedby="floatingInputHelp" name="stock" />
                          <label for="floatingInput">Stock</label>
                        </div>
                  </div>
                  <div class="col-12">
                      <div class="form-floating">
                          <input type="number" class="form-control" id="floatingInput" placeholder="Masukkan harga" aria-describedby="floatingInputHelp" name="harga" />
                          <label for="floatingInput">Harga</label>
                        </div>
                  </div>
                  <div class="col-12">
                      <div class="input-group">
                          <input type="file" class="form-control" id="inputGroupFile02" name="foto_produk">
                        </div>
                  </div>
                  <div class="col-12 text-center">
                      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                      <button type="reset" class="btn btn-label-secondary"
                          data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
@include("koneksi.js")
<script>
    @if(Session::get('succes'))
    toastr.success("{{ Session::get('succes') }}")
    @endif
    @if(Session::get('delete'))
    toastr.error("{{ Session::get('delete') }}")
    @endif
</script>
<script>
    $('.delete').click(function() {
        var dapid = $(this).attr('data-id');
        var danam = $(this).attr('data-nama');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "data laptop dengan merk " + danam + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deleteproduk/" + dapid + ""
                Swal.fire(
                    'Terhapus!',
                    'Data dengan merk ' + danam + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>
@endsection
