<?php
/**
 * Custom Attorneys Custom Post Type
 *
 * @package Postali Child
 * @author Postali LLC
 */

function create_custom_post_type_attorneys() {

// set up labels
    $labels = array(
        'name' => 'Attorneys',
        'singular_name' => 'Staff Member',
        'add_new' => 'Add New Staff Member',
        'add_new_item' => 'Add New Staff Member',
        'edit_item' => 'Edit Staff Member',
        'new_item' => 'New Staff Member',
        'all_items' => 'All Staff Members',
        'view_item' => 'View Staff Members',
        'search_items' => 'Search Staff Members',
        'not_found' =>  'No Staff Members Found',
        'not_found_in_trash' => 'No Staff Members found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Staff Members',

    );
    //register post type
    register_post_type( 'attorneys', array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-businessman',
        //'has_archive' => true,
        //'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),  
        //'exclude_from_search' => false,
        //'capability_type' => 'post',

        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'taxonomies'            => array('staff_member_types'),

        'rewrite' => array( 'slug' => 'attorneys', 'with_front' => false ),
        ),
    );

}
add_action( 'init', 'create_custom_post_type_attorneys', 0 );

// Create custom taxonomy for attorneys CPT
function create_attorneys_taxonomy() {
    $labels = array(
        'name' => _x( 'staff_member_types', 'taxonomy general name' ),
        'singular_name' => _x( 'Staff Member Type', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Staff Member Types' ),
        'all_items' => __( 'All Staff Member Types' ),
        'parent_item' => __( 'Parent Staff Member Type' ),
        'parent_item_colon' => __( 'Parent Staff Member Type:' ),
        'edit_item' => __( 'Edit Staff Member Type' ), 
        'update_item' => __( 'Update Staff Member Type' ),
        'add_new_item' => __( 'Add New Staff Member Type' ),
        'new_item_name' => __( 'New Staff Member Type' ),
        'menu_name' => __( 'Staff Member Types' ),
    );    
    
    register_taxonomy('staff_member_types',array('attorneys'), array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-businessman',
        'has_archive' => false,
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),  
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => 'attorneys', 'with_front' => false ),
    ));
    
}
add_action( 'init', 'create_attorneys_taxonomy', 0 );


function add_attorneys_submenu() {
    $args = array(
        'page_title'  => __('Edit Attorneys Archive'),
        'menu_title'  => __('Edit Attorneys Archive'),
        'parent_slug' => 'edit.php?post_type=attorneys',
    );
    acf_add_options_sub_page($args);
}
add_action('acf/init', 'add_attorneys_submenu');