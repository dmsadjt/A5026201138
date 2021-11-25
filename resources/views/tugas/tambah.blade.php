<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="text" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="Tanggal" required="required"> <br/>
		Nama Tugas <input type="text" name="NamaTugas" required="required"> <br/>
		Status <input type="text" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
