<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    public function Transaksi() {
    	return $this->hasMany(Transaksi::class, 'id_transaksi','detail_transaksi');
    }

    public function listtransaksi()
    {
       $out = [];
       
      foreach ($this->all() as $transaksi) {
         $out[$transaksi->id] = "{$transaksi->nama}";
      }
      return $out;
    }

}
