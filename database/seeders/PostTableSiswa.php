<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTableSiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['NoSISWA' => 2001, 'NAMA' => 'Badu', 'JK' => 'L', 'JURUSAN' => 'TK'],
            ['NoSISWA' => 2002, 'NAMA' => 'Muliati', 'JK' => 'P', 'JURUSAN' => 'TE'],
            ['NoSISWA' => 2003, 'NAMA' => 'Rahmiadi', 'JK' => 'L', 'JURUSAN' => 'TK'],
            ['NoSISWA' => 2004, 'NAMA' => 'Nasrol', 'JK' => 'L', 'JURUSAN' => 'TK'],
        ];

        //Masukkan data ke database
        DB::table('siswa')->insert($sample);
    }
}
