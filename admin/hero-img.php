<?php include 'datab/db.php'; ?>
<?php ob_start(); ?>

<?php 
session_start();

if(isset($_SESSION['uid'])){
	
}else{
	header("location: ../login.php");
}
 ?>


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
											<a href="../logout.php"><strong>Logout</strong></a>
										
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
												<div class="col-lg-5 offset-lg-1">

												<form action="" method="POST" enctype="multipart/form-data">



												
													
													<div class="form-group mb-5 ">
														<label for="image">Upload Hero Section Image</label>
													    <input type="file" class="form-control mt-3" name="imageup">
												    </div>

												    <div class="form-group">
												    	<input type="text" name="ffname" class="form-control" required>
												    </div>


												    <div class="btn-area-genegral ">
														<button class="btn btn-dark4 pd-3" name="upimg" required> Upload Image</button>
													</div>
												</form> 
												
											</div>
											</div>

											<div class="col-lg-6">
												<?php

						                            $port_sqli = " SELECT * FROM `heroimg` ";

						                            $port_results= mysqli_query($dbconn, $port_sqli); 

						                           while ($row = mysqli_fetch_assoc( $port_results)) :
						                            $imgid            = $row ['id'];
						                            $hero_image             = $row ['imgg'];

						                        ?>

						                        <div class="hero-content">
						                            <img src="uploadss/<?php echo $hero_image; ?>" alt="img" required>
						                        </div>
						                        <?php  endwhile; ?>
											</div>

											
										</div>
										
								</div>

								
							</div>
							
							
						</div>

						<?php include 'includes/footer.php'; ?>

					


<?php 

if (isset($_POST['upimg'])) {

	$imgtext = $_POST['ffname'];


	$post_image = $_FILES['imageup']['name'];
	$post_image_temp = $_FILES['imageup']['tmp_name'];
	move_uploaded_file($post_image_temp, "uploadss/$post_image");

	$sqll = " UPDATE `heroimg` SET `imgg`='$post_image', `imgtext`='$imgtext'  ";
	$resultt = mysqli_query($dbconn, $sqll);

	?>


	<script> 
	    alert('Hero Image Added Successfully!! ');
	    window.open('hero-img.php', '_self');
	 </script>

<?php 
}
 ?>