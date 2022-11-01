@extends("UMKM.penjual")
@section("content")
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pengatuaran Pengiriman</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <thead>
                                
                                <tr>
                                    
                                    <th>Reguler (Cashless) [Jasa Kirim Diaktifkan] [COD aktif] </th>
                                    {{-- <p>Pembeli dapat melacak status pengiriman pesanan jika menggunakan Jasa Kirim yang Didukung Slick.</p>
                                    --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        {{-- <div class="custom-control custom-switch">
                                          <label class="custom-control-label" for="customSwitches">JNE Express</label>
                                          <input type="checkbox" class="custom-control-input" id="customSwitches">
                                          
                                        </div> --}}
                                        <div class="d-flex align-items-center">
                                        <img src="/fotoeksp/jne.png" class="rounded-lg mr-1" width="24" alt=""/> 
                                        <span class="w-space-no">JNE Express</span></div>
                                       </td>
                                                
                                </tr>
                                <tr>
                                    <td><div class="d-flex align-items-center">
                                        <img src="/fotoeksp/Logo J & T Vector PNG HD.png" class="rounded-lg mr-1" width="24" alt=""/> 
                                        <span class="w-space-no">JNT Express</span></div></td>
                                                
                                </tr>
                                <tr>
                                    <td><div class="d-flex align-items-center">
                                        <img src="/fotoeksp/free.png" class="rounded-lg mr-1" width="24" alt=""/> 
                                        <span class="w-space-no">SiCepatHalu</span></div></td>
                                                
                                </tr>
                                <tr>
                                    <td><div class="d-flex align-items-center">
                                        <img src="/fotoeksp/free.png" class="rounded-lg mr-1" width="24" alt=""/> 
                                        <span class="w-space-no">SiCepatREG</span></div></td>
                                                
                                </tr>
                                <tr>
                                    <td><div class="d-flex align-items-center">
                                        <img src="/fotoeksp/free.png" class="rounded-lg mr-1" width="24" alt=""/> 
                                        <span class="w-space-no">Anteraja</span></div></td>
                                                
                                </tr>
                            </tbody>
                        </table>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
