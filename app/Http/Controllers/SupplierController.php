<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Supplier;

class SupplierController extends Controller
{
   public function awal()
    {
        return view ('supplier.awal',['data'=>Supplier::all()]);
    }
    public function tambah()
    {
        return view ('supplier.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
        'nama_supplier'=>'required',
        'lokasi_supplier'=>'required',]);
        $supplier = new Supplier;
        $supplier->nama_supplier = $input->nama_supplier;
        $supplier->lokasi_supplier  = $input->lokasi_supplier;
        $informasi = $supplier->save() ? 'Berhasi simpan data' : 'Gagal simpan data';
        return redirect('supplier')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.edit')->with(array('supplier'=>$supplier));
    }
    public function lihat($id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.lihat')->with(array('supplier'=>$supplier));
    }
    public function update($id, Request $input)
    {
        $this->validate($input,[
        'nama_supplier'=>'required',
        'lokasi_supplier'=>'required',]);
        
        $supplier = Supplier::find($id);
        $supplier->nama_supplier = $input->nama_supplier;
        $supplier->lokasi_supplier  = $input->lokasi_supplier;
        $informasi = $supplier->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('supplier')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $supplier = Supplier::find($id);
        $informasi = $supplier->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('supplier')->with(['informasi'=>$informasi]);
    }
}
