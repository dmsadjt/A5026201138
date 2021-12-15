<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-1 text-right">
                        <img src="https://sipmaba.its.ac.id/uploads/foto/120382070450.jpeg" style="width:50px;">
                    </div>
                    <div class="col-md-3 text-right">
                        <h1>5026201138</h1>
                    </div>
                    <div class="col-md text-left">
                        <h1><b>Muhammad Dimas Adijanto</b></h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">

            <div class="col-md-3">
                <div class="thumbnail" >
                    <h1 class="text-center">Navigasi</h1>
                <hr>
                <ul class="nav text-center">
                    <li><a href="/pegawai" class="btn btn-default p-1">Pegawai</a></li><hr>
                    <li><a href="/absen" class="btn btn-default p-1">Absen</a></li><hr>
                    <li><a href="/tugas" class="btn btn-default p-1">Tugas</a></li><hr>
                    <li><a href="/pensil" class="btn btn-default p-1">Pensil</a></li><hr>
                    <li><a href="/karyawan" class="btn btn-default">Karyawan</a></li>
                </ul>
                </div>
            </div>
            <div class="col-md-9">
                <h3>@yield('judulhalaman')</h3>
                @section('konten')
                @show
            </div>
        </div>
    </div>

</body>

<footer>
    <div class="container">
        <br>
        <br>
        <hr>
        <p>Hak Cipta Oleh <b>5026201138 - Muhammad Dimas Adijanto</b></p>
    </div>
</footer>


</html>
