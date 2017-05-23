<div class="form-group">
	<label class="col-sm-2 control-label">No KTP</label>
	<div class="col-sm-10">
		{!! Form::text('no_ktp',null,['class'=>'form-control','id'=>'no_ktp','placeholder'=>"no_ktp"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama_pelanggan',null,['class'=>'form-control','id'=>'nama','placeholder'=>"nama_pelanggan"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Jenis Kelamin</label>
	<div class="col-sm-10">
		{!! Form::select('jenis_kelamin',array('Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'),null,['class'=>'form-control','id'=>'jenis_kelamin','placeholder'=>"jenis_kelamin"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal Lahir</label>
	<div class="col-sm-10">
		{!! Form::text('tanggal_lahir',null,['class'=>'form-control','id'=>'tanggal_lahir','placeholder'=>"tanggal_lahir"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"alamat"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">No HP</label>
	<div class="col-sm-10">
		{!! Form::text('no_hp',null,['class'=>'form-control','id'=>'no_hp','placeholder'=>"no_hp"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">id karyawan</label>
	<div class="col-sm-10">
		{!! Form::select('id_karyawan',$karyawan->listKaryawan(),null,['class'=>'form-control','id'=>'id_karyawan','placeholder'=>"id_karyawan"]) !!}
	</div>	
</div>