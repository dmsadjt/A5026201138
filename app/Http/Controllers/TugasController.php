<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
        $tugas = DB::table('tugas')->get();
        return view('tugas.index', ['tugas' => $tugas]);
    }
    public function tambah()
    {
        $pegawai = DB::table('pegawai')
                        ->orderBy('pegawai_nama','asc')
                        ->get();
        return view('tugas.tambah',['pegawai'=>$pegawai]);
    }
    public function store(Request $request)
    {
        DB::table('tugas')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status
        ]);
        return redirect('/tugas');
    }

    public function edit($id)
    {
        $pegawai = DB::table('pegawai')
                        ->orderBy('pegawai_nama','asc')
                        ->get();
        $tugas = DB::table('tugas')->where('ID', $id)->get();
        return view('tugas.edit', ['tugas' => $tugas,'pegawai'=>$pegawai]);
    }

    public function update(Request $request)
    {

        DB::table('tugas')->where('ID', $request->ID)->update([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status
        ]);
        return redirect('/tugas');
    }

    public function hapus($id)
    {
        DB::table('tugas')->where('ID', $id)->delete();
        return redirect('/tugas');
    }
}
