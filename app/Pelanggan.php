<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $guarded = ['id']; 
    protected $fillable = ['id_karyawan'];

public function Karyawan(){
       	// return $this->belongsTo(Karyawan::class);
        return $this->belongsTo(Karyawan::class,'id_karyawan');
       }

 public function Mobil(){
       	return $this->hasMany(Mobil::class);
       }

 public function listPelanggan()
    {
       $out = [];
       
      foreach ($this->all() as $pelanggan) {
         $out[$pelanggan->id] = "{$pelanggan->nama_pelanggan}";
      }
      return $out;
    }
}

