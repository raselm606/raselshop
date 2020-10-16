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
								<h3>Add Hero Section Info</h3>
								<div class="contact-p-sec login-formmmm">
									<div class="row ">
										<div class="col-lg-6 ">
											<form action="" method="POST" enctype="multipart/form-data">

											<?php

					                            $fetch_post_query = " SELECT * FROM `hero_section` ";

					                            $select_all_data= mysqli_query($dbconn, $fetch_post_query); 

					                           while ($row = mysqli_fetch_assoc( $select_all_data)) {
					                            $id             = $row ['id'];
					                            $title          = $row ['title'];
					                            $des            = $row ['des'];
					                            $btnhero        = $row ['btnhero'];
					                            $btntop         = $row ['btntop'];

					                            }

					                        ?>

											<?php 

												if (isset($_POST['submit'])) {
													$title = trim($_POST['title']);
													$dec = trim($_POST['dec']);
													$btnhero = trim($_POST['btnhero']);
													$btntop = trim($_POST['btntop']);

													$sql = " UPDATE `hero_section` SET  `title` = '$title', `des` = '$dec', `btnhero` = '$btnhero', `btntop` = '$btntop' ";
													$resultt = mysqli_query($dbconn, $sql);

												}
											?>
											<div class="form-group">
												<label for="title">Enter Hero Section Header Title</label>
											    <input type="text" name="title" class="form-control"  
											    value="<?php echo $title; ?>">
											</div>
											<div class="form-group">
												<label for="dec">Enter Hero Section Description</label> <br>
											    <textarea id="" class="form-control" name="dec" ><?php echo $des; ?></textarea>
										    </div>
											<div class="form-group">
												<label for="btnhero">Enter Hero Section Button Name</label>
											    <input type="text" class="form-control" name="btnhero" value="<?php echo $btnhero; ?>">
										    </div>
											<div class="form-group">
												<label for="btntop">Enter Hero Section Top Button Link</label>
											    <input type="text" class="form-control" name="btntop" value="<?php echo $btntop; ?>">
										    </div>

										    <div class="btn-area-genegral ">
												<button class="btn btn-dark4 pd-3" name="submit"> Save</button>
											</div>
											</form> 
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php include 'includes/footer.php'; ?>

					