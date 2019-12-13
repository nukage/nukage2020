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
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
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

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min', null, '3.4.1', true );

    wp_add_inline_script( 'jquery', '<head>
        <meta charset="<?php bloginfo( \'charset\' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
        <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
        <link rel="stylesheet" href="build/tailwind.css">
        <link rel="stylesheet" href="css/style.css">
    <link rel="pingback" href="<?php bloginfo( \'pingback_url\' ); ?>"></head>
    <body class="s1 oswald text-white">
        <div class="navbar w-full fixed">
            <div class="container mx-auto h-20 px-5  flex flex-row   justify-between items-center">
                <div>
                    <img class=" sm:h-10 h-6" src="images/nukage logo.png">
                </div>
                <div class="">
                    <a href="#" class="sign-up-nav-link uppercase p-2 rounded-lg">Sign Up <span class="md:inline hidden ">For Updates</span></a>
                </div>
            </div>
        </div>
        <div class="body-wrapper pt-20">
            <div class="bg-overlay ">
                <section id="quick-stats" class="px-5">
                    <div class="container mx-auto flex md:flex-row flex-col py-10">
                        <div class=" md:w-1/3 w-full flex items-center  ">
                            <img class="mx-auto" src="images/Nukage-Headshot.png">
                        </div>
                        <div class="md:w-2/3 w-full container flex flex-row quick-list-holder md:pl-16  text-lg flex-wrap ">
                            <div class="w-full"> 
                                <h3 class="qs-title">Quick Stats</h3>
                            </div>
                            <div class="sm:w-1/2 w-full ">
                                <ul>
                                    <li>
                                        <span>ARTIST NAME:</span> Nukage
                                    </li>
                                    <li>
                                        <span>EMAIL:</span> nukage@nukage.net
                                    </li>
                                    <li>
                                        <span>Website:</span> www.nukage.net
                                    </li>
                                    <li>
                                        <span>Genre:</span> Dubstep, Future Bass, Trap
                                    </li>
                                    <li>
                                        <span>Shows Played:</span> 100+
                                    </li>
                                    <li>
                                        <span>Social Links:</span> 
                                        <br> Instagram Facebook Youtube Soundcloud
                                    </li>
                                </ul>
                            </div>
                            <div class="sm:w-1/2 w-full">
                                <ul>
                                    <li>
                                        <span>REAL NAME:</span> Tom Myruski
                                    </li>
                                    <li>
                                        <span>Website:</span> www.nukage.net
                                    </li>
                                    <li>
                                        <span>Residence:</span> Brooklyn, NY
                                    </li>
                                    <li>
                                        <span>Perfomance Style:</span> Live PA or DJ Set
                                    </li>
                                    <li>
                                        <span>Beatport Charting Releases:</span> 5
                                    </li>
                                    <li>
                                        <span>Support From:</span> Ill Gates, KJ Sawka, Future Magic, Demien Sixx
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full">
                                <ul>
                                    <li>
                                        <span>MEDIA NOTABLES:</span>
                                        <br>
                                        EDM Artist Organizes NYC Electronic Music Community (Interview) | Demien Sixx & Nukage Release Latest Original – “Maximum Overdrive” | Your EDM Premiere: Archtekt & Nukage - Black Mass
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="infoboxes">
                    <div class="accordion p-5 container mx-auto">
                        <h3 class="accordian-h3">Short Bio</h3>
                        <div class="sm:text-xl leading-loose  p-4     ">
                            <p>This year, Nukage has raised the bar yet again. Using his knowledge of sound design as well as guitar prowess, he created a show conceptualized to truly play his music live.  His guitar becomes a filtered, distorted ‘reese’ bass, which is then further modulated into growls, screeches, and wobbles. Audiences aren’t sure whether to dance or mosh, all the while cheering for more gurgling bass.</p>
                        </div>
                        <h3 class="accordian-h3">Long Bio</h3>
                        <div class="sm:text-xl leading-loose p-4  ">
                            <p> Inspired from a young age by the sounds of synthesizers and heavy metal guitars, Tom Myruski aka Nukage, set out to create a unique sound combining two things: the incredibly complex beats of electronic music, and the melodic stylings of progressive heavy metal.</p>
                            <p>Somewhere along the way, he encountered heavy bass music via artists like Skrillex, Bassnectar, and Kill the Noise and he was hooked. Within only a few months of releasing his first dubstep remix, he had his first hit with Zedd – Clarity (Nukage Remix). It was featured on ThisSongSlaps and was listed as one of the top remixes for that song. Since then, Nukage has been turning twisting, filtered bass and meticulously crafted beats into undeniable, funky filth.</p>
                            <p>This year, Nukage has raised the bar yet again. Using his knowledge of sound design as well as guitar prowess, he created a show conceptualized to truly play his music live.  His guitar becomes a filtered, distorted ‘reese’ bass, which is then further modulated into growls, screeches, and wobbles. Audiences aren’t sure whether to dance or mosh, all the while cheering for more gurgling bass.</p>
                            <p>So get the new album now, load up the tracks, and brace yourself. Because as Kolourbridge Records once wrote, his beats are “as seismic as they are meticulously well-written.”</p>
                        </div>
                    </div>
                </section>                 
                <!-- .infoboxes -->
            </div>
            <!-- .by-overlay -->
        </div>         
        <!-- .body-wrapper -->
        <!-- Js lib -->         
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>         
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>');
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', false, null, true);

    wp_deregister_script( 'jqueryui' );
    wp_enqueue_script( 'jqueryui', get_template_directory_uri() . '/js/jquery-ui.min.js', false, null, true);

    wp_deregister_script( 'main' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

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