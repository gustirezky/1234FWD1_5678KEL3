<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePelanggan2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {

            $table->increments('id');
            $table->string('no_ktp');
            $table->string('nama_pelanggan');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->integer('no_hp');
            $table->integer('id_karyawan')->unsigned();
            $table->foreign('id_karyawan')->references('id')->on('karyawan');
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
        Schema::drop('pelanggan');
    }
}
