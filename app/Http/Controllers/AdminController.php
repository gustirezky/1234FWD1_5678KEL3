<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;

class AdminController extends Controller
{
   public function awal()
    {
        return view ('admin.awal',['data'=>Admin::all()]);
    }
    public function tambah()
    {
        return view ('admin.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
        'username'=>'required',
        'password'=>'required',]);
        $admin = new Admin;
        $admin->username = $input->username;
        $admin->password  = $input->password;
        $admin->nama = $input->nama;
        $admin->level = $input->level;
        $informasi = $admin->save() ? 'Berhasi simpan data' : 'Gagal simpan data';
        return redirect('admin')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.edit')->with(array('admin'=>$admin));
    }
    public function lihat($id)
    {
        $admin = Admin::find($id);
        return view('admin.lihat')->with(array('admin'=>$admin));
    }
    public function update($id, Request $input)
    {
        $admin = Admin::find($id);
        $admin->username = $input->username;
        $admin->password  = $input->password;
        $admin->nama = $input->nama;
        $admin->level = $input->level;
        $informasi = $admin->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('admin')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $admin = Admin::find($id);
        $informasi = $admin->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('admin')->with(['informasi'=>$informasi]);
    }
}
