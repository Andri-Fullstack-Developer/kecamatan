<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SingupController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\OrganisasiController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/singin', [LoginController::class, 'index'])->name('login');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware(['auth']);
Route::get('/dashboard/Profil/penjabat', [HomeController::class, 'jabatan']);
Route::get('/dashboard/Profil/organisasi', [HomeController::class, 'organisasi']);
Route::get('/dashboard/Profil/visi&misi', [HomeController::class, 'visi_misi']);
Route::get('/dashboard/Setting/singup', [HomeController::class, 'singup']);
Route::get('/dashboard/Berita/berita', [HomeController::class, 'berita']);
Route::get('/dashboard/Program/agenda', [HomeController::class, 'agenda']);


Route::post('/post_login', [LoginController::class, 'post_login'])->name('post_login');

Route::post('/post-home', [HomeController::class, 'store']);
Route::post('/post-penjabat',[JabatanController::class, 'store']);
Route::post('/post-organisasi',[OrganisasiController::class, 'store']);
Route::post('/post-visi&misi',[VisimisiController::class, 'store']);
Route::post('/post-berita',[BeritaController::class, 'store']);
Route::post('/post-agenda',[AgendaController::class, 'store']);

Route::post('/post-singup', [SingupController::class, 'store']);





Route::get('/lagout', [LoginController::class, 'logout'])->name('lagout');

Route::post('/delete_home/{id}', [HomeController::class, 'delete_home']);
Route::post('/delete_jabatan/{id}', [JabatanController::class, 'destroy_jabatan']);
Route::post('/delete_organisasi/{id}', [OrganisasiController::class, 'destroy_organisasi']);
Route::post('/delete_visimisi/{id}', [VisimisiController::class, 'destroy_visimisi']);
Route::post('/delete_berita/{id}', [BeritaController::class, 'destroy_berita']);
Route::post('/delete_agenda/{id}', [AgendaController::class, 'destroy_agenda']);




Route::get('/', [HomeController::class, 'home']);





// Route::get('/berita', function(){
//     return view('Berita.berita');
// });

Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');