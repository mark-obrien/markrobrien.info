<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b006635a8956d"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/sidebar.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/sidebar_2013-12-03-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>

<aside id="sidebar" class="col-sm-3">

<h2>Project Description</h2>

    <ul>

        <li><h4>DATE:</h4><span><?php the_date('F Y'); ?></span></li>
    
        <li><h4>FOR:</h4><span><?php the_title(); ?></span></li>
        
        <li><h4>URL:</h4><span><a href="<?php echo get_post_meta( get_the_ID(), '_cmb_project_link', true ) ?>" target="_blank">View Project</a></span></li>
    
        <li><h4>SKILLS:</h4><span><?php the_tags('', ', ' ); ?> </span></li>
        
    </ul> 
    
    <nav class="navigation post-navigation" role="navigation">
    
		<div class="nav-links">
		
		    <ul>
    
                <li><?php next_post_link('%link', 'Next Project'); ?></li> 
                
                <li><?php previous_post_link('%link', 'Previous Project'); ?></li> 
            
            </ul>
            
        </div>
        
    </nav>

</aside>

        