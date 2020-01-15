<?php
if ( ! function_exists( 'nukage_2020_setup' ) ) :

function nukage_2020_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'nukage_2020', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

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
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'nukage_2020' ),
        'social'  => __( 'Social Links Menu', 'nukage_2020' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image Sizes Begin */

    add_image_size( 'gallery_thumb', 500, 350, true );
    /* Pinegrow generated Image Sizes End */
    
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
endif; // nukage_2020_setup

add_action( 'after_setup_theme', 'nukage_2020_setup' );


if ( ! function_exists( 'nukage_2020_init' ) ) :

function nukage_2020_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // nukage_2020_setup

add_action( 'init', 'nukage_2020_init' );


if ( ! function_exists( 'nukage_2020_custom_image_sizes_names' ) ) :

function nukage_2020_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin */

    return array_merge( $sizes, array(
        'gallery_thumb' => __( 'Gallery Thumb' )
    ) );

    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'nukage_2020_custom_image_sizes_names' );
endif;// nukage_2020_custom_image_sizes_names



if ( ! function_exists( 'nukage_2020_widgets_init' ) ) :

function nukage_2020_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'nukage_2020_widgets_init' );
endif;// nukage_2020_widgets_init



if ( ! function_exists( 'nukage_2020_customize_register' ) ) :

function nukage_2020_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'nukage_2020_customize_register' );
endif;// nukage_2020_customize_register


if ( ! function_exists( 'nukage_2020_enqueue_scripts' ) ) :
    function nukage_2020_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'cdbaecd' );
    wp_enqueue_script( 'cdbaecd', 'https://kit.fontawesome.com/cd4b1a5ecd.js', false, null, false);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', false, null, true);

    wp_deregister_script( 'jqueryui' );
    wp_enqueue_script( 'jqueryui', get_template_directory_uri() . '/js/jquery-ui.min.js', false, null, true);

    wp_deregister_script( 'isotopepkgd' );
    wp_enqueue_script( 'isotopepkgd', get_template_directory_uri() . '/js/isotope.pkgd.min.js', false, null, true);

    wp_deregister_script( 'jqueryfancybox' );
    wp_enqueue_script( 'jqueryfancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', false, null, true);

    wp_deregister_script( 'main' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'jqueryfancybox' );
    wp_enqueue_style( 'jqueryfancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', false, null, 'all');

    wp_deregister_style( 'tailwind' );
    wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/build/tailwind.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'nukage_2020_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>