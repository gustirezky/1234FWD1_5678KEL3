<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableDetailTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_mobil')->unsigned();
             $table->foreign('id_mobil')->references('id')->on('mobil');   
            $table->integer('id_transaksi')->unsigned();
            $table->foreign('id_transaksi')->references('id')->on('transaksi');
            $table->string('nama_pelanggan');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('nama_mobil');
            $table->integer('jumlah_mobil');
            $table->integer('total_bayar');
            $table->date('tanggal_transaksi');
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
        Schema::drop('detail_transaksi');
    }
}
