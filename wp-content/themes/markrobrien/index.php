<?php get_header(); ?>

<section id="splash">

    <div class="container">
    
        <div class="row">
        
            <div class="logo">
            
            	<h1 class="animated bounceInLeft">Mark R O'Brien</h1>
            	
            	<h2 class="greeting animated bounceInRight">portfolio</h2>
            
            </div> <!-- /.logo-->
        
        </div> <!-- /.row -->

    </div> <!-- /.container -->

</section>

<?php get_template_part('template-parts/home-about'); ?>

<?php get_template_part('template-parts/home-gigs'); ?>

<?php //get_template_part('template-parts/home-blog'); 
?>

<?php get_template_part('template-parts/home-contact'); ?>

<?php get_footer(); ?>