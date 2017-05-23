@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data detail_transaksi </strong>
		<a href="{{url('detail_transaksi/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> detail_transaksi </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama Mobil </th>
				<th> Jumlah Hari </th>
				<th> Nama Pelanggan </th>
				<th> Jenis Kelamin </th>
				<th> No KTP </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $detail_transaksi)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $detail_transaksi->username or 'username kosong' }}</td>
					<td>{{ $detail_transaksi->password or 'password kosong' }}</td>
					<td>{{ $detail_transaksi->nama or 'nama kosong' }}</td>
					<td>{{ $detail_transaksi->level or 'level kosong' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('detail_transaksi/edit/'.$detail_transaksi->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('detail_transaksi/'.$detail_transaksi->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('detail_transaksi/hapus/'.$detail_transaksi->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop