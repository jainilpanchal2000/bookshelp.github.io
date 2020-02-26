<?php
    session_start();
    $id = $_SESSION['userid'];
    $name = $_POST['bname'];
    $name1 = $_POST['aname'];
    $sub = $_POST['sub'];
    $branch = $_POST['branch'];
    $price = $_POST['price'];
    $photo = $_FILES['pic']['name'];
//$new=conn->insert_id;
//echo $new;
    //$photo = rename($photo,$new);
    
//    $filetmp = $_FILES['pic']['tmp_name'];
//    //str_replace(" ","_",$filetmp);
//    $filetype = $_FILES['pic']['type'];
//    $path = "book/".$photo;
    

    if(!empty($name))
    {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "bookshelp";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connection error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else {
            
            

            $sql = "INSERT INTO book(uid,bookname,authorname,subject,branch,price,date) values ($id,'$name','$name1','$sub','$branch','$price',CURDATE())";
            if ($conn->query($sql) === TRUE) {
                $lastId = $conn->insert_id;
                 $ext = pathinfo($photo, PATHINFO_EXTENSION);
                $new = "book/".strval($lastId).".".$ext."";
                $sub_sql = "UPDATE `book` SET `bookphoto`='$new' WHERE bid=$lastId";
                $conn->query($sub_sql);
              $new1 = "".strval($lastId).".".$ext."";
                 $filetmp = $_FILES['pic']['tmp_name'];
    //str_replace(" ","_",$filetmp);
    $filetype = $_FILES['pic']['type'];
    $path = $new;
                move_uploaded_file($filetmp,$path);
                
                $message = "New book Uploaded successfully";
                echo "<script>
                alert('$message');
                window.location.href='book.php';
                </script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }

    } else {
        echo "All Fields are required";
        die();
    }
?>