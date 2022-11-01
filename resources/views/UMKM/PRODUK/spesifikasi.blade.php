@extends('UMKM.penjual')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Spesifikasi</h4>
                    </div>
                    <div class="card-body">
                        {{-- hp --}}
                        <form action="#" enctype="multipart/form-data" id="step-form-horizontal" class="step-form-horizontal" method="POST">
                            @csrf
                            <div>
                                <section>
                                    <div class="row">
                                        <div class="mb-3 col-12 col-sm-6">
                                            <label class="form-label">Merk</label>
                                            <div class="input-group input-group-merge">
                                              <input class="form-control" type="text" name="merek"  />
                                            </div>
                                          </div>
                                          <div class="mb-3 col-12 col-sm-6">
                                            <label class="form-label">Jenis Garansi</label>
                                            <div class="input-group input-group-merge">
                                              <input class="form-control" type="text" name="jenisgaransi"  />
                                            </div>
                                          </div>
                                          <div class="mb-3 col-12 col-sm-6">
                                            <label class="form-label">Penyimpanan</label>
                                            <div class="input-group input-group-merge">
                                              <input class="form-control" type="text" name="Penyimpanan"  />
                                            </div>
                                          </div>
                                          <div class="mb-3 col-12 col-sm-6">
                                            <label class="form-label">Masa Garansi</label>
                                            <div class="input-group input-group-merge">
                                              <input class="form-control" type="text" name="MasaGaransi"  />
                                            </div>
                                          </div>
                                          <div class="mb-3 col-12 col-sm-6">
                                            <label class="form-label">ukuran layar</label>
                                            <div class="input-group input-group-merge">
                                              <input class="form-control" type="text" name="ukuranlayar"  />
                                            </div>
                                          </div>
                                        <div class="mb-3 col-12 col-sm-6">
                                            <label class="form-label">jumlah slot kartu sim</label>
                                            <div class="input-group input-group-merge">
                                              <input class="form-control" type="text" name="jumlahslotkartusim"  />
                                            </div>
                                        </div>


                                        {{-- Sepatu --}}
                                        <div class="mb-3 col-12 col-sm-6">
                                            <label class="form-label">Merek</label>
                                            <div class="input-group input-group-merge">
                                              <input class="form-control" type="text" name="merek"  />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-12 col-sm-6">
                                            <label class="form-label">Bahan</label>
                                            <div class="input-group input-group-merge">
                                              <input class="form-control" type="text" name="Bahan"  />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-12 col-sm-6">
                                            <label class="form-label">size</label>
                                            <div class="input-group input-group-merge">
                                              <input class="form-control" type="text" name="size"  />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-12 col-sm-6">
                                            <label class="form-label">tampilan kulit</label>
                                            <div class="input-group input-group-merge">
                                              <input class="form-control" type="text" name="tampilankulit"  />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-12 col-sm-6">
                                            <label class="form-label">tipe pengikat</label>
                                            <div class="input-group input-group-merge">
                                              <input class="form-control" type="text" name="tipepengikat"  />
                                            </div>
                                        </div>




                                </section>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
