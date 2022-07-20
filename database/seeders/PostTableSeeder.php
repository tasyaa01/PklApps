<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['title' => 'Tips cepat Nikah', 'content' => 'Assalaam Studio'],
            ['title' => 'Harus Menunda Nikah?', 'content' => 'Assalaam Studio'],
            ['title' => 'Membangun Visi Misi Keluarga', 'content' => 'Assalaam Studio'],
        ];

        //Masukkan data ke database
        DB::table('posts')->insert($sample);
    }
}
