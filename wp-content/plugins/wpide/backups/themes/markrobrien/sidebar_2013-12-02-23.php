<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b006635a8956d"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/sidebar.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/sidebar_2013-12-02-23.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>

<aside id="sidebar" class="col-md-2">

<div style="position:absolute;">

<?php if ( is_active_sidebar( 'page-sidebar' ) ) : ?>
	
		<div class="sidebar-inner">
		
		    <div class="col-md-12">
			
			    <?php dynamic_sidebar( 'page-sidebar' ); ?>
			
			</div>
			
		</div><!-- .sidebar-inner -->
	
<?php endif; ?>

</div><!-- .sidebar-inner -->

</aside>

        