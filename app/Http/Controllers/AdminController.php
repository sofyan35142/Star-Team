<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\homeslider;
use App\Models\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jualproduk;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view("admin.index.dashboard");
    }

    public function index()
    {
        return view("admin.index.index");
    }

    public function penjual()
    {
        return view("UMKM.penjual");
    }

     //Akun Penjual
     public function akunpenjual(){
        $data = User::where('level', 'penjual')->get();
        // dd($data);
        return view('admin.index.akunpenjual', compact('data'));
    }
    public function despenjual($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('akunpenjual')->with('success', 'Data Berhasil Di Hapus');
    }


    //PROFILE
    public function profile(Request $request)
    {
        return view('admin.profile.profileadmin');
    }
    public function ubahprofile (Request $request){
        // dd($request->all);
        $user = user::findOrFail(Auth::user()->id);
        $user -> update([
            'username'=> $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()->back();
    }
    public function ubahfoto(Request $request){
        // dd($request->all());
        $user = user::findOrFail(Auth::user()->id);
        if ($request->hasfile('foto')) {
            $request->file('foto')->move('/fotoproduk', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        }
        return redirect()->back();
    }

    public function tampilanprof($id)
    {
        $user=User::findOrFail($id);
       return view('admin.index.tampilanprof', compact('user'));
    }

    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
    public function indexpro()
    {

        $data = admin::simplePaginate(5);

        return view('admin.profile.admin', compact('data'));
    }
    public function updatepro(Request $request, $id)
    {
        $data = admin::find($id);
        $data->update([
            'username' => $request->username,
            'email' => $request->email,
        ]);
        return redirect()->route('profileadm')->with('success', 'Data Berhasil Di Update');
    }

    public $judul;
    public $subjudul;
    public $harga;
    public $link;
    public $status;
    public $foto;

    public function mount()
    {
        $this->status = 0;
    }

    public function addSlide()
    {
        $slider = new homeslider();
        $slider->judul = $this->judul;
        $slider->subjudul = $this->subjudul;
        $slider->harga = $this->harga;
        $slider->link = $this->link;
        $slider->status = $this->status;
        $slider->foto = $this->foto;
    }

    public function homeslider()
    {
        $data = homeslider::all();
        return view('admin.homeslider', compact('data'));
    }

    public function addhomeslider()
    {
        $data = homeslider::all();
        return view('admin.addhomeslider', compact('data'));
    }
    public function insertslider(Request $request)
    {

        $data=homeslider::create([
            'judul'=>$request->judul,
            'subjudul'=>$request->subjudul,
            'harga'=>$request->harga,
            'status'=>$request->status,
            'link'=>$request->link,
            'foto'=>$request->foto,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoslider', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        // dd($data);
        return redirect('/homeslider');
    }

        public function edithomeslider($id)
        {
            $data = Homeslider::findOrFail($id);
            $data = Homeslider::find($id);
            //dd($data);
    
            return view('admin.edithomeslider', compact('data'));
        }
    
}
