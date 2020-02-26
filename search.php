<?php
    session_start();
    $x = $_POST['srch'];
    $_SESSION['search_query']=$x;
    unset($_SESSION['sortclick']);
    header('location:book.php');
?>