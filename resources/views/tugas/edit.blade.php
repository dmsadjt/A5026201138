<!DOCTYPE html>
<html>
<head>
	<title>Tugas Query Builder 25 November 2021</title>
</head>
<body>

	<h2>Tugas Query Builder 25 November 2021</h2>
	<h3>Muhammad Dimas Adijanto 5026201138</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $t->ID }}"> <br/>
		ID Pegawai <input type="text" required="required" name="IDPegawai" value="{{ $t->IDPegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="Tanggal" value="{{ date('Y-m-d\TH:i', strtotime($t->Tanggal))}}"> <br/>
		Nama Tugas <input type="string" required="required" name="NamaTugas" value="{{ $t->NamaTugas }}"> <br/>
		Status <input type="string" required="required" name="Status" value="{{ $t->Status }}"><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
