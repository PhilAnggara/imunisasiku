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
  Route::resource('pendaftaran-imunisasi', ImunisasiController::class);
  Route::resource('jadwal-imunisasi', JadwalImunisasiController::class);
  Route::resource('data-anak', AnakController::class);
  Route::get('penerima-imunisasi', [MainController::class, 'penerimaImunisasi'])->name('penerima-imunisasi');
  Route::get('panduan-ibu', [MainController::class, 'panduanIbu'])->name('panduan-ibu');
});

require __DIR__.'/auth.php';
