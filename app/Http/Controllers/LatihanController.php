<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function Menu(){
        $a = [
            array(
                'menu1' => 'Beranda', 
                'menu2' => 'Berita', 
                'ktgr'=>'Olahraga',
                        'jenisOR'=>['Sepak Bola','Bulu Tangkis'],
                'kategori' => ['Politik','Manca Negara'],
                'menu3' => 'Tentang'
                ),
        ];
        //dd($a);
        return view('pages.menu', ['Menu' => $a]);
    }

    public function Dosen(){
        $a = [
            array(
                'dosen' => 'Yusuf Bachtiar', 
                'matkul' => 'Pemrograman Mobile',
                'mahasiswa' => [
                    ['nama' => 'Muhammad Soleh', 'nilai' => 78],
                    ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                    ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                    ['nama' => 'Ubay Holin', 'nilai' => 87],
                    ['nama' => 'Fadillah', 'nilai' => 95]
                ],
            ),

            array(
                'dosen' => 'Yaris Riyadi Yusuf', 
                'matkul' => 'Pemrograman Web',
                'mahasiswa' => [
                    ['nama' => 'Alfred MCTomminay', 'nilai' => 67],
                    ['nama' => 'Bruno Kasmir', 'nilai' => 90],
                    ['nama' => 'Akid Hendra', 'nilai' => 50],
                    ['nama' => 'Dany Irawan', 'nilai' => 70],
                    ['nama' => 'Chandra Mega Putra', 'nilai' => 60]
                ],
            ),

        ];
        //dd($a);
        return view('pages.dosen', ['Dosen' => $a]);
    }

    public function Televisi(){
        $a = [
            array(
                'siaran1'=>'Net TV','siaran2'=>'TVRI','siaran3'=>'BeinSport','siaran4'=>'OChannel','siaran5'=>'Indosiar',
                'nettv'=>[
                    ['acara'=>'Nussa Rara', 'tanggal'=>'Senin, 11 Juli 2022', 'jam'=>'04.30'],
                    ['acara'=>'Kelas Internasional', 'tanggal'=>'Selasa, 12 Juli 2022', 'jam'=>'17.00'],
                    ['acara'=>'Tetangga Masa Gitu', 'tanggal'=>'Rabu, 13 Juli 2022', 'jam'=>'20.35'],
                ],
                
                'tvri'=>[
                    ['acara'=>'Dapur Devina', 'tanggal'=>'Senin, 11 Juli 2022', 'jam'=>'10.30'],
                    ['acara'=>'Memori Melodi', 'tanggal'=>'Selasa, 12 Juli 2022', 'jam'=>'20.00'],
                    ['acara'=>'Dunia Dalam Berita', 'tanggal'=>'Rabu, 13 Juli 2022', 'jam'=>'21.00'],
                ],

                'beinsport'=>[
                    ['acara'=>'MLS Show 2022', 'tanggal'=>'Senin, 11 Juli 2022', 'jam'=>'07.35'],
                    ['acara'=>'Major League Soccer 2022', 'tanggal'=>'Selasa, 12 Juli 2022', 'jam'=>'08.05'],
                    ['acara'=>'Arsenal TV Specials 2021-2022', 'tanggal'=>'Rabu, 13 Juli 2022', 'jam'=>'10.10'],
                ],

                'ochannel'=>[
                    ['acara'=>'Khursetra', 'tanggal'=>'Senin, 11 Juli 2022', 'jam'=>'05.30'],
                    ['acara'=>'Sport Woman', 'tanggal'=>'Selasa, 12 Juli 2022', 'jam'=>'06.00'],
                    ['acara'=>'Sports Update', 'tanggal'=>'Rabu, 13 Juli 2022', 'jam'=>'06.30'],
                ],

                'indosiar'=>[
                    ['acara'=>'Kisah Nyata', 'tanggal'=>'Senin, 11 Juli 2022', 'jam'=>'11.30'],
                    ['acara'=>'Suara Hati Isri', 'tanggal'=>'Selasa, 12 Juli 2022', 'jam'=>'15.30'],
                    ['acara'=>'Azab', 'tanggal'=>'Rabu, 13 Juli 2022', 'jam'=>'20.00'],
                ],
            ),
        ];
        //dd($a);
        return view('pages.siaran', ['Televisi' => $a]);
    }
}
