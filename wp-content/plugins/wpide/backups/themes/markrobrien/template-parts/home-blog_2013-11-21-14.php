<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b00538515e040"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/template-parts/home-blog.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/template-parts/home-blog_2013-11-21-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><section id="blog" class="blog">
		
			<header>
			
				<h1>BLOG</h1>
			
			</header>
    
            <div class="container">  
            
            <?php
            $args = array('post_type' => 'post', 'posts_per_page' => 6);
            $the_query = new WP_Query( $args );
            
            $i = 1;
            //added before to ensure it gets opened
            echo '<div class="row">'; ?>
            
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
			<div class="col-md-6" > 
			
			<div class=" inner-grey">

              
                
                <?php if ( has_post_thumbnail()) {
                    
                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                    
                    echo '<a class="enlarge" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" data-fancy="gal" >';
                    
                    the_post_thumbnail('full');
                    
                    echo '</a>';
                    
                } ?>
                
                <h3><?php the_title(); ?></h3>
                
                <?php the_excerpt(); ?>
                
            </div>    
                
            </div><!-- /.col-md-6 work -->

            <?php // if multiple of 3 close div and open a new div
                 if($i % 2 == 0) {echo '</div><div class="row" >';}
            	 
            $i++;
            	 
            endwhile;
            
            endif;
            
            echo '</div>';
            
            
            // Reset Post Data
            wp_reset_postdata();
             
            ?>
            
            </div>
		
		</div>
						
			</div> <!-- /.col-md-12 -->
				
		</div> <!-- /.row -->
			
	</div> <!-- /.container -->

</section><!-- /#blog -->
