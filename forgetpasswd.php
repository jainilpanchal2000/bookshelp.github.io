<!DOCTYPE html>
<html>
<head>
    <title>BooksHelp/Reset Password</title>
    
    <style>
        .form1{
            text-align: center;
            background-image: url(CSS/Login/bglogin.jpg);
            background-size: cover; 
            height: 750px;
            vertical-align: middle;
        }
        form{
            border: 2px solid gray;
            padding: 20px;
            display: inline-block;
            width: 40%;
            border-radius: 20px;
            background-color: white;
            height: 500px;
            margin-top: 80px;   
        }
        .abc{
            width: 70%;
            padding: 0px 20px;
            background-color: silver;
            color: black;
            margin-top: 30px;
            margin-bottom: 30px;
            height: 50px;
        }
        .xyz{
            width: 50%;
            margin-top: 20px;
            padding: 20px 0px;
            color: white;
            background-color: green;
        }
        .xyz:hover{
            color: black;
            background-color: lightgreen;
        }
    </style>
    
</head>
    
    
<body>
    
    <div class="form1">
    <form action="forget.php" method="post">
        <h3> Reset Your Password</h3>
        <input class="abc" type="email" name="mail" required placeholder="Enter your email"><br>
        <input class="abc" type="password" name="passwd" placeholder="Enter new password" required><br>
        <input class="abc" type="password" name="cpass" placeholder="Confirm your password" required><br>
        <input class="xyz" type="submit" value="Submit">
        
    </form>
    </div>
</body>
</html>