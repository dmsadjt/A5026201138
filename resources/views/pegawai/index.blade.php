@extends('layout.bahagia')
@section('title', 'Data Pegawai')
@section('konten')
@section('judulhalaman', 'Data Pegawai')

<style type="text/css">
    .pagination li {
        float: left;
        list-style-type: none;
        margin: 5px;
    }

</style>

<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

<br>
<br>
<div>
    <form action="/pegawai/cari" method="GET">
        <div class="form-group col-sm-6">
            <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat"
                value="{{ old('cari') }}">
        </div>
        <input class="btn btn-default" type="submit" value="CARI">
    </form>
</div>
<br>

<table border="1" class="table table-bordered table-hover">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    @foreach ($pegawai as $p)
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                |
                <a href="/pegawai/view/{{ $p->pegawai_id }}">View</a>
                |
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $pegawai->links() }}

@endsection
