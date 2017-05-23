@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data kategori </strong>
		<a href="{{url('kategori/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> kategori </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Merk Mobil </th>
				<th> Nama Mobil </th>
				<th> Jenis Mobil </th>
				<th> Warna </th>
				<th> Nomor Plat </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $kategori)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{$kategori->merk_mobil or 'merk_mobil kosong' }}</td>
					<td>{{$kategori->nama_mobil or 'nama_mobil kosong' }}</td>
					<td>{{$kategori->jenis_mobil or 'jenis_mobil kosong'}}</td>
               		<td>{{$kategori->warna or 'warna kosong'}}</td>
					<td>{{$kategori->no_plat or 'No_plat kosong'}}</td>
			
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('kategori/edit/'.$kategori->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('kategori/'.$kategori->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('kategori/hapus/'.$kategori->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop