<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jualproduk;
use App\Models\Subkategori;
use Illuminate\Support\Str;
// use Illuminate\Foundation\Auth\User;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use App\Models\KategoriAdmin;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('pengguna.login');
    }

    public function postlogin(Request $request)
    {
        // sgfsgff
        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->level == 'admin') {
                return redirect('/dashboard');
            } elseif (Auth::user()->notelp != "-") {
                return redirect('/toko');
            } elseif (Auth::user()->level == "penjual") {
                return redirect("/tes");
            } else {
                return redirect("/toko");
            }
        }
        return redirect('/login')->with('salah', 'Email Atau Password Salah');
    }

    public function registrasi()
    {
        return view('pengguna.registrasi');
    }
    public function simpanregistrasi(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:6',
        ], [
            'username.required' => 'username harus di isi',
            'email.required' => 'Email harus di isi',
            'email' => 'email yang anda masukkan tidak valid',
            'unique' => 'email anda sudah digunakan',
            'password.required' => 'Password harus di isi',
            'password.min' => 'Password harus minimal 6 karakter',
        ]);
        User::Create([
            'username' => $request->username,
            'nama_toko' => '-',
            'level' => 'penjual',
            'email' => $request->email,
            'notelp' => '-',
            'alamat' => '-',
            'jenis_kelamin' => '-',
            'foto' => '-',
            'foto_wajah' => '-',
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }
    public function forgotpassword()
    {
        return view('pengguna.forgotpassword');
    }
    public function resetpassword()
    {
        return view('pengguna.resetpassword');
    }

    public function logout(request $Request)
    {
        // dd($request->all());
        Auth::logout();
        return redirect('/');
    }
    //landingpage
    public function landing()
    {
        $dataj = Jualproduk::Paginate(20);

        $data = KategoriAdmin::all();
        $kategori = ['0','1','2','3','4','5','6','7','8','9','10','11','12'];
        foreach ($data as $key => $value) {
            $kategori[$key] = $value->kategori;
        }
        // return $kategori;
        return view('landingpage.landing', compact(['data', 'kategori', 'dataj']));
    }
    public function tampilanproduk($id)
    {
        $produk = Jualproduk::findOrFail($id);
        return view('landingpage.detailproduk', compact('produk'));
    }

    public function blogpage(){
        $dataj = Jualproduk::Paginate(20);
        $datak = Subkategori::all();
        $data = KategoriAdmin::all();
        $kategori = ['0','1','2','3','4','5','6','7','8','9','10','11','12'];
        foreach ($data as $key => $value) {
            $kategori[$key] = $value->kategori;
        }
        // return $kategori;
        // dd($data);
        return view('landingpage.blogpage', compact(['data', 'kategori', 'dataj', 'datak']));
    }

    public function blog_detail(){
        $dataj = Jualproduk::Paginate(20);
        $datak = Subkategori::all();
        $data = KategoriAdmin::all();
        $kategori = ['0','1','2','3','4','5','6','7','8','9','10','11','12'];
        foreach ($data as $key => $value) {
            $kategori[$key] = $value->kategori;
        }
        // return $kategori;
        // dd($data);
        return view('landingpage.blog_detail', compact(['data', 'kategori', 'dataj', 'datak']));
    }

    public function keranjang(){
        $dataj = Jualproduk::Paginate(20);
        $datak = Subkategori::all();
        $data = KategoriAdmin::all();
        $kategori = ['0','1','2','3','4','5','6','7','8','9','10','11','12'];
        foreach ($data as $key => $value) {
            $kategori[$key] = $value->kategori;
        }
        return view('landingpage.keranjang', compact(['data', 'kategori', 'dataj', 'datak']));
    }

    public function halamantoko(){
        $dataj = Jualproduk::Paginate(20);
        $datak = Subkategori::all();
        $data = KategoriAdmin::all();
        $kategori = ['0','1','2','3','4','5','6','7','8','9','10','11','12'];
        foreach ($data as $key => $value) {
            $kategori[$key] = $value->kategori;
        }
        return view('landingpage.halamantoko', compact(['data', 'kategori', 'dataj', 'datak']));
    }

    public function etalasetoko(){
        $dataj = Jualproduk::Paginate(20);
        $datak = Subkategori::all();
        $data = KategoriAdmin::all();
        $kategori = ['0','1','2','3','4','5','6','7','8','9','10','11','12'];
        foreach ($data as $key => $value) {
            $kategori[$key] = $value->kategori;
        }
        return view('landingpage.etalasetoko', compact(['data', 'kategori', 'dataj', 'datak']));
    }
    public function halutama(){
        return view('Tampilan.halutama');
    }
    public function checkout(){
        return view('Tampilan.checkout');
    }
    public function syarat(){
        return view('landingpage.syarat');
    }
    public function notifikasi(){
        return view('Tampilan.notifikasi');
    }
    //page toko
    public function daftartoko(){
        return view('landingpage.daftartoko');
    }
    public function sidebarpenjual(){
        return view('landingpage.sidebarpenjual');
    }
    public function about(){
        return view('landingpage.about');
    }
    public function voucher(){
        return view('landingpage.voucher');
    }
    public function vouchertoko(){
        return view('landingpage.votoko');
    }
    public function faqs(){
        return view('landingpage.faqs');
    }
    public function return(){
        return view('UMKM.PRODUK.return');
    }
    public function halprof(){
        return view('UMKM.halprof');
    }
    public function hub(){
        return view('landingpage.hubungi');
    }
    public function favorit(){
        return view('landingpage.fav');
    }
    public function historiorder(){
        return view('order.historyorder');
    }
    public function informasiorder(){
        return view('order.informasiorder');
    }
    public function alamat(){
        return view('Tampilan.alamat');
    }
    public function profiluser(){
        return view('landingpage.pro');
    }
    public function pesanansaya(){
        return view('landingpage.pesanansaya');
    }
    public function kategorilanding(){
        return view('landingpage.kategori');
    }
    public function detailproduk(){
        return view('landingpage.detailproduk');
    }
    public function kebijakanpriv(){
        return view('landingpage.kebijakan');
    }
    public function langkah(){
        return view('landingpage.langkah');
    }
    public function parentkat(){
        return view('landingpage.parentkat');
    }
    public function pencarian(){
        return view('Tampilan.pencarian');
    }

    public function pencariantoko(){
        return view('landingpage.pencariantoko');
    }
    public function tampilankirim(){
        return view('landingpage.tampilandikirim');
    }
    public function tampilan(){
        return view('landingpage.tampilan');
    }
    public function ubahpass(){
        return view('landingpage.ubahpass');
    }
    public function flashsale(){
        return view('landingpage.flashsale');
    }
    public function berjualan(){
        return view('landingpage.caraberjuala');
    }
    public function berbelanja(){
        return view('landingpage.carabelanja');
    }
    public function kembali(){
        return view('landingpage.kembali');
    }
    public function resolusi(){
        return view('landingpage.resolusi');
    }
    public function official(){
        return view('landingpage.official');
    }
    public function syaratlayanan(){
        return view('kebijakanslick.syaratlayanan');
    }

    public function kebijakanbarang(){
        return view('kebijakanslick.kebijakanbarang');
    }

    public function persyaratanflash(){
        return view('kebijakanslick.persyaratanflashsale');
    }

    public function programgratisongkir(){
        return view('kebijakanslick.programgratisongkir');
    }

    public function pembayaran(){
        return view('landingpage.pembayaran');
    }

}
