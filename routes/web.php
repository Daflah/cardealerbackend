<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\JualanController;
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
    return view('admin.admin-beranda'); // Sesuaikan nama view dengan nama file blade yang benar
})->name('admin-beranda');

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


// -------------------------------------- Bagian Coba Gabungin --------------------------------------

// Route::get('/index', [PegawaiController::class, 'showOurTeam' && GaleriController::class, 'showGallery' ])->name('index');

Route::get('/index', [IndexController::class, 'index'])->name('index');


// Route::get('/index', function () {
//     $pegawaiController = app()->make('App\Http\Controllers\PegawaiController');
//     $galeriController = app()->make('App\Http\Controllers\GaleriController');
    
//     return $pegawaiController->showOurTeam() . $galeriController->showGallery();
// })->name('index');


// Route::prefix('userHome')->group(function () {
//     Route::get('/showOurTeam', [UserHomeController::class, 'showOurTeam'])->name('userHome.showOurTeam');
//     Route::get('/showGallery', [UserHomeController::class, 'showGallery'])->name('userHome.showGallery');
// });

// -------------------------------------- Bagian Coba Gabungin --------------------------------------


Route::get('/login', function () {
    return view('login');
});