<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';

    public function Supplier_mobil(){
       	return $this->belongsTo(Supplier_mobil::class);
       }

       public function listSupplier()
    {
       $out = [];
       
      foreach ($this->all() as $supplier) {
         $out[$supplier->id] = "{$supplier->nama_supplier}";
      }
      return $out;
    }
}
