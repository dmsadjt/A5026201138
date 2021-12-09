@extends('layout.bahagia')
@section('title', 'Lihat Data Pensil')
@section('konten')
@section('judulhalaman', 'Lihat Data Pensil')
@foreach ($pensil as $p)
    <br>
    <div>
        <h4><b>Merk Pensil</b> </h4>
        <p>{{ $p->merkpensil }}</p>
    </div>
    <div>
        <h4><b>Stock Pensil</b> </h4>
        <p>{{ $p->stockpensil }}</p>
    </div>
    <div>
        <h4><b>Ketersediaan</b></h4>
        <p>{{ $p->tersedia }}</p>
    </div>
@endforeach
<br>
<a href="/pensil" class="btn btn-default"> Kembali</a>
@endsection
