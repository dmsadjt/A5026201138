@extends("layout.bahagia")
@section('title', 'Tambah Data Pegawai')
@section('konten')
@section('judulhalaman', 'Tambah Data Pegawai')

<form action="/pegawai/store" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" required="required"> <br />
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control" name="jabatan" id="jabatan" required="required"> <br />
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="number" class="form-control" name="umur" id="umur" required="required"> <br />

    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" class="form-control" id="alamat" required="required"></textarea> <br />
    </div>
    <input type="submit" class="btn btn-primary" value="Simpan Data">
</form><br>
<a href="/pegawai" class="btn btn-default"> Kembali</a>
@endsection
