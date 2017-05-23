@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('supplier')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data supplier</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama Mobil</td>
				<td>:</td>
				<td>{{ $supplier_mobil->mobil->nama_mobil}}</td>
			</tr>
			<tr>
				<td>Jenis Mobil</td>
				<td>:</td>
				<td>{{ $supplier_mobil->mobil->jenis_mobil }}</td>
			</tr>
			<tr>
				<td>Nama Supplier</td>
				<td>:</td>
				<td>{{ $supplier_mobil->nama_supplier }}</td>
			</tr>
			<tr>
				<td>Lokasi Supplier</td>
				<td>:</td>
				<td>{{ $supplier_mobil->lokasi_supplier }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $supplier->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-1">:</td>
				<td>{{ $supplier->updated_at }}</td>
			</tr>
	</table>
</div>
@stop