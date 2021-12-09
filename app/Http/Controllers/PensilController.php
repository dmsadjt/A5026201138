<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensilController extends Controller
{
    public function index()
    {
        // mengambil data dari table pensil
        $pensil = DB::table('pensil')->paginate(5);

        // mengirim data pegawai ke view index
        return view('pensil.index', ['pensil' => $pensil]);
    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('pensil.tambah');
    }

    // method untuk insert data ke table pensil
    public function store(Request $request)
    {
        // insert data ke table pensil
        DB::table('pensil')->insert([
            'merkpensil' => $request->merkpensil,
            'stockpensil' => $request->stockpensil,
            'tersedia' => $request->tersedia
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/pensil');
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pensil = DB::table('pensil')->where('kodepensil', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('pensil.edit', ['pensil' => $pensil]);
    }

    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pensil = DB::table('pensil')->where('kodepensil', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('pensil.view', ['pensil' => $pensil]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pensil')->where('kodepensil', $request->id)->update([
            'merkpensil' => $request->merkpensil,
            'stockpensil' => $request->stockpensil,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pensil');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pensil')->where('kodepensil', $id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/pensil');
    }

    //method cari
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table pegawai sesuai pencarian data
		$pensil = DB::table('pensil')
		->where('kodepensil','like',"%" . $cari . "%")
        ->orWhere('merkpensil','like',"%" . $cari . "%")
		->paginate(5);

    	// mengirim data pegawai ke view index
		return view('pensil.index',['pensil' => $pensil]);

	}
}
