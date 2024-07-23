<?php

use App\Http\Controllers\LoginController;
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