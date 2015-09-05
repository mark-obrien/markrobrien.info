<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b006635a8956d"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/full-width-template.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/full-width-template_2013-12-02-22.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/*
Template Name: Full width
*/

?>

<?php get_header(); ?>
 <?php echo get_post_meta( $post->ID, '_wp_page_template', true ); ?>
<div class="container">

    <div class="row">
    
        <div class="col-md-4">
        
        
        </div>
        
        <div class="col-md-8">
        
        
        </div>
        
    
    </div>


</div>

<?php get_footer(); ?>