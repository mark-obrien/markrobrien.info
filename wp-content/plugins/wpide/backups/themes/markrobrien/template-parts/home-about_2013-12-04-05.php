<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b009be9cd3647"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/template-parts/home-about.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/template-parts/home-about_2013-12-04-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><section id ="about">

    <header>
    
    <h1>ABOUT</h1>
    
    </header>

    <div class="container">
    
        <div class="row">
        
            <div class="col-sm-4 v-align">
            
                <div class="my-image">
            
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/me.png" alt="Cartoon image of me">
                    
                </div>
            
            </div> <!-- /.col-sm-4 -->
        
            <div class="col-sm-8 v-align">

                <div class="inner">
            
                <h3>Short & Sweet</h3>
                <p>I'm Mark, a front-end web developer from Minneapolis, MN. In January of 2010 I took my first HTML class and immediately fell in love with it.</p>
                
                <h3>In My Free Time..</h3>
                <p>
                In my free time I like to learn new programming languages, recreate the Mona Lisa in photoshop, and play softball in the summer. 
                </p>
                
                <h3>My education stats..</h3>
                <p>
                    I graduated from Dunwoody College of Technology in June of 2012 with an associates degree in computer networking. The following fall semester I enrolled at Metro State University to pursue a bachelors degree in computer science. As of now (fall 2013), I am more than halfway through the program. 
                </p>
            
                <h3>HTML</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                </div>
            
                <h3>CSS</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                </div>
            
                <h3>WordPress</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                </div>
                
                <h3>PHP</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>
                
                <h3>jQuery</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>		

                </div> <!-- /.inner-grey -->
            
            </div> <!-- /.col-sm-8 v-align-->
        
        </div> <!-- /.row -->
    
    </div> <!-- /.container -->

</section>