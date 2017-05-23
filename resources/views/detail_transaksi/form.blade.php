<div class="form-group">
	<label class="col-sm-2 control-label" id="id_mobil">Pelanggan dan Mobil</label>
	<div class="col-sm-10">
		{!! Form::select('$id_mobil',$mobil->listMobildanPelanggan(),null,['class'=>'form-control','id'=>'id_mobil','placeholder'=>"Pelanggan dan Mobil"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_transaksi">Transaksi</label>
	<div class="col-sm-10">
		{!! Form::select('$id_transaksi',$transaksi->listtransaksi(),null,['class'=>'form-control','id'=>'id_transaksi','placeholder'=>"Transaksi"]) !!}	
	</div>
</div>
