<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier_mobil extends Model
{
    protected $table = 'supplier_mobil';


    public function Mobil(){
       	return $this->hasMany(Mobil::class);
       }

    public function Supplier(){
       	return $this->hasMany(Supplier::class);
       }
}
