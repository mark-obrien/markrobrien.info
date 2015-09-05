<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>"> 

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php wp_title( '|', true, 'right' ); ?></title>

        <link rel="profile" href="http://gmpg.org/xfn/11">

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/ico/favicon.png">
    
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

      <?php wp_head(); ?> 

    </head>

<body <?php body_class(); ?>>

	<main id="wrap">
	
	<?php if(is_home()): ?>
		<header>
		
			<!-- Fixed navbar -->
			<nav class="navbar navbar-default navbar-fixed-top">
			
				<div class="container">
				
					<div class="navbar-header">
					
						<button type="button" class="navbar-toggle" data-toggle="collapse">
						
						<span class="icon-bar"></span>
						
						<span class="icon-bar"></span>
						
						<span class="icon-bar"></span>
						
						</button>
						
						<a class="navbar-brand" href="/">markrobrien.info</a>
						
					</div>
					
					<?php wp_nav_menu( array('container' => 'div', 'container_class' => 'navbar-collapse collapse scroll-menu', 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right') ); ?>
					
				</div>
				
			</nav>
			
			<?php wp_nav_menu( array('container' => 'div', 'container_class' => 'mobile scroll-menu', 'theme_location' => 'primary') ); ?>
			
		</header>
		
		<?php else : ?>
		
		<header>
		
			<!-- Fixed navbar -->
			<nav class="navbar navbar-default navbar-fixed-top">
			
				<div class="container">
				
					<div class="navbar-header">
					
						<button type="button" class="navbar-toggle" data-toggle="collapse">
						
						<span class="icon-bar"></span>
						
						<span class="icon-bar"></span>
						
						<span class="icon-bar"></span>
						
						</button>
						
						<a class="navbar-brand" href="/">markrobrien.info</a>
						
					</div>
					
					<?php wp_nav_menu( array('container' => 'div', 'container_class' => 'navbar-collapse collapse', 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right') ); ?>
					
				</div>
				
			</nav>
			
			<?php wp_nav_menu( array('container' => 'div', 'container_class' => 'mobile scroll-menu', 'theme_location' => 'primary') ); ?>
			
		</header>
		
		<?php endif; ?>