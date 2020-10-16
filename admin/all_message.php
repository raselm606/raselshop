<?php include 'datab/db.php'; ?>
<?php ob_start(); ?>


<?php include 'session.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard | Memfit</title>
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
								<h3>View All Message</h3>
								<div class="contact-p-sec login-formmmm table-responsive">

									

									<table class="table">
										<thead>
											<th>id</th>
											<th>Name</th>
											<th>Email</th>
											<th>Message</th>
											<th>Action</th>
										</thead>



										<tbody>
											<?php

					                            $fetch_post_query = " SELECT * FROM `contact_msg` order by id desc ";

					                            $select_all_data= mysqli_query($dbconn, $fetch_post_query); 

					                           while ($row = mysqli_fetch_assoc( $select_all_data)) :
					                            $id             = $row ['id'];
					                            $name          = $row ['name'];
					                            $email            = $row ['email'];
					                            $message        = $row ['message'];

					                            

					                        ?>

											<tr>
												<td><?php echo $id; ?></td>
												<td><?php echo $name; ?></td>
												<td><?php echo $email; ?></td>
												<td><?php echo $message; ?></td>
												<td><a href="all_message.php?dell=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
											</tr>
										<?php endwhile; ?>
										</tbody>

										<?php 

										if (isset($_GET['dell'])) {
									      	$the_delete_post = $_GET['dell'];

									      	$dell_query = " DELETE FROM `contact_msg` WHERE `id` = ('$the_delete_post') " ;
									      	$delete_query= mysqli_query($dbconn, $dell_query);
									      	header("Location: all_message.php");
									      }


										 ?>

										
									</table>
									
								</div>

								
							</div>
							
							
						</div>

						<?php include 'includes/footer.php'; ?>

					

