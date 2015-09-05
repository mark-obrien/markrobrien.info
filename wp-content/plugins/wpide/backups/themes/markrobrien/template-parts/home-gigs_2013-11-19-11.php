<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b005d76aa27f7"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/template-parts/home-gigs.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/template-parts/home-gigs_2013-11-19-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
$args = array('post_type' => 'project', 'posts_per_page' => 6);
$the_query = new WP_Query( $args ); ?>


<section id="gigs" class="gigs">
		
			<header>
			
				<h1>GIGS</h1>
			
			</header>
		
			<div class="container">
			
				<div class="row">
			
					<div class="col-md-12">
					
						<div id="image-plane">
						
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/plane.png" alt="airplane animation">
						
						</div>
						
						<div id="banner" class="inner image-banner">
						
							<div class="col-md-12">
							
							<?php $i = 1; ?>
							
                            <?php echo '<div class="row" >'; ?>
							
							<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
							<div class="col-md-4 work" > 

                                <figure>
                                
                                <?php if ( has_post_thumbnail()) {
                                    
                                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                                    
                                    echo '<a class="enlarge" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" data-fancy="gal" >';
                                    
                                    the_post_thumbnail('full');
                                    
                                    echo '</a>';
                                    
                                } ?>
                                
                                </figure>
                                
                                <h3><?php the_title(); ?></h3>
                                
                                <?php the_excerpt(); ?>
                                
                                <div class="row">
                                
                                    <div class="col-md-4 item_details"> 
                                
                                        <p><strong>Client: </strong><?php echo get_post_meta( get_the_ID(), '_cmb_project_website', true ) ?><br><strong>Date: </strong><?php the_date(); ?></p>
                                
                                        <a href="<?php echo get_post_meta( get_the_ID(), '_cmb_project_link', true ) ?>" class="btn cta_online">ONLINE</a>
                                
                                    </div>
                                
                                </div>
                                
                            </div><!-- /.col-md-4 work -->

                            <?php // if multiple of 3 close div and open a new div
                                 if($i % 3 == 0) {echo '</div><div class="row" >';}
                            	 
                            $i++;
                            	 
                            endwhile;
                            
                            endif;
                            
                            //echo '</div>';
                            
                            
                            // Reset Post Data
                            wp_reset_postdata();
                             
                            ?>
						
						</div>
						
					</div> <!-- /.col-md-12 -->
						
				</div> <!-- /.row -->
					
			</div> <!-- /.container -->
		
		</section><!-- /#gigs -->