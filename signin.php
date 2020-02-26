<?php
    session_start();
    $email = $_POST['username'];
    $passwd = $_POST['passwd'];
    $name = "";

    if(!empty($email) || !empty($passwd))
    {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "bookshelp";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connection error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else {
            $SELECT = "SELECT * FROM signup WHERE email = '".$email."' AND passwd = '".$passwd."' Limit 1";
            
            $rnum=mysqli_query($conn,$SELECT);

            if(mysqli_num_rows($rnum)==1) {
                $username = "";
                $uid = "";
                $mobile = "";
                while($row=mysqli_fetch_assoc($rnum)){
                    $uid=$row['id'];
                    $username=$row['name'];
                    $mobile=$row['mobile'];
                }
                $_SESSION['logged'] = true;
                $_SESSION['user']=$username;
//                $_SESSION['userid']=$uid; 
                $_SESSION['email']=$email;
                $_SESSION['mono']=$mobile;
                $_SESSION['id']=$uid;
                $message = "Welcome ".$username;
                echo "<script>
                alert('$message');
                window.location.href='HOME.php';
                </script>";
                
            } else {
                $message = "Email or password is incorrect";
                echo "<script>
                alert('$message');
                window.location.href='login.php';
                </script>";
            }
        }

    } else {
        echo "All Fields are required";
        die();
    }
?>