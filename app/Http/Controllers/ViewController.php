<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function showForm(){
        //code untuk load data yang akan dimuat di form
        return view('tugasphp');
    }

    public function resultGreetings(){
        //code untuk load data yang akan dimuat di form
        return view('hasilphp');

    }

}
