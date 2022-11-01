@extends("UMKM.penjual")
@section("content")
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
          <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Perlu Dikirim</h4>
                            </div>
                             <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No. </th>
                                                <th>Produk</th>
                                                <th>Harga Total</th>
                                                <th>Status </th>
												<th>Semua Jasa Kirim</th>
												<th>Aksi </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><img src="fotoproduk/jamtangan.jfif"  alt="Jam Tangan" width="100px">       Jam Tangan</td></td>
                                                <td>Rp. 46.000</td>
                                                <td>Perlu Dikirim</td>
                                                <td>Regular (Cashless)</td>
                                                <td><a href="#">Atur Pengiriman</a></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
          </div>
    </div>
</div>
@endsection
