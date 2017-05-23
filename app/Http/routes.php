<?php

//////////////////////////////////////////////////////////
	
	
	
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');

	Route::group(['middleware'=>'AuthentifikasiUser'],function ()
{
	Route::get('proses', function () {
    return view('proses');
});
});

Route::get('admin','AdminController@awal');
	Route::get('admin/tambah','AdminController@tambah');
	Route::post('admin/simpan','AdminController@simpan');
	Route::get('admin/edit/{admin}','AdminController@edit');
	Route::post('admin/edit/{admin}','AdminController@update');
	Route::get('admin/hapus/{admin}','AdminController@hapus');
	Route::get('admin/{admin}','AdminController@lihat');

	Route::get('detail_transaksi','Detail_transaksiController@awal');
	Route::get('detail_transaksi/tambah','Detail_transaksiController@tambah');
	Route::post('detail_transaksi/simpan','Detail_transaksiController@simpan');
	Route::get('detail_transaksi/edit/{detail_transaksi}','Detail_transaksiController@edit');
	Route::post('detail_transaksi/edit/{detail_transaksi}','Detail_transaksiController@update');
	Route::get('detail_transaksi/hapus/{detail_transaksi}','Detail_transaksiController@hapus');
	Route::get('detail_transaksi/{detail_transaksi}','Detail_transaksiController@lihat');


	Route::get('karyawan','KaryawanController@awal');
	Route::get('karyawan/tambah','KaryawanController@tambah');
	Route::post('karyawan/simpan','KaryawanController@simpan');
	Route::get('karyawan/edit/{karyawan}','KaryawanController@edit');
	Route::post('karyawan/edit/{karyawan}','KaryawanController@update');
	Route::get('karyawan/hapus/{karyawan}','KaryawanController@hapus');
	Route::get('karyawan/{karyawan}','KaryawanController@lihat');


	Route::get('kategori','KategoriController@awal');
	Route::get('kategori/tambah','KategoriController@tambah');
	Route::post('kategori/simpan','KategoriController@simpan');
	Route::get('kategori/edit/{kategori}','KategoriController@edit');
	Route::post('kategori/edit/{kategori}','KategoriController@update');
	Route::get('kategori/hapus/{kategori}','KategoriController@hapus');
	Route::get('kategori/{kategori}','KategoriController@lihat');

	Route::get('mobil','MobilController@awal');
	Route::get('mobil/tambah','MobilController@tambah');
	Route::get('mobil/wizard','MobilController@wizard');
	Route::post('mobil/simpan','MobilController@simpan');
	Route::post('mobil/wizard','MobilController@simpanWizard');
	Route::get('mobil/edit/{mobil}','MobilController@edit');
	Route::post('mobil/edit/{mobil}','MobilController@update');
	Route::get('mobil/hapus/{mobil}','MobilController@hapus');
	Route::get('mobil/{mobil}','MobilController@lihat');

	Route::get('pelanggan','PelangganController@awal');
	Route::get('pelanggan/tambah','PelangganController@tambah');
	Route::get('pelanggan/wizard','PelangganController@wizard');
	Route::post('pelanggan/wizard','PelangganController@simpanWizard');
	Route::post('pelanggan/simpan','PelangganController@simpan');
	Route::get('pelanggan/edit/{pelanggan}','PelangganController@edit');
	Route::post('pelanggan/edit/{pelanggan}','PelangganController@update');
	Route::get('pelanggan/hapus/{pelanggan}','PelangganController@hapus');
	Route::get('pelanggan/{pelanggan}','PelangganController@lihat');

	Route::get('supplier','SupplierController@awal');
	Route::get('supplier/tambah','SupplierController@tambah');
	Route::post('supplier/simpan','SupplierController@simpan');
	Route::get('supplier/edit/{supplier}','SupplierController@edit');
	Route::post('supplier/edit/{supplier}','SupplierController@update');
	Route::get('supplier/hapus/{supplier}','SupplierController@hapus');
	Route::get('supplier/{supplier}','SupplierController@lihat');

	Route::get('supplier_mobil','SuppliermobilController@awal');
	Route::get('supplier_mobil/tambah','SuppliermobilController@tambah');
	Route::post('supplier_mobil/simpan','SuppliermobilController@simpan');
	Route::get('supplier_mobil/edit/{supplier_mobil}','SuppliermobilController@edit');
	Route::post('supplier_mobil/edit/{supplier_mobil}','SuppliermobilController@update');
	Route::get('supplier_mobil/hapus/{supplier_mobil}','SuppliermobilController@hapus');
	Route::get('supplier_mobil/{supplier_mobil}','SuppliermobilController@lihat');