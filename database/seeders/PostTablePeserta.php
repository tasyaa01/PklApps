<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTablePeserta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['NoSiswa' => 2001, 'Kode_MP' => 'MP01'],
            ['NoSiswa' => 2001, 'Kode_MP' => 'MP02'],
            ['NoSiswa' => 2003, 'Kode_MP' => 'MP01'],
            ['NoSiswa' => 2003, 'Kode_MP' => 'MP02'],
            ['NoSiswa' => 2004, 'Kode_MP' => 'MP01'],
            ['NoSiswa' => 2004, 'Kode_MP' => 'MP03'],
        
        ];

        $sample = [
            ['NoSiswa' => 2001, 'Kode_MP' => 'MP01'],
        
        ];

        //Masukkan data ke database
        DB::table('peserta')->insert($sample);
    }
}
