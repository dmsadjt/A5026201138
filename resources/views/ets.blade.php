<html>
<head>
    <Title>Form Input Peserta Vaksinasi</Title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script>
        $(document).ready(function () {
            $("#nama-error").hide();
            $("#nik-error").hide();
            $("#vac-error").hide();
            $("#nob-error").hide();
            $("#nama-ok").hide();
            $("#nik-ok").hide();
            $("#vac-ok").hide();
            $("#nob-ok").hide();

            let namavalid = false;
            let nikvalid = false;
            let vacvalid = false;
            let nobvalid = false;

            $("#nama").focusout(function () {
                checkNama();
            });
            $("#nik").focusout(function () {
                checkNik();
            });
            $("#vac").focusout(function () {
                checkVac();
            });
            $("#nob").focusout(function () {
                checkNob();
            });

            function checkNama() {
                let pattern = /^[A-Za-z ]{10,}$/;
                let masuk = $("#nama").val();
                if (pattern.test(masuk) == true && masuk !== '') {
                    $("#nama-error").hide();
                    $("#nama-ok").show();
                    namavalid = true;
                    $("#nama").css("border", "2px solid green");
                }
                else {
                    $("#nama-ok").hide();
                    $("#nama-error").show();
                    namavalid = false;
                    $("#nama").css("border", "2px solid red");
                }
            }

            function checkNik() {
                let pattern = /^[\d]{16}$/;
                let masuk = $("#nik").val();
                if (pattern.test(masuk) == true && masuk !== '') {
                    $("#nik-error").hide();
                    $("#nik-ok").show();
                    nikvalid = true;
                    $("#nik").css("border", "2px solid green");
                }
                else {
                    $("#nik-ok").hide();
                    $("#nik-error").show();
                    nikvalid = false;
                    $("#nik").css("border", "2px solid red");
                }
            }

            function checkVac() {
                let masuk = $("#vac option:selected").index();
                if (masuk != 0) {
                    $("#vac-error").hide();
                    $("#vac-ok").show();
                    vacvalid = true;
                    $("#vac").css("border", "2px solid green");
                }
                else {
                    $("#vac-ok").hide();
                    $("#vac-error").show();
                    vacvalid = false;
                    $("#vac").css("border", "2px solid red");
                }
            }

            function checkNob() {
                let pattern = /^[A-Za-z0-9]+$/;
                let masuk = $("#nob").val();
                if (pattern.test(masuk) == true && masuk !== '') {
                    $("#nob-error").hide();
                    $("#nob-ok").show();
                    nobvalid = true;
                    $("#nob").css("border", "2px solid green");
                }
                else {
                    $("#nob-ok").hide();
                    $("#nob-error").show();
                    nobvalid = false;
                    $("#nob").css("border", "2px solid red");
                }
            }
            $("#rest").click(function () {
                $("#nama-error").hide();
                $("#nik-error").hide();
                $("#vac-error").hide();
                $("#nob-error").hide();
                $("#nama-ok").hide();
                $("#nik-ok").hide();
                $("#vac-ok").hide();
                $("#nob-ok").hide();
                $("#nama").css("border", "2px solid black");
                $("#nik").css("border", "2px solid black");
                $("#vac").css("border", "2px solid black");
                $("#nob").css("border", "2px solid black");
            })
            $("#vaccine").submit(function () {
                namavalid = false;
                nikvalid = false;
                vacvalid = false;
                nobvalid = false;

                checkNama();
                checkNik();
                checkNob();
                checkVac();

                console.log("ok");
                if (
                    namavalid === true &&
                    nikvalid === true &&
                    vacvalid === true &&
                    nobvalid === true
                ) {
                    alert("Penyimpanan Sukses");
                    return true;
                }
                else {
                    alert("Tolong isi form dengan benar");
                    return false;
                }
            })

        });
    </script>
    <style>
        .error {
            color: red;
        }

        .ok {
            color: green;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

        .card {
            width: 60rem;
        }
        .form-control{
            border : 2px solid black;
        }
        .form-select{
            border : 2px solid black;
        }
    </style>
</head>

<body class="bg-secondary">
    <div class="container align-middle p-2" style="height:100;">
        <div class="card shadow bg-dark text-white border-info p-2 top-100 start-50 translate-middle-x">
            <div class="card-header">
                <p>Muhammad Dimas Adijanto <br>
                    Dimas<br>
                    5026201138</p>
            </div>
            <div class=" card-title text-center">
                <h1>Form Input Peserta Vaksinasi</h1>
            </div>
            <div class="card-body p-2 ms-5 me-5">
                <form method="get" action="\" id="vaccine">
                    <div class="row">
                        <div class="col">
                            <label for="nama" class="form-label">Nama Peserta</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="nama" class="form-control">
                        </div>
                        <div class="error text-end" id="nama-error">Tolong isi dengan huruf alfabet minimal 10 karakter
                        </div>
                        <div class="ok text-end" id="nama-ok">Terlihat bagus!</div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="nik" class="form-label">NIK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="nik" class="form-control">
                        </div>
                        <div class="error text-end" id="nik-error">Tolong isi 16 angka NIK mu</div>
                        <div class="ok text-end" id="nik-ok">Terlihat bagus!</div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="vac">Jenis Vaksin</label>
                        </div>
                        <div class="col-10">
                            <select class="form-select" id="vac">
                                <option></option>
                                <option>AstraZeneca</option>
                                <option>Sinovac</option>
                                <option>Moderna</option>
                            </select>
                        </div>
                        <div class="error text-end" id="vac-error">Pilih jenis vaksin</div>
                        <div class="ok text-end" id="vac-ok">Terlihat bagus!</div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="nob" class="form-label">No Batch</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="nob" class="form-control">
                        </div>
                        <div class="error text-end" id="nob-error">Dilarang mengisi karakter selain angka dan huruf
                        </div>
                        <div class="ok text-end" id="nob-ok">Terlihat bagus!</div>
                    </div><br><br><br>
                    <div class="row">
                        <div class="col d-grid ">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                        <div class="col-6 d-grid ">
                            <input type="reset" class="btn btn-success" id="rest">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
