<?php

    $email = $_POST['mail'];
    $passwd = $_POST['passwd'];
    $cpasswd = $_POST['cpass'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "bookshelp";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connection error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else {

                $sql = "INSERT INTO signup(passwd,cpasswd) values ('".$passwd."','".$cpasswd."') where email='".$email."'";
                if($conn->query($sql) === true){
                $message = "Password has been updated!";
                echo "<script>
                alert('$message');
                window.location.href='Login.php';
                </script>";
                }
                else{
                    $message = "Something went wrong :(";
                    echo "<script>
                    alert('$message');
                    window.location.href='Login.php';
                    </script>";
                }

            $conn->close();
        }
?>