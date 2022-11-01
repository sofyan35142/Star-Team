<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jualproduk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\kategori;
use App\Models\KategoriAdmin;
use App\Policies\penjualpolicy;
use App\Policies\valid;
use Illuminate\Support\Facades\Auth;

class PenjualController extends Controller
{

    public function index()
    {
        return view("UMKM.penjual");
    }

    public function profil()
    {
        return view("UMKM.profile.user");
    }

    public function daftarproduk()
    {
        $this->authorize("penjualhak", User::class);
        $data = Jualproduk::all();
        return view("UMKM.PRODUK.daftarproduk", compact("data"));
    }

    public function tambahprodukbaru()
    {
        $datakat = KategoriAdmin::all();
        $datapro = Kategori::all();
        $data = Jualproduk::with('Kategori')->paginate()                                                                    ;
        return view("UMKM.PRODUK.tambahprodukbaru", compact("data", "datapro", "datakat"));
    }

    public function jualproduk(Request $request)
    {
        // dd($request->all());
        // $data = Jualproduk::create($request->all());


        $data = Jualproduk::create([
            'nama_produk' => $request->nama_produk,
            'descproduk' => $request->descproduk,
            'kategori_produk' => $request->kategori_produk,

            'variasi' => implode(',', $request->variasi),
            'harga' => $request->harga,
            'stock' => $request->stock,
            'berat_produk' => $request->berat_produk,
            'ulp' => $request->ulp,
            'upp' => $request->upp,
            'utp' => $request->utp,
            'ekspedisi' => $request->ekspedisi,
        ]);
        if ($request->hasFile('foto_produk')) {
            $request->file('foto_produk')->move('fotoproduk/', $request->file('foto_produk')->getClientOriginalName());
            $data->foto_produk = $request->file('foto_produk')->getClientOriginalName();
            $data->save();
        }
        return redirect("/produksaya")->with('success', 'produk berhasil ditambahkan');
    }

    public function editprodukshow($id)
    {
        $data = jualproduk::find($id);
        return view("UMKM.PRODUK.editproduk", compact("data"));
    }

    public function editproduk(Request $request, $id)
    {
        $data = jualproduk::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto_produk')) {
            $request->file('foto_produk')->move('fotoproduk/', $request->file('foto_produk')->getClientOriginalName());
            $data->foto_produk = $request->file('foto_produk')->getClientOriginalName();
            $data->save();
        }
        return redirect('/produksaya');
    }
    public function deleteproduk($id)
    {
        $data = jualproduk::find($id);
        // dd($data);
        $data->delete();
        return redirect("/produksaya")->with("success", "produk sudah di hapus");
    }
    //PENGIRIMAN
    public function pesananseller()
    {
        return view("UMKM.pengiriman.pesananseller");
    }

    public function insertprofile()
    {
        return view("umkm.profile.insertprofile");
    }

    public function insert(Request $request)
    {
        $this->validate($request, [
            'nama_toko' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            // 'foto' => 'required|mimes:jpg,png,jpeg,webp,jfif',
            // 'foto_wajah' => 'required|mimes:jpg,png,jpeg,webp,jfif'
        ], [
            'nama_toko.required' => 'Isi Nama Toko',
            'foto.mimes' => 'Upload foto dengan ekstensi: jpg, jpeg, png, webp, jfif',
            'foto_wajah.required' => 'Upload foto dengan ekstensi: jpg, jpeg, png, webp, jfif',
            'foto_wajah.mimes' => 'Upload foto dengan ekstensi: jpg, jpeg, png, webp, jfif',

            // 'foto.required' => 'Upload foto dengan ekstensi: jpg, jpeg, png, webp, jfif ',
            // 'foto.mimes' => 'Upload foto dengan ekstensi: jpg, jpeg, png, webp, jfif',
            // 'foro_wajah.required' => 'Upload foto dengan ekstensi: jpg, jpeg, png, webp, jfif',
            // 'foto_wajah.required' => 'Upload foto dengan ekstensi: jpg, jpeg, png, webp, jfif',
            // 'foto_wajah.mimes' => 'Upload foto dengan ekstensi: jpg, jpeg, png, webp, jfif',

        ]);
// dd($request);
        $user = user::findOrFail(Auth::user()->id);
        $user->update([
            'username' => $request->username,
            'nama_toko' => $request->nama_toko,
            'email' => $request->email,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fototoko/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        }
        if ($request->hasFile('foto_wajah')) {
            $request->file('foto_wajah')->move('fotowajah/', $request->file('foto_wajah')->getClientOriginalName());
            $user->foto_wajah = $request->file('foto_wajah')->getClientOriginalName();
            $user->save();
        }
        // dd($user);

        return redirect("back");

    }

    public function tampilprof()
    {
        $data = User::all();
        return view('UMKM.profile.tampilprof', compact('data'));
    }
    public function changeprof(Request $request )
    {
        $user = user::findOrFail(Auth::user()->id);
        $user->update([
            'username' => $request->username,
            'nama_toko' => $request->nama_toko,
            'email' => $request->email,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,

        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fototoko/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        }
        if ($request->hasFile('foto_wajah')) {
            $request->file('foto_wajah')->move('fotowajah/', $request->file('foto_wajah')->getClientOriginalName());
            $user->foto_wajah = $request->file('foto_wajah')->getClientOriginalName();
            $user->save();
        }
        // dd($user);
        return redirect()->back();
    }

    public function spek()
    {
        return view('UMKM.PRODUK.spesifikasi');
    }
    public function pengembalian()
    {
        return view("UMKM.pengembalian");
    }
    public function tabkembali()
    {
        return view("UMKM.tabkembali");
    }
    public function aturpengiriman()
    {
        return view("UMKM.pengiriman.aturpengiriman");
    }
    public function rinciandikirim()
    {
        return view("UMKM.pengiriman.rinciandikirim");
    }
    public function rincianperludikirim()
    {
        return view("UMKM.pengiriman.rincian");
    }
    public function dikirim()
    {
        return view("UMKM.pengiriman.dikirim");
    }

    public function rincian()
    {
        return view('UMKM.beranda.rincian');
    }

}
