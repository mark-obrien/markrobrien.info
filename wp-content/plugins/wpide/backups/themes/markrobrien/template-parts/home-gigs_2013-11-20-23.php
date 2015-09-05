<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b00a6e45b6f3e"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/template-parts/home-gigs.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/template-parts/home-gigs_2013-11-20-23.php") )  ) ){
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

    <h1>LATEST GIGS</h1>

  </header>

    <div class="container">

          <div class="inner">

            <?php $i = 1; ?>
            
            <?php echo '<div class="row gigs-sep" >'; ?>
            
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <div class="col-md-4 <?php echo $i; ?>" > 
            
              <div class="gigs-single">
            
                <a href="<?php the_permalink(); ?>"> 
            
                  <?php the_post_thumbnail('full'); ?>
            
                  <h3><?php echo get_post_meta( get_the_ID(), '_cmb_project_website', true ) ?></h3>
            
                </a>
            
              </div> <!-- /.gigs-single -->
            
            </div><!-- /.col-md-4 work -->
            
            <?php if($i % 3 == 0) {echo '</div><div class="row gigs-sep" >';}
            
            $i++;
            
            endwhile; endif;
            
            echo '</div>';
            
            wp_reset_postdata(); ?>

          </div> <!-- /.inner -->

    </div> <!-- /.container -->

</section><!-- /#gigs -->