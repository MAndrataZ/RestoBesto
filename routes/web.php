<?php

use App\Http\Controllers\KasirController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KokiController;
use App\Http\Controllers\PelayanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home');
});

// pegawai & admin
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('admin', 'AdminController');

// pelanggan
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

Route::post('/tambah-ke-keranjang/{id}', [KeranjangController::class, 'tambahKeKeranjang'])->name('tambah_ke_keranjang');
Route::get('/hapus-dari-keranjang/{id}', [KeranjangController::class, 'hapusDariKeranjang'])->name('hapus_dari_keranjang');

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');

// koki
Route::get('/koki/stok', [KokiController::class, 'stok'])->name('koki.stok');
Route::get('/koki/detail', [KokiController::class, 'detail'])->name('koki.detail');

Route::post('/update-stok', [KokiController::class, 'updateStok'])->name('update_stok');


//pelayan
Route::get('/pelayan/menu', [PelayanController::class, 'menu'])->name('pelayan.menu');
Route::get('/pelayan/keranjang', [PelayanController::class, 'keranjang'])->name('pelayan.keranjang');
Route::get('/pelayan/status', [PelayanController::class, 'status'])->name('pelayan.status');
Route::get('/menu/search', [MenuController::class, 'search'])->name('search_menu');

//kasir
Route::get('/kasir/index', [KasirController::class, 'index'])->name('kasir.index');
Route::get('/kasir/show', [KasirController::class, 'show'])->name('kasir.show');