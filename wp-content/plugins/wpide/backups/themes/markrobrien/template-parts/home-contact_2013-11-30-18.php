<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b0009678438ec"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/template-parts/home-contact.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/template-parts/home-contact_2013-11-30-18.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><section id="contact">

    <header>
    
    <h1>ABOUT</h1>
    
    </header>

    <div class="container">
    
        <div class="row">
        
            <div class="col-sm-6">
            
                <div id="map"></div>
            
            </div>
            
            <div class="col-sm-6">
            
            
            </div>
        
        </div> <!-- /.row -->
    
    </div> <!-- /.container -->

</section>