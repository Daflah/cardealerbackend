<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\JualanController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UnggulanMobilController;
use Illuminate\Support\Facades\Auth;

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

// -------------------------------------- Bagian Pegawai --------------------------------------
Route::get('/data-pegawai', [PegawaiController::class, 'index'])->name('data-pegawai');
Route::get('/create-pegawai', [PegawaiController::class, 'create'])->name('create-pegawai');
Route::post('/simpan-pegawai', [PegawaiController::class, 'store'])->name('simpan-pegawai');
Route::get('/edit-pegawai/{id}', [PegawaiController::class, 'edit'])->name('edit-pegawai');
Route::post('/update-pegawai/{id}', [PegawaiController::class, 'update'])->name('update-pegawai');
Route::get('/delete-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('delete-pegawai');
// -------------------------------------- Bagian Pegawai --------------------------------------



// -------------------------------------- Bagian Galeri --------------------------------------
Route::get('/data-galeri', [GaleriController::class, 'index'])->name('data-galeri');
Route::get('/create-galeri', [GaleriController::class, 'create'])->name('create-galeri');
Route::post('/simpan-galeri', [GaleriController::class, 'store'])->name('simpan-galeri');
Route::get('/edit-galeri/{id}', [GaleriController::class, 'edit'])->name('edit-galeri');
Route::post('/update-galeri/{id}', [GaleriController::class, 'update'])->name('update-galeri');
Route::get('/delete-galeri/{id}', [GaleriController::class, 'destroy'])->name('delete-galeri');
// -------------------------------------- Bagian Galeri --------------------------------------



// -------------------------------------- Bagian Header --------------------------------------
Route::get('/data-header', [HeaderController::class, 'index'])->name('data-header');
Route::get('/create-header', [HeaderController::class, 'create'])->name('create-header');
Route::post('/simpan-header', [HeaderController::class, 'store'])->name('simpan-header');
Route::get('/edit-header/{id}', [HeaderController::class, 'edit'])->name('edit-header');
Route::post('/update-header/{id}', [HeaderController::class, 'update'])->name('update-header');
Route::get('/delete-header/{id}', [HeaderController::class, 'destroy'])->name('delete-header');
// -------------------------------------- Bagian Header --------------------------------------



// -------------------------------------- Bagian Jualan --------------------------------------
Route::get('/data-jualan', [JualanController::class, 'index'])->name('data-jualan');
Route::get('/create-jualan', [JualanController::class, 'create'])->name('create-jualan');
Route::post('/simpan-jualan', [JualanController::class, 'store'])->name('simpan-jualan');
Route::get('/edit-jualan/{id}', [JualanController::class, 'edit'])->name('edit-jualan');
Route::post('/update-jualan/{id}', [JualanController::class, 'update'])->name('update-jualan');
Route::get('/delete-jualan/{id}', [JualanController::class, 'destroy'])->name('delete-jualan');
// -------------------------------------- Bagian Jualan --------------------------------------



// -------------------------------------- Bagian Komentar --------------------------------------
Route::get('/data-komentar', [KomentarController::class, 'index'])->name('data-komentar');
Route::get('/create-komentar', [KomentarController::class, 'create'])->name('create-komentar');
Route::post('/simpan-komentar', [KomentarController::class, 'store'])->name('simpan-komentar');
Route::get('/edit-komentar/{id}', [KomentarController::class, 'edit'])->name('edit-komentar');
Route::post('/update-komentar/{id}', [KomentarController::class, 'update'])->name('update-komentar');
Route::get('/delete-komentar/{id}', [KomentarController::class, 'destroy'])->name('delete-komentar');
// -------------------------------------- Bagian Komentar --------------------------------------



// -------------------------------------- Bagian Unggulan Mobil --------------------------------------
Route::get('/data-unggulan', [UnggulanMobilController::class, 'index'])->name('data-unggulan');
Route::get('/create-unggulan', [UnggulanMobilController::class, 'create'])->name('create-unggulan');
Route::post('/simpan-unggulan', [UnggulanMobilController::class, 'store'])->name('simpan-unggulan');
Route::get('/edit-unggulan/{id}', [UnggulanMobilController::class, 'edit'])->name('edit-unggulan');
Route::post('/update-unggulan/{id}', [UnggulanMobilController::class, 'update'])->name('update-unggulan');
Route::get('/delete-unggulan/{id}', [UnggulanMobilController::class, 'destroy'])->name('delete-unggulan');
// -------------------------------------- Bagian Unggulan Mobil --------------------------------------



// -------------------------------------- Bagian Index Route --------------------------------------
Route::get('/index', [IndexController::class, 'index'])->name('index');
// -------------------------------------- Bagian Index Route --------------------------------------



// -------------------------------------- Bagian Authentication Routes --------------------------------------
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// -------------------------------------- Bagian Authentication Routes --------------------------------------



// -------------------------------------- Bagian Admin Beranda --------------------------------------
Route::get('/admin-beranda', function () {
    return view('admin.admin-beranda'); // Sesuaikan nama view dengan nama file blade yang benar
})->name('admin-beranda');
// -------------------------------------- Bagian Admin Beranda --------------------------------------



// -------------------------------------- Bagian Home Route --------------------------------------
Route::get('/home', function () {
    if (Auth::check()) {
        $usertype = Auth::user()->usertype;

        if ($usertype == 'admin') {
            return redirect('/admin-beranda');
        } else if ($usertype == 'user') {
            return redirect('/index');
        }
    }

    // Jika tidak login, bisa redirect ke halaman login atau ke halaman lainnya
    return redirect('/login');
})->name('home');
// -------------------------------------- Bagian Home Route --------------------------------------



// -------------------------------------- Bagian Welcome Route --------------------------------------
Route::get('/', function () {
    return view('welcome');
});
// -------------------------------------- Bagian Welcome Route --------------------------------------



// -------------------------------------- Bagian Dashboard Route --------------------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// -------------------------------------- Bagian Dashboard Route --------------------------------------



// -------------------------------------- Bagian Profile Routes --------------------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// -------------------------------------- Bagian Profile Routes --------------------------------------



// Auth Routes
require __DIR__.'/auth.php';
