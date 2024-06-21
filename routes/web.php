<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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

Route::get('/data-pegawai', [PegawaiController::class, 'index'])->name('data-pegawai');

Route::get('/create-pegawai', [PegawaiController::class, 'create'])->name('create-pegawai');

Route::post('/simpan-pegawai', [PegawaiController::class, 'store'])->name('simpan-pegawai');

Route::get('/edit-pegawai/{id}', [PegawaiController::class, 'edit'])->name('edit-pegawai');

Route::post('/update-pegawai/{id}', [PegawaiController::class, 'update'])->name('update-pegawai');

Route::get('/delete-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('delete-pegawai');

Route::get('/contact/{name?}', function($name = ''){
    return view('contact', compact('name'));
})->name('contact');

Route::get('/g', function () {
    return view('index');
});