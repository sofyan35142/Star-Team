<?php


use App\Http\Controllers\MenuController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenjualController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Pengiriman;
use App\Models\Pembayaran;
use App\Models\KategoriAdmin;
use App\Models\Jualproduk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });
//list toko
Route::get('/daftartoko', [LoginController::class, 'daftartoko'])->name('daftartoko');
Route::get('/sidebarpenjual', [LoginController::class, 'sidebarpenjual'])->name('sidebarpenjual');

Route::get('/tampilanproduk/{id}', [LoginController::class, 'tampilanproduk'])->name('tampilanproduk');
Route::get('/checkout', [LoginController::class, 'checkout'])->name('checkout');
Route::get('/notifikasi', [LoginController::class, 'notifikasi'])->name('notifikasi');



Route::get('/tampilanproduk/{id}', [LoginController::class, 'tampilanproduk'])->name('tampilanproduk');
Route::get('/checkout', [LoginController::class, 'checkout'])->name('checkout');



Route::get('/tampilanproduk/{id}', [LoginController::class, 'tampilanproduk'])->name('tampilanproduk');
Route::get('/checkout', [LoginController::class, 'checkout'])->name('checkout');

Route::get('/tampilanproduk/{id}', [LoginController::class, 'tampilanproduk'])->name('tampilanproduk');
Route::get('/checkout', [LoginController::class, 'checkout'])->name('checkout');




Route::get('/tampilanproduk/{id}', [LoginController::class, 'tampilanproduk'])->name('tampilanproduk');
Route::get('/checkout', [LoginController::class, 'checkout'])->name('checkout');
Route::get('/', [LoginController::class, 'halutama'])->name('halutama');

//ROUTE LANDING JUKIK
    //BLOG
Route::get('/blog', [LoginController::class, 'blogpage'])->name('blog');
Route::get('/blog-detail', [LoginController::class, 'blog_detail'])->name('blog-detail');

    //keranjang
Route::get('/keranjang', [LoginController::class, 'keranjang'])->name('keranjang');
    //halaman toko
Route::get('/halamantoko', [LoginController::class, 'halamantoko'])->name('halamantoko');

Route::get('/etalasetoko', [LoginController::class, 'etalasetoko'])->name('etalasetoko');






Route::get('/tampilanproduk/{id}', [LoginController::class, 'tampilanproduk'])->name('tampilanproduk');
Route::get('/checkout', [LoginController::class, 'checkout'])->name('checkout');
Route::get('/syarat', [LoginController::class, 'syarat'])->name('syarat');






Route::get('/homeslider', [AdminController::class, 'homeslider'])->name('homeslider');
Route::get('/addhomeslider', [AdminController::class, 'addhomeslider'])->name('addhomeslider');
Route::post('/inserslider', [AdminController::class, 'inserslider'])->name('inserslider');
Route::get('/edithomeslider', [AdminController::class, 'edithomeslider'])->name('edithomeslider');

Route::get('/change', [PenjualController::class, 'change'])->name('change');
Route::post('/changeprof', [PenjualController::class, 'changeprof'])->name('changeprof');

Route::get('/spek', [PenjualController::class, 'spek'])->name('spek');
Route::get(
    '/iklan',
    function () {
        return view('admin.iklan.iklan');
    }
);

Route::get('/about', [LoginController::class, 'about'])->name('about');
Route::get('/voucher', [LoginController::class, 'voucher'])->name('voucher');
Route::get('/vouchertoko', [LoginController::class, 'vouchertoko'])->name('vouchertoko');
Route::get('/faqs', [LoginController::class, 'faqs'])->name('faqs');
Route::get('/halprof', [LoginController::class, 'halprof'])->name('halprof');
Route::get('/return', [LoginController::class, 'return'])->name('return');
Route::get('/hub', [LoginController::class, 'hub'])->name('hub');
Route::get('/favorit', [LoginController::class, 'favorit'])->name('favorit');
Route::get('/historiorder', [LoginController::class, 'historiorder'])->name('historiorder');
Route::get('/informasiorder', [LoginController::class, 'informasiorder'])->name('informasiorder');
Route::get('/alamat', [LoginController::class, 'alamat'])->name('alamat');
Route::get('/profiluser', [LoginController::class, 'profiluser'])->name('profiluser');
Route::get('/kategorilanding', [LoginController::class, 'kategorilanding'])->name('kategorilanding');
Route::get('/detailproduk', [LoginController::class, 'detailproduk'])->name('detailproduk');
Route::get('/kebijakanpriv', [LoginController::class, 'kebijakanpriv'])->name('kebijakanpriv');
Route::get('/langkah', [LoginController::class, 'langkah'])->name('langkah');
Route::get('/parentkat', [LoginController::class, 'parentkat'])->name('parentkat');
Route::get('/pencarian', [LoginController::class, 'pencarian'])->name('pencarian');
Route::get('/pesanansaya', [LoginController::class, 'pesanansaya'])->name('pesanansaya');
Route::get('/pencariantoko', [LoginController::class, 'pencariantoko'])->name('pencariantoko');
Route::get('/kembali', [LoginController::class, 'kembali'])->name('kembali');
Route::get('/resolusi', [LoginController::class, 'resolusi'])->name('resolusi');
Route::get('/official', [LoginController::class, 'official'])->name('official');
Route::get('/kembali', [LoginController::class, 'kembali'])->name('kembali');
Route::get('/resolusi', [LoginController::class, 'resolusi'])->name('resolusi');
Route::get('/official', [LoginController::class, 'official'])->name('official');



Route::get('/dashboard', function () {
    $penjual = User::where('level', 'penjual')->count();
    $pengiriman = Pengiriman::count();
    $pembayaran = Pembayaran::count();
    $kategori = KategoriAdmin::count();

    return view('admin.index.dashboard', compact('penjual', 'pengiriman', 'pembayaran', 'kategori'));
});



Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    //profil admin
    Route::get('/profileadm', function () {
        return view('admin.profile.profileadmin');
    });
    Route::get('/tes', function () {
        return view('umkmce.profile.afterloginumkm');
    });
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/ubahfoto', [AdminController::class, 'ubahfoto'])->name('ubahfoto');
    Route::post('/ubahprofile', [AdminController::class, 'ubahprofile'])->name('ubahprofile');
    Route::get('/rubahpassword', [AdminController::class, 'rubahpassword'])->name('rubahpassword');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    //pengiriman
    Route::get('/pengiriman', [MenuController::class, 'index'])->name('pengiriman');
    Route::get('/pembayaran', [MenuController::class, 'indexpemb'])->name('pembayaran');
    Route::get('/addpengiriman', [MenuController::class, 'create'])->name('addpengiriman');
    Route::post('/inserteksp', [MenuController::class, 'store'])->name('inserteksp');
    Route::get('/addpembayaran', [MenuController::class, 'createpemb'])->name('addpembayaran');
    Route::post('/insertpemb', [MenuController::class, 'storepemb'])->name('insertpemb');
    Route::get('/tampilpengiriman/{id}', [MenuController::class, 'show'])->name('tampilpengiriman');
    Route::post('/updatepengiriman/{id}', [MenuController::class, 'update'])->name('updatepengiriman');
    Route::get('/tampilpembayaran/{id}', [MenuController::class, 'showpemb'])->name('tampilpembayaran');
    Route::post('/updatepembayaran/{id}', [MenuController::class, 'updatepemb'])->name('updatepembayaran');
    Route::get('/deletepemb/{id}', [MenuController::class, 'destroypemb'])->name('deletepemb');

    //AKUNPENJUAL
    Route::get('/akunpenjual', [AdminController::class, 'akunpenjual'])->name('akunpenjual');
    Route::get('/despenjual/{id}', [AdminController::class, 'despenjual'])->name('despenjual');

    Route::get('/deleteeksp/{id}', [MenuController::class, 'destroy'])->name('deleteeksp');
    Route::get('/deletepemb/{id}', [MenuController::class, 'destroypemb'])->name('deletepemb');

    //KATEGORI
    Route::get('/kategoriadmin', [KategoriController::class, 'indexadmin'])->name('kategoriadmin');
    Route::get('/addkategori', [KategoriController::class, 'createadmin'])->name('addkategori');
    Route::post('/insertkat', [KategoriController::class, 'storekat'])->name('insertkat');
    Route::get('/deletekat/{id}', [KategoriController::class, 'destroykat'])->name('deletekat');

    //SUBKATEGORI
    Route::get('/subkategori', [KategoriController::class, 'indexadminsub'])->name('subkategori');
    Route::get('/addsubkategori', [KategoriController::class, 'createadminsub'])->name('addsubkategori');
    Route::post('/insertsubkat', [KategoriController::class, 'storesubkat'])->name('insertsubkat');
    Route::get('/deletesubkat/{id}', [KategoriController::class, 'destroysubkat'])->name('deletesubkat');

    //PROFILE


    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/ubahfoto', [AdminController::class, 'ubahfoto'])->name('ubahfoto');
    Route::post('/ubahprofile', [AdminController::class, 'ubahprofile'])->name('ubahprofile');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/ubahfoto', [AdminController::class, 'ubahfoto'])->name('ubahfoto');
    Route::post('/ubahprofile', [AdminController::class, 'ubahprofile'])->name('ubahprofile');
    Route::get('/index', [AdminController::class, 'index'])->name('index');
});

//ROUTE LOGIN
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware("guest");
Route::get('/logout', [LoginController::class, 'logout'])->name("logout");
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi')->middleware('guest');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/forgotpassword', [LoginController::class, 'forgotpassword'])->name('forgotpassword');
Route::get('/resetpassword', [LoginController::class, 'resetpassword'])->name('resetpassword');
Route::post('/simpanreset', [LoginController::class, 'simpanreset'])->name('simpanreset');
Route::get('/syaratkebijakan', [LoginController::class, 'syaratlayanan'])->name('syaratlayanan');


//Route Landing page
Route::group([], function () {
    // Route::get('/', [LoginController::class, 'landing'])->name('landing');

    Route::get('/tampilanproduk/{id}', [LoginController::class, 'tampilanproduk'])->name('tampilanproduk');


});




//ROUTE PENJUAL
Route::get('/penjual', [PenjualController::class, 'index'])->name('index');
Route::group(['middleware' => ['auth', 'ceklevel:admin,penjual']], function () {
    //dashboard
    Route::get('/toko', [KategoriController::class, 'show'])->name('toko');
    Route::get('/toko', function () {
        $jumlahproduk = jualproduk::count();
        //     $pesananmasuk = jualproduk::count();
        //     $pesanandikirim = jualproduk::count();
        //     $pesananditerima = jualproduk::count();

        return view('UMKM.beranda.toko', compact('jumlahproduk'),);
    });
    //produk
    Route::get('/produksaya', [PenjualController::class, 'daftarproduk'])->name('daftarproduk');
    Route::get('/tambahprodukbaru', [PenjualController::class, 'tambahprodukbaru'])->name('tambahprodukbaru');
    Route::post('/jualproduk', [PenjualController::class, 'jualproduk'])->name('jualproduk');
    Route::get('/editprodukshow/{id}', [PenjualController::class, 'editprodukshow'])->name('editprodukshow');
    Route::post('/editproduk/{id}', [PenjualController::class, 'editproduk'])->name('editproduk');
    Route::get('/deleteproduk/{id}', [PenjualController::class, 'deleteproduk']);
    //profil
    Route::get('/user', function () {
        return view('UMKM.profile.user');
    });
    Route::get('/tes', function () {
        return view('umkm.profile.afterloginumkm');
    });
    Route::post('/insert', [PenjualController::class, 'insert'])->name('insert');
    Route::get('/tampilanprof/{id}', [AdminController::class, 'tampilanprof'])->name('tampilanprof');
    Route::get('/tampilprof', [PenjualController::class, 'tampilprof'])->name('tampilprof');

    //KATEGORI
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategoricreate', [KategoriController::class, 'create'])->name('kategoricreate');
    Route::post('/kategoristore', [KategoriController::class, 'store'])->name('kategoristore');
    Route::get('/kategoriedit/{id}', [KategoriController::class, 'edit'])->name('kategoriedit');
    Route::post('/kategoriupdate/{id}', [KategoriController::class, 'update'])->name('kategoriupdate');
    Route::get('/kategorihapus/{id}', [KategoriController::class, 'destroy'])->name('kategorihapus');
    //Profile
    Route::get('/useredit', [KategoriController::class, 'edituser'])->name('useredit');
    Route::post('/userupdate', [KategoriController::class, 'updateuser'])->name('userupdate');


    Route::post('/pilih', [KategoriController::class, 'pilih'])->name('pilih');
    Route::get('/pilihproduk', [KategoriController::class, 'pilihproduk'])->name('pilihproduk');
    Route::get('/hapuspilih/{id}', [KategoriController::class, 'hapuspilih'])->name('hapuspilih');

    //PENGIRIMAN
    Route::get('/pesananseller', [PenjualController::class, 'pesananseller'])->name('pesananseller');
    Route::get('/aturpengiriman', [PenjualController::class, 'aturpengiriman'])->name('aturpengiriman');

    Route::get('/pengembalian', [PenjualController::class, 'pengembalian'])->name('pengembalian');
    Route::get('/tabkembali', [PenjualController::class, 'tabkembali'])->name('tabkembali');
    Route::get('/dikirim', [PenjualController::class, 'dikirim'])->name('dikirim');
    Route::get('/rincianperludikirim', [PenjualController::class, 'rincianperludikirim'])->name('rincianperludikirim');
    Route::get('/rinciandikirim', [PenjualController::class, 'rinciandikirim'])->name('rinciandikirim');

});
