<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Transaksi;


class TransaksiController extends Controller
{
    public function awal()
    {
        return view ('transaksi.awal',['data'=>Transaksi::all()]);
    }
    public function tambah()
    {
        return view ('transaksi.tambah');
    }
    public function simpan(Request $input)
    {
        // $this->validate($input,[
        // 'username'=>'required',
        // 'password'=>'required',]);
        $transaksi = new Transaksi;
        $transaksi->sewa_perhari = $input->sewa_perhari;
        $transaksi->jumlah_perhari  = $input->sewa_perhari;
        $transaksi->total_bayar = $input->total_bayar;
        $transaksi->tanggal_transaksi = $input->tanggal_transaksi;
        $informasi = $transaksi->save() ? 'Berhasi simpan data' : 'Gagal simpan data';
        return redirect('transaksi')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit')->with(array('transaksi'=>$transaksi));
    }
    public function lihat($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksi.lihat')->with(array('transaksi'=>$transaksi));
    }
    public function update($id, Request $input)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->sewa_perhari = $input->sewa_perhari;
        $transaksi->jumlah_perhari  = $input->sewa_perhari;
        $transaksi->total_bayar = $input->total_bayar;
        $transaksi->tanggal_transaksi = $input->tanggal_transaksi;
        $informasi = $transaksi->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('transaksi')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $transaksi = Transaksi::find($id);
        $informasi = $transaksi->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('transaksi')->with(['informasi'=>$informasi]);
    }
}
