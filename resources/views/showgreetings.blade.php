<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Document</title>

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        body{
        background-image: url(https://images.unsplash.com/photo-1531736275454-adc48d079ce9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTd8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80);
        background-repeat: no-repeat;
        background-size: cover;

        }
        .container{
            align-items: center;
            justify-content: center;
            width: 700px;
            background: rgba(253, 227, 170, 0.781);
            padding: 20px;
            border-radius: 10px;
            margin: 50px auto;

        }
        button{
        width: 200px;
        }

    </style>
</head>
<body>
    <div class="container mt-3 mb-3 shadow-lg">

        <form name="RegistrationForm" action="greetings" method="post" onsubmit="return FormInput()" >
            @csrf
            <center><h1>GET TO KNOW YOU</h1></center>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>First Name</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" name="first" id="first" class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>Last Name</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" name="last" id="last" class="form-control form-control-sm">
                            </div>
                        </div>

                            <div class="row mt-3">
                                <div class="col-sm-4">
                                    <p>Sex</p>
                                </div>
                                <div class="col-sm-1">
                                    <p> : </p>
                                </div>
                                <div class="col-sm-7">
                                    <select name="sex" id="sex" class="form-control form-control-sm">
                                        <option value="">  </option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>Age</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <input type="number" name="age" id="age" class="form-control form-control-sm">
                            </div>
                        </div>

                        <br>

                        <div class="button text-center mb-3">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                        </div>
                        </div>

                    </form>
                </div>
</body>
</html>
