<?php
if ( ! function_exists( 'nukage2020_setup' ) ) :

function nukage2020_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'nukage2020', get_template_directory() . '/languages' );
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
        'primary' => __( 'Primary Menu', 'nukage2020' ),
        'social'  => __( 'Social Links Menu', 'nukage2020' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
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
endif; // nukage2020_setup

add_action( 'after_setup_theme', 'nukage2020_setup' );


if ( ! function_exists( 'nukage2020_init' ) ) :

function nukage2020_init() {

    
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
endif; // nukage2020_setup

add_action( 'init', 'nukage2020_init' );


if ( ! function_exists( 'nukage2020_custom_image_sizes_names' ) ) :

function nukage2020_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'nukage2020_custom_image_sizes_names' );
endif;// nukage2020_custom_image_sizes_names



if ( ! function_exists( 'nukage2020_widgets_init' ) ) :

function nukage2020_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'nukage2020_widgets_init' );
endif;// nukage2020_widgets_init



if ( ! function_exists( 'nukage2020_customize_register' ) ) :

function nukage2020_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'nukage2020_customize_register' );
endif;// nukage2020_customize_register


if ( ! function_exists( 'nukage2020_enqueue_scripts' ) ) :
    function nukage2020_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'main' );
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', null, '1', true );
    wp_enqueue_script( 'main' );

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', false, null, true);

    wp_deregister_script( 'jqueryui' );
    wp_enqueue_script( 'jqueryui', get_template_directory_uri() . '/js/jquery-ui.min.js', false, null, true);

    wp_deregister_script( 'isotopepkgd' );
    wp_enqueue_script( 'isotopepkgd', get_template_directory_uri() . '/js/isotope.pkgd.min.js', false, null, true);

    wp_deregister_script( 'jqueryfancybox' );
    wp_enqueue_script( 'jqueryfancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', false, null, true);

    wp_deregister_script( 'jquerynav' );
    wp_enqueue_script( 'jquerynav', get_template_directory_uri() . '/js/jquery.nav.js', false, null, true);

    wp_deregister_script( 'headroom' );
    wp_enqueue_script( 'headroom', get_template_directory_uri() . '/js/headroom.min.js', false, null, true);

    wp_deregister_script( 'skrollr' );
    wp_enqueue_script( 'skrollr', get_template_directory_uri() . '/js/skrollr.min.js', false, null, true);

    wp_deregister_script( 'mcvalidate' );
    wp_enqueue_script( 'mcvalidate', get_template_directory_uri() . '/js/mc-validate.js', false, null, true);

    wp_add_inline_script( 'mcvalidate', '(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]=\'EMAIL\';ftypes[0]=\'email\';fnames[1]=\'FNAME\';ftypes[1]=\'text\';fnames[2]=\'LNAME\';ftypes[2]=\'text\';fnames[3]=\'ADDRESS\';ftypes[3]=\'address\';fnames[4]=\'PHONE\';ftypes[4]=\'phone\';}(jQuery));var $mcj = jQuery.noConflict(true);');
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
    add_action( 'wp_enqueue_scripts', 'nukage2020_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>