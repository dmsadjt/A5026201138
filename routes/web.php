<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum2', function(){

    return view('htmlprak2');
});

Route::get('tugas4', function(){
    return view('tugas4');
});

Route::get('isibinary',"ViewController@showForm") ;
Route::post('hasil',"ViewController@resultGreetings") ;

Route::get('vaksin',"VaksinController@showForm");

//pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@view');

//tugas
Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{id}','TugasController@hapus');

//absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//pensil
Route::get('/pensil','PensilController@index');
Route::get('/pensil/tambah','PensilController@tambah');
Route::post('/pensil/store','PensilController@store');
Route::get('/pensil/edit/{id}','PensilController@edit');
Route::post('/pensil/update','PensilController@update');
Route::get('/pensil/hapus/{id}','PensilController@hapus');
Route::get('/pensil/cari','PensilController@cari');
Route::get('/pensil/view/{id}','PensilController@view');


//route karyawan
Route::get('/karyawan','Karyawan1Controller@index');
Route::get('/karyawan/tambah','Karyawan1Controller@tambah');
Route::post('/karyawan/store','Karyawan1Controller@store');
Route::get('/karyawan/hapus/{id}','Karyawan1Controller@hapus');
