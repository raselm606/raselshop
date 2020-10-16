<?php include 'admin/datab/db.php'; ?>
<?php ob_start(); ?>



<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="online shopping">
        <meta name="author" content="online shop">
       
        <title>Online Shopping </title>
        
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- Elegant Font Icons CSS -->
        <link rel="stylesheet" href="css/elegant-font-icons.css">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="css/elegant-line-icons.css">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox/venobox.css">
        <!-- Slicknav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        
    </head>
    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div><!-- Preloader -->
        
        <header id="header" class="header-section d-flex align-items-center">
            <div class="container">
                <nav class="navbar">
                    <a href="index.php" class="navbar-brand">
                       <h3>Online Shop</h3>
                    </a>
                    <div class="d-flex menu-wrap align-items-center">
                       <div id="navmenu" class="mainmenu">
                           <ul class="nav">
                                <li ><a data-scroll class="nav-link active" href="#home">Home <span class="sr-only">(current)</span></a></li>
                                <li><a data-scroll class="nav-link" href="#portfolio">Products</a></li>
                                <li><a data-scroll class="nav-link" href="#contact">Contact</a></li>
                                <a style="padding: 13px;" class="header-btn" href="login.php">Login Here</a>
                            </ul>
                       </div>
                        <?php

                            $fetch_post_query = " SELECT * FROM `hero_section` ";

                            $select_all_data= mysqli_query($dbconn, $fetch_post_query); 

                           while ($row = mysqli_fetch_assoc( $select_all_data)) :
                            $btntop         = $row ['btntop'];

                        ?>
                       <a href="<?php echo $btntop; ?>" target="_blank" class="header-btn"> Alibaba </a>
                   <?php endwhile; ?>
                    </div>
                </nav>
            </div>
		</header> <!--header-section-->
		
		<section id="home" class="hero-section d-flex align-items-center">
		    <div class="container">
		        <div class="row hero-wrap align-items-center">
                     

                    <div class="col-md-6  d-lg-block d-md-block">
                        

                        <?php

                            $port_sqli = " SELECT * FROM `heroimg` ";

                            $port_results= mysqli_query($dbconn, $port_sqli); 

                           while ($row = mysqli_fetch_assoc( $port_results)) :
                            $imgid            = $row ['id'];
                            $hero_image             = $row ['imgg'];

                        ?>

                        <div class="hero-content">
                            <img src="admin/uploadss/<?php echo $hero_image; ?>" alt="img">
                        </div>
                        <?php  endwhile; ?>
                   
                    </div>
		            <div class="col-md-6">

                        <?php

                            $fetch_post_query = " SELECT * FROM `hero_section` ";

                            $select_all_data= mysqli_query($dbconn, $fetch_post_query); 

                           while ($row = mysqli_fetch_assoc( $select_all_data)) :
                            $id             = $row ['id'];
                            $title          = $row ['title'];
                            $des            = $row ['des'];
                            $btnhero        = $row ['btnhero'];
                            $btntop         = $row ['btntop'];

                        ?>

                        
		                <div class="hero-content">
		                    <h2><?php echo $title;; ?></h2>
		                    <p><?php echo $des; ?></p>
		                    <a href="#portfolio" class="default-btn"><?php echo $btnhero; ?></a>
		                </div>
                    <?php endwhile; ?>
		            </div>
		        </div>
		    </div>
		</section><!--hero-section-->
		
		

		<section id="portfolio" class="portfolio-section bg-grey padding">
            <div class="container">
              <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <h2>Browse All Products</h2>
                </div>
                

            <div class="row portfolio-items">

                    <?php

                            $port_sql = " SELECT * FROM `portfolio` order by id desc limit 12";

                            $port_result= mysqli_query($dbconn, $port_sql); 

                           while ($row = mysqli_fetch_assoc( $port_result)) :
                            $port_id           = $row ['id'];
                            $port_link            = $row ['sec_title'];
                            $port_image             = $row ['port_img'];
                            $port_title             = $row ['port_title'];
                            $port_details             = $row ['details'];
                            $port_price     = $row ['price'];

                        ?>

                    <div class="col-lg-3 col-sm-6 pd-15 single-item branding design">
                        <a href="<?php echo $port_link; ?>" target="_blank">
                        <div class="portfolio-boxx">
                            <img src="admin/uploadss/<?php echo $port_image; ?>" alt="img">
                        </div>
                        </a>
                        <h3 class="mt-3">price: $<?php echo $port_price; ?></h3>
                        <h5 style="margin-top: 15px;"><?php echo $port_title; ?></h5>
                        <a href="details.php?p_id=<?php echo $port_id ; ?>" class="btn btn-primary">Read More</a>
                        <a href="<?php echo $port_link; ?>" target="_blank" class="btn btn-warning ">Order Now</a>
                    </div>
                   
                    <?php endwhile; ?>

                </div><!-- /.portfolio-items -->

            </div>
        </section><!-- /.portfolio-section -->
		
		
		
		
		
		
        
      
        
        <section id="contact" class="contact-section padding">
            <div class="container">
                <div class="row contact-wrap">
                    <div class="col-md-6 xs-padding">
                        <div class="contact-info">
                            <h2>Get in touch</h2>
                            <ul>
                                <li><i class="ti-location-pin"></i> South Aisa</li>
                                <li><i class="ti-email"></i> raselmollik@gmail.com</li>

                                <br>
                                <li><i class="ti-hand-point-right"></i> BTC:  32Vrx5gMXpmUsxyQV1sRtGnN1oAwUMmj52  </li>
                                <li><i class="ti-hand-point-right"></i> ETH:  0xbA816D2cd08132a42B4E4eB4f42D3945e0abfa5e  </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="contact-form">
                            <h2>Send Your Quote</h2>
                            <p>if you would like products please send your quotes</p>

                            <?php 

                                if (isset($_POST['contactform'])) {
                                        $namee = trim($_POST['name']);
                                        $emaill = trim($_POST['email']);
                                        $messagee = trim($_POST['message']);
                                        $sql = " INSERT INTO `contact_msg`(`name`, `email`, `message`) VALUES ('$namee','$emaill','$messagee') ";
                                        $result = mysqli_query($dbconn, $sql);


                                        ?>

                                        <script> 
                                            alert('Your Message sent Successfully!! ');
                                            window.open('index.php', '_self');
                                        </script>

                            <?php 


                                    }

                            ?>

                            <form action="" method="post" class="form-horizontal">

                                
                                <div class="form-group colum-row row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea  name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button class="default-btn" type="submit" name="contactform">Send Message</button>
                                    </div>
                                </div>
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->
		
		<footer class="footer-section align-center">
			<div class="container">
				<p> &copy; <?php echo date('Y'); ?> Online shop</p>
			</div>
		</footer><!-- /.footer_section -->

		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>
	
		<!-- jQuery Lib -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/vendor/bootstrap.min.js"></script>
		<!-- Tether JS -->
		<script src="js/vendor/tether.min.js"></script>
		<!-- Slicknav JS -->
		<script src="js/vendor/jquery.slicknav.min.js"></script>
		<!-- isotope JS -->
		<script src="js/vendor/jquery.isotope.v3.0.2.js"></script>
		<!-- Imagesloaded JS -->
        <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
		<!-- OWL-Carousel JS -->
		<script src="js/vendor/owl.carousel.min.js"></script>
		<!-- Smooth Scroll JS -->
		<script src="js/vendor/smooth-scroll.min.js"></script>
		<!-- venobox JS -->
		<script src="js/vendor/venobox.min.js"></script>
		<!-- Ajaxchimp JS -->
		<script src="js/vendor/jquery.ajaxchimp.min.js"></script>
		<!-- Wow JS -->
		<script src="js/vendor/wow.min.js"></script>
		<!-- Google Map JS -->
        <!-- Contact JS -->
        <script src="js/contact.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
</html>

