@extends('layout.bahagia')

@section('title', 'Tambah Absen')
@section('judulhalaman', 'Tambah Data Absen')

@section('konten')
        <form action="/absen/store" class="form-group" method="post">
            {{ csrf_field() }}

            IDPegawai
            <select class="form-control" name="IDPegawai" id="idpegawai">
                @foreach ($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_id }}</option>
                @endforeach
            </select> <br />

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

            Status <br />
            <input type="radio" id="html" name="Status" value="I">
            <label for="html">Izin</label><br>
            <input type="radio" id="css" name="Status" value="S">
            <label for="css">Sakit</label><br>
            <input type="radio" id="javascript" name="Status" value="A">
            <label for="javascript">Alpha</label>


            <br><input type="submit" value="Simpan Data">
        </form>
        <p> <a href="/absen"> Kembali</a></p>

@endsection
