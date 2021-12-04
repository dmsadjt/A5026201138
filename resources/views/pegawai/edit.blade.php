@extends('layout.bahagia')
@section('title','Edit Data Pegawai')
@section('konten')
    @section('judulhalaman','Edit Data Pegawai')
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" required="required" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}">

        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" required="required" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}">

        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" required="required" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}">

        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea required="required" id="alamat" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea>

        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
	@endforeach
    <br>
	<a href="/pegawai" class="btn btn-default"> Kembali</a>
@endsection
