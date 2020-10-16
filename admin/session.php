<?php 
	session_start();



	if(isset($_SESSION['uid'])){

	if (isset($_SESSION['LAST_ACTIVITY']) && 
	   ($_SERVER['REQUEST_TIME'] - $_SESSION['LAST_ACTIVITY']) > 600) {
	    session_unset();
	    session_destroy();
	    session_start();
	}
	$_SESSION['LAST_ACTIVITY'] = $_SERVER['REQUEST_TIME'];

		
	}else{
		//header("location: ../login.php");
		echo " <script> location.replace('../login.php'); </script>";
	}
 ?>