<html>

<head>
    <Title>
        Registration
    </Title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <script>
        $(document).ready(function () {

            $("#name_error").hide();
            $("#address_error").hide();
            $("#email_error").hide();
            $("#pass_error").hide();
            $("#tel_error").hide();
            $("#course_error").hide();
            $("#zip_error").hide();
            $("#name_ok").hide();
            $("#address_ok").hide();
            $("#email_ok").hide();
            $("#pass_ok").hide();
            $("#tel_ok").hide();
            $("#course_ok").hide();
            $("#zip_ok").hide();

            var nametrue = false;
            var addresstrue = false;
            var emailtrue = false;
            var passtrue = false;
            var teltrue = false;
            var cortrue = false;
            var ziptrue = false;

            $("#name").focusout(function () {
                checkName();
            });
            $("#address").focusout(function () {
                checkAddress();
            });
            $("#email").focusout(function () {
                checkEmail();
            });
            $("#passwords").focusout(function () {
                checkPass();
            });
            $("#tel").focusout(function () {
                checkTel();
            });
            $("#course").focusout(function () {
                checkCor();
            });
            $("#zip").focusout(function () {
                checkZip();
            });

            function checkName() {
                let pattern = /^[A-Za-z ]+$/;
                let masuk = $("#name").val();
                if (pattern.test(masuk) == true && masuk !== '') {
                    $("#name_error").hide();
                    $("#name_ok").show();
                    nametrue = true;
                    $("#name").css("border", "2px solid green");
                }
                else {
                    $("#name_ok").hide();
                    $("#name_error").show();
                    nametrue = false;
                    $("#name").css("border", "2px solid red");
                }
            }
            function checkAddress() {
                let pattern = /^[\w ]+$/;
                let masuk = $("#address").val();
                if (pattern.test(masuk) == true && masuk !== '') {
                    $("#address_error").hide();
                    $("#address_ok").show();
                    addresstrue = true;
                    $("#address").css("border", "2px solid green");
                }
                else {
                    $("#address_ok").hide();
                    $("#address_error").show();
                    addresstrue = false;
                    $("#address").css("border", "2px solid red");
                }
            }
            function checkEmail() {
                let pattern = /^[^@]+@+[^@]+$/;
                let masuk = $("#email").val();
                if (pattern.test(masuk) == true && masuk !== '') {
                    $("#email_error").hide();
                    $("#email_ok").show();
                    emailtrue = true;
                    $("#email").css("border", "2px solid green");
                }
                else {
                    $("#email_ok").hide();
                    $("#email_error").show();
                    emailtrue = false;
                    $("#email").css("border", "2px solid red");
                }
            }
            function checkPass() {
                let pattern = /^[\w ]{8,16}$/;
                let masuk = $("#passwords").val();
                if (pattern.test(masuk) == true && masuk !== '') {
                    $("#pass_error").hide();
                    $("#pass_ok").show();
                    passtrue = true;
                    $("#passwords").css("border", "2px solid green");
                }
                else {
                    $("#pass_ok").hide();
                    $("#pass_error").show();
                    passtrue = false;
                    $("#passwords").css("border", "2px solid red");
                }
            }
            function checkTel() {
                let pattern = /^[\d]{7,}$/;
                let masuk = $("#tel").val();
                if (pattern.test(masuk) == true && masuk !== '') {
                    $("#tel_error").hide();
                    $("#tel_ok").show();
                    teltrue = true;
                    $("#tel").css("border", "2px solid green");
                }
                else {
                    $("#tel_ok").hide();
                    $("#tel_error").show();
                    teltrue = false;
                    $("#tel").css("border", "2px solid red");
                }
            }
            function checkCor() {
                let masuk = $("#course option:selected").index();
                if (masuk != '0') {
                    $("#course_error").hide();
                    $("#course_ok").show();
                    cortrue = true;
                    $("#cor").css("border", "2px solid green");
                }
                else {
                    $("#course_ok").hide();
                    $("#course_error").show();
                    coltrue = false;
                    $("#cor").css("border", "2px solid red");
                }
            }
            function checkZip() {
                let pattern = /^[\d]{6}$/;
                let masuk = $("#zip").val();
                if (pattern.test(masuk) == true && masuk !== '') {
                    $("#zip_error").hide();
                    $("#zip_ok").show();
                    ziptrue = true;
                    $("#zip").css("border", "2px solid green");
                }
                else {
                    $("#zip_ok").hide();
                    $("#zip_error").show();
                    ziptrue = false;
                    $("#zip").css("border", "2px solid red");
                }
            }

            $("#regform").submit(function () {
                nametrue = false;
                addresstrue = false;
                emailtrue = false;
                passtrue = false;
                teltrue = false;
                cortrue = false;
                ziptrue = false;

                checkName();
                checkAddress();
                checkEmail();
                checkPass();
                checkTel();
                checkCor();
                checkZip();

                if (
                    nametrue === true &&
                    addresstrue === true &&
                    emailtrue === true &&
                    passtrue === true &&
                    teltrue === true &&
                    cortrue === true &&
                    ziptrue === true
                ) {
                    alert("Registration success!");
                    return true;
                }
                else {
                    alert("Please fill the form correctly");
                    return false;
                }
            })
        });
    </script>
    <style>
        body{
            font-family: 'Montserrat', sans-serif;
        }
        .error {
            color: red;
        }

        .ok {
            color: green;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container p-4 bg-dark border-light text-white" style="height:100%">
        <h1>Registration Form</h1>
        <form method="get" id="regform" action="/">
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" class="form-control">
                <span id="name_error" class="error">Alphabets only</span>
                <span id="name_ok" class="ok">Looks Good!</span>
            </div>
            <div>
                <label for="address" class="form-label">Address</label>
                <input type="text" id="address" class="form-control">
                <span id="address_error" class="error">Alphanumerics only</span>
                <span id="address_ok" class="ok">Looks Good!</span>
            </div>
            <div>
                <label for="email" class="form-label">E-mail address</label>
                <input type="text" id="email" class="form-control">
                <span id="email_error" class="error">Be sure to enter in example@example format</span>
                <span id="email_ok" class="ok">Looks Good!</span>
            </div>
            <div>
                <label for="passwords" class="form-label">Password</label>
                <input type="password" id="passwords" class="form-control">
                <span id="pass_error" class="error">Enter 8-16 characters</span>
                <span id="pass_ok" class="ok">Looks Good!</span>
            </div>
            <div>
                <label for="tel" class="form-label">Telephone</label>
                <input type="text" id="tel" class="form-control">
                <span id="tel_error" class="error">Enter a minimum 7 digit number</span>
                <span id="tel_ok" class="ok">Looks Good!</span>
            </div>
            <div>
                <label for="course" class="form-label">Select your Course</label>
                <select id="course" class="form-select">
                    <option value="0"></option>
                    <option value="btech">BTECH</option>
                    <option value="bba">BBA</option>
                    <option value="bca">BCA</option>
                    <option value="bcom">B COM</option>
                    <option value="gfg">GEEKFORGEEKS</option>
                </select>
                <span id="course_error" class="error">Please select a course</span>
                <span id="course_ok" class="ok">Looks Good!</span>
            </div>
            <div>
                <label for="zip" class="form-label">Zip code</label>
                <input type="text" id="zip" class="form-control">
                <span id="zip_error" class="error">Enter a 6-digit number</span>
                <span id="zip_ok" class="ok">Looks Good!</span>
            </div>
            <div class="mt-3">
                <input type="submit" id="send" class="btn btn-primary" value="Send">
                <input type="reset" class="btn btn-secondary">
            </div>
        </form>

    </div>
</body>

</html>
