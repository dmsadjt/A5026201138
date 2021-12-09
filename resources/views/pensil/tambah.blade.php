@extends("layout.bahagia")
@section('title', 'Tambah Data Pensil')
@section('konten')
@section('judulhalaman', 'Tambah Data Pensil')

<form action="/pensil/store" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="merkpensil">Merk Pensil</label>
        <input type="text" class="form-control" name="merkpensil" id="merkpensil" required="required"> <br />
    </div>
    <div class="form-group">
        <label for="stockpensil">Stock Pensil</label>
        <input type="number" class="form-control" name="stockpensil" id="stockpensil" required="required"> <br />
    </div>
    <div class="form-group">
        <label for="tersedia">Ketersediaan</label>
        <select class="form-control" name="tersedia" id="tersedia">
            <option value="Y">Y</option>
            <option value="T">T</option>
        </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Simpan Data">
</form><br>
<a href="/pensil" class="btn btn-default"> Kembali</a>
@endsection
