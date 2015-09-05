<section id="blog">
		
	<header>
	
		<h1>BLOG</h1>
	
	</header>

    <div class="container">  
    
    <?php  $args = array('post_type' => 'post', 'posts_per_page' => 2);
    
    $the_query = new WP_Query( $args );
    
    $i = 1; ?>
    
	<div class="row">
	
		<div class="col-md-12">
        
        <? if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
		<?php  if( $i ==1 ) { ?>	
		
			<div class="col-sm-6 pull-left" > 
    
                <?php if ( has_post_thumbnail()) {  ?>
                
                <div class="blog-thumbnail">
                
                    <?php the_post_thumbnail('full'); } ?>
                    
                </div>

                <h3><?php the_title(); ?></h3>
            
                <?php the_excerpt(); ?>
                
            </div>  <!-- /.col-md-6 -->
        
        <?php } ?>

        <?php  if( $i ==2 ) { ?>
		
			<div class="col-sm-6" > 
    
                <?php if ( has_post_thumbnail()) {  ?>
            
                <div class="blog-thumbnail">
                
                    <?php the_post_thumbnail('full'); } ?>
                    
                </div>

                <h3><?php the_title(); ?></h3>
            
                <?php the_excerpt(); ?> 
                
            </div>  <!-- /.col-md-6 -->
            
        	 
       <?php }
       
       $i++;
        	 
        endwhile;
        
        endif;
    
    wp_reset_postdata();
     
    ?>

	        </div> <!-- /.col-md-12 -->
		
        </div> <!-- /.row -->
	
    </div> <!-- /.container -->

</section><!-- /#blog -->
