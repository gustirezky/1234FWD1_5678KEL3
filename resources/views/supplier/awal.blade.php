@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data supplier </strong>
		<a href="{{url('supplier/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> supplier </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama Supplier </th>
				<th> Lokasi Supplier </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $supplier)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $supplier->nama_supplier or 'data kosong' }}</td>
					<td>{{ $supplier->lokasi_supplier or 'data kosong' }}</td>
					
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('supplier/edit/'.$supplier->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('supplier/'.$supplier->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('supplier/hapus/'.$supplier->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop