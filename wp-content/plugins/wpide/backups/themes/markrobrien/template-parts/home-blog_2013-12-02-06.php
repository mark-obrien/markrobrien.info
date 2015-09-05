<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b00a30809c0b5"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/template-parts/home-blog.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/template-parts/home-blog_2013-12-02-06.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><section id="blog">
		
			<header>
			
				<h1>BLOG</h1>
			
			</header>
    
            <div class="container">  
            
            <?php
            
            $args = array('post_type' => 'post', 'posts_per_page' => 2);
            
            $the_query = new WP_Query( $args );
            
            $i = 1;
            
            
            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<div class="row">		
			
    			<div class="col-md-6" > 
        
                    <?php if ( has_post_thumbnail()) {  the_post_thumbnail('full'); } ?>
                    
                </div>  <!-- /.col-md-6 -->
                
                <div class="col-md-6" > 
    			
        			<div class=" inner">
        
                        <h3><?php the_title(); ?></h3>
                    
                        <?php the_excerpt(); ?>
                        
                    </div> <!-- /.inner -->   
                    
                </div>  <!-- /.col-md-6 -->
                
            </div>  <!-- /.row -->

            <?php  if( $i ==2 ) { ?>
                
            <div class="row">		
			
    			<div class="col-md-6" > 
        
                   <div class=" inner">
        
                        <h3><?php the_title(); ?></h3>
                    
                        <?php the_excerpt(); ?>
                        
                    </div> <!-- /.inner -->    
                    
                </div>  <!-- /.col-md-6 -->
                
                <div class="col-md-6" > 
                
                    <?php if ( has_post_thumbnail()) {  the_post_thumbnail('full'); } ?>
                    
                </div>  <!-- /.col-md-6 -->
                
            </div>  <!-- /.row -->
                    
            	 
           <?php }
           
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
