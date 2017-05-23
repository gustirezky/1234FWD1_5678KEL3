<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mobil;
use App\Transaksi;
use App\Detail_transaksi;

class tampil_transaksi extends Controller
{
    public function awal()
    {
        $semuamobil = Mobil::all();
        $semuatransaksi = Transaksi::all();
        $Dtransaksi = Detail_transaksi::all();

        $Dtransaksi->id_mobil = $$semuamobil-
        return view('tampil_transaksi.awal', compact('semuamobil','semuatransaksi'));
    }
}
