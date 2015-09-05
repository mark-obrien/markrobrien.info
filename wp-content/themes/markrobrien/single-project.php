<?php
/**
 * 
 * Projects Template
 * 
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
    
    <div id="page-banner">
    
        <h1><?php the_title(); ?></h1>
    
    </div>
          
    <div class="container">
    
        <div class="row">
        
        <?php get_sidebar(); ?>
        
            <div id="sidebar-content" class="col-sm-9">
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<img src="<?php echo get_post_meta( get_the_ID(), '_cmb_site_image', true ) ?>" alt="<?php the_title(); ?>" />

					<footer class="entry-meta">
					
						<?php edit_post_link( __( 'Edit', 'mroinfo' ), '<span class="edit-link">', '</span>' ); ?>
						
					</footer><!-- .entry-meta -->
					
				</article><!-- #post -->
                
            </div>
        
        </div>
    
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>