<?php
/*
 Template Name: hello
 Template Post Type: page
*/
?>
<?php get_header( 'page-hello' ); ?>

<div class="bg-overlay ">
    <section id="quick-stats" class="oswald md:text-xl">
        <div class="qs-bg">
            <div class="  px-5   pt-8 pb-32">
                <div class="container mx-auto flex    flex-col py-10">
                    <div class=" md:w-1/3 w-1/2 m-auto flex flex-row items-center  mb-10  ">
                        <img class="mx-auto rounded-full fade-anim shadow1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/headshot-5.jpg">
                    </div>
                    <div class=" w-full container flex flex-col quick-list-holder    items-center justify-center">
                        <div class="uppercase text-gray-500 mb-4 fade-anim">
                            <?php _e( 'ARTIST • PRODUCER • PERFORMER •', 'nukage2020' ); ?>
                            <?php _e( 'DJ', 'nukage2020' ); ?> 
                        </div>
                        <img class=" h-auto w-auto fade-anim" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nukage logo.png">
                        <div class="uppercase text-gray-500 mb-4 fade-anim raleway font-extrabold mt-3 fade-anim trans">
                            <div class="rotator inline-block trans ">
                                <div class="inline">
                                    <?php _e( 'Electronic Music Producer', 'nukage2020' ); ?>
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

<?php get_footer( 'page-hello' ); ?>