<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script>
        $(document).ready(function () {
            $("#tambah").click(function () {
                $("#sayur").prepend("<p>Sayur</p>");
            })
            $("#tambah-daging").click(function () {
                $("#daging").append("<p>Daging</p>");
            })
            $("#tambah-saos").click(function () {
                $("#keju").prepend("<p>Saos</p>");
            })
        })
        function banyak(bahan) {
            if (bahan == "daging") {
                var txt1 = "<p>Daging<p>";
                $("#daging").append(txt1, txt1, txt1, txt1, txt1);
            }
            else if (bahan == "sayur") {
                var txt1 = "<p>Sayur<p>";
                $("#sayur").prepend(txt1, txt1, txt1, txt1, txt1);
            }
            else {
                var txt1 = "<p>Saos<p>";
                $("#keju").prepend(txt1, txt1, txt1, txt1, txt1);
            }
        }
    </script>
</head>

<body>
    <div class="container text-center bg-secondary text-white" style="height:100%">
        <div class="row p-5">
            <div class="col">
                <h1>Mari rancang burger idaman anda!</h1>
                <h1>Roti Atas</h1>
                <p id="keju">Keju</p>
                <p id="sayur">Sayur</p>
                <p id="daging">Daging</p>
                <h1>Roti Bawah</h1>
            </div>
            <div class="col-3 bg-dark text-white p-5">
                <h1>Customize!</h1>
                <button id="tambah" class="btn-primary">Tambah Sayur</button><br><br>
                <button id="tambah-daging" class="btn-primary">Tambah Daging</button><br><br>
                <button id="tambah-saos" class="btn-primary">Tambah Saos</button><br><br>
                <button id="tambah-dg-bnyk" class="btn-danger" onclick="banyak('daging');">Tambah 5
                    Daging</button><br><br>
                <button id="tambah-dg-bnyk" class="btn-danger" onclick="banyak('sayur');">Tambah 5
                    Sayur</button><br><br>
                <button id="tambah-dg-bnyk" class="btn-danger" onclick="banyak();">Tambah 5 Saos</button><br><br>
                    <a href="/" class="btn btn-dark">Home</a>
            </div>
        </div>

    </div>
</body>

</html>
