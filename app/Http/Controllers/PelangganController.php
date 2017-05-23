<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pelanggan;
use App\Karyawan;

class PelangganController extends Controller
{

      public function awal()
    {
        $data = Pelanggan::all();
        
        return view ('pelanggan.awal',compact('data'));

    }
    public function wizard()
    {
        $url = 'pelanggan/wizard';
        return $this->tambah()->with('url',$url);
    }
    public function tambah()
    {
        $url = 'pelanggan/simpan';
        $karyawan = new Karyawan;
        $pelanggan = new Pelanggan;
        return view ('pelanggan.tambah',compact('karyawan','pelanggan',
            'url'));
    }
    public function simpanWizard(Request $input)
    {
        $pelanggan = $this->_simpan($input);
        return redirect('mobil/wizard')->with(['pelanggan'=>$informasi]);
    }
    private function _simpan(Request $input)
    {
       $this->validate($input,[
        'no_ktp'=>'required|numeric',
        'jenis_kelamin'=>'required',
        'nama_pelanggan'=>'required',
        'jenis_kelamin'=>'required',
        'tanggal_lahir'=>'required',
        'alamat'=>'required',
        'no_hp'=>'required|numeric',
        'id_karyawan'=>'required',
        ]);
      
        $pelanggan = new Pelanggan;
        $pelanggan->no_ktp = $input->no_ktp;
        $pelanggan->nama_pelanggan = $input->nama_pelanggan;
        $pelanggan->jenis_kelamin = $input->jenis_kelamin;
        $pelanggan->tanggal_lahir = $input->tanggal_lahir;
        $pelanggan->alamat = $input->alamat;
        $pelanggan->no_hp = $input->no_hp;
        $pelanggan->id_karyawan = $input->id_karyawan;
        $pelanggan->save();
        return $pelanggan;
    }
    public function simpan(Request $input)
    {
       $informasi =  $this->_simpan($input)->wasRecentlyCreated ? 'Berhasi simpan data' : 'Gagal simpan data';
     // $ID = $pelanggan->id;
     //    return redirect('proses/'.$ID)->with(['informasi'=>$informasi]);
        return redirect('proses')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);
        $karyawan = new Karyawan;
        return view('pelanggan.edit', compact('pelanggan','karyawan'));
    }
    public function lihat($id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.lihat')->with(array('pelanggan'=>$pelanggan));
    }

    public function update($id, Request $input)
    {
        $pelanggan = Pelanggan::find($id);
        $this->validate($input,[
        'no_ktp'=>'required|numeric',
        'jenis_kelamin'=>'required',
        'nama_pelanggan'=>'required',
        'jenis_kelamin'=>'required',
        'tanggal_lahir'=>'required',
        'alamat'=>'required',
        'no_hp'=>'required|numeric',
        'id_karyawan'=>'required',
        ]);
        $pelanggan->no_ktp = $input->no_ktp;
        $pelanggan->nama_pelanggan = $input->nama_pelanggan;
        $pelanggan->jenis_kelamin = $input->jenis_kelamin;
		$pelanggan->tanggal_lahir = $input->tanggal_lahir;
		$pelanggan->alamat = $input->alamat;
		$pelanggan->no_hp = $input->no_hp;
        $pelanggan->id_karyawan=$input->id_karyawan;
        $informasi = $pelanggan->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('pelanggan')->with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $pelanggan = Pelanggan::find($id);
        $informasi = $pelanggan->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('pelanggan')->with(['informasi'=>$informasi]);
    }
}
