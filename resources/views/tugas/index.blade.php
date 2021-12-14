@extends('layout.bahagia')
@section('title','Data Tugas Pegawai')
@section('konten')
    @section('judulhalaman','Data Tugas Pegawai')
	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>
	<br/>
	<br/>
	<table border="1" class="table table-bordered table-hover">
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td>{{ $t->pegawai_nama }}</td>
			<td>{{ $t->Tanggal }}</td>
			<td>{{ $t->NamaTugas }}</td>
			<td>{{ $t->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $t->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{$tugas->links()}}

@endsection
