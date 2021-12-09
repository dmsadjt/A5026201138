@extends('layout.bahagia')
@section('title','Edit Data Tugas')
@section('konten')
    @section('judulhalaman','Edit Data Tugas Pegawai')

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $t->ID }}"> <br/>
        <div class="form-group">
            <label for="IDPegawai" >ID Pegawai</label>
           <select name="IDPegawai" class="form-control" id="IDPegawai">
                @foreach ($pegawai as $p)
                    <option value="{{$p->pegawai_id}}" @if($t->IDPegawai === $p->pegawai_id) selected="selected" @endif >{{$p->pegawai_nama}}</option>
                @endforeach
             </select>
        </div>
        <div class="form-group">
            <label for="dtpickerdemo" class="control-label">Tanggal :</label>
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
        <div class="form-group">
            <label for="NamaTugas">Nama Tugas</label>
            <input type="string" required="required" class="form-control" id="NamaTugas" name="NamaTugas" value="{{ $t->NamaTugas }}">
        </div>
        <div class="form-group">
            <label for="Status">Status</label>
            <input type="string" required="required" class="form-control" name="Status" value="{{ $t->Status }}">
        </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
	@endforeach
    <br>
    <a href="/tugas" class="btn btn-default"> Kembali</a>
    <div class="col">
        <div></div>
    </div>
@endsection
