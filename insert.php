<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['bdate'];
    $mobile = $_POST['mobile'];
    $passwd = $_POST['passwd'];
    $cpasswd = $_POST['cpasswd'];
    $timestamp = strtotime($date);
    $bdate = date("Y-m-d", $timestamp);

    if(!empty($name) || !empty($email) || !empty($bdate) || !empty($mobile) || !empty($passwd) || !empty($cpasswd))
    {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "bookshelp";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connection error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else {
            $SELECT = "SELECT email From signup where email = ? Limit 1";
            $INSERT = "INSERT Into signup (name, email, bdate, mobile, passwd, cpasswd) values (?, ?, ?, ?, ?, ?)";
            
            
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum==0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssdiss", $name, $email, $bdate, $mobile, $passwd, $cpasswd);
                $stmt->execute();
                $sql = "INSERT INTO profile(id,branch,year,college,address,photo) values (LAST_INSERT_ID(),'','','','','upload/avtar.jpg')";
                if($conn->query($sql) === true){
                $message = "Thank You for signing up :)";
                echo "<script>
                alert('$message');
                window.location.href='HOME.php';
                </script>";
                }
                else{
                    $message = "Signup failed. Do it again";
                    echo "<script>
                    alert('$message');
                    window.location.href='signup.php';
                    </script>";
                }
            } else {
                $message = "Someone already register using this email :(";
                echo "<script>
                alert('$message');
                window.location.href='signup.php';
                </script>";
            }
            $stmt->close();
            $conn->close();
        }

    } else {
        echo "All Fields are required";
        die();
    }
?>