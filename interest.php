<?php include 'admin/datab/db.php'; ?>
<?php ob_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>intrest | Rastheme </title>
	<link href="https://fonts.googleapis.com/css?family=Sahitya:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arapey&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body style="background: #e9e8e8 !important;">

	<div class="dark-area-login"></div>

	<div class="singin-area mt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="login-logo text-center">
							<a href="https://rastheme.com"><img src="img/logo-dark.png" alt=""></a>
						</div>
					<div class="login-pagess">
						
						<div class="login-title section-title text-center mt-3 mb-5">
							<h2>Calculate <span>The Parcentage %</span></h2>
						</div>

						<div class="contact-p-sec login-formmmm">

							<?php 

								if (isset($_POST['calculate'])) {
									
									$amount = $_POST['amount'];
									$parcentage = $_POST['parcentage'];
									// $tot = $amount * $parcentage; 
									// $sotkora = 100;
									// $total =  $tot / $sotkora ;
									// 
									 $tot = ( $amount * $parcentage ) / 100 ; 
									
									$total =    $tot;
									 echo "<h2> Total Interest: <sapn style='color:red;'> $total Taka</span></h2>";
								}

							?>

							<form action="" method="POST">
								 <div class="form-group">
								    <input type="text" name="amount" class="form-control" placeholder="Full Amount">
								  </div>
								  <div class="form-group">
								    <input type="text" class="form-control" name="parcentage" placeholder="% Parcentage Amount">
								  </div>

								  <div class="form-group ">
								  	<button type="submit" class="btn btn-primary" name="calculate">Calcuate Now</button>
								  	
								  </div>

								 <!--  <h2 class="btn btn-info"><?php echo $total; ?></h2> -->

							</form>
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





