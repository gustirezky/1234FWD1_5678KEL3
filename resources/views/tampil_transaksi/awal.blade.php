@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('proses')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Transaksi</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama pelanggan</td>
				<td>:</td>
				<td>{{ $mobil->pelanggan->nama_pelanggan }}</td>
			</tr>
			<tr>
				<td>Nama Mobil</td>
				<td>:</td>
				<td>{{ $mobil->kategori->nama_mobil }}</td>
			</tr>
			<tr>
				<td>Merk Mobil</td>
				<td>:</td>
				<td>{{ $mobil->kategori->merk_mobil }}</td>
			</tr>
			<tr>
				<td>Jenis Mobil</td>
				<td>:</td>
				<td>{{ $mobil->kategori->jenis_mobil }}</td>
			</tr>
			<tr>
				<td>Warna Mobil</td>
				<td>:</td>
				<td>{{ $mobil->kategori->warna }}</td>
			</tr>
			<tr>
				<td>No Plat</td>
				<td>:</td>
				<td>{{ $mobil->kategori->no_plat }}</td>
			</tr>
			<tr>
				<td>Jumlah Hari Sewa</td>
				<td>:</td>
				<td>{{ $mobil->kategori->jumlah_hari }}</td>
			</tr>
			<tr>
				<td>Total Pembayaran</td>
				<td>:</td>
				<td>{{ $transaksi->total_bayar }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Nota Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $admin->created_at }}</td>
			</tr>
	</table>
</div>
@stop