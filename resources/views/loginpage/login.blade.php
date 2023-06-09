<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>LOGIN</title>
</head>
<body>
    <div class="container-fluid">
        <div class="login-box row">
            <div class="login-text col-lg-6 col-xl-6">
                <h2 class="login-head mt-4" >LOGIN</h2>
                <form action="" class="mt-3 p-2">
                    <input type="text" name="Uname" id="Uname" placeholder="Username">
                    <input type="password" name="pass" id="pass" placeholder="Password" class="mt-2">
                    <button type="submit" class="btn btn-primary mt-3">Login</button>
                    <div class="other">
                        <p class="mt-2 sign-text">Need an account? <a href="{{ asset('signin') }}">SIGN IN</a> </p>
                        <a href="{{ asset('Fpassword') }}" class="forgotten">Forgotten Password</a>
                    </div>
                    <div class="login-line m-3">
                        <hr class="mr-2">
                        <div class="login-or">OR</div>
                        <hr class="ml-2">
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-xl-6">
                <img src="{{ url('img/shoe.png') }}" alt="" class="login-img">
            </div>
        </div>
    </div>
</body>
</html>