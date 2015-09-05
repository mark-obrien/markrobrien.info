

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
    
                
                <li><?php previous_post_link('%link', 'Previous Project'); ?></li> 
                
                 <li><?php next_post_link('%link', 'Next Project'); ?></li> 
            
            </ul>
            
        </div>
        
    </nav>

</aside>

        