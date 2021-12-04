@extends('layout.bahagia')
@section('title','Tambah Data Pegawai')
@section('konten')
    @section('judulhalaman', 'Tambah Data Pegawai')
	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="IDPegawai">Pegawai</label>
        <select name="IDPegawai" class="form-control" id="IDPegawai" required>
            @foreach ($pegawai as $p)
                <option value="{{$p->pegawai_id}}">{{$p->pegawai_nama}}</option>
            @endforeach
        </select>
        </div>
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

        <div class="form-group">
            <label for="NamaTugas">Nama Tugas</label>
            <input type="text" name="NamaTugas" class="form-control" id="NamaTugas" required="required">
        </div>
        <div class="form-group">
            <label for="Status">Status</label>
            <input type="text" name="Status" class="form-control" required="required">
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form><br>
    <a href="/tugas" class="btn btn-default"> Kembali</a>
@endsection
