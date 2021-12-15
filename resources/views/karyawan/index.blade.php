@extends('layout.bahagia')
@section('title', 'Data Karyawan')
@section('konten')
@section('judulhalaman', 'Data Karyawan')

<style type="text/css">
    .pagination li {
        float: left;
        list-style-type: none;
        margin: 5px;
    }
</style>

<a href="/karyawan/tambah"> + Tambah Karyawan Baru</a>

<br>
<br>

<table border="1" class="table table-bordered table-hover">
    <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Pangkat</th>
        <th>Gaji</th>
    </tr>
    @foreach ($karyawan as $k)
        <tr>
            <td>{{ $k->NIP }}</td>
            <td>{{ $k->Nama }}</td>
            <td>{{ $k->Pangkat }}</td>
            <td >{{ number_format($k->Gaji, 0, ',', '.') }}</td>
            <td>
                <a href="/karyawan/hapus/{{ $k->NIP }}">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $karyawan->links() }}

@endsection
