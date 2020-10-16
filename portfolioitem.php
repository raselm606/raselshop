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

                        ?>

                    <div class="col-lg-4 col-sm-6 pd-15 single-item branding design">
                    	<a href="<?php echo $port_link; ?>" target="_blank">
                        <div class="portfolio-boxx">
                            <img src="admin/uploadss/<?php echo $port_image; ?>" alt="img">
                        </div>
                        </a>
                        <h4 style="margin-top: 15px;"><?php echo $port_title; ?></h4>
                        <p><?php echo $port_details; ?></p>
                        <a href="index.php?source=details_post&p_id=<?php echo $port_id ; ?>" class="btn btn-primary">Read More</a>
                    </div>
                   
                    <?php endwhile; ?>

                </div><!-- /.portfolio-items -->