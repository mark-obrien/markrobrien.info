<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b006635a8956d"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/single-project.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/single-project_2013-12-03-01.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * 
 * Projects Template
 * 
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

    <div class="row">
    
        <div id="page-banner">
        
            <h1><?php the_title(); ?></h1>
        
        </div>
    
    </div>
                
    <div class="container">
    
        <div class="row">
        
        <?php get_sidebar(); ?>
        
            <div id="sidebar-content" class="col-md-9">
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="entry-content">
					
						
						
					</div><!-- .entry-content -->

					<footer class="entry-meta">
					
						<?php edit_post_link( __( 'Edit', 'mroinfo' ), '<span class="edit-link">', '</span>' ); ?>
						
					</footer><!-- .entry-meta -->
					
				</article><!-- #post -->
                
            </div>
        
        </div>
    
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>