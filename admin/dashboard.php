<?php include 'datab/db.php'; ?>
<?php ob_start(); ?>
<?php include 'session.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard | ICO crypto</title>
	<link href="https://fonts.googleapis.com/css?family=Sahitya:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arapey&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>

	<div class="full-bar">
		<div class="container-fluid ">
			<div class="row">
				<?php include 'includes/menus.php'; ?>

				<div class="col-lg-9 pd-r-0">
					<div class="main-body-area">
						<div class="body-header-area">
							<div class="row">
								<div class="col-lg-10">
									<div class="head-dash">
										<h3>My <span>Profile</span></h3>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="body-notifiaction-area  ">

										<div class="messagee">
											<a style="font-size: 14px !important;" href="../index.php" target="_blank">Main Site</a>
											<a style="color: red;" href="../logout.php"><strong>Logout</strong></a>
										
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="fitnesss-center-table pd-2">
							<div class="general-info">
								<h3>Welcome admin!  <code> Today is <?php  echo date("l/d/m/y"); ?> </code> </h3>
								<div class="contact-p-sec login-formmmm mt-4">
									<div class="row ">

										<div class="col-lg-3 mb-3">
											<div class="top-card">
												<div class="all-card">
													<i class="fas fa-home"></i>
													<?php 
														$msg_count = " SELECT * FROM `portfolio` ";

											            $all_msg= mysqli_query($dbconn, $msg_count);
											            $count_product_msg = mysqli_num_rows($all_msg);
													 ?>
													<div class="right-countt float-right">
														<p><?php echo $count_product_msg;?></p>
														<h6>All Products</h6>
													</div>
												</div>
												<div class="bottom-cardd">
													<a href="">View Details <i class="fas fa-arrow-right float-right"></i></a>
												</div>
											</div>
										</div>

										<div class="col-lg-3 mb-3">
											<div class="top-card">
												<div class="all-card greenbg">
													<i class="fas fa-comments"></i>

													<?php 
														$msg_count = " SELECT * FROM `contact_msg` ";

											            $all_msg= mysqli_query($dbconn, $msg_count);
											            $count_msg = mysqli_num_rows($all_msg);
													 ?>
													<div class="right-countt float-right">
														<p><?php echo $count_msg;?></p>
														<h6>All Message</h6>
													</div>
												</div>
												<div class="bottom-cardd">
													<a href="all_message.php" style="color: #4CAF50;">View Details <i class="fas fa-arrow-right float-right"></i></a>
												</div>
											</div>
										</div>

										

										

										<div class="col mb-5"></div>
									</div>
								</div>
							</div>
						</div>

						<?php include 'includes/footer.php'; ?>

					