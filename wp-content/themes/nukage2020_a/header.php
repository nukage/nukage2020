<!DOCTYPE html>
<!--  Converted from HTML to WordPress with Pinegrow Web Editor. https://pinegrow.com  -->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- font awesome code kit -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta content="Pinegrow Web Editor" name="generator">
        <?php wp_head(); ?>
    </head>
    <?php
        $headershow = 1 ; 
        
        if (get_field('hide_header') == true ) {
            $headershow = 0 ;
        };
        if (get_post_type() == 'music') {
            $headershow = 0 ;
        };
    ?>
    <body class="s1 raleway text-white <?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <?php
            if ( $headershow == 1 )  :     
        ?>
        <div class="navbar w-full fixed z-10 ">
            <div class="nav-main-menu bg-black">
                <div class="container mx-auto sm:h-24 h-16 px-5  flex flex-row  justify-between items-center ">
                    <a href="#quick-stats" class="filter-gray flex-row flex items-end"> <img class=" sm:h-12 h-6" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nukage logo.png"> <!-- <span class="oswald font-black flex-grow ml-4 text-2xl text-risered_1 ital">EPK</span>  --> </a>
                    <div class="">
                        <a href="#" class="sign-up-nav-link text-risered border border-risered uppercase p-2 rounded-lg hover:bg-risered hover:text-black oswald "><?php _e( 'Sign Up', 'nukage2020_a' ); ?> <span class="md:inline hidden "><?php _e( 'For Updates', 'nukage2020_a' ); ?></span></a>
                    </div>
                </div>
            </div>
            <div class="bg-trans-bk">
                <div class="nav-sub-menu container mx-auto md:h-8 px-5 py-3  flex flex-row  justify-between items-center oswald uppercase text-sm ">
                    <ul class="menu flex flex-row flex-wrap md:items-center  align-middle text-center w-full  md:justify-between justify-center ">
                        <!-- <li class="lah">
                            <a href="#quick-stats"><span class="md:inline hidden ">Quick</span> Stats</a>
                        </li> -->
                        <li class="lah">
                            <a href="#bio"><?php _e( 'Bio', 'nukage2020_a' ); ?></a>
                        </li>
                        <li class="lah">
                            <a href="#press"><?php _e( 'Press', 'nukage2020_a' ); ?> <span class="md:inline hidden "> <?php _e( '&amp; Features', 'nukage2020_a' ); ?></span></a>
                        </li>
                        <li class="lah">
                            <a href="#gallery"> <!-- <span class="md:inline hidden ">Artist</span> --> <?php _e( 'Photos', 'nukage2020_a' ); ?></a>
                        </li>
                        <li class="lah">
                            <a href="#videos"><?php _e( 'Videos', 'nukage2020_a' ); ?></a>
                        </li>
                        <li class="lah">
                            <a href="#music"><?php _e( 'Music', 'nukage2020_a' ); ?></a>
                        </li>
                        <!-- <li class="lah">
                            <a href="#logos">Logos<span class="md:inline hidden ">  &amp; Banners </span></a>
                        </li> -->
                        <li class="lah">
                            <a href="#contact"><?php _e( 'Contact', 'nukage2020_a' ); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
            endif;  
            
        ?>
        <div class="body-wrapper ">
            <div class="main-content">