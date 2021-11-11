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
