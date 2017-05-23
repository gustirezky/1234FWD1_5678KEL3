<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';

    public function Supplier(){
       	return $this->hasMany(Supplier::class,'id_mobil','supplier_mobil');
       }
}
