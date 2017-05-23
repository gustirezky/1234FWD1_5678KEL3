@extends('master')
@section('container')

<div class="panel panel-default">
 <div class="container marketing">
<hr class="featurette-divider">
	<div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="{!!asset('img/registrasi.png')!!}" width="140" height="140">
          <h2>Registrasi Pelanggan</h2>
          <p>tahap pertama jika anda  ingin menyewa mobil yatiu registasi untuk mengii data diri anda</p>
          <p><a class="btn btn-default" href="{{ url('pelanggan/tambah') }}" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{!!asset('img/pilih_car.jpg')!!}" alt="Generic placeholder image" width="140" height="140">
          <h2>Pilih Mobil</h2>
          <p>Menu untuk Pilih mobil sesuai keinginan pelanggan</p>
          <p><a class="btn btn-default" href="{{ url('mobil/tambah') }}" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{!!asset('img/transaksi.png')!!}" alt="Generic placeholder image" width="140" height="140">
          <h2>Transaksi</h2>
          <p>Akan tampil nota transaki untuk pelanggan</p>
          <p><a class="btn btn-default" href="{{ url('detail_transaksi') }}" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
					</div> </div>
					@stop