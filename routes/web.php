<?php

use App\Http\Controllers\AnakController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\JadwalImunisasiController;
use App\Http\Controllers\MainController;
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
  
  Route::get('anak', [AnakController::class, 'index'])->name('anak');
  Route::post('anak', [AnakController::class, 'store'])->name('daftar-anak');
  Route::post('anak/foto/{id}', [AnakController::class, 'uploadFoto'])->name('upload-foto');
  Route::delete('anak/foto/{id}', [AnakController::class, 'hapusFoto'])->name('hapus-foto');
  Route::get('panduan-ibu', [MainController::class, 'panduanIbu'])->name('panduan-ibu');
  Route::get('panduan-ibu/{item:slug}', [MainController::class, 'article'])->name('article');
  // Route::resource('pendaftaran-imunisasi', ImunisasiController::class);
  // Route::resource('jadwal-imunisasi', JadwalImunisasiController::class);
  // Route::resource('data-anak', AnakController::class);
  // Route::get('penerima-imunisasi', [MainController::class, 'penerimaImunisasi'])->name('penerima-imunisasi')->middleware('role:Admin');
});

require __DIR__.'/auth.php';
