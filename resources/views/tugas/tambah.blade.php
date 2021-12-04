@extends('layout.bahagia')
@section('title','Tambah Data Pegawai')
@section('konten')
    @section('judulhalaman', 'Tambah Data Pegawai')

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
        ID Pegawai
        <select name="IDPegawai" id="IDPegawai" required>
            @foreach ($pegawai as $p)
                <option value="{{$p->pegawai_id}}">{{$p->pegawai_nama}}</option>
            @endforeach
        </select>

        <div class="form-group">
            <label for="dtpickerdemo" class="control-label">Tanggal :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="Tanggal" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>

        </div>
        <script type="text/javascript">
            $(function() {
                $('#dtpickerdemo').datetimepicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    showTodayButton: false,
                    locale: 'id',
                    "defaultDate": new Date(),
                });
            });
        </script>

		Nama Tugas <input type="text" name="NamaTugas" required="required"> <br/>
		Status <input type="text" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
