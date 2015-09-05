<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b006635a8956d"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/single-project.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/single-project_2013-12-02-23.php") )  ) ){
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
 * 
 * 
 */

get_header(); ?>



            <?php get_sidebar(); ?>
        
            
                
                    <h1>TITLE</h1>
                    
                    <div id="lipsum">
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempor, nisl ut convallis ultricies, justo lectus sodales dolor, eu euismod eros felis vel nibh. Donec tristique nec ligula a fringilla. Cras mollis congue sem non ultrices. Integer dolor est, tincidunt quis pulvinar sit amet, scelerisque in odio. Suspendisse potenti. Maecenas laoreet mauris sed odio hendrerit, vel sollicitudin orci tincidunt. Integer vitae tincidunt elit. Duis dignissim ante eros, vel mollis nisi mollis convallis.
</p>
<p>
Mauris quis convallis mi, eu ornare enim. Nullam sodales, risus vel tempor dictum, libero purus mollis orci, eu viverra sapien nisi eu magna. In vulputate viverra est, at fermentum nisl vulputate gravida. Donec pretium, orci vel cursus varius, dui massa blandit nisl, in accumsan lorem lectus interdum nisi. Aliquam vitae diam nisl. Phasellus rhoncus vestibulum sem, id vehicula felis feugiat at. Aenean sed urna ac velit cursus hendrerit at quis libero.
</p>
<p>
Mauris id sapien mi. Proin iaculis a dui id interdum. Vivamus ac erat adipiscing, varius elit sit amet, ultrices elit. Maecenas aliquet eros eget justo ullamcorper, quis bibendum urna ornare. Suspendisse vel nisl ultrices, bibendum ante aliquet, interdum augue. Integer accumsan consectetur blandit. Vestibulum eget facilisis dui. Ut ut sem nec justo porta semper. Fusce blandit mi et nisl accumsan, venenatis varius nisl aliquet.
</p>
<p>
Nullam lacinia non justo sit amet vestibulum. Aliquam fringilla dui et magna cursus gravida. Nam tempor elit vel vestibulum luctus. Suspendisse ac ante imperdiet arcu placerat sagittis. Donec varius fermentum nisi, id mollis nibh bibendum sodales. Sed nec massa id arcu lobortis tincidunt in a lectus. Praesent porttitor consequat nisl, ut volutpat turpis tempor non. Proin id euismod turpis, eu volutpat justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque ac ligula quis sapien tincidunt eleifend. Duis feugiat purus sit amet tincidunt volutpat. Praesent eleifend diam eros, eu bibendum nunc aliquet ut.
</p>
<p>
Vestibulum aliquet velit sit amet hendrerit porta. Phasellus porttitor varius risus quis eleifend. Vestibulum congue mattis orci vel interdum. Fusce suscipit enim et lectus hendrerit laoreet. Praesent et mattis neque, id ornare quam. Aenean tincidunt pretium ligula, nec interdum arcu mattis vel. Ut venenatis rutrum orci, id consequat nisi. Maecenas interdum dignissim urna, id malesuada dolor auctor sollicitudin. In in sapien nisi. Nulla et posuere justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis magna elit, sollicitudin quis gravida vitae, ornare eu elit. Praesent tincidunt augue sed malesuada elementum. Curabitur varius, tellus nec tristique convallis, diam purus commodo odio, a condimentum neque arcu in nunc. Mauris fringilla fermentum dui, in bibendum urna pretium eget. Etiam quis venenatis nisi, ac euismod mauris.
</p></div>
                    </div>
            
                

<?php get_footer(); ?>