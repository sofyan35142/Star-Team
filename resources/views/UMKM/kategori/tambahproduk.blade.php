@extends("UMKM.PRODUK.extendproduk")
@section("konten")
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pilih Produk</h4>
                    </div>
                    <div class="card-body">
                        <form action="/pilih" enctype="multipart/form-data" id="step-form-horizontal" class="step-form-horizontal" method="POST">
                            @csrf
                            <div>
                                <section>
                                    <div class="row">


                                        <div class="table-responsive">
                                            <table class="table table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle">
                                                            <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkAll">
                                    <label class="custom-control-label" for="checkAll"></label>
                                  </div>
                                                        </th>
                                                        <th class="align-middle">Nama Produk</th>
                                                        <th class="align-middle" style="min-width: 12.5rem;">Harga</th>
                                                        <th class="align-middle">Stok</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tr>
                                                
                                  @foreach ($data as $dp)
                                  <tbody id="orders">
                                    <tr class="btn-reveal-trigger">
                                        <td class="py-2">
                                            <div class="custom-control custom-checkbox checkbox-success">
                    <input type="checkbox" class="custom-control-input" id="checkbox">
                    <label class="custom-control-label" for="checkbox"></label>
                  </div>

                               <td> {{ $dp->nama_produk }} </td>
                               <td> {{ $dp->stock }} </td>
                               <td> {{ $dp->harga }} </td>
                              
                            </tr>
                            @endforeach



                                                </tbody>
                                            </table>
                                        </div>

                            </div>
                                    </div>
                                </section>
                                <button type="submit" class="btn btn-primary">Konfirmasi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
