<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5" style="max-width: 550px">
        <div class="alert alert-danger" id="error" style="display: none;"></div>

        <img src="{{ asset('logo.jpg') }}" alt="" style="border-radius: 20px;width: 90px;height: 90px;margin-left: 200px">
        <h3>Telephone</h3>
        <div class="alert alert-success" id="successAuth" style="display: none;"></div>
        <form action="{{ route('front.register') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label>Telephone :</label>
                    <input type="text" id="number" class="form-control" name="tel" placeholder="+222 ********">
                    <div id="recaptcha-container"></div>
                    <button type="button" class="btn btn-primary mt-3" onclick="sendOTP();">Send OTP</button>

                </div>
                <div class="col-md-6">

                    <div class="mb-5 mt-5">
                        <h5> verification </h5>
                        <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>

                            <input type="text" id="verification" class="form-control" placeholder="Verification code">
                            <button type="button" class="btn btn-danger mt-3" onclick="verify()">Verify code</button>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                <div class="mb-5 mt-5">
                    <h5>Nom</h5>
                    <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>
                        <input type="text"  name="name" class="form-control" placeholder="Nom">
                </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-5 mt-5">
                        <h5>NNi</h5>
                        <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>
                            <input type="text" name="nni" class="form-control" placeholder="NNI">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-5 mt-5">
                        <h5>Mot de passe  </h5>
                        <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>
                            <input type="password"  name="password" class="form-control" placeholder="password ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-5 mt-5">
                        <h5>Email</h5>
                        <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>
                            <input type="email"  name="email" class="form-control" placeholder="email">
                    </div>
                </div>
            </div>






        <button type="submit" class="btn btn-primary mt-3" id="ajouter"
        style="display: none;"
        >Ajouter </button>

    </form>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyBEbRPdcxcHU3HGxLxWe2SmrbXZ-WYSnBc",
            authDomain: "femmedomicile.firebaseapp.com",
            databaseURL: "http://127.0.0.1:8000/TestTest",
            projectId: "femmedomicile",
            storageBucket: "femmedomicile.appspot.com",
            messagingSenderId: "654287570852",
            appId: "1:654287570852:web:7e0b701ee99b19b7ac2331"
        };
        firebase.initializeApp(firebaseConfig);
    </script>
    <script type="text/javascript">
        window.onload = function () {
            render();
        };
        function render() {
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
            recaptchaVerifier.render();
        }
        function sendOTP() {
            var number = $("#number").val();
            firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function (confirmationResult) {
                window.confirmationResult = confirmationResult;
                coderesult = confirmationResult;
                console.log(coderesult);
                $("#successAuth").text("Message sent");
                $("#successAuth").show();
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }
        function verify() {
            var code = $("#verification").val();
            coderesult.confirm(code).then(function (result) {
                var user = result.user;
                console.log(user);
                $("#successOtpAuth").text("Auth is successful");
                $("#successOtpAuth").show();
                $("#ajouter").css("display", "block");

            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }
    </script>
</body>
</html>
