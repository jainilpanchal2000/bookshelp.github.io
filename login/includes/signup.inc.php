<?php

if(isset($_POST['signup-submit'])){

	require 'dbh.inc.php';
	$uname = $_POST['uname'];
	$username = $_POST['uid'];
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$passwordrepeat = $_POST['pwd-repeat'];
    $photo="upload/avtar.jpg";
	if(empty($uname) || empty($username) || empty($email) || empty($password) || empty($passwordrepeat)){
		header("location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email);
		?><script>alert("Empty Fields");</script>
		<?php
		exit();
	}
	elseif (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("location: ../signup.php?error=invalidemail&uid");
			exit();
	}
	elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		header("location: ../signup.php?error=invalidemail&uid=".$username);
		exit();
	}
	elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("location: ../signup.php?error=invaliduid&mail=".$email);
		exit();
	}
	elseif ($password !== $passwordrepeat) {
		header("location: ../signup.php?error=passwordcheck&uid=".$username."&email=".$email);
		exit();
	}
	else {

		$sql = "SELECT uidusers FROM user WHERE uidusers=?";
		$stmt = mysqli_stmt_init($con);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("location: ../signup.php?error=sqlerror");
		exit();
		}
		else{
			mysqli_stmt_bind_param($stmt,"s",$username);
			mysqli_stmt_execute($stmt); //run this information in Database
			mysqli_stmt_store_result($stmt);
			$resultcheck = mysqli_stmt_num_rows($stmt);
			
			if ($resultcheck > 0) {

				header("location: ../signup.php?error=usernametaken=".$username);
			exit();
			}
			
			
			else{
				$sql = "INSERT INTO `user`(`uname`,`uidusers`, `email`, `upassword`,`uimage`) VALUES (?,?,?,?,?)"; 
				$stmt = mysqli_stmt_init($con);
				if (!mysqli_stmt_prepare($stmt,$sql)) {
				header("location: ../signup.php?error=sqlerror");
				exit();
			}
			else {

				$hasedpwd = password_hash($password, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt,"sssss",$uname,$username,$email,$hasedpwd,$photo);
				mysqli_stmt_execute($stmt); //run this information in Database
				header("location: ../../HOME.php?signup=success");
				exit();
			}


			}
		}

	}
	mysqli_stmt_close($stmt);
	mysqli_close($con);

}
else {
	header("location: ../signup.php");
	exit();
}
?>