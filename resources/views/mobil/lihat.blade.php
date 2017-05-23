@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('mobil')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data mobil</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama Pelanggan</td>
				<td>:</td>
				<td>{{ $mobil->pelanggan->nama_pelanggan }}</td>
			</tr>
			<tr>
				<td>Nama Mobil</td>
				<td>:</td>
				<td>{{ $mobil->kategori->nama_mobil }}</td>
			</tr>
			<tr>
				<td>Jumlah Hari</td>
				<td>:</td>
				<td>{{ $mobil->jumlah_hari }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $mobil->created_at }}</td>
			</tr>
			<tr>
			<td class="col-xs-4"> Diupdate tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $mobil->updated_at }}</td>
			</tr>
	</table>
</div>
@stop