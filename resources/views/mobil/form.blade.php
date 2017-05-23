<div class="form-group">
	<label class="col-sm-2 control-label" id="id">Pelanggan</label>
	<div class="col-sm-10">
	{!! Form::select('id_pelanggan',$pelanggan->listPelanggan(),isset($pelangganValue)? $pelangganValue: null,['class'=>'form-control','id'=>'id_pelanggan','placeholder'=>"pelanggan"]) !!}
	</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="id">Kategori</label>
	<div class="col-sm-10">
	{!! Form::select('id_kategori',$kategori->listKategori(),null,['class'=>'form-control','id'=>'id_kategori','placeholder'=>"Kategori"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label" id="id">Jumlah Hari</label>
	<div class="col-sm-10">
	{!! Form::text('jumlah_hari',null,['class'=>'form-control','id'=>'jumlah_hari','placeholder'=>"Jumlah Hari pelanggan menyewa mobil"]) !!}
	</div>
	</div>