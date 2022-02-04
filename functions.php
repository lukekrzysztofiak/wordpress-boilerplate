<?php
if ( ! function_exists( 'lkdev1_setup' ) ) :

function lkdev1_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Fluentality** generated Load Text Domain Begin */
    load_theme_textdomain( 'lkdev1', get_template_directory() . '/languages' );
    /* Fluentality** generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'lkdev1' ),
        'social'  => __( 'Social Links Menu', 'lkdev1' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Fluentality** generated Register Menus Begin */

    /* Fluentality** generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Fluentality** generated Image sizes Begin */

    /* Fluentality** generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // lkdev1_setup

add_action( 'after_setup_theme', 'lkdev1_setup' );


if ( ! function_exists( 'lkdev1_init' ) ) :

function lkdev1_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Fluentality** generated Custom Post Types Begin */

    /* Fluentality** generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Fluentality** generated Taxonomies Begin */

    /* Fluentality** generated Taxonomies End */

}
endif; // lkdev1_setup

add_action( 'init', 'lkdev1_init' );


if ( ! function_exists( 'lkdev1_custom_image_sizes_names' ) ) :

function lkdev1_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Fluentality** generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Fluentality** generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'lkdev1_custom_image_sizes_names' );
endif;// lkdev1_custom_image_sizes_names



if ( ! function_exists( 'lkdev1_widgets_init' ) ) :

function lkdev1_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Fluentality** generated Register Sidebars Begin */

    /* Fluentality** generated Register Sidebars End */
}
add_action( 'widgets_init', 'lkdev1_widgets_init' );
endif;// lkdev1_widgets_init



if ( ! function_exists( 'lkdev1_customize_register' ) ) :

function lkdev1_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Fluentality** generated Customizer Controls Begin */

    /* Fluentality** generated Customizer Controls End */

}
add_action( 'customize_register', 'lkdev1_customize_register' );
endif;// lkdev1_customize_register


if ( ! function_exists( 'lkdev1_enqueue_scripts' ) ) :
    function lkdev1_enqueue_scripts() {

        /* Fluentality** generated Enqueue Scripts Begin */

    wp_deregister_script( 'lkdev1-popper' );
    wp_enqueue_script( 'lkdev1-popper', get_template_directory_uri() . '/assets/js/popper.min.js', false, null, true);

    wp_deregister_script( 'lkdev1-bootstrap' );
    wp_enqueue_script( 'lkdev1-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    /* Fluentality** generated Enqueue Scripts End */

        /* Fluentality** generated Enqueue Styles Begin */

    wp_deregister_style( 'lkdev1-bootstrap' );
    wp_enqueue_style( 'lkdev1-bootstrap', get_template_directory_uri() . '/bootstrap_theme/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'lkdev1-blocks' );
    wp_enqueue_style( 'lkdev1-blocks', get_template_directory_uri() . '/blocks.css', false, null, 'all');

    wp_deregister_style( 'lkdev1-style' );
    wp_enqueue_style( 'lkdev1-style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Fluentality** generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'lkdev1_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Fluentality**.
 */
/* Fluentality** generated Include Resources Begin */


    /* Fluentality** generated Include Resources End */
?>
