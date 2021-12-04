@extends('layout.bahagia')
@section('title','Edit Data Tugas')
@section('konten')
    @section('judulhalaman','Edit Data Tugas Pegawai')

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $t->ID }}"> <br/>

        ID Pegawai <select name="IDPegawai" id="">
           @foreach ($pegawai as $p)
               <option value="{{$p->pegawai_id}}" @if($t->IDPegawai === $p->pegawai_id) selected="selected" @endif >{{$p->pegawai_nama}}</option>
           @endforeach
        </select>

        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="Tanggal" value="{{ $t->Tanggal }}"
                    required="required" />
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

		Nama Tugas <input type="string" required="required" name="NamaTugas" value="{{ $t->NamaTugas }}"> <br/>
		Status <input type="string" required="required" name="Status" value="{{ $t->Status }}"><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
