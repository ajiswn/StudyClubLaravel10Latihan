<?php

use Illuminate\Support\Facades\Route;
use App\Models\Kategori;

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
    return view('welcome');
});

Route::get('/dasboard', function () {
    return view('index');
})->name('dasboard');

// use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KategoriController2;
use App\Http\Controllers\MahasiswaController;

Route::resource('kategori', KategoriController2::class);
Route::resource('mahasiswa', MahasiswaController::class);

