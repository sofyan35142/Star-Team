<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\jualproduk;
use App\Models\KategoriAdmin;
use App\Models\Subkategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kategori::simplePaginate(5);
        return view('UMKM.kategori.form', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('UMKM.kategori.tambahkategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori' => 'required',
        ]);
        $data = kategori::create([
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('kategori')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(kategori $kategori)
    {
        // $this->authorize("penjualhak", User::class);
        return view('UMKM.beranda.toko');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = kategori::find($id);    
        return view('UMKM.kategori.editkategori', compact('data'));
    }

    public function edituser($id)
    {
        $data = kategori::find($id);
        return view('UMKM.profile.user', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Kategori::find($id);
        $data->update([
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('kategori')->with('success', 'Data Berhasil Di Update');
    }

    public function updateuser(Request $request, $id)
    {
        $data = Kategori::find($id);
        $data->update([
            'username' => $request->username,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'email' => $request->email,
        ]);
        return redirect()->route('profile')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $kategori = kategori::find($id);
        $kategori->delete();
        return redirect()->route('kategori')->with('success', 'Data Berhasil Dihapus');
    }


    public function indexadmin()
    {
        $data = KategoriAdmin::all();
        return view('admin.kategori.kategori', compact(['data']));
    }
    public function createadmin()
    {

        return view('admin.kategori.tambahkategori');
    }
    public function storekat(Request $request)
    {
        $this->validate($request, [
            'kategori' => 'required',
        ]);
        $data = KategoriAdmin::create([
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('kategoriadmin')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function destroykat($id)
    {
        $data = KategoriAdmin::find($id);
        $data->delete();
        return redirect()->route('kategoriadmin')->with('success', 'Data Berhasil Di Hapus');
    }

    public function pilih()
    {
        $data = jualproduk::all();
        return view('UMKM.kategori.pilihproduk', compact(['data']));
    }


    public function pilihproduk(Request $request)
    {
        $data = jualproduk::simplePaginate(5);
        return view('UMKM.kategori.tambahproduk', compact(['data']));
    }

    public function hapuspilih($id)
    {
        $data = jualproduk::find($id);
        $data->delete();
        return redirect()->route('produk')->with('success', 'Data Berhasil Di Hapus');
    }

    public function indexadminsub()
    {
        $datakategori = KategoriAdmin::all();
        $data = Subkategori::with('kategori')->paginate();
        return view('admin.kategori.subkategori', compact(['data', 'datakategori']));
    }
    public function createadminsub()
    {
        $datakategori = KategoriAdmin::all();
        $data = Subkategori::with('kategoris')->paginate();
        // dd($datakategori);
        return view('admin.kategori.tambahsubkategori', compact(['data', 'datakategori']));
    }
    public function storesubkat(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'kategori_id' => 'required',
            'subkategori' => 'required',
        ]);
        // $data = Subkategori::create([
        //     'kategori_id' => $request->kategori_id,
        //     'subkategori' => $request->subkategori,
        // ]);
        $data = Subkategori::create($request->all());
        // dd($data);
        return redirect()->route('subkategori')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function destroysubkat($id)
    {
        $data = Subkategori::find($id);
        $data->delete();
        return redirect()->route('subkategori')->with('success', 'Data Berhasil Di Hapus');
    }
}
