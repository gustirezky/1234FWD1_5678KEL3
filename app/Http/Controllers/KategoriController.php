<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Kategori;

class KategoriController extends Controller
{
	public function awal()
    {   
        $semuakategori = Kategori::all();
        return view ('kategori.awal',['data'=>kategori::all()]);
       // return view ('kategori.awal',compact('semuakategori'));
    }
    public function tambah()
    {
        return view ('kategori.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
        'merk_mobil'=>'required',
        'nama_mobil'=>'required',
        'jenis_mobil'=>'required',
        'warna'=>'required',
        'no_plat'=>'required',
        ]);
        $kategori = new Kategori();
        $kategori->merk_mobil  = $input->merk_mobil;
        $kategori->nama_mobil  = $input->nama_mobil;
        $kategori->jenis_mobil = $input->jenis_mobil;
        $kategori->warna = $input->warna;
        $kategori->no_plat = $input->no_plat;
        $informasi = $kategori->save() ? 'Berhasi simpan data' : 'Gagal simpan data';

        return redirect('kategori')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.edit')->with(array('kategori'=>$kategori));
    }
    public function lihat($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.lihat')->with(array('kategori'=>$kategori));
    }
    public function update($id, Request $input)
    {
        $kategori = Kategori::find($id);
        $kategori->merk_mobil  = $input->merk_mobil;
		$kategori->nama_mobil  = $input->nama_mobil;
        $kategori->jenis_mobil = $input->jenis_mobil;
        $kategori->warna = $input->warna;
        $informasi = $kategori->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('kategori')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $kategori = Kategori::find($id);
        $informasi = $kategori->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('kategori')->with(['informasi'=>$informasi]);
    }
}
