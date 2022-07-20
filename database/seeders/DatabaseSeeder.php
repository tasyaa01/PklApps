<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostTableSeeder::class);

        $this->call(PostTableSiswa::class);
        $this->call(PostTablePeserta::class);
        $this->call(PostTableMapel::class);
        
        $this->call(TablePengunjung::class);
        $this->call(TableKaryawan::class);
        $this->call(TableKamar::class);
        $this->call(TableTransaksi::class);
        $this->call(TableDetail_transaksi::class);
    }

}
