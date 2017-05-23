@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data pelanggan </strong>

		<a href="{{url('pelanggan/wizard')}}" class="btn btn-info btn-xs pull-right" style="margin-left:10px;"> Wizard</a>
		<a href="{{url('pelanggan/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> pelanggan </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> No Ktp </th>
				<th> Nama Pelanggan </th>
				<th> Jenis Kelamin </th>
				<th> Tanggal Lahir </th>
				<th> Alamat </th>
				<th> No HP </th>
				<th> id_karyawan </th>
				<th> Aksi </th>
				
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $pelanggan)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $pelanggan->no_ktp or 'no ktp kosong' }}</td>
					<td>{{ $pelanggan->nama_pelanggan or 'nama kosong' }}</td>
					<td>{{ $pelanggan->jenis_kelamin or 'jenis kelamin kosong' }}</td>
					<td>{{ $pelanggan->tanggal_lahir or 'tanggal lahir kosong' }}</td>
					<td>{{ $pelanggan->alamat or 'alamat kosong' }}</td>
					<td>{{ $pelanggan->no_hp or 'nomor hp kosong' }}</td>
					<td>{{ $pelanggan->Karyawan->id_karyawan or 'tidak ada' }}</td>
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('pelanggan/edit/'.$pelanggan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('pelanggan/'.$pelanggan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('pelanggan/hapus/'.$pelanggan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop