<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTableMapel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['KODE_MP' => 'MP01', 'NAMA_MP' => 'ALGORITMA', 'SKS' => 2, 'SEMESTER' => 1],
            ['KODE_MP' => 'MP02', 'NAMA_MP' => 'BASISDATA', 'SKS' => 3, 'SEMESTER' => 1],
            ['KODE_MP' => 'MP03', 'NAMA_MP' => 'ASSEMBLY', 'SKS' => 2, 'SEMESTER' => 2],
        ];

        //Masukkan data ke database
        DB::table('mapel')->insert($sample);
    }
}
