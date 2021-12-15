@extends("layout.bahagia")
@section('title', 'Tambah Data Karyawan')
@section('konten')
@section('judulhalaman', 'Tambah Data Karyawan')

<form action="/karyawan/store" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="NIP">NIP</label>
        <input type="text" class="form-control" name="NIP" id="NIP" required="required"> <br />
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" class="form-control" name="Nama" id="Nama" required="required"> <br />
    </div>
    <div class="form-group">
        <label for="Pangkat">Pangkat</label>
        <input type="text" class="form-control" name="Pangkat" id="Pangkat" required="required"> <br />

    </div>
    <div class="form-group">
        <label for="Gaji">Gaji</label>
        <input type="number" class="form-control" name="Gaji" class="form-control" id="Gaji" required="required"> <br />
    </div>
    <input type="submit" class="btn btn-primary" value="Simpan Data">
</form><br>
<a href="/karyawan" class="btn btn-default"> Kembali</a>
@endsection
