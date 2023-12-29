<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengirimanController;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [App\Http\Controllers\LoginController::class, 'login_proses'])->name('login_proses');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rute
Route::get('/rute', [App\Http\Controllers\RuteController::class, 'index'])->name('rute');
Route::get('/rute/create', [App\Http\Controllers\RuteController::class, 'create'])->name('rute-create');
Route::post('/rute/store', [App\Http\Controllers\RuteController::class, 'store'])->name('rute-store');
Route::get('/rute/edit/{id}', [App\Http\Controllers\RuteController::class, 'edit'])->name('rute-edit');
Route::put('/rute/update/{id}', [App\Http\Controllers\RuteController::class, 'update'])->name('rute-update');
Route::delete('/rute/delete{id}', [App\Http\Controllers\RuteController::class, 'destroy'])->name('rute-delete');
//Kategori
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/create', [App\Http\Controllers\KategoriController::class, 'create'])->name('kategori-create');
Route::post('/kategori/store', [App\Http\Controllers\KategoriController::class, 'store'])->name('kategori-store');
Route::get('/kategori/edit/{id}', [App\Http\Controllers\KategoriController::class, 'edit'])->name('kategori-edit');
Route::put('/kategori/update/{id}', [App\Http\Controllers\KategoriController::class, 'update'])->name('kategori-update');
Route::delete('/kategori/delete/{id}', [App\Http\Controllers\KategoriController::class, 'destroy'])->name('kategori-delete');
// Pengiriman
Route::get('/pengiriman', [App\Http\Controllers\PengirimanController::class, 'index'])->name('pengiriman');
Route::get('/pengiriman/create', [App\Http\Controllers\PengirimanController::class, 'create'])->name('pengiriman-create');
Route::post('/pengiriman/store', [App\Http\Controllers\PengirimanController::class, 'store'])->name('pengiriman-store');
Route::get('/pengiriman/edit/{id}', [App\Http\Controllers\PengirimanController::class, 'edit'])->name('pengiriman-edit');
Route::put('/pengiriman/update/{id}', [App\Http\Controllers\PengirimanController::class, 'update'])->name('pengiriman-update');
Route::delete('/pengiriman/delete/{id}', [App\Http\Controllers\PengirimanController::class, 'destroy'])->name('pengiriman-delete');
Route::get('/pengiriman/cetak-resi/{id}', [App\Http\Controllers\PengirimanController::class, 'cetakResi'])->name('pengiriman-resi');
// Laporan
Route::get('/laporan', [App\Http\Controllers\LaporanController::class, 'index'])->name('laporan');
Route::get('/filter/laporan', [LaporanController::class, 'filter'])->name('filter_laporan');
Route::match(['get', 'post'], '/filter/print', [LaporanController::class, 'print'])->name('filter_print');
// Info
Route::get('/info/tentang', [App\Http\Controllers\InfoController::class, 'index'])->name('tentang');
