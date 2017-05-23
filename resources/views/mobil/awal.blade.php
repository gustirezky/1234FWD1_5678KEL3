@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data mobil </strong>
		<a href="{{url('mobil/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> mobil </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Pelanggan </th>
				<th> Katgori Mobil </th>
				<th> jumlah Hari sewa </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuamobil as $mobil)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{$mobil->pelanggan->nama_pelanggan or 'nama kosong'}}</td>
                	<td>{{$mobil->kategori->nama_mobil or 'nama mobil kosong'}}</td>
					<td>{{$mobil->jumlah_hari or 'jumlah Hari kosong'}}</td>
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('mobil/edit/'.$mobil->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('mobil/'.$mobil->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('mobil/hapus/'.$mobil->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop