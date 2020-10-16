<?php include 'datab/db.php'; ?>
<?php ob_start(); ?>
<?php include 'session.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>portfolio | online shop</title>
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
							<div class="row" >
								<div class="col-lg-10">
									<div class="head-dash">
										<h3>My <span>Protfolio</span></h3>
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
								<h3>Add Products Info</h3>
								<div class="contact-p-sec login-formmmm">
									<form action="" method="POST" enctype="multipart/form-data">


										<?php 

											if (isset($_POST['addport'])) {

												$slink = trim($_POST['slink']);

												$port_image = $_FILES['pimage']['name'];
												$port_image_temp = $_FILES['pimage']['tmp_name'];
												move_uploaded_file($port_image_temp, "uploadss/$port_image");


												$port_title = trim($_POST['ptitle']);
												$product_details =  trim($_POST['pdescrip']);
												$product_price =  trim($_POST['pprice']);


												$sql = " INSERT INTO `portfolio`(`sec_title`, `port_img`, `port_title`, `details`, `price`) VALUES
												 ( '$slink', '$port_image', '$port_title', '$product_details','$product_price' ) ";
												$result = mysqli_query($dbconn, $sql);

												?>

												<script> 
	                                            alert('Product Added Successfully!! ');
	                                            window.open('portfolio.php', '_self');
	                                       	 </script>

	                                       	 <?php 
											}
											 ?>

										<div class="row ">
											<div class="col-lg-7">
												<div class="form-group">
													<label for="title">Add product Website link</label>
												    <input type="text" name="slink" class="form-control"  
												    >
												</div>
												<div class="form-group mb-5">
													<label for="image">Upload product Image</label>
												    <input type="file" class="form-control" name="pimage">
											    </div>
												<div class="form-group">
													<label for="dec">Add Product Title</label> <br>
												    <input type="text" class="form-control" name="ptitle" ></input>
											    </div>

												<div class="form-group">
													<label for="dec">Add product description</label> <br>
													<!-- <textarea name="" class="form-control" name="pdescrip" id="" cols="30" rows="10"></textarea> -->
													<input type="text" class="form-control" name="pdescrip">
											    </div>

												<div class="form-group">
													<label for="dec">Add product price</label> <br>
												    <input type="text" class="form-control" name="pprice" ></input>
											    </div>
											</div> 
										</div>
										<div class="btn-area-genegral ">
											<button class="btn btn-dark4 pd-3" name="addport"> Submit</button>
										</div>
									</form>
									<hr>


									<table class="table mt-5">
										<thead>
											<th>id</th>
											<th>Title</th>
											<th>price</th>
											<th>image</th>
											<th>link</th>
											<th>Action</th>
										</thead>



										<tbody>
											<?php

					                            $fetch_post_query = " SELECT * FROM `portfolio` order by id desc";

					                            $select_all_data= mysqli_query($dbconn, $fetch_post_query); 

					                           while ($row = mysqli_fetch_assoc( $select_all_data)) :
					                            $id             = $row ['id'];
					                            $link          = $row ['sec_title'];
					                            $image            = $row ['port_img'];
					                            $title        = $row ['port_title'];
                            					$port_price             = $row ['price'];

					                            

					                        ?>

											<tr>
												<td><?php echo $id; ?></td>
												<td><?php echo $title ; ?></td>
												<td><?php echo $port_price ; ?></td>
												<td><img style="width: 120px;" src="uploadss/<?php echo $image; ?>" alt=""></td>
												<td><?php echo $link; ?></td>
												<td><a href="portfolio.php?dellport=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
											</tr>
										<?php endwhile; ?>
										</tbody>

										<?php 

										if (isset($_GET['dellport'])) {
									      	$the_delete_post = $_GET['dellport'];

									      	$dell_query = " DELETE FROM `portfolio` WHERE `id` = ('$the_delete_post') " ;
									      	$delete_query= mysqli_query($dbconn, $dell_query);
									      	header("Location: portfolio.php");
									      }


										 ?>

										
									</table>
								</div>

								
							</div>
							
							
						</div>

						<?php include 'includes/footer.php'; ?>

					

