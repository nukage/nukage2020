<?php
/*
 Template Name: music
 Template Post Type: music
*/
?>
<?php get_header(); ?>

<div class="body-wrapper">
    <div class="main-content">
        <div class="bg-albumart bg-cover bg-black h-full">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Cats_cover.jpg" class="filter-blur w-full fixed z-0 opacity-50  object-cover h-full">
            <div class="h-20"></div>
            <div class="links-content bg-white mx-auto  opacity-100 z-10 relative max-w-md ">
                <img class="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Cats_cover.jpg">
                <div class=" p-1">
                    <div class="text-center uppercase ">
                        <h1 class="text-3xl text-black"><?php _e( 'Carve Away the Sky', 'nukage2020' ); ?></h1>
                        <h2 class="text-xl text-black"><?php _e( 'by Nukage', 'nukage2020' ); ?></h2>
                    </div>
                    <h3 class="rounded bg-black p-2 text-white mt-4"><?php _e( 'Add to Playlist/Library', 'nukage2020' ); ?></h3>
                    <h3 class="rounded bg-black p-2 text-white mt-4"><?php _e( 'Listen/Buy', 'nukage2020' ); ?></h3>
                    <div class="the-links">
                        <ul>
                            <li class="flex flex-row justify-between my-2 py-3 border-solid border-b border-gray  ">
                                <div class=" ml-2  oswald text-3xl text-red-500 font-black">
                                    <?php _e( 'FREE DOWNLOAD', 'nukage2020' ); ?>
                                </div>
                                <div id="email-download-togg" class=" trans opacity-100 h-8 px-2 py-1 bg-black rounded-lg text-white uppercase hover:bg-risered trans cursor-pointer  ">
                                    <?php _e( 'DOWNLOAD', 'nukage2020' ); ?> 
                                    <svg class="inline fa-play-circle w-4" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                    </svg>
                                </div>
                            </li>
                            <div id="download-box" class="download-box-hidden">
                                <!-- Begin Mailchimp Signup Form -->
                                <!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"> -->
                                <div id="mc_embed_signup">
                                    <form action="https://nukagemusic.us17.list-manage.com/subscribe/post?u=748d58fe44a6b6eb6bba2b7ae&amp;id=9ce2d4839d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate w-3/4 m-auto" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div class="indicates-required">
                                                <span class="asterisk">*</span> 
                                                <?php _e( 'indicates required', 'nukage2020' ); ?>
                                            </div>
                                            <div class="mc-field-group">
                                                <input type="email" value="" name="EMAIL" class="required email border border-gray-600  my-2 p-2 w-full bg-transparent text-white uppercase " id="mce-EMAIL" placeholder="Email *">
                                            </div>
                                            <div class="mc-field-group">
                                                <input type="text" value="" name="FNAME" class="border border-gray-600  my-2 p-2 w-full bg-transparent text-white uppercase" id="mce-FNAME" placeholder="First Name">
                                            </div>
                                            <div class="mc-field-group">
                                                <input type="text" value="" name="LNAME" class=" border border-gray-600  my-2 p-2 w-full bg-transparent text-white uppercase" id="mce-LNAME" placeholder="Last Name">
                                            </div>
                                            <div id="mce-responses" class="clear">
                                                <div class="response" id="mce-error-response" style="display:none"></div>
                                                <div class="response" id="mce-success-response" style="display:none"></div>
                                            </div>                                                     
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                <input type="text" name="b_748d58fe44a6b6eb6bba2b7ae_9ce2d4839d" tabindex="-1" value="">
                                            </div>
                                            <div class="clear">
                                                <input type="submit" value="GET DOWNLOAD" name="subscribe" id="mc-embedded-subscribe" class="button w-full border border-risered my-1 p-2 bg-transparent text-white uppercase text-risered hover:text-black hover:bg-risered cursor-pointer trans">
                                            </div>
                                        </div>
                                    </form>
                                </div>                                         
                                <!--End mc_embed_signup-->
                            </div>
                            <li class="flex flex-row justify-between my-2 py-3 border-solid border-b border-gray  ">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/spotify.svg" alt="" class="w-1/3 ml-2 h-10"> 
                                <div class="h-8 px-2 py-1 bg-black rounded-lg text-white uppercase hover:bg-risered trans cursor-pointer  ">
                                    <?php _e( 'Stream', 'nukage2020' ); ?> 
                                    <svg class="inline fa-play-circle w-4" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                    </svg>
                                </div>
                            </li>
                            <li class="flex flex-row justify-between my-2 py-3 border-solid border-b border-gray   ">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/youtube.png" alt="" class="w-1/3 ml-2 h-10"> 
                                <div class="h-8 px-2 py-1 bg-black rounded-lg text-white uppercase hover:bg-risered trans cursor-pointer ">
                                    <?php _e( 'Stream', 'nukage2020' ); ?> 
                                    <svg class="inline fa-play-circle w-4" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                    </svg>
                                </div>
                            </li>
                            <li class="flex flex-row justify-between my-2 py-3 border-solid border-b border-gray   ">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soundcloud.png" alt="" class="w-1/3 ml-2 h-10"> 
                                <div class="h-8 px-2 py-1 bg-black rounded-lg text-white uppercase hover:bg-risered trans cursor-pointer ">
                                    <?php _e( 'Stream', 'nukage2020' ); ?> 
                                    <svg class="inline fa-play-circle w-4" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                    </svg>
                                </div>
                            </li>
                            <li class="flex flex-row justify-between my-2 py-3 border-solid border-b border-gray   ">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/applemusic.svg" alt="" class="w-1/3 ml-2 h-10"> 
                                <div class="h-8 px-2 py-1 bg-black rounded-lg text-white uppercase hover:bg-risered trans cursor-pointer ">
                                    <?php _e( 'Stream', 'nukage2020' ); ?> 
                                    <svg class="inline fa-play-circle w-4" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                    </svg>
                                </div>
                            </li>
                            <li class="flex flex-row justify-between my-2 py-3 border-solid border-b border-gray   ">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/itunes.svg" alt="" class="w-1/3 ml-2 h-10"> 
                                <div class="h-8 px-2 py-1 bg-black rounded-lg text-white uppercase hover:bg-risered trans cursor-pointer ">
                                    <?php _e( 'Buy', 'nukage2020' ); ?> 
                                    <svg class="inline fa-play-circle w-4" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                    </svg>
                                </div>
                            </li>
                            <li class="flex flex-row justify-between my-2 py-3 border-solid border-b border-gray   ">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/google.svg" alt="" class="w-1/3 ml-2 h-10"> 
                                <div class="h-8 px-2 py-1 bg-black rounded-lg text-white uppercase hover:bg-risered trans cursor-pointer ">
                                    <?php _e( 'Stream', 'nukage2020' ); ?> 
                                    <svg class="inline fa-play-circle w-4" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                    </svg>
                                </div>
                            </li>
                            <li class="flex flex-row justify-between my-2 py-3 border-solid border-b border-gray   ">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/deezer.svg" alt="" class="w-1/3 ml-2 h-6"> 
                                <div class="h-8 px-2 py-1 bg-black rounded-lg text-white uppercase hover:bg-risered trans cursor-pointer ">
                                    <?php _e( 'Stream', 'nukage2020' ); ?> 
                                    <svg class="inline fa-play-circle w-4" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                    </svg>
                                </div>
                            </li>
                            <li class="flex flex-row justify-between my-2 py-3 border-solid border-b border-gray   ">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tidal.svg" alt="" class="w-1/3 ml-2 h-10"> 
                                <div class="h-8 px-2 py-1 bg-black rounded-lg text-white uppercase hover:bg-risered trans cursor-pointer ">
                                    <?php _e( 'Stream', 'nukage2020' ); ?> 
                                    <svg class="inline fa-play-circle w-4" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                    </svg>
                                </div>
                            </li>
                            <li class="flex flex-row justify-between my-2 py-3 border-solid border-b border-gray   ">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/napster.svg" alt="" class="w-1/3 ml-2 h-10"> 
                                <div class="h-8 px-2 py-1 bg-black rounded-lg text-white uppercase hover:bg-risered trans cursor-pointer ">
                                    <?php _e( 'Stream', 'nukage2020' ); ?> 
                                    <svg class="inline fa-play-circle w-4" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                    </svg>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>                         
            </div>                     

            <div class="h-20"></div>
        </div>
    </div>
    <div class="footer-push"></div>
</div>
<footer class="z-10 bg-black  relative">
    <div class="container mx-auto flex flex-row items-center h-full p-5 align-middle justify-center text-gray-700 text-xs ">
        <?php _e( '&copy; Copyright 2020 Nukage', 'nukage2020' ); ?>
    </div>
</footer>        

<?php get_footer(); ?>