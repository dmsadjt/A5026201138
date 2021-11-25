<!DOCTYPE html>
<html>
<head>
	<title>Tugas Query Builder 25 November 2021</title>
</head>
<body>

	<h2>Tugas Query Builder 25 November 2021</h2>
	<h3>Muhammad Dimas Adijanto 5026201138</h3>

	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td>{{ $t->ID }}</td>
			<td>{{ $t->IDPegawai }}</td>
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


</body>
</html>
