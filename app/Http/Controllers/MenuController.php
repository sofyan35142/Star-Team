<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function back(){
        return back();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengiriman::simplePaginate(5);
        
        return view('admin.menu.pengiriman', compact('data'));
    }
    public function indexpemb()
    {

        $datapemb = Pembayaran::simplePaginate(5);
        return view('admin.menu.pembayaran', compact('datapemb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.tambahpengiriman');
    }
    public function createpemb()
    {
        return view('admin.menu.tambahpembayaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'nama_eksp' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoeksp/', $request->file('foto')->getClientOriginalName());
            $data = Pengiriman::create([
                'nama_eksp' => $request->nama_eksp,
                'foto' => $request->file('foto')->getClientOriginalName(),
            ]);
        } else {
            $data = Pengiriman::create([
                'nama_eksp' => $request->nama_eksp,

            ]);
        }
        return redirect()->route('pengiriman')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function storepemb(Request $request)
    {
        $this->validate($request, [
            'nama_pemb' => 'required',
            'foto_pemb' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ]);

        if ($request->hasFile('foto_pemb')) {
            $request->file('foto_pemb')->move('fotopemb/', $request->file('foto_pemb')->getClientOriginalName());
            $data = Pembayaran::create([
                'nama_pemb' => $request->nama_pemb,
                'foto_pemb' => $request->file('foto_pemb')->getClientOriginalName(),
            ]);
        } else {
            $data = Pembayaran::create([
                'nama_pemb' => $request->nama_pemb,

            ]);
        }

        return redirect()->route('pembayaran')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengiriman  $pengiriman
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $data = Pengiriman::findOrFail($id);
    //     $data = Pengiriman::find($id);
    //     //dd($data);

    //     return view('admin.menu.tampilpengiriman', compact('data'));
    // }
    // public function showpemb($id)
    // {
    //     $datapemb = Pembayaran::findOrFail($id);
    //     $datapemb = Pembayaran::find($id);
    //     //dd($data);

    //     return view('admin.menu.tampilpembayaran', compact('datapemb'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengiriman  $pengiriman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengiriman $pengiriman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengiriman  $pengiriman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pengiriman::find($id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoeksp/', $request->file('foto')->getClientOriginalName());
            $namafoto = $request->file('foto')->getClientOriginalName();
            $data->update([
                'foto' => $namafoto,
                'nama_eksp' => $request->nama_eksp,
            ]);
        } else {
            $data->update([
                //'foto' => request->foto
                'nama_eksp' => $request->nama_eksp,
            ]);
        }
        return redirect()->route('pengiriman')->with('success', 'Data Berhasil Di Update');
    }
    public function updatepemb(Request $request, $id)
    {
        $datapemb = Pembayaran::find($id);
        if ($request->hasFile('foto_pemb')) {
            $request->file('foto_pemb')->move('fotopemb/', $request->file('foto_pemb')->getClientOriginalName());
            $namafoto = $request->file('foto_pemb')->getClientOriginalName();
            $datapemb->update([
                'foto_pemb' => $namafoto,
                'nama_pemb' => $request->nama_pemb,
            ]);
        } else {
            $datapemb->update([
                //'foto' => request->foto
                'nama_pemb' => $request->nama_pemb,
            ]);
        }
        return redirect()->route('pembayaran')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengiriman  $pengiriman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pengiriman::find($id);
        $data->delete();
        return redirect()->route('pengiriman')->with('success', 'Data Berhasil Di Hapus');
    }

    public function destroypemb($id)
    {
        $data = Pembayaran::find($id);
        $data->delete();
        return redirect()->route('pembayaran')->with('success', 'Data Berhasil Di Hapus');
    }
}

