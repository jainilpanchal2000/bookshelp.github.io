<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BooksHelp/Login</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">


        <link rel="stylesheet" href="CSS/Login/loginmain.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="CSS/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="CSS/Login/fonts/iconic/css/material-design-iconic-font.min.css">

        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">

    </head>

<body>

    <div class="login_form">
    <form class="login10_form validate-input" action="signin.php" method="POST">
        <span class="title"><b>Login</b></span>


        <div class="data validate-input" data-msg = "Username is reauired" style="margin-bottom: 23px;">
            <span class="label-input100">Username</span>
            <input class="input100" type="email" name="username" placeholder="Type your E-mail" required>
            <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>

        <div class="data validate-input" data-msg="Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="passwd" placeholder="Type your password" required>
            <span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>

        <div style="text-align: right;padding-top:10px; padding-bottom: 31px;">
                <a href="forgetpasswd.php" class="txt1">
                    Forgot password?
                </a>
        </div>

            <button type="submit" class="login100" onclick="validate-data">
                Login
            </button>

        <div style="text-align: center; font-display: monospace;padding-top: 30px;margin-top: 10px; padding-bottom: 10px;">
            Or Sign Up Using
        </div>
        
        <div class="one_row">
            <a href="#" class="social bg1">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="social bg2">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="social bg3">
                <i class="fa fa-google"></i>
            </a>
        </div>

        <div style="text-align: center; font-display: monospace;padding-top: 30px;margin-top: 10px; padding-bottom: 10px;">
                Or Sign Up Using
        </div>
        <div class="signup">
                <a href="signup.php" class="txt2">sign up</a>
        </div>


    </form>
    </div>
    
</body>
</html>