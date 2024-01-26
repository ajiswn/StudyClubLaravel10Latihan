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

//Route Tampil Data
// Route::get('kategori/semua', [KategoriController::class, 'semua'] 
// );

//Route Tambah data
// Route::get('kategori/tambah', function() {
//     Kategori::create([
//         'nama_kategori' => "Pakaian Baru",
//         'deskripsi' => "Semua jenis pakaian baru"
//     ]);
// });

// Route Update data
// Route::get('/kategori/update/{id}', function($id) {
//     Kategori::find($id)->update([
//         'nama_kategori' => "Pakaian Anak",
//         'deskripsi' => "Semua jenis pakaian anak"
//     ]);
// });

// Route Hapus data
// Route::get('kategori/hapus/{id}', function($id) {
//     Kategori::find($id) -> delete();
// });

// use App\Models\Mahasiswa;

// //Route Tampil Data
// Route::get('mahasiswa/semua', function() {
//     $mhs = Mahasiswa::all();
//     foreach ($mhs as $data) {
//         echo $data->id . ".  " . $data->nim . " - ".$data->nama." - ".$data->kelas."<br>";
//     }
// });

// //Route Tambah data
// Route::get('mahasiswa/tambah', function() {
//     Mahasiswa::create([
//         'nim' => "F1E122001",
//         'nama' => "Anak Pertama",
//         'kelas' => "VIP",
//         'des' => ""
//     ]);
// });

// // Route Update data
// Route::get('mahasiswa/update/{id}', function($id) {
//     Mahasiswa::find($id)->update([
//         'nim' => "F1E122029",
//         'nama' => "Aji Setiawan",
//         'kelas' => "R-006",
//         'des' => ""
//     ]);
// });

// // Route Hapus data
// Route::get('mahasiswa/hapus/{id}', function($id) {
//     Mahasiswa::find($id) -> delete();
// });