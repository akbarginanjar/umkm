<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/stuktur-organisasi', function (){
    return view('profil.stuktur_organisasi');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/sejarah',function () {
    return view('profil.sejarah');
});
Route::get('/visi',function () {
    return view('profil.visi');
});
Route::get('/tugas',function () {
    return view('profil.tugas');
});
Route::get('/regulasi', function () {
    return view('profil.regulasi');
});
Route::get('/profil-mentri', function () {
    return view('profil.profil_mentri');
});


Route::get('/siaran_pers', function () {
    return view('berita.siaran_pers');
});
Route::get('/warta_umkm', function () {
    return view('berita.warta_umkm');
});
Route::get('/galeri_poto', function () {

    return view('berita.galeri_poto');
});
Route::get('/perngarusutamaan', function () {
    return view('berita.perngarusutamaan');
});
Route::get('/gugus_covid', function () {
    return view('berita.gugus');
});
Route::get('/pemulihan', function () {
    return view('berita.pemulihan_ekonomi');
});
Route::get('/reformasi', function () {
    return view('berita.reformasi');
});
Route::get('/isu', function () {
    return view('berita.hoak');
});



Route::get('/produk_hukum', function () {
    return view('regulasi.produk_hukum');
});
Route::get('/paparan', function () {
    return view('regulasi.paparan');
});


Route::get('/kumkm_rangka', function () {
    return view('publikasi.kumkm_rangka');
});
Route::get('/laporan_keuangan', function () {
    return view('publikasi.laporan_keuangan');
});
Route::get('/data_koprasi', function () {
    return view('publikasi.data_koprasi');
});
Route::get('/data_umkm', function () {
    return view('publikasi.data_umkm');
});
Route::get('/sakip', function () {
    return view('publikasi.sakip');
});
Route::get('/e-magazine', function () {
    return view('publikasi.e-magazine');
});
Route::get('/monitoring', function () {
    return view('publikasi.monitoring_media');
});
Route::get('/hari_koprasi', function () {
    return view('publikasi.hari_koprasi');
});
Route::get('/alamat', function () {
    return view('publikasi.alamat');
});
Route::get('/rapat', function () {
    return view('publikasi.rapat');
});





// pengumuman
Route::get('/kelembagaan', function () {
    return view('pengumuman.kelembagaan');
});
Route::get('/kepegawaian', function () {
    return view('pengumuman.kepegawaian');
});
Route::get('/kegiatan', function () {
    return view('pengumuman.kegiatan');
});
Route::get('/umkm', function () {
    return view('umkm');
});
Route::get('/detail_umkm', function () {
    return view('detail-umkm');
});


// Route::get('/login', function () {
//     return view('login');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
