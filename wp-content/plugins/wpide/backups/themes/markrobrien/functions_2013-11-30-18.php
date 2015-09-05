<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b0009678438ec"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/functions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/functions_2013-11-30-18.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/**********************************************************************************************************************************************************************
 * MROINFO setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * MROINFO supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since MROINFO 1.0
 *
 * @return void
 */
function mroinfo_setup() {
	/*
	 * Makes MROINFO available for translation.
	 */
	load_theme_textdomain( 'mroinfo', get_template_directory() . '/languages' );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Navigation Menu', 'mroinfo' ) );
        //
        require_once('assets/admin/wp_bootstrap_navwalker.php');

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 604, 270, true );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'mroinfo_setup' );

/**********************************************************************************************************************************************************************
 * Enqueue styles for the front end.
 *
 * @since MROINFO 1.0
 * 
 * @return void
 */
function mroinfo_styles_scripts() {

        // Loads Bootstrap core CSS.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '3.0.1' );

        // Loads Reset CSS.
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css', array( ), '2.0');

        // Loads Animate CSS
       wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array( ), '2.0');

	// Loads our main stylesheet.
	wp_enqueue_style( 'mroinfo_style', get_stylesheet_uri(), array(), '2013-10-28' );

        // Loads JavaScript file for Bootstrap core.
	wp_enqueue_script( 'boostrap_script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );

 
    if (is_home() || is_front_page() ) {
           //Loads JavaScript file for ScrollSpy.
    //  wp_enqueue_script( 'boostrap_script , get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );
    }

       // Loads JavaScript file for Bootstrap core.
	wp_enqueue_script( 'jquery-ui-core', array( 'jquery' ), '', true );

        // Loads JavaScript file with functionality specific to MROINFO.
	wp_enqueue_script( 'mroinfo_script', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '2013-10-28', true );
	
}
add_action( 'wp_enqueue_scripts', 'mroinfo_styles_scripts' );

/**********************************************************************************************************************************************************************
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since MROINFO 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string The filtered title.
 */
function mroinfo_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'mroinfo' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'mroinfo_wp_title', 10, 2 );

/**********************************************************************************************************************************************************************
 * Register two widget areas.
 *
 * @since MROINFO 1.0
 *
 * @return void
 */
function mroinfo_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Page Widget Area', 'mroinfo' ),
		'id'            => 'page-sidebar',
		'description'   => __( 'Appears on pages in the sidebar.', 'mroinfo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Post Widget Area', 'mroinfo' ),
		'id'            => 'post-sidebar',
		'description'   => __( 'Appears on posts in the sidebar.', 'mroinfo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'mroinfo_widgets_init' );

if ( ! function_exists( 'mroinfo_paging_nav' ) ) :
/**********************************************************************************************************************************************************************
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since MROINFO 1.0
 *
 * @return void
 */
function mroinfo_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'mroinfo' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'mroinfo' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'mroinfo' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'mroinfo_post_nav' ) ) :
/**********************************************************************************************************************************************************************
 * Display navigation to next/previous post when applicable.
*
* @since MROINFO 1.0
*
* @return void
*/
function mroinfo_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'mroinfo' ); ?></h1>
		<div class="nav-links">

			<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'mroinfo' ) ); ?>
			<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'mroinfo' ) ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'mroinfo_entry_meta' ) ) :
/**********************************************************************************************************************************************************************
 * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own mroinfo_entry_meta() to override in a child theme.
 *
 * @since MROINFO 1.0
 *
 * @return void
 */
function mroinfo_entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<span class="featured-post">' . __( 'Sticky', 'mroinfo' ) . '</span>';

	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
		mroinfo_entry_date();

	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'mroinfo' ) );
	if ( $categories_list ) {
		echo '<span class="categories-links">' . $categories_list . '</span>';
	}

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'mroinfo' ) );
	if ( $tag_list ) {
		echo '<span class="tags-links">' . $tag_list . '</span>';
	}

	// Post author
	if ( 'post' == get_post_type() ) {
		printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'mroinfo' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;

if ( ! function_exists( 'mroinfo_entry_date' ) ) :
/**********************************************************************************************************************************************************************
 * Print HTML with date information for current post.
 *
 * Create your own mroinfo_entry_date() to override in a child theme.
 *
 * @since MROINFO 1.0
 *
 * @param boolean $echo (optional) Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function mroinfo_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'mroinfo' );
	else
		$format_prefix = '%2$s';

	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( __( 'Permalink to %s', 'mroinfo' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);

	if ( $echo )
		echo $date;

	return $date;
}
endif;

if ( ! function_exists( 'mroinfo_the_attached_image' ) ) :
/**********************************************************************************************************************************************************************
 * Print the attached image with a link to the next attached image.
 *
 * @since MROINFO 1.0
 *
 * @return void
 */
function mroinfo_the_attached_image() {
	/**
	 * Filter the image attachment size to use.
	 *
	 * @since MROINFO 1.0
	 *
	 * @param array $size {
	 *     @type int The attachment height in pixels.
	 *     @type int The attachment width in pixels.
	 * }
	 */
	$attachment_size     = apply_filters( 'mroinfo_attachment_size', array( 724, 724 ) );
	$next_attachment_url = wp_get_attachment_url();
	$post                = get_post();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}

	printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
		esc_url( $next_attachment_url ),
		the_title_attribute( array( 'echo' => false ) ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**********************************************************************************************************************************************************************
 * Return the post URL.
 *
 * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @since MROINFO 1.0
 *
 * @return string The Link format URL.
 */
function mroinfo_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

/**********************************************************************************************************************************************************************
 * Include Metaboxes, Widgets, Shortcodes, and Post Types
 *
 * @since MROINFO 1.0
 *
 */

//Widgets
//require_once('assets/admin/widgets/search-widget.php');

// Metaboxes
require_once('assets/admin/metaboxes/meta-functions.php'); 

// Shortcodes
//require_once('assets/admin/shortcodes/tabs.php');

// Post Types
require_once('assets/admin/custom post types/projects.php');


/**********************************************************************************************************************************************************************
 * Include the Options Panel
 *
 * @since MROINFO 1.0
 *
 */

//if ( ! function_exists( 'optionsframework_init' ) ) {
//	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/assets/admin/theme-options/' );
//	require_once dirname( __FILE__ ) . '/assets/admin/theme-options/options-framework.php';
//}


/**********************************************************************************************************************************************************************
 * Custom Functions
 *
 * @since MROINFO 1.0
 *
 */

function disable_autop() {
	global $post;
	$disable_autop_var = get_post_meta($post->ID, '_cmb_disable_autop', TRUE);
		if ( $disable_autop_var == on ) {
		remove_filter('the_content', 'wpautop');
		}
	}
add_action ('loop_start', 'disable_autop');

add_filter( 'comment_text', 'wp_filter_nohtml_kses' );
add_filter( 'comment_text_rss', 'wp_filter_nohtml_kses' );
add_filter( 'comment_excerpt', 'wp_filter_nohtml_kses' );


function mroinfo_comment( $comment, $args, $depth ) {

  $GLOBALS['comment'] = $comment; ?>
	
  <div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">

    <div id="comment-<?php comment_ID(); ?>" class="comment-body row"> 
	   		
      <div class="avatar col-sm-2"><?php echo get_avatar($comment, $size = '100'); ?></div>
  
      <div class="comment-text col-sm-10">
	         
        <div class="author">
  
          <h4><?php printf( __( '%s'), get_comment_author_link() ) ?>-</h4>

          <h6><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></h6>

          <div class="date">

            <?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time() ) ?></a><?php edit_comment_link( __( '(Edit)'),'  ','' ) ?></div>  

          </div>
				 
          <div class="text"><?php comment_text() ?></div>
				 
          <?php if ( $comment->comment_approved == '0' ) : ?>

            <em><?php _e( 'Your comment is awaiting moderation.') ?></em>

            <br />
  
          <?php endif; ?>
		      	
      </div> <!-- /.comment-text -->
	      
    </div> <!-- /#comment -->

<?php }