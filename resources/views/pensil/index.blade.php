@extends('layout.bahagia')
@section('title', 'Data Pensil')
@section('konten')
@section('judulhalaman', 'Data Pensil')

<style type="text/css">
    .pagination li {
        float: left;
        list-style-type: none;
        margin: 5px;
    }

</style>

<a href="/pensil/tambah"> + Tambah Pensil Baru</a>

<br>
<br>
<div>
    <form action="/pensil/cari" method="GET">
        <div class="form-group col-sm-6">
            <input class="form-control" type="text" name="cari" placeholder="Cari Pensil berdasarkan kode atau nama"
                value="{{ old('cari') }}">
        </div>
        <input class="btn btn-default" type="submit" value="CARI">
    </form>
</div>
<br>

<table border="1" class="table table-bordered table-hover">
    <tr>
        <th>Kode Pensil</th>
        <th>Merk Pensil</th>
        <th>Stock Pensil</th>
        <th>Ketersediaan</th>
        <th>Opsi</th>
    </tr>
    @foreach ($pensil as $p)
        <tr>
            <td>{{ $p->kodepensil }}</td>
            <td>{{ $p->merkpensil }}</td>
            <td>{{ $p->stockpensil }}</td>
            <td>{{ $p->tersedia }}</td>
            <td>
                <a href="/pensil/edit/{{ $p->kodepensil }}">Edit</a>
                |
                <a href="/pensil/view/{{ $p->kodepensil }}">View</a>
                |
                <a href="/pensil/hapus/{{ $p->kodepensil }}">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $pensil->links() }}

@endsection
