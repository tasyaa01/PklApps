<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengunjung;
use App\Models\karyawan;
use App\Models\kamar;
use App\Models\transaksi;
use App\Models\detail_transaksi;

class Latihan extends Controller
{
    public function hotel(){
        //Menampilkan semua data
        $pengunjung = pengunjung::all();
        $karyawan = karyawan::all();
        $kamar = kamar::all();
        $transaksi = transaksi::all();
        $detail_transaksi = detail_transaksi::all();
        return view('post.latihan2', compact('pengunjung','karyawan','kamar','transaksi','detail_transaksi'));
    }
}
