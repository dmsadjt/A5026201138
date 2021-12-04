<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AbsenController extends Controller
{
    public function indexabsen()
    {
    	// mengambil data dari table absen
    	$absen = DB::table('absen')->get();

    	// mengirim data absen ke view indexabsen
    	return view('absen.indexabsen',['absen' => $absen]);

    }
    // method untuk menampilkan view form tambah absen
public function add()
{
    $pegawai = DB::table('pegawai')
                    ->orderBy('pegawai_nama','asc')
                    ->get();
	// memanggil view add
	return view('absen.add',['pegawai' => $pegawai]);

}
// method untuk insert data ke table absen
public function store(Request $request)
{
	// insert data ke table absen
	DB::table('absen')->insert([

		'IDPegawai' => $request->IDPegawai,
		'Tanggal' => $request->Tanggal,
		'Status' => $request->Status
	]);
	// alihkan halaman ke halaman absen
	return redirect('/absen');
}
// method untuk edit data absen
public function edit($id)
{
	// mengambil data absen berdasarkan id yang dipilih
	$absen = DB::table('absen')->where('ID',$id)->get();

    // mengambil data pegawai
    $pegawai = DB::table('pegawai')
                    ->orderBy('pegawai_nama','asc')
                    ->get();

    $judul = "Halooooooooo ngaber";

	// passing data absen yang didapat ke view update.blade.php
	return view('absen.edit',['absen' => $absen , 'pegawai'=>$pegawai,'judul'=>$judul]);

}
// update data absen
public function update(Request $request)
{
	// update data absen
	DB::table('absen')->where('ID',$request->ID)->update([

		'IDPegawai' => $request->IDPegawai,
		'Tanggal' => $request->Tanggal,
		'Status' => $request->Status
	]);
	// alihkan halaman ke halaman absen
	return redirect('/absen');
}
// method untuk hapus data absen
public function hapus($ID)
{
	// menghapus data absen berdasarkan id yang dipilih
	DB::table('absen')->where('ID',$ID)->delete();

	// alihkan halaman ke halaman absen
	return redirect('/absen');
}
}

