<?php
$args = array('post_type' => 'project', 'posts_per_page' => 6);
$the_query = new WP_Query( $args ); ?>

<section id="gigs">

    <header>
    
    <h1>LATEST GIGS</h1>
    
    </header>

    <div class="container">
    
        <?php $i = 1; ?>
        
        <div class="row gigs-sep" >
        
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <div class="col-sm-4 <?php echo $i; ?>" > 
            
                <div class="gigs-single">
                
                    <a href="<?php the_permalink(); ?>"> 
                    
                        <?php the_post_thumbnail('full'); ?>
                        
                        <h3><?php echo get_post_meta( get_the_ID(), '_cmb_project_website', true ) ?></h3>
                    
                    </a>
                
                </div> <!-- /.gigs-single -->
            
            </div><!-- /.col-md-4 work -->
            
            <?php if($i % 3 == 0) {echo '</div> <!-- /.row gigs-sep --> <div class="row gigs-sep" >';}
            
            $i++;
            
            endwhile; endif;
        
        echo '</div> <!-- /.row gigs-sep -->';
        
        wp_reset_postdata(); ?>
    
    </div> <!-- /.container -->
    
    <?php get_template_part('template-parts/testimonials'); ?>

</section><!-- /#gigs -->