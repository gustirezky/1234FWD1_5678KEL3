@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data transaksi </strong>
		<a href="{{url('transaksi/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Transaksi </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Total Bayar </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $transaksi)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $transaksi->total_bayar or 'total_bayar kosong' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('transaksi/edit/'.$transaksi->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('transaksi/'.$transaksi->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('transaksi/hapus/'.$transaksi->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop