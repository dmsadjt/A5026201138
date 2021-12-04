@extends('layout.bahagia')

@section('title', 'Edit Data Absensi')
@section('konten')
@section('judulhalaman', 'Edit Data Absensi')
@foreach ($absen as $a)
    <form action="/absen/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $a->ID }}"> <br />
        <label for="IDPegawai">Pegawai</label><br>
        <select name="IDPegawai" class="form-control" id="IDPegawai">
            @foreach ($pegawai as $p)
                <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        <br>

        <div class="form-group">
            <label for="dtpickerdemo" class="control-label">Tanggal :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="Tanggal" value="{{ $a->Tanggal }}"
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
        <label for="status-select">Status</label>
        <div class="radio" id="status-select">
            <input type="radio" id="html" name="Status" value="I">
            <label for="html">Izin</label><br>
            <input type="radio" id="css" name="Status" value="S">
            <label for="css">Sakit</label><br>
            <input type="radio" id="javascript" name="Status" value="A">
            <label for="javascript">Alpha</label>
        </div>


        <br>
        <input type="submit" class="btn btn-primary" value="Simpan Data">
    </form>
@endforeach
<br>
<a href="/absen" class="btn btn-default"> Kembali</a>
@endsection
