<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mobil;
use App\Pelanggan;
use App\Kategori;


class MobilController extends Controller
{
	public function awal()
    {
         $semuamobil = Mobil::all();
       // return view ('mobil.awal',['data'=>mobil::all()]);;
        return view('mobil.awal', compact('semuamobil'));
    }
    public function tambah()
    {
        //return view ('mobil.tambah');
            $pelanggan= new Pelanggan;
            $kategori= new Kategori;
            $mobil= new Mobil;
             
        return view('mobil.tambah',compact('pelanggan','kategori','mobil'));
    }
    public function wizard()
    {
        $pelanggan = \Session::get('pelanggan');
        return $this->tambah()->with('pelangganValue',$pelanggan->id);
    }
    public function simpan(Request $input)
    {
        // $mobil = new Mobil($input->only('id_kategori','id_mobil','id_pelanggan'));
        // if ($mobil->save()) $this->informasi = " berhasil disimpan";
        // return redirect('mobil')->with(['informasi'=>$this->informasi]);

        $this->validate($input,[
        'id_pelanggan'=>'required',
        'id_kategori'=>'required',
        'jumlah_hari'=>'integer|required',
        ]);
        $mobil = new Mobil();
        $mobil->id_pelanggan  = $input->id_pelanggan;
        $mobil->id_kategori  = $input->id_kategori;
        $mobil->jumlah_hari = $input->jumlah_hari;
        $informasi = $mobil->save() ? 'Berhasi simpan data' : 'Gagal simpan data';

        return redirect('mobil')->with(['informasi'=>$informasi]);
        // $mobil->fill($input->only('id_pelanggan','id_kategori'));
        // $informasi = $mobil->save() ? 'Berhasi simpan data' : 'Gagal simpan data';

        // return redirect('mobil')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $mobil = Mobil::find($id);
        $pelanggan = new Pelanggan;
        $kategori = new Kategori;
        return view('mobil.edit', compact('pelanggan','kategori','mobil'));
    }
    public function lihat($id)
    {
        $mobil = Mobil::find($id);
         return view('mobil.lihat',compact('mobil'));
    }
    public function update($id, Request $input)
    {
        $this->validate($input,[
        'id_pelanggan'=>'required',
        'id_kategori'=>'required',
        'jumlah_hari'=>'integer|required',
        ]);
        $mobil = Mobil::find($id);
        $mobil->id_pelanggan  = $input->id_pelanggan;
        $mobil->id_kategori  = $input->id_kategori;
        $mobil->jumlah_hari = $input->jumlah_hari;
        $informasi = $mobil->save() ? 'Berhasi Edit data' : 'Gagal simpan data';
       
        return redirect('mobil')->with(['informasi'=>$informasi]);
    
    }
    public function hapus($id)
    {
        $mobil = Mobil::find($id);
        if ($mobil->delete())$this->informasi=" berhasil dihapus";
                   
         return redirect('mobil')->with(['informasi'=>$this->informasi]);
    }
}
