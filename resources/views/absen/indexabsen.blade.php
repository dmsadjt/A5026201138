@extends('layout.bahagia')
@section('title','Data Absen Pegawai')
@section('konten')
    @section('judulhalaman','Data Absen Pegawai')

	<a href="/absen/add"> + Tambah Absensi</a>

	<br/>
	<br/>

	<table border="1" class="table table-bordered table-hover">
		<tr>

			<th>Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{$absen->links()}}
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
    </p>

@endsection
