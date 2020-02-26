<?php 
	session_start();

	// Include autoload file from vendoe folder
	require 'vendor/autoload.php';
	
	$fb = new Facebook\Facebook([
		'app_id' => '501347087478526',
		'app_secret' => 'f5347852c9f0834e45bded9e6ce0e784',
		'default_graph_version' => 'v2.7'
	]);


	$permissions = ['email'];
	$helper = $fb->getRedirectLoginHelper();
	$login_url =  $helper->getLoginUrl('http://localhost/Web_Project/Login.php', $permissions);

	try{

		$accessToken = $helper->getAccessToken();
		if(isset($accessToken)) {
			$_SESSION['access_token'] = (string)$accessToken; // Convert to string 

			// if session is set we redirect to home page

			// header("Location:HOME.php");

		}
	} catch (Exception $exc) {
		echo $exe->getTraceAsString();
	}

	// $_SESSION['access_token'] = "";
	// Getting user data
	if ( isset($_SESSION['access_token'])) { 
		try{
			$fb->setDefaultAccessToken($_SESSION['access_token']);
			$res = $fb->get('/me?locale=en_US&fields=name,email');
			$user = $res->getGraphUser();
			// echo $user->getField('name');
			$_SESSION['logged'] = true;
            $_SESSION['user']=$user->getField('name');
           // $_SESSION['userid']=$uid; 
            $_SESSION['email']=$user->getField('email');

            // $_SESSION['mono']=$user->getField('mobile');
            $_SESSION['id']= '1';
            $message = "Welcome ".$_SESSION['user'];
            echo "<script>
            alert('$message');
            window.location.href='HOME.php';
            </script>";


		} catch (Exception $exc) {
			echo $exe->getTraceAsString();
		}
	}
 ?>