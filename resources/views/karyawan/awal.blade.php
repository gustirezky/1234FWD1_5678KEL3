@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Karyawan </strong>
		<a href="{{url('karyawan/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Karyawan </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama </th>
				<th> Jenis Kelamin </th>
				<th> Tanggal Lahir </th>
				<th> Tempat Lahir </th>
				<th> alamat </th>
				<th> no_hp </th>
				<th> jumlah_gaji </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $karyawan)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $karyawan->nama or 'nama kosong' }}</td>
					<td>{{ $karyawan->jenis_kelamin or 'jenis_kelamin kosong' }}</td>
					<td>{{ $karyawan->tanggal_lahir or 'tanggal_lahir kosong' }}</td>
					<td>{{ $karyawan->tempat_lahir or 'tempat_lahir kosong' }}</td>
					<td>{{ $karyawan->alamat or 'alamat kosong' }}</td>
					<td>{{ $karyawan->no_hp or 'no_hp kosong' }}</td>
					<td>{{ $karyawan->jumlah_gaji or 'jumlah_gaji kosong' }}</td>
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('karyawan/edit/'.$karyawan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('karyawan/'.$karyawan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('karyawan/hapus/'.$karyawan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop