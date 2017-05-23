<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Supplier_mobil;
use App\Supplier;
use App\Mobil;

class Supplier_mobilController extends Controller
{
    public function awal()
    {
        $data = new Supplier_mobil;
        return view ('Supplier_mobil.awal',compact('data'));
    }
    public function tambah()
    {
    	$mobil = new Mobil;
    	$supplier = new Supplier;
    	$supplier_mobil = new Supplier_mobil;
        return view ('Supplier_mobil.tambah',compact('supplier','mobil','supplier_mobil'));
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
        'id_mobil'=>'required',
        'id_supplier'=>'required',]);
        $supplier_mobil = new Supplier_mobil;
        $supplier_mobil->id_mobil = $input->id_mobil;
        $supplier_mobil->id_supplier  = $input->id_supplier;
        $informasi = $supplier->save() ? 'Berhasi simpan data' : 'Gagal simpan data';
        return redirect('supplier_mobil')->with(['informasi'=>$informasi]);
    }
    // public function edit($id)
    // {
    //    $mobil = new Mobil;
    // 	$supplier = new Supplier;
    // 	$supplier_mobil = new Supplier_mobil::find($id);
    //     return view ('Supplier_mobil.edit',compact('supplier','mobil','supplier_mobil'));
    // }
    public function lihat($id)
    {
        $supplier_mobil = Supplier_mobil::find($id);
        return view('supplier_mobil.lihat')->with(array('supplier_mobil'=>$supplier));
    }
    public function update($id, Request $input)
    {
        $this->validate($input,[
        'id_mobil'=>'required',
        'id_supplier'=>'required',]);
        
        $supplier_mobil = Supplier_mobil::find($id);
        $supplier_mobil->id_mobil = $input->id_mobil;
        $supplier_mobil->id_supplier  = $input->id_supplier;
        $informasi = $supplier->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('supplier_mobil')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $supplier_mobil = Supplier_mobil::find($id);
        $informasi = $supplier_mobil->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('supplier_mobil')->with(['informasi'=>$informasi]);
    }
}
