<?php
/**
 * Custom Case Results Custom Post Type
 *
 * @package Postali Parent
 * @author Postali LLC
 */

function create_custom_post_type_studies() {

// set up labels
    $labels = array(
        'name' => 'Case Studies',
        'singular_name' => 'Case Study',
        'add_new' => 'Add New Case Study',
        'add_new_item' => 'Add New Case Study',
        'edit_item' => 'Edit Case Study',
        'new_item' => 'New Case Study',
        'all_items' => 'All Case Studies',
        'view_item' => 'View Case Study',
        'search_items' => 'Search Case Studies',
        'not_found' =>  'No Case Studies Found',
        'not_found_in_trash' => 'No Case Studies found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Case Studies',

    );
    //register post type
    register_post_type( 'case_studies', array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-analytics',
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'excerpt' ),  
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => 'case-studies', 'with_front' => false ), // Allows for /legal-blog/ to be the preface to non pages, but custom posts to have own root
        )
    );

}
add_action( 'init', 'create_custom_post_type_studies' );


function add_case_studies_submenu() {
    $args = array(
        'page_title'  => __('Edit Case Studies Archive'),
        'menu_title'  => __('Edit Case Studies Archive Archive'),
        'parent_slug' => 'edit.php?post_type=case_studies',
    );
    acf_add_options_sub_page($args);
}
add_action('acf/init', 'add_case_studies_submenu');