@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Admin </strong>
		<a href="{{url('supplier_mobil/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> supplier_mobil </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama Mobil </th>
				<th> Jenis Mobil </th>
				<th> Nama Supplier </th>
				<th> Lokasi Supplier </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $supplier_mobil)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $supplier_mobil->mobil->nama_mobil or 'data kosong' }}</td>
					<td>{{ $supplier_mobil->mobil->jenis_mobil or 'data kosong' }}</td>
					<td>{{ $supplier_mobil->nama_supplier or 'data kosong' }}</td>
					<td>{{ $supplier_mobil->lokasi_supplier or 'data kosong' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('supplier_mobil/edit/'.$supplier_mobil->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('supplier_mobil/'.$supplier_mobil->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('supplier_mobil/hapus/'.$supplier_mobil->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop