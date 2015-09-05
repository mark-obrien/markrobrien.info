<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b00538515e040"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/template-parts/testimonials.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/template-parts/testimonials_2013-11-21-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><section id="testimonials">

        <div class="container">
            <div class="row">

                <div id="testimonials-slider" class="carousel slide">
                   
                    <div class="carousel-inner">
                    
                        <div class="active item">

                            <div class="col-md-2 col-md-offset-1">
                            
                                <div class="character-image">
                            
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-top-hat.png" alt="airplane animation">
                                    
                                </div>

                            </div>

                            <div class="col-md-8">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit nisi lectus, a porttitor nisi tincidunt facilisis</p>
                                <cite>John Doe, <span>website.com</span></cite>
                            </div>

                        </div>

                        <div class="item">

                            <div class="col-md-2 col-md-offset-1">

                                <div class="character-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-hank.png" alt="airplane animation">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit nisi lectus, a porttitor nisi tincidunt facilisis</p>
                                <cite>John Doe, <span>website.com</span></cite>
                            </div>

                        </div>

                       <div class="item">

                            <div class="col-md-2 col-md-offset-1">

                                <div class="character-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-chick.png" alt="airplane animation">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit nisi lectus, a porttitor nisi tincidunt facilisis</p>
                                <cite>John Doe, <span>website.com</span></cite>
                            </div>

                        </div>

                        <div class="item">

                            <div class="col-md-2 col-md-offset-1">

                                <div class="character-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wj.png" alt="airplane animation">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit nisi lectus, a porttitor nisi tincidunt facilisis</p>
                                <cite>John Doe, <span>website.com</span></cite>
                            </div>

                        </div>

                    </div>
                    
                    <!-- Carousel navigation arrows -->
                    <a class="carousel-control left" href="#testimonials-slider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="carousel-control right" href="#testimonials-slider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
              
            </div><!-- /row -->
        </div><!-- /container -->

    </section>