<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peserta;

class ControllerPeserta extends Controller
{
    public function peserta(){
        //Menampilkan semua data
        $peserta = peserta::all();
        return view('post.latihan', compact('peserta'));
    }
}
