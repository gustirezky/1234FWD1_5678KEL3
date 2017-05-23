<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Jenis Kelamin</label>
	<div class="col-sm-10">
		{!! Form::select('jenis_kelamin',array('Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'),null,['class'=>'form-control','id'=>'jenis_kelamin','placeholder'=>"Jenis_kelamin"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal Lahir</label>
	<div class="col-sm-10">
		{!! Form::text('tanggal_lahir',null,['class'=>'form-control','id'=>'tanggal_lahir','placeholder'=>"Tanggal_lahir"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tempat Lahir</label>
	<div class="col-sm-10">
		{!! Form::text('tempat_lahir',null,['class'=>'form-control','id'=>'tempat_lahir','placeholder'=>"Tempat_lahir"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"Alamat"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">No HP</label>
	<div class="col-sm-10">
		{!! Form::text('no_hp',null,['class'=>'form-control','id'=>'no_hp','placeholder'=>"No_hp"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Jumlah Gaji</label>
	<div class="col-sm-10">
		{!! Form::text('jumlah_gaji',null,['class'=>'form-control','id'=>'jumlah_gaji','placeholder'=>"Jumlah_gaji"]) !!}
	</div>	
</div>