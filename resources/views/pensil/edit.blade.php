@extends('layout.bahagia')
@section('title','Edit Data Pensil')
@section('konten')
    @section('judulhalaman','Edit Data Pensil')
	@foreach($pensil as $p)
	<form action="/pensil/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->kodepensil }}"> <br/>
        <div class="form-group">
            <label for="merkpensil">Merk Pensil</label>
            <input type="text" required="required" class="form-control" id="merkpensil" name="merkpensil" value="{{ $p->merkpensil }}">

        </div>
        <div class="form-group">
            <label for="stockpensil">Stock Pensil</label>
            <input type="text" required="required" class="form-control" id="stockpensil" name="stockpensil" value="{{ $p->stockpensil }}">

        </div>
        <div class="form-group">
            <label for="tersedia">Ketersediaan</label>
            <select class="form-control" name="tersedia" id="tersedia">
                <option value="Y">Y</option>
                <option value="T">T</option>
            </select>
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
	@endforeach
    <br>
	<a href="/pensil" class="btn btn-default"> Kembali</a>
@endsection
