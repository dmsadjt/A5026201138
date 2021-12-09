@extends('layout.bahagia')
@section('title', 'Edit Data Pegawai')
@section('konten')
@section('judulhalaman', 'Lihat Data Pegawai')
@foreach ($pegawai as $p)
    <br>
    <div>
        <h4><b>Nama</b> </h4>
        <p>{{ $p->pegawai_nama }}</p>
    </div>
    <div>
        <h4><b>Jabatan</b> </h4>
        <p>{{ $p->pegawai_jabatan }}</p>
    </div>
    <div>
        <h4><b>Umur</b></h4>
        <p>{{ $p->pegawai_umur }}</p>
    </div>
    <div>
        <h4><b>Alamat</b></h4>
        <p>{{ $p->pegawai_alamat }}</p>
    </div>
@endforeach
<br>
<a href="/pegawai" class="btn btn-default"> Kembali</a>
@endsection
