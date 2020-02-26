<!DOCTYPE html>
<html>
    <head>
        <title>BooksHelp/Sign Up</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">


        <link rel="stylesheet" href="CSS/Login/loginmain.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="CSS/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="CSS/Login/fonts/iconic/css/material-design-iconic-font.min.css">

    </head>

<body>

    <div class="login_form">
    <form name="signUp" class="signup10_form validate-input" action="insert.php" method="POST">
        <span class="title"><b>Sign Up</b></span>


        <div class="data validate-input" data-msg = "Username is reauired" style="margin-bottom: 23px;">
            <span class="label-input100">Fullname</span>
            <input class="input100" type="text" name="name" placeholder="Type your name" required>
            <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>

        <div class="data validate-input" data-msg = "Username is reauired" style="margin-bottom: 23px;">
            <span class="label-input100">E-mail</span>
            <input class="input100" type="email" name="email" placeholder="Type your E-mail" required>
            <span class="focus-input100" data-symbol="&#xf15a;"></span>
        </div>

        <div class="data validate-input" data-msg = "Username is reauired" style="margin-bottom: 23px;">
            <span class="label-input100">Birth-Date</span>
            <input class="input100" type="date" name="bdate" placeholder="Type your Birth-Date" required>
            <span class="focus-input100" data-symbol="&#xf122;"></span>
        </div>

        <div class="data validate-input" data-msg = "Username is reauired" style="margin-bottom: 23px;">
            <span class="label-input100">Mobile Number</span>
            <input class="input100" type="text" pattern="[0-9]{10}" title="Number shold be of 10 digits" name="mobile" placeholder="Type your Contact Number" required>
            <span class="focus-input100" data-symbol="&#xf155;"></span>
        </div>

        <div class="data validate-input" data-msg="Password is required" style="margin-bottom: 23px;">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" pattern="{8,14}" name="passwd" placeholder="Type your password" required>
            <span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>

        <div class="data validate-input" data-msg="Password is required" style="margin-bottom: 23px;">
            <span class="label-input100">Confirm Password</span>
            <input class="input100" type="password" name="cpasswd" placeholder="Type your password" required>
            <span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>


        <button type="submit" class="login100" onclick="return validate()">
            Submit
        </button>

        <button type="reset" class="reset-btn">Reset</button>
        <button class="cancel-btn" onclick="window.prev()"><a href="HOME.php">Cancel</a></button>

    </form>
    </div>

    <script>

        var flag = 0;
        function validate() {
            var name = document.signUp.name.value;
            if(!(name.match(/^[A-Z a-z]+$/)))
            {
                alert("Username must contain only characters");
                return false;
            }
            var mail = document.signUp.email.value;
            if(!(mail.match(/^[A-Z a-z 0-9][a-z A-Z 0-9. _ -]+@[a-z A-Z 0-9 . _ -]+\.[a-z A-Z]{2,4}$/)))
            {
                alert("Email is Invalid");
                return false;
            }
            var pass = document.signUp.passwd.value;
            if(!(pass.match(/\d/g)) || !(pass.match(/[A-Z a-z]/g)) || !(pass.match(/\W/g)))
            {
                alert("Password must contain atleast one digit,one uppercase, one lowercase, one special char");
                return false;
            }
            var cp = document.signUp.cpasswd.value;
            if(cp != pass )
            {
                alert("Password must be same");
                return false;
            }
            return true;
        }
    </script>

</body>
</html>