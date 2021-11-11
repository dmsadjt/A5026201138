<html>

<head>
    <Title>Cool binary search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-color:#ccffee">
    <div class="container p-5">
        <div class="d-flex flex-row justify-content-center">
            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    Cool binary search

                </div>
                <div class="card-body"></div>
                <p class="card-title ps-3 pe-3">
                    Enter a number to search something in these set of number
                </p>
                <p class="p-3" style="background-color:#004d32;color:white;">{2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14, 20, 22, 45, 58, 90, 101, 200, 1099, 2011, 7000, 12333}</p>
                <form class="form ps-3 pe-3" method="post" action="hasil">
                    @csrf
                    <div class="mb-3">
                        <label for="index" class="form-label">Masukkan angka</label>
                        <input type="number" id="index" name="index" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

        </div>

    </div>
    </div>


    </div>

</body>

</html>
