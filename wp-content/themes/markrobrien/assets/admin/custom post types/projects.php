<?php

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
        'rewrite' => array( 'slug' => 'projects','with_front' => FALSE),
        'capability_type' => 'post'
    );

    register_post_type( 'project', $args );
}



add_filter( 'cmb_meta_boxes', 'project_metaboxes' );

function project_metaboxes( array $meta_boxes ) {

$character_one = get_template_directory_uri().'/assets/img/testimonial-chick.png';
$character_two = get_template_directory_uri().'/assets/img/testimonial-hank.png';
$character_three = get_template_directory_uri().'/assets/img/testimonial-top-hat.png';
$character_four = get_template_directory_uri().'/assets/img/wj.png';
$character_five = get_template_directory_uri().'/assets/img/testimonial-chick-blonde.png';
$character_six = get_template_directory_uri().'/assets/img/testimonial-man-black.png';

$ratingImage = get_template_directory_uri(); 
	
	$prefix = '_cmb_';

	$meta_boxes[] = array(
		'id'         => 'project_metabox',
		'title'      => 'Project Metabox',
		'pages'      => array( 'project', ), 
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, 
		'fields'     => array(
            array(
				'name' => 'Site Image',
				'id'   => $prefix . 'site_image',
				'type' => 'file',
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
            array(
				'name' => 'Client Name',
				'id'   => $prefix . 'client_name',
				'type' => 'text',
			),
            array(
                'name'    => __( 'Testimonial Character', 'cmb' ),
                'desc'    => __( 'field description (optional)', 'cmb' ),
                'id'      => $prefix . 'character_radio',
                'type'    => 'radio_inline',
                'options' => array(
                        array( 'name' => __( 'Girl Brown Hair', 'cmb' ), 'value' => $character_one, ),
                        array( 'name' => __( 'Bald Guy', 'cmb' ), 'value' => $character_two, ),
                        array( 'name' => __( 'Top Hat Guy', 'cmb' ), 'value' => $character_three, ),
                        array( 'name' => __( 'Guy Brown Hair', 'cmb' ), 'value' => $character_four, ),
                        array( 'name' => __( 'Girl Blonde Hair', 'cmb' ), 'value' => $character_five, ),
                        array( 'name' => __( 'Guy Black Hair', 'cmb' ), 'value' => $character_six, ),
                ),
        ),
			
		),
	);


	return $meta_boxes;
}

add_action( 'init', 'initialize_project_metaboxes', 9999 );

function initialize_project_metaboxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'custom-meta-boxes-wp/init.php';

}

?>