<?php
/*
 Template Name: landing-01
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="bg-albumart bg-cover bg-black h-full">
    <?php echo PG_Image::getPostImage( null, 'full', array(
            'class' => 'filter-blur w-full fixed z-0 opacity-50  object-cover h-full'
    ), 'both', null ) ?>
    <div class="h-20"></div>
    <div class="links-content bg-white mx-auto  opacity-100 z-10 relative max-w-md ">
        <?php echo PG_Image::getPostImage( null, 'full', array(
                'class' => ''
        ), 'both', null ) ?>
        <div class=" p-1">
            <div class="text-center uppercase ">
                <h1 class="text-3xl text-black"><?php the_title(); ?></h1>
                <h2 class="text-xl text-black"><?php echo the_field('by_line') ?></h2>
            </div>
                <div class="the-links">
                <?php if ( have_rows('repeater') ) :  while( have_rows('repeater') ) : the_row();   ?>
                    <h3 class="rounded bg-black p-2 text-white mt-4"><?php echo the_sub_field('header');  ?></h3>
                    <ul> 
                        <li class="flex flex-row justify-between my-2 py-3 border-solid border-b border-gray   ">
                            <div class=" ml-2  oswald font-black w-full ml-2 h-10">
                                <div class="">
                                    <?php echo the_sub_field('text');  ?>
                                </div>
                                <?php  if ( get_sub_field('btn_text') ) :  ?>
                                <div class="h-8 px-2 py-1 bg-black rounded-lg text-white uppercase hover:bg-risered trans cursor-pointer " href="<?php echo the_sub_field('btn_link');  ?>">
                                    <?php echo the_sub_field('btn_text');  ?>
                                </div>
                                <?php  endif; ?>
                                <?php  if ( get_sub_field('email_form') ) :  ?>
                                <div>
                                    <?php echo the_sub_field('email_form');  ?>
                                </div>
                                <?php  endif; ?>
                            </div>
                        </li>
                    </ul>
                    <?php


                    endwhile;  endif;  ?>
                    <ul>                                          
                        <div id="download-box" class="download-box-hidden">
                            <div id="dl-contact-form">
                                <?php echo the_field('download_form') ?>
                            </div>
                            <!-- Begin Mailchimp Signup Form -->
                            <!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"> -->                                             
                            <!--End mc_embed_signup-->
                        </div>
                        <?php
                            if ( have_rows('links') ) :
                             while( have_rows('links') ) : the_row();

                             if ( get_sub_field('logo')  === 'spotify' ) : 
                             $logo = get_template_directory_uri() . '/images/spotify.svg';
                             elseif ( get_sub_field('logo')  === 'itunes' )  :
                             $logo = get_template_directory_uri() . '/images/itunes.svg';
                             elseif ( get_sub_field('logo')  === 'soundcloud' )  :
                             $logo = get_template_directory_uri() . '/images/soundcloud.png';
                             elseif ( get_sub_field('logo')  === 'youtube' )  :
                             $logo = get_template_directory_uri() . '/images/youtube.png';
                             endif;

                             $icon = '<svg class="inline fa-play-circle w-4" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                            </svg>';
                             if ( get_sub_field('button_text')  === 'stream' ) :    

                             $icon = '<svg class="inline fa-play-circle w-4" aria-hidden="true" data-prefix="fas" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                            </svg>';
                            elseif ( get_sub_field('button_text')  === 'buy' ) :    

                            $icon = '<svg class="inline fa-download w-4" aria-hidden="true" data-prefix="fas" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg>';
                            endif;

                        ?>
                        <li class="flex flex-row justify-between my-2 py-3 border-solid border-b border-gray  ">
                            <img src="<?php echo $logo ?>" alt="" class="w-1/3 ml-2 h-10"> 
                            <a href="<?php echo the_sub_field('link') ?>" class="h-8 px-2 py-1 bg-black rounded-lg text-white uppercase hover:bg-risered trans cursor-pointer  "> <?php echo the_sub_field('button_text') ?> <?php echo $icon ?> </a>
                        </li>
                        <?php
                            endwhile;
                            endif; 
                        ?>                                                                                                                                                                                                                                                                                                                                         
                    </ul>
            </div>
        </div>                         
    </div>                     
    <div class="h-20"></div>
</div>                

<?php get_footer(); ?>