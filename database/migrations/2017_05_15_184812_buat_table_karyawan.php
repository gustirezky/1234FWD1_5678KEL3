<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('alamat');
            $table->string('no_hp');
            $table->integer('jumlah_gaji');
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
        Schema::drop('karyawan');
    }
}