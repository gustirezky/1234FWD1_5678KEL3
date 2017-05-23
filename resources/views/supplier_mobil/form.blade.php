<div class="form-group">
	<label class="col-sm-2 control-label">Mobil</label>
	<div class="col-sm-10">
		{!! Form::select('id_mobil',$mobil->listMobildanPelanggan(),null,['class'=>'form-control','id'=>'id_mobil','placeholder'=>"id_mobil"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Supplier</label>
	<div class="col-sm-10">
		{!! Form::select('id_supplier',$supplier->listSupplier(),null,['class'=>'form-control','id'=>'id_supplier','placeholder'=>"id_supplier"]) !!}
	</div>	
</div>



