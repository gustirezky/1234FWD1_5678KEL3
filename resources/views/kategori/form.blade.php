<div class="form-group">
	<label class="col-sm-2 control-label">Merk Mobil</label>
	<div class="col-sm-10">
		{!! Form::text('merk_mobil',null,['class'=>'form-control','id'=>'merk_mobil','placeholder'=>"merk_mobil"]) !!}
	</div>	
</div><div class="form-group">
	<label class="col-sm-2 control-label">Nama Mobil</label>
	<div class="col-sm-10">
		{!! Form::text('nama_mobil',null,['class'=>'form-control','id'=>'nama_mobil','placeholder'=>"nama_mobil"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Jenis Mobil</label>
	<div class="col-sm-10">
		{!! Form::select('jenis_mobil',array('Matic'=>'Matic','Manual'=>'Manual'),null,['class'=>'form-control','id'=>'jenis_mobil','placeholder'=>"jenis_mobil"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Warna</label>
	<div class="col-sm-10">
		{!! Form::text('warna',null,['class'=>'form-control','id'=>'warna','placeholder'=>"warna"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Nomor Plat</label>
	<div class="col-sm-10">
		{!! Form::text('no_plat',null,['class'=>'form-control','id'=>'no_plat','placeholder'=>"warna"]) !!}
	</div>	
</div>