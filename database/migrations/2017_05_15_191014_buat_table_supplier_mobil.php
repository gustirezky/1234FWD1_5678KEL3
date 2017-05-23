<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableSupplierMobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_mobil', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_supplier')->unsigned();
             $table->foreign('id_supplier')->references('id')->on('supplier');
            $table->integer('id_mobil')->unsigned();
             $table->foreign('id_mobil')->references('id')->on('mobil');
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
        Schema::drop('supplier_mobil');
    }
}
