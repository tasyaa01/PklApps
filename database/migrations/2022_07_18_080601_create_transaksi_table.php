<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('no_transaksi');
            $table->string('ID_pengunjung');
            $table->string('ID_karyawan');
            $table->integer('jmlh_kamar');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->integer('lama_nginap');
            $table->biginteger('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
