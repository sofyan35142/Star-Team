@extends("UMKM.PRODUK.extendproduk")
@section("konten")

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Multilingual -->
<div class="card">
  <h5 class="card-header">Transaksi</h5>
  <div class="card-datatable table-responsive" style="margin: 20px">
    <table id="table" class="dt-multilingual table border-top">
      <thead>
        <tr>
          <th>No </th>
          <th>Nama barang</th>
          <th>Jumlah</th>
          <th>Jenis pembayaran</th>
          <th>Total pembayaran</th>
          <th>tanggal bayar</th>
        </tr>
        <tbody>
        <tr>
            <td>1</td>
            <td>Action figur</td>
            <td>2</td>
            <td>COD</td>
            <td>Rp.20.000</td>
            <td>02-10-2022</td>
        </tr>
        </tbody>
      </thead>
    </table>
  </div>
</div>
<!--/ Multilingual -->
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::get('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>

@section('footer_bawah')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
@endsection
</body>
<script>
    $('.deleteeksp').click(function() {
        var ekspid = $(this).attr('data-id');
        var eksp = $(this).attr('data-eksp');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "data ekspayaran " + eksp + "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deleteeksp/" + ekspid + ""
                Swal.fire(
                    'Terhapus!',
                    'Data ekspayaran ' + eksp + ' terhapus',
                    'success'
                )
            }
        })
    });
</script>
@endsection
