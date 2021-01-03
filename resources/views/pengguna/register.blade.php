
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

        <h1>Sign up</h1>
        <div class="container">

            <div class="sign-up-content">
                <form method="POST" class="signup-form">
                    
                    <h2 class="form-title">Daftar sebagai Apa?</h2>
                    
                        <div class="form-radio">
                            <input type="radio" name="member_level" value="newbie" id="newbie" checked="checked" />
                            <label for="newbie">Admin</label>

                            <input type="radio" name="member_level" value="master" id="master" />
                            <label for="master">Anggota</label>
                        </div>
                    

                    <div class="form-textbox">
                        <label for="name">Full name</label>
                        <input type="text" name="name" id="name" />
                    </div>

                    <div class="form-textbox">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" />
                    </div>

                    <div class="form-textbox">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" />
                    </div>

                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                        <label class="custom-control-label term-service" for="customControlInline">Saya setuju & data diatas adalah BENAR</label>
                    </div>

                    <div class="form-textbox">
                        <input type="submit" name="submit" id="submit" class="submit" value="Create account" />
                    </div>
                </form>

                <p class="loginhere">
                    Atau sudah punya akun?<a href="{{ url('pengguna/login') }}" class="loginhere-link"> Log in disini</a>
                </p> 
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>