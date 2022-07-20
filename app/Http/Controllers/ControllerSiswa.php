<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\peserta;
use App\Models\mapel;

class ControllerSiswa extends Controller
{
    public function siswa(){
        //Menampilkan semua data
        $siswa = siswa::all();
        $peserta = peserta::all();
        $mapel = mapel::all();
        return view('post.latihan', compact('siswa','peserta','mapel'));
    }
}
