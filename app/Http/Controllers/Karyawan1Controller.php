<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan1Controller extends Controller
{
    public function index()
    {
        //ambil data dari karyawan1
        $karyawan = DB::table('karyawan1')->paginate(5);

        // mengirim data pegawai ke view index
        return view('karyawan.index', ['karyawan' => $karyawan]);
    }

    // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {
        // memanggil view tambah
        return view('karyawan.tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('karyawan1')->insert([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    // method untuk hapus data pegawai
    public function hapus($nip)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('karyawan1')->where('NIP', $nip)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan');
    }
}
