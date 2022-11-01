@extends("UMKM.PRODUK.extendproduk")
@section("konten")
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->

        <div class="row">
          <div class="col-lg-12">
              <div class="card">

                  <div class="card-body">
                    <div class="card-header">
                        <h4 class="card-title">Daftar</h4>
                    </div>
                   
                      <div class="table-responsive">
                          <table class="table table-sm mb-0">
                              <thead>
                                  <tr>
                                    
                                      <th class="align-middle">Nama Produk</th>
                                      <th class="align-middle" style="min-width: 12.5rem;">Harga</th>
                                      <th class="align-middle">Stok</th>
                                      <th class="align-middle">Aksi</th>
                                      <th class="no-sort"></th>
                                  </tr>
                              </thead>
                             

                @foreach ($data as $dp)
                                    </td>
                                     <td> {{ $dp->nama_produk }} </td>
                                     <td> {{ $dp->stock }} </td>
                                     <td> {{ $dp->harga }} </td>
                                     <td>  <a href="#" class="btn btn-danger delete">Hapus</a>
                                     </td>
                                  </tr>
                                  @endforeach

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
