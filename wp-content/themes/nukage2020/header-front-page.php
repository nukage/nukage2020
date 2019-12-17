<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="s1 oswald text-white <?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <div class="navbar w-full fixed">
            <div class="container mx-auto h-20 px-5  flex flex-row   justify-between items-center">
                <div>
                    <img class=" sm:h-10 h-6" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nukage logo.png">
                </div>
                <div class="">
                    <a href="#" class="sign-up-nav-link uppercase p-2 rounded-lg hover:bg-risered hover:text-black "><?php _e( 'Sign Up', 'nukage_2020' ); ?> <span class="md:inline hidden "><?php _e( 'For Updates', 'nukage_2020' ); ?></span></a>
                </div>
            </div>
        </div>
        <div class="body-wrapper pt-20">
            <div class="main-content">