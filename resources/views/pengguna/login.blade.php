
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')}}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
</head>
<body>

    <div class="main">

        <h1>Login</h1>
        <div class="container">

            <div class="sign-up-content">
              <form method="POST" class="signup-form">
                <h3 class="form-title text-center mt-3 mb-5">Login</h3>
                  
                    <div class="form-textbox">
                        <label for="email">Alamat Email</label>
                        <input type="email" name="email" id="email" />
                    </div>

                    <div class="form-textbox">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" />
                    </div>


                    <div class="form-textbox mt-5">
                        <input type="submit" name="submit" id="submit" class="submit" value="Login" />
                    </div>
                </form>

                <p class="loginhere">
                    Belum punya akun?<a href="{{ url('pengguna/register') }}" class="loginhere-link"> Daftar akun baru</a>
                </p>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>