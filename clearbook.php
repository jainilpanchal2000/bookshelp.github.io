<?php
    session_start();

   unset($_SESSION['sortclick']);
unset($_SESSION['search_query']);
    header('location:book.php');
?>