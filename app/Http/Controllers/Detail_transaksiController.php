<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\Detail_transaksiRequest;

use App\Detail_transaksi;
use App\Mobil;
use App\Transaksi;

class Detail_transaksiController extends Controller
{
    public function awal()
    {
        return view ('detail_transaksi.awal',['data'=>Detail_transaksi::all()]);
    }
    public function tambah()
    {
            $transaksi= new Transaksi;
            $mobil= new Mobil;

        return view ('detail_transaksi.tambah',compact('transaksi','mobil'));
    }
    public function simpan(Request $input)
    {
        // $this->validate($input,[
        // 'username'=>'required',
        // 'password'=>'required',]);
        $detail_transaksi = new Detail_transaksi;
        $detail_transaksi->id_transaksi = $input->id_transaksi;
        $detail_transaksi->id_mobil  = $input->id_mobil;
        $informasi = $detail_transaksi->save() ? 'Berhasi simpan data' : 'Gagal simpan data';

        return redirect('detail_transaksi')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $detail_transaksi = Detail_transaksi::find($id);
        return view('detail_transaksi.edit')->with(array('detail_transaksi'=>$detail_transaksi));
    }
    public function lihat($id)
    {
        $detail_transaksi = Detail_transaksi::find($id);
        return view('detail_transaksi.lihat')->with(array('detail_transaksi'=>$detail_transaksi));
    }
    public function update($id, Request $input)
    {
        $detail_transaksi = Detail_transaksi::find($id);
        $detail_transaksi->nama_pelanggan = $input->nama_pelanggan;
        $detail_transaksi->alamat  = $input->alamat;
        $detail_transaksi->no_hp = $input->no_hp;
        $detail_transaksi->nama_mobil = $input->nama_mobil;
        $detail_transaksi->jumlah_mobil = $input->jumlah_mobil;
        $detail_transaksi->total_bayar = $input->total_bayar;
        $detail_transaksi->tanggal_transaksi = $input->tanggal_transaksi;
        $informasi = $detail_transaksi->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('detail_transaksi')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $detail_transaksi = Detail_transaksi::find($id);
        $informasi = $detail_transaksi->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('detail_transaksi')->with(['informasi'=>$informasi]);
    }
}
