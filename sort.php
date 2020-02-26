<?php
    session_start();
    if($_POST['Price']=='Price')
    {$x = $_POST['Price'];}
    else if($_POST['Subject']=='Subject'){
     $x = $_POST['Subject'];   
    }
    else
    {$x = $_POST['Department'];}
    $_SESSION['sortclick']=$x;
    unset($_SESSION['search_query']);
    header('location:book.php');
?>