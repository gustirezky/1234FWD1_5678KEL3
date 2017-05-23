<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    public function Mobil(){
       	return $this->hasMany(Mobil::class);
       }

    public function listKategori()
    {
       $out = [];
       
      foreach ($this->all() as $kategori) {
         $out[$kategori->id] = "{$kategori->nama_mobil}({$kategori->merk_mobil},{$kategori->jenis_mobil},{$kategori->warna},{$kategori->no_plat})";
      }
      return $out;
    }
}
