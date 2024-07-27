<?php

use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
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

Route::get('/', function () {
    return view('front.home');
});

Route::get('/menu', function () {
    return view('front.menu');
})->name('link.menu');

Route::get('/cart', function () {
    return view('front.cart');
})->name('link.cart');

Route::get('/order', function () {
    return view('front.order');
})->name('link.order');



//pegawai & admin

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::resource('admin', 'AdminController');

//pelanggan
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

//Route::post('/tambah-ke-keranjang/{id}', [KeranjangController::class, 'tambahKeKeranjang'])->name('keranjang.tambah');
Route::post('/tambah-ke-keranjang/{id}', [KeranjangController::class, 'tambahKeKeranjang'])->name('tambah_ke_keranjang');
Route::get('/hapus-dari-keranjang/{id}', [KeranjangController::class, 'hapusDariKeranjang'])->name('hapus_dari_keranjang');



Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');

Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');

//Route::get('tambah-ke-keranjang/{id_menu}',[MenuController::class, 'TambahKeKeranjang'])->name(('tambah_ke_keranjang'));
