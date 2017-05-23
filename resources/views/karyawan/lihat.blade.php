@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('karyawan')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Karyawan</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $karyawan->nama }}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>{{ $karyawan->jenis_kelamin }}</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td>{{ $karyawan->tanggal_lahir }}</td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td>{{ $karyawan->tempat_lahir }}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{ $karyawan->alamat }}</td>
			</tr>
			<tr>
				<td>No HP</td>
				<td>:</td>
				<td>{{ $karyawan->no_hp }}</td>
			</tr>
			<tr>
				<td>Jumlah Gaji</td>
				<td>:</td>
				<td>{{ $karyawan->jumlah_gaji }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $karyawan->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Diupdate tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $karyawan->updated_at }}</td>
			</tr>
	</table>
</div>
@stop