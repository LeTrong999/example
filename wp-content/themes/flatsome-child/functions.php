<?php
// Add custom Theme Functions here

add_filter('pll_get_post_types', 'add_cpt_to_pll', 10, 2);
function add_cpt_to_pll($post_types, $hide) {
    if ($hide)
        // hides 'my_cpt' from the list of custom post types in Polylang settings
        unset($post_types['my_cpt']);
    else
        // enables language and translation management for 'my_cpt'
        $post_types['my_cpt'] = 'my_cpt';
    return $post_types;
}





/**
 * Create all custom post type here
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists('charity_custom_post_type') ) {

    // Register Custom Post Type
    function charity_custom_post_type()
    {

        // Event
        $labels = array(
            'name' => _x('EVENT', 'EVENT', 'charity_wp'),
            'singular_name' => _x('EVENT', 'EVENT', 'charity_wp'),
            'menu_name' => __('EVENT', 'charity_wp'),
            'name_admin_bar' => __('EVENT', 'charity_wp'),
        );
        $rewrite = array(
            'slug' => 'event',
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        );
        $args = array(
            'label' => __('EVENT', 'charity_wp'),
            'description' => __('EVENT', 'charity_wp'),
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'rewrite' => $rewrite,
            'capability_type' => 'post',
        );
        register_post_type('event', $args);

    }

    add_action('init', 'charity_custom_post_type', 0);
}

if ( ! function_exists( 'charity_custom_taxonomy' ) ) {

    // Register Custom Taxonomy
    function charity_custom_taxonomy() {
        $labels = array(
            'name'                       => _x( 'Categories', 'charity_wp' ),
            'singular_name'              => _x( 'Category', 'charity_wp' ),
            'menu_name'                  => __( 'Categories', 'charity_wp' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => false,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'event-categories', array( 'event'), $args );
    }
    add_action( 'init', 'charity_custom_taxonomy', 0 );

}