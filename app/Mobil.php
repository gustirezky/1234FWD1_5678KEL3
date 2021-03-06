<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
	protected $table = 'mobil';
  protected $fillable = ['id_pelanggan','id_kategori'];

	public function Pelanggan(){
       	return $this->belongsTo(Pelanggan::class,'id_pelanggan');
       }

    public function Kategori(){
       	return $this->belongsTo(Kategori::class,'id_kategori');
       }

    public function Transaksi(){
       	return $this->hasMany(Transaksi::class);
       }

    public function Supplier_mobil(){
        return $this->belongsTo(Supplier_mobil::class);
       }


       public function listMobildanPelanggan()
  {
    $out = [];
    foreach ($this->all() as $mblplg){
      $out[$mblplg->id] = "{$mblplg->pelanggan->nama_pelanggan}({$mblplg->kategori->nama_mobil})";
    }
    return $out;
  }

}
