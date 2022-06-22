<?php

use App\Http\Controllers\AnakController;
use App\Http\Controllers\DataAnakController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\JadwalImunisasiController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PanduanIbuController;
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

Route::middleware('auth')->group(function () {
  Route::get('/', [MainController::class, 'beranda'])->name('beranda');
  Route::put('ganti-password', [MainController::class, 'gantiPassword'])->name('ganti-password');

  Route::resource('anak', AnakController::class);
  Route::post('anak/pertumbuhan', [AnakController::class, 'pertumbuhan'])->name('tambah-data-pertumbuhan');
  Route::post('anak/foto/{id}', [AnakController::class, 'uploadFoto'])->name('upload-foto');
  Route::delete('anak/foto/{id}', [AnakController::class, 'hapusFoto'])->name('hapus-foto');
  
  Route::get('panduan-ibu', [PanduanIbuController::class, 'index'])->name('panduan-ibu');
  Route::get('panduan-ibu/{item:slug}', [PanduanIbuController::class, 'show'])->name('article');
  Route::post('panduan-ibu', [PanduanIbuController::class, 'store'])->name('buat-article');
  Route::delete('panduan-ibu/{id}', [PanduanIbuController::class, 'destroy'])->name('hapus-article');

  Route::resource('data-anak', DataAnakController::class);
  Route::resource('imunisasi', ImunisasiController::class);
  
  // Route::resource('pendaftaran-imunisasi', ImunisasiController::class);
  // Route::resource('jadwal-imunisasi', JadwalImunisasiController::class);
  // Route::resource('data-anak', AnakController::class);
  // Route::get('penerima-imunisasi', [MainController::class, 'penerimaImunisasi'])->name('penerima-imunisasi')->middleware('role:Admin');
});

require __DIR__.'/auth.php';
