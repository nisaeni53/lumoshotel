<?php

use App\Http\Controllers\DashadminController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasilitaskController;
use App\Http\Controllers\FasilitashController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TabelrController;
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
    return view('welcome');
});
Route::resource('/landing', LandingController::class); 

// Route::group(['middleware' => ['auth','cekrole:admin,resepsionis']], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/simpanregister', [RegisterController::class, 'simpanregister'])->name('simpanregister');
// });

Route::group(['middleware' => ['auth','cekrole:admin']], function () {
    Route::resource('/admin/dashboard', DashadminController::class);
    Route::resource('/admin/kamar', KamarController::class);
    Route::resource('/admin/fasilitaskamar', FasilitaskController::class);
    Route::resource('/admin/fasilitashotel', FasilitashController::class);
    Route::get('/admin/fasilitaskamar/{id_produk}/create', [FasilitaskController::class, 'createWithKamar']);
    Route::post('/admin/fasilitaskamar/{id_produk}', [FasilitaskController::class, 'storeWithKamar']);
});

Route::group(['middleware' => ['auth','cekrole:resepsionis']], function () {
    Route::resource('/resepsionis/index', TabelrController::class);
    Route::get('/resepsionis/index', [TabelrController::class, 'search'])->name('search');
});

