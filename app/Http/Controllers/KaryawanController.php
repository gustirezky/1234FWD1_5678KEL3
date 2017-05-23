<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Karyawan;

use App\Http\Requests\KaryawanRequest;


class KaryawanController extends Controller
{
  public function awal()
    {
        return view ('karyawan.awal',['data'=>Karyawan::all()]);
    }
    public function tambah()
    {
        return view ('karyawan.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
        'jenis_kelamin'=>'required',
        'nama'=>'required',
        'jenis_kelamin'=>'required',
        'tanggal_lahir'=>'required',
        'tempat_lahir'=>'required',
        'alamat'=>'required',
        'no_hp'=>'required|numeric',
        'jumlah_gaji'=>'required|numeric',
        ]);
         $karyawan = new Karyawan();
        $karyawan->nama = $input->nama;
        $karyawan->jenis_kelamin  = $input->jenis_kelamin;
        $karyawan->tanggal_lahir = $input->tanggal_lahir;
        $karyawan->tempat_lahir = $input->tempat_lahir;
        $karyawan->alamat = $input->alamat;
        $karyawan->no_hp = $input->no_hp;
        $karyawan->jumlah_gaji = $input->jumlah_gaji;
        $informasi = $karyawan->save() ? 'Berhasi simpan data' : 'Gagal simpan data';

        return redirect('karyawan')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit')->with(array('karyawan'=>$karyawan));
    }
    public function lihat($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.lihat')->with(array('karyawan'=>$karyawan));
    }
    public function update($id, Request $input)
    {
        $this->validate($input,[
        'jenis_kelamin'=>'required',
        'nama'=>'required',
        'jenis_kelamin'=>'required',
        'tanggal_lahir'=>'required',
        'tempat_lahir'=>'required',
        'alamat'=>'required',
        'no_hp'=>'required|numeric',
        'jumlah_gaji'=>'required|numeric',
        ]);
        $karyawan = Karyawan::find($id);
		$karyawan->nama = $input->nama;
        $karyawan->jenis_kelamin  = $input->jenis_kelamin;
        $karyawan->tanggal_lahir = $input->tanggal_lahir;
        $karyawan->tempat_lahir = $input->tempat_lahir;
        $karyawan->alamat = $input->alamat;
        $karyawan->no_hp = $input->no_hp;
        $karyawan->jumlah_gaji = $input->jumlah_gaji;
        $informasi = $karyawan->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('karyawan')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $karyawan = Karyawan::find($id);
        $informasi = $karyawan->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('karyawan')->with(['informasi'=>$informasi]);
    }
}
