<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ControllerSiswa;
use App\Http\Controllers\ControllerPeserta;
use App\Http\Controllers\ControllerMapel;
use App\Http\Controllers\Latihan;

use App\Http\Controllers\SlotController;


Route::get('/', function () {
    return view('welcome');
});

//BASIC
Route::get('/belajar', function () {
    echo '<center><br>';
    echo '<u><h1>HALO SEMUANYA</h1></u>';
    echo '<u><h2>Kami Sedang Belajar Laravel Basic</h2></u>';
});

Route::get('/home', function () {
    return view('pages.sekolah');
});

//PARAMETER
Route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{kelas}/{hobby}', function ($a,$b,$c,$d,$e,$f) {
    return view('pages.biodata', compact('a','b','c','d','e','f'));
});

//OPTIONAL PARAMETER
Route::get('/pesanan/{makanan1?}/{makanan2?}', function ($a, $b, $c = "Mohon Maaf Pesanan Anda Tidak Ada") {
    return view('pages.pesanan', compact('a','b','c'));
});

//PASSING DATA DR CONTROLLER - VIEW 
//CONTROLLER
Route::get('/pengenalan',[App\Http\Controllers\PengenalanController::class, 'pengenalan']);

//PASSING DATA DINAMIS DR CONTROLLER - VIEW 
//CONTROLLER PARAMETER
Route::get('/intro/{nama}/{alamat}/{umur}',[App\Http\Controllers\PengenalanController::class, 'intro']);
//BISA JUGA SEPERTI INI -> Route::get('/intro/{nama}/{alamat}/{umur}',[PengenalanController::class, 'intro']);

Route::get('/siswa',[PengenalanController::class, 'siswa']);

Route::get('/menu',[LatihanController::class, 'Menu']);
Route::get('/dosen',[LatihanController::class, 'Dosen']);
Route::get('/televisi',[LatihanController::class, 'Televisi']);

Route::get('/post',[PostController::class, 'index']);

Route::get('/post1',[PostController::class, 'index']);

Route::get('/tugas',[PostController::class, 'siswa1']);
Route::get('/tugas',[PostController::class, 'peserta1']);
Route::get('/tugas',[PostController::class, 'mapel1']);

Route::get('/sekolah',[ControllerSiswa::class, 'siswa']);
//Route::get('/sekolah',[ControllerPeserta::class, 'peserta']);
//Route::get('/sekolah',[ControllerMapel::class, 'mapel']);

Route::get('/hotel',[Latihan::class, 'hotel']);

Auth::routes();
Route::resource('slot', SlotController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
