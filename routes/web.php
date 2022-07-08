<?php

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
Route::get('/pesanan/{makanan?}', function ($a = "Mohon Maaf Pesanan Anda Tidak Ada") {
    return view('pages.pesanan', compact('a'));
});

