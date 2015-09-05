<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cab002c1a8eb1282771e4a8d68e55b006635a8956d"){
                                        if ( file_put_contents ( "/home1/markob83/public_html/markrobrien.info/wp-content/themes/markrobrien/assets/admin/custom post types/projects.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home1/markob83/public_html/markrobrien.info/wp-content/plugins/wpide/backups/themes/markrobrien/assets/admin/custom post types/projects_2013-12-02-21.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php

add_action( 'init', 'register_cpt_project' );

function register_cpt_project() {

    $labels = array( 
        'name' => _x( 'Projects', 'project' ),
        'singular_name' => _x( 'Project', 'project' ),
        'add_new' => _x( 'Add New', 'project' ),
        'add_new_item' => _x( 'Add New Project', 'project' ),
        'edit_item' => _x( 'Edit Project', 'project' ),
        'new_item' => _x( 'New Project', 'project' ),
        'view_item' => _x( 'View Project', 'project' ),
        'search_items' => _x( 'Search Projects', 'project' ),
        'not_found' => _x( 'No projects found', 'project' ),
        'not_found_in_trash' => _x( 'No projects found in Trash', 'project' ),
        'parent_item_colon' => _x( 'Parent Project:', 'project' ),
        'menu_name' => _x( 'Projects', 'project' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'  ),
        'taxonomies' => array( 'category', 'post_tag' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'project', $args );
}


/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'project_metaboxes' );

function project_metaboxes( array $meta_boxes ) {

$ratingImage = get_template_directory_uri(); 

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	$meta_boxes[] = array(
		'id'         => 'project_metabox',
		'title'      => 'Project Metabox',
		'pages'      => array( 'project', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
                        array(
				'name' => 'Project Description',
				'id'      => $prefix . 'project_description',
				'type'    => 'textarea_code',
                        ),
			array(
				'name' => 'Project Link',
				'desc' => 'Ex. http://www.google.com',
				'id'   => $prefix . 'project_link',
				'type' => 'text',
			),
			array(
				'name' => 'Project Website',
				'desc' => 'Ex. Google.com',
				'id'   => $prefix . 'project_website',
				'type' => 'text',
			),
                        array(
				'name' => 'Rating',
				'id'      => $prefix . 'review',
				'type'    => 'textarea',
                       ),
			
		),
	);


	return $meta_boxes;
}

add_action( 'init', 'initialize_project_metaboxes', 9999 );
/**
 * Initialize the metabox class.
 */
function initialize_project_metaboxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'custom-meta-boxes-wp/init.php';

}

?>