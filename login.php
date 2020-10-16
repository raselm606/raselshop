<?php include 'admin/datab/db.php'; ?>
<?php ob_start(); ?>

<?php 
	
	session_start();

	if (isset($_SESSION['uid'])) {
		// header('location: admin/index.php');
		echo '<script>window.location.replace("admin/dashboard.php") </script>';
	}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Admin Login </title>
	<link href="https://fonts.googleapis.com/css?family=Sahitya:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arapey&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body style="background: #1463a2 !important;">

	<div class="dark-area-login"></div>

	<div class="singin-area mt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="formarea mt-5">
						<div class="login-logo text-center">
							<a href="https://rastheme.com"><h3 style="color: #000; font-weight: 600; font-size: 24px;">Online Shop</h3></a>
						</div>
						<div class="login-pagess">
							
							<div class="login-title section-title text-center mt-3 mb-5">
								<h2>Login <span>Now</span></h2>
							</div>

							<div class="contact-p-sec login-formmmm">

								<form action="" method="POST">
									 <div class="form-group">
									    <input type="email" name="email" class="form-control" placeholder="User Name:">
									  </div>
									  <div class="form-group">
									    <input type="password" class="form-control" name="pass" placeholder="Password:">
									  </div>

									  <div class="form-group ">
									  	<button type="submit" class="btn btn-primary" name="login">Login</button>
									  	<a href="recover.php" class="float-right"> Forget Password?</a>
									  	
									  </div>

								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		
	</div>





	<!-- js here -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>





<?php 

if (isset($_POST['login'])) {

	$email = trim($_POST['email']);
	$pass = trim($_POST['pass']);

	$sql = "SELECT * FROM `raslogin` WHERE `email` = '$email' and `pass`= '$pass' " ;
	$query = mysqli_query($dbconn, $sql);
	$rowCount = mysqli_num_rows($query); //count all

	if ($rowCount <1) {

?>
		
		<script> 

			alert('Username or Password not match!!');
			window.open('login.php', '_self');

		</script>

<?php 

	} else{
		$data = mysqli_fetch_assoc($query);

		$id = $data['id'];
		$email = $data['email'];
		$_SESSION['uid']=$id;
		$_SESSION['sesemail']=$email;
		// header('location: admin/index.php');
		
		echo '<script>window.location.replace("admin/dashboard.php") </script>';
	}


}







 ?>