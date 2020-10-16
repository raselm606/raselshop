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
                                <li><a data-scroll class="nav-link" href="index.php#portfolio">Products</a></li>
                                <li><a data-scroll class="nav-link" href="index.php#contact">Contact</a></li>
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
		
		<section id="home" class="hero-section d-flex align-items-center pb-5" style=" height: 300px !important;">
		    <div class="container">
		        <div class="row hero-wrap align-items-center">
                     

                   
		            <div class="col-md-12 text-center">

                       

                        
		                <div class="hero-content" style="margin-top: 100px;">
		                    <h3 class="mt-4">Portfolio details</h3>
		                    <p>home/details</p>
		                    <a href="index.php" class="default-btn">go back home</a>
		                </div>
                    
		            </div>
		        </div>
		    </div>
		</section><!--hero-section-->
		
		

		<section id="portfolio" class="portfolio-section bg-grey padding">
            <div class="container">
              <div class="section-heading mb-40 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <h3>Product Details</h3>
                </div>
                

            <div class="row portfolio-items">

                    <?php

                    if(isset($_GET['p_id'])){
                        $the_post_id = $_GET['p_id'];

                    }

                            $port_sql = " SELECT * FROM `portfolio` WHERE id = $the_post_id";

                            $port_result_id= mysqli_query($dbconn, $port_sql); 

                           while ($row = mysqli_fetch_assoc( $port_result_id)) {
                            $port_id           = $row ['id'];
                            $port_link            = $row ['sec_title'];
                            $port_image             = $row ['port_img'];
                            $port_title             = $row ['port_title'];
                            $port_details             = $row ['details'];
                            $port_price             = $row ['price'];
                        }

                        ?>

                    <div class="col-lg-8 col-sm-6 pd-15 single-item branding design">
                        
                        <div class="portfolio-boxxx">
                            <a href="<?php echo $port_link; ?>"><img src="admin/uploadss/<?php echo $port_image; ?>" alt="img"></a>
                        </div>
                         <h3 class="mt-3">price: $<?php echo $port_price; ?></h3>
                        <h4 style="margin-top: 15px;"><?php echo $port_title; ?></h4>
                        <p><?php echo $port_details; ?></p>
                        <a href="<?php echo $port_link; ?>" target="_blank" class="btn btn-warning pl-5 pr-5 pt-3 pb-3">Order Now</a>
                    </div>
                   
                   

                </div><!-- /.portfolio-items -->

            </div>
        </section><!-- /.portfolio-section -->
		
		
		
	
		
        
        
        
        

       
        
        
		
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

