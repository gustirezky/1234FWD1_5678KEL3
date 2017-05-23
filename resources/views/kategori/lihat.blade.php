@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('kategori')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Kategori</strong>

	</div>
	<table class="table">
			<tr>
				<td>Merk Mobil</td>
				<td>:</td>
				<td>{{ $kategori->merk_mobil }}</td>
			</tr>
			<tr>
				<td>Jenis Mobil</td>
				<td>:</td>
				<td>{{ $kategori->jenis_mobil }}</td>
			</tr>
			<tr>
				<td>Warna</td>
				<td>:</td>
				<td>{{ $kategori->warna }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $kategori->created_at }}</td>
			</tr>
			<tr>
			<td class="col-xs-4"> Diupdate tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $kategori->updated_at }}</td>
			</tr>
	</table>
</div>
@stop