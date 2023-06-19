<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\SingupController;
use App\Http\Controllers\DucapilController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RantingController;
use App\Http\Controllers\RedaksiController;
use App\Http\Controllers\NamedesaController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PenganduanController;
use App\Http\Controllers\DatakeuaganController;
use App\Http\Controllers\DatapendudukController;
use App\Http\Controllers\DatapengaduanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/lapor', function(){
//     return view('pages.Lapor.lapor');
// });
// Route::get('/penjabat', function(){
//     return view('pages.Profil.penjabat');
// });
// Route::get('/Visi Misi', function(){
//     return view('pages.Profil.visiMisi');
// });
Route::get('/galery', function(){
    return view('pages.Galery.foto');
});
// Route::get('/berita_lengkap', function(){
//     return view('pages.Program.agenda');
// ->middleware(['auth']);
// });


Route::get('/singin', [LoginController::class, 'index'])->name('login');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware(['auth']);
// Route::get('/dashboard', [HomeController::class, 'NameDesa']);
// Route::get('/dashboard/Home/nameDs', [HomeController::class, 'NameDesa']);
Route::get('/dashboard/Profil/penjabat', [HomeController::class, 'jabatan']);
Route::get('/dashboard/Profil/organisasi', [HomeController::class, 'organisasi']);
Route::get('/dashboard/Profil/visi&misi', [HomeController::class, 'visi_misi']);
Route::get('/dashboard/Setting/singup', [HomeController::class, 'singup']);
Route::get('/dashboard/Berita/berita', [HomeController::class, 'berita']);
Route::get('/dashboard/Home/nameDs', [HomeController::class, 'NameDesa']);
Route::get('/dashboard/Program/agenda', [HomeController::class, 'agenda']);
Route::get('/dashboard/Program/program', [HomeController::class, 'program']);
Route::get('/dashboard/Galery/foto', [HomeController::class, 'foto']);
Route::get('/dashboard/Galery/video', [HomeController::class, 'videoS']);
Route::get('/dashboard/Media/datapengaduan', [HomeController::class, 'Datapengadu']);


Route::post('/post_login', [LoginController::class, 'post_login'])->name('post_login');

Route::post('/post-nameDs', [NamedesaController::class, 'store']);
Route::post('/post-home', [HomeController::class, 'store']);
Route::post('/post-penjabat',[JabatanController::class, 'store']);
Route::post('/post-organisasi',[OrganisasiController::class, 'store']);
Route::post('/post-visi&misi',[VisimisiController::class, 'store']);
Route::post('/post-berita',[BeritaController::class, 'store']);
Route::post('/post-agenda',[AgendaController::class, 'store']);
Route::post('/post-program',[ProgramController::class, 'store']);
Route::post('/post-foto',[GaleryController::class, 'store']);
Route::post('/post-video',[VideoController::class, 'store']);

Route::post('/post-pengadu', [PenganduanController::class, 'store']);

Route::post('/post-singup', [SingupController::class, 'store']);

Route::post('/post-keuangan', [DatakeuaganController::class, 'store']);





Route::get('/lagout', [LoginController::class, 'logout'])->name('lagout');
Route::post('/delete_desa/{id}', [NamedesaController::class, 'destroy_desa']);
Route::post('/delete_home/{id}', [HomeController::class, 'delete_home']);
Route::post('/delete_jabatan/{id}', [JabatanController::class, 'destroy_jabatan']);
Route::post('/delete_organisasi/{id}', [OrganisasiController::class, 'destroy_organisasi']);
Route::post('/delete_visimisi/{id}', [VisimisiController::class, 'destroy_visimisi']);
Route::post('/delete_berita/{id}', [BeritaController::class, 'destroy_berita']);
Route::post('/delete_agenda/{id}', [AgendaController::class, 'destroy_agenda']);
Route::post('/delete_program/{id}', [ProgramController::class, 'destroy_program']);
Route::post('/delete_foto/{id}', [GaleryController::class, 'destroy_foto']);
Route::post('/delete_video/{id}', [VideoController::class, 'destroy_video']);
Route::post('/delete_pengaduan/{id}', [PenganduanController::class, 'destroy_pengaduan']);


Route::post('/ratings', [RantingController::class, 'store'])->name('ratings.store');

Route::get('/', [HomeController::class, 'home']);
//Route::get('/', [NamedesaController::class, 'index']);
Route::get('/redaksi', [RedaksiController::class, 'index'])->name('redaksi');
Route::get('/pengaduan', [PenganduanController::class, 'index'])->name('pengaduan');
Route::get('/foto', [GaleryController::class, 'index'])->name('foto');
Route::get('/video', [VideoController::class, 'index'])->name('video');

// Route::get('/data-pengaduan', [DatapengaduanController::class, 'index'])->name('data-pengaduan');

Route::get('/tampildata', [DatapengaduanController::class, 'datafile']);
Route::get('/tampildata/{id}', [DatapengaduanController::class, 'downloaddata']);

Route::get('/data_penduduk', [DatapendudukController::class, 'index']);
Route::get('/data_keuagan', [DatakeuaganController::class, 'index']);

// Route::get('/berita', function(){
//     return view('Berita.berita');
// });
Route::get('/organisasi', [OrganisasiController::class, 'index'])->name('organisasi');
Route::get('/penjabat', [JabatanController::class, 'index'])->name('penjabat');
Route::get('/ranting', [RantingController::class, 'index'])->name('ranting');
Route::get('/visiMisi', [VisimisiController::class, 'index'])->name('visimisi');
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/data_berita/{id}', [BeritaController::class, 'databerita'])->name('data.berita');

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/program', [ProgramController::class, 'index'])->name('program');

Route::get('/daftar', [DucapilController::class, 'index'])->name('daftar');



// Update
Route::post('/update-desa/{id}', [NamedesaController::class, 'update']);
Route::post('/update-penjabat/{id}', [JabatanController::class, 'update']);
Route::post('/update-organisasi/{id}', [OrganisasiController::class, 'update']);
Route::post('/update-berita/{id}', [BeritaController::class, 'update']);
Route::post('/update-program/{id}', [ProgramController::class, 'update']);
Route::post('/update-agenda/{id}', [AgendaController::class, 'update']);


Route::get('ball', function(){
    return view('login');
});