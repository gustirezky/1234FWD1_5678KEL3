<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $guarded= ['id'];

public function Pelanggan(){
    	return $this->hasOne(Pelanggan::class);}

public function listKaryawan()
    {
       $out = [];
       
      foreach ($this->all() as $krywn) {
         $out[$krywn->id] = "{$krywn->nama}";
      }
      return $out;
    }
}


