<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b00b444669278"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/template-parts/testimonials.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/template-parts/testimonials_2013-12-03-23.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
$args = array('post_type' => 'project', 'posts_per_page' => 6);
$the_query = new WP_Query( $args ); 

?>

<div id="testimonials">

    <div class="container">
    
        <div class="row">
        
            <div id="testimonials-slider" class="carousel slide">
            
                <div class="carousel-inner">
                
                    <?php $i = 1; ?>
                
                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    
                    <?php $review_meta = get_post_meta( get_the_ID(), '_cmb_review', true ); ?>
                    
                    <?php if ($i == 1 & !empty($review_meta) ): ?>
                    
                            <div class="item active">
                            
                                <div class="col-md-3 ">
                                
                                    <div class="character-image">
                                    
                                        <img src="<?php echo get_post_meta( get_the_ID(), '_cmb_character_radio', true ); ?>" alt="airplane animation">
                                    
                                    </div>
                                
                                </div>
                                
                                <div class="col-md-8">
                                
                                    <p><?php echo get_post_meta( get_the_ID(), '_cmb_review', true ) ?></p>
                                    
                                    <cite><?php echo get_post_meta( get_the_ID(), '_cmb_client_name', true ) ?>, <span><?php echo get_post_meta( get_the_ID(), '_cmb_project_website', true ) ?></span></cite>
                                    
                                </div>
                                
                            </div>
                        
                        <?php elseif (!empty($review_meta)): ?>
                        
                            <div class="item">
                            
                                <div class="col-md-3 ">
                                
                                    <div class="character-image">
                                    
                                        <img src="<?php echo get_post_meta( get_the_ID(), '_cmb_character_radio', true ); ?>" alt="airplane animation">
                                    
                                    </div>
                                
                                </div>
                                
                                <div class="col-md-8">
                                
                                    <p><?php echo get_post_meta( get_the_ID(), '_cmb_review', true ) ?></p>
                                    
                                    <cite>John Doe, <span><?php echo get_post_meta( get_the_ID(), '_cmb_project_website', true ) ?></span></cite>
                                    
                                </div>
                                
                            </div>
                        
                        <?php endif; ?>
                    
                    <?php $i++; ?>
                    
                    <?php endwhile; endif; ?>
                
                </div>
                
                <!-- Carousel navigation arrows -->
                <a class="carousel-control left" href="#testimonials-slider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="carousel-control right" href="#testimonials-slider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                
            </div>
        
        </div><!-- /row -->
        
    </div><!-- /container -->

</div> <!-- /#testimonials -->