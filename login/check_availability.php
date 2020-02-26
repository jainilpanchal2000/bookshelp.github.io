<?php 
require_once("includes/dbh.inc.php");
if(!empty($_POST["user"])) {
	$user= $_POST["user"];
	  
		$result =mysqli_query($con,"SELECT uidusers FROM user WHERE uidusers='$user'");
		$count=mysqli_num_rows($result);
	
if($count>0)
{
echo "<span style='color:red'> Username already exists .</span>";
 echo "<script>$('#signup-submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Username available for Registration .</span>";
 echo "<script>$('#signup-submit').prop('disabled',false);</script>";
}
}
if(!empty($_POST["mail"])) {
	$email= $_POST["mail"];
	  
		$result =mysqli_query($con,"SELECT email FROM user WHERE email='$email'");
		$count=mysqli_num_rows($result);
	
if($count>0)
{
echo "<span style='color:red'> Email already exists .</span>";
 echo "<script>$('#signup-submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email available for Registration .</span>";
 echo "<script>$('#signup-submit').prop('disabled',false);</script>";
}
}


?>
