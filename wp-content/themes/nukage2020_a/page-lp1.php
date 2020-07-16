<?php
/*
 Template Name: lp-1
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="bg-overlay ">
    <section id="quick-stats" class="oswald md:text-xl">
        <div class="qs-bg">
            <div class="  px-5  pb-32">
                <div class="container mx-auto flex flex-row   bg-white px-10  max-w-5xl">
                    <div class="w-2/3  pt-8 ">
                        <h1 class="text-4xl uppercase     leading-tight text-center font-black "><span class="text-3xl"><?php _e( 'If you\'re looking to embark on a journey, turn up the bass and JOIN us for a ride...', 'nukage2020_a' ); ?></span><br> <?php _e( '"futuristic, uplifting dubstep that is as vibrant as it is monumental. A genre-defying blitz on the head, heart and soul."', 'nukage2020_a' ); ?></h1>
                        <h2 class="text-black text-center mt-3 mb-5 text-2xl"><?php _e( 'DOWNLOAD HIS LATEST REMIX OF ARMNHMR FOR FREE NOW!', 'nukage2020_a' ); ?></h2>
                        <div class="flex flex-row">
                            <div class="w-1/2  fade-anim pr-5">
                                <img class=" " src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hs4-cropped.jpg">
                            </div>
                            <div class="w-1/2 text-black text-md uppercase">
                                <?php _e( 'This Song Slaps - “Mind-blowing… monstrous and speaker-crushing“', 'nukage2020_a' ); ?> 
                                <div class="h-3"> </div>
                                <?php _e( 'Kolourbridge - “Nukage drops a collection of beats that are as seismic as they are meticulously well-written.”', 'nukage2020_a' ); ?> 
                                <div class="h-3"> </div>
                                <?php _e( 'Your EDM - “Gnarly basslines suitable for actual warfare…this should be able to elicit more than just a little headbanging”', 'nukage2020_a' ); ?>
                                <div class="h-3"> </div>
                                <!--                                                 
                                EDM Sauce - “A genre-defying ballistic blitz on the head, heart, and soul. You might even call the experience religious.”
                                <div class="h-3"> </div> -->
                            </div>
                        </div>
                        <div class="text-black raleway text-base mt-5">
                            <p class=" leading-snug"><?php _e( 'Inspired from a young age by the sounds of synthesizers and the "wall of sound" of post-hardcore, Tom Myruski aka Nukage, set out to create a unique sound combining two things: the complex beats &amp; hugely thick synths of dubstep, and the melodic stylings of progressive rock and post-hardcore.', 'nukage2020_a' ); ?></p>
                            <p class=" leading-snug"><?php _e( 'Somewhere along the way, he encountered dubstep  via artists like Skrillex, Bassnectar, and Kill the Noise and he was hooked. Within only a few months of releasing his first dubstep remix, he had his first hit with Zedd – Clarity (Nukage Remix). It was featured on ThisSongSlaps and was listed as one of the top remixes for that song. Since then, Nukage has been turning twisting, filtered bass and meticulously crafted beats into undeniable, funky filth.', 'nukage2020_a' ); ?></p> 
                            <p class=" leading-snug"><?php _e( 'For a limited time, we are giving away the latest single, a remix of melodic dubstep legends ARMNHMR. Just enter your name and email address in the right hand side of this site and you will be immediately sent the download link.', 'nukage2020_a' ); ?> </p>
                            <p class=" leading-snug"><?php _e( 'So enter your name and address now now, and brace yourself. Because as EDM Sauce recently wrote, his music is “a genre-defying ballistic blitz on the head, heart, and soul.”', 'nukage2020_a' ); ?></p>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SupportFrom.png">
                        </div>
                    </div>
                    <div class="w-1/3">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/arrow-basic.webp" alt="">
                    </div>
                </div>
                <div class="container mx-auto flex    flex-col py-10 hidden">
                    <div class=" md:w-1/3 w-1/2 m-auto flex flex-row items-center  mb-10   ">
                        <img class="mx-auto rounded-full fade-anim shadow1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/headshot-5.jpg">
                    </div>
                    <div class=" w-full container flex flex-col quick-list-holder    items-center justify-center">
                        <div class="uppercase text-gray-500 mb-4 fade-anim">
                            <?php _e( 'ARTIST • PRODUCER • PERFORMER •', 'nukage2020_a' ); ?>
                            <?php _e( 'DJ', 'nukage2020_a' ); ?> 
                        </div>
                        <img class=" h-auto w-auto fade-anim" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nukage logo.png">
                        <div class="uppercase text-gray-500 mb-4 fade-anim raleway font-extrabold mt-3 fade-anim trans">
                            <div class="rotator inline-block trans ">
                                <div class="inline">
                                    <?php _e( 'Electronic Music Producer', 'nukage2020_a' ); ?>
                                </div>
                                <!-- <div class="inline">Live Performer</div>
                                <div class="inline">Live DJ</div>
                                <div class="inline">Recording Artist</div>
                                <div class="inline">Multi-Instrumentalist</div> -->
                            </div>
                        </div>
                        <div class="max-w-lg">
                            <?php
                                if ( have_rows('links') ) : 
                                    while( have_rows('links') ) : the_row(); 
                            ?>
                            <a href="<?php echo   the_sub_field('link_url');  ?>" class=" block font-hairline text-center mb-5 bg-black w-full  border border-risered uppercase p-2 rounded-lg hover:bg-risered hover:text-black oswald  <?php echo   the_sub_field('class');  ?>"><?php echo   the_sub_field('link_title');  ?></a>
                            <?php
                                endwhile; 
                                endif; 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #bio -->
</div>                

<?php get_footer(); ?>