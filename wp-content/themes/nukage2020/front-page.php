<?php get_header( 'front-page' ); ?>

<div class="bg-overlay ">
    <section id="quick-stats" class="oswald md:text-xl">
        <div class="qs-bg">
            <div class="  px-5   pt-48 pb-32">
                <div class="container mx-auto flex  md:flex-row flex-col py-10">
                    <div class=" md:w-1/3 w-1/2 m-auto flex flex-row items-center  md:mb-0 mb-10  ">
                        <img class="mx-auto rounded-full fade-anim shadow1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/headshot-5.jpg">
                    </div>
                    <div class="md:w-2/3 w-full container flex flex-col quick-list-holder md:pl-16   items-center justify-center">
                        <div class="uppercase text-gray-500 mb-4 fade-anim">
                            <?php _e( 'ARTIST • PRODUCER • PERFORMER • DJ', 'nukage_2020' ); ?> 
                        </div>
                        <img class=" h-auto w-auto fade-anim" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nukage logo.png">
                        <div class="uppercase text-gray-500 mb-4 fade-anim raleway font-extrabold mt-3 fade-anim trans">
                            <div class="rotator inline-block trans ">
                                <div class="inline">
                                    <?php _e( 'Electronic Music Producer', 'nukage_2020' ); ?>
                                </div>
                                <div class="inline">
                                    <?php _e( 'Live Performer', 'nukage_2020' ); ?>
                                </div>
                                <div class="inline">
                                    <?php _e( 'Live DJ', 'nukage_2020' ); ?>
                                </div>
                                <div class="inline">
                                    <?php _e( 'Recording Artist', 'nukage_2020' ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="w-2/3 m-auto font-hairline">
                            <div class=" flex lg:flex-row flex-col flex-wrap p-0 text-center leading-loose xl:text-base text-sm uppercase mt-6 ">
                                <div class="lg:w-1/2 w-full p-0 mb-3 slide-in-anim ">
                                    <span class="font-medium"><?php _e( 'GENRES:', 'nukage_2020' ); ?></span> 
                                    <br class="lg:inline hidden">
                                    <?php _e( 'Dubstep, Future Bass, Trap', 'nukage_2020' ); ?>
                                </div>
                                <div class="lg:w-1/2 w-full p-0 mb-3 slide-in-anim">
                                    <span class="font-medium"><?php _e( 'SUPPORT FROM:', 'nukage_2020' ); ?></span> 
                                    <br class="lg:inline hidden">
                                    <?php _e( 'Ill Gates, KJ Sawka, Architekt', 'nukage_2020' ); ?>
                                </div>
                                <div class="lg:w-1/2 w-full p-0 mb-3 slide-in-anim">
                                    <span class="font-medium"><?php _e( 'PERFOMANCE STYLE:', 'nukage_2020' ); ?> </span>
                                    <br class="lg:inline hidden">
                                    <?php _e( 'Live PA or DJ Set', 'nukage_2020' ); ?>
                                </div>
                                <div class="lg:w-1/2 w-full p-0 mb-3 slide-in-anim">
                                    <span class="font-medium"><?php _e( '5 DIFFERENT', 'nukage_2020' ); ?> </span>
                                    <br class="lg:inline hidden">
                                    <?php _e( 'BEATPORT CHARTING RELEASES', 'nukage_2020' ); ?> 
                                </div>
                            </div>
                        </div>
                        <!-- <div class="w-full">
                    <h3 class="qs-title oswald font-black  ">Quick Stats</h3>
                </div>
                <div class="sm:w-1/2 w-full font-hairline    ">
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
                <div class="w-full media-notables">
                    <ul>
                        <li>
                            <span>MEDIA NOTABLES:</span>
                            <br>
                            <a href="#">EDM Artist Organizes NYC Electronic Music Community (Interview)</a>
                            |
                            <a href="#">Demien Sixx &
                            Nukage Release Latest Original – “Maximum Overdrive”</a> |
                            <a href="#">Your
                            EDM Premiere:
                            Archtekt & Nukage - Black Mass</a>
                        </li>
                    </ul>
                </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="bio" class="">
        <div class="bio-bg  gray-txt-1 font-medium ">
            <div class="bio-overlay   pt-32 pb-32">
                <div class="container mx-auto">
                    <h3 class="section-title "><?php _e( 'Bio', 'nukage_2020' ); ?></h3>
                    <div class="header-strips-1"></div>
                    <div class="accordion p-3  ">
                        <?php  
            if (have_rows('flex1')) :
            while ( have_rows('flex1') ) : 
            the_row(); if( get_row_layout() == 'accordion_group' ): 
            if( have_rows('accordion') ):                                                                     
            while ( have_rows('accordion') ) : 
            the_row();
             ?>
                        <h3 class="accordian-h3 gray-txt-2 container "><?php echo get_sub_field('title'); ?></h3>
                        <div class="accordian-body container ">
                            <?php echo get_sub_field('body') ?>
                        </div>
                        <?php 

            endwhile; 
            endif; 
            endif;
            endwhile;
            endif;

             ?>
                    </div>
                    <!-- .accordion -->
                </div>
            </div>
        </div>
    </section>
    <!-- #bio -->
    <section id="gallery">
        <div class="photos-bg">
            <div class="photos-overlay pt-32 pb-24 ">
                <div class="container mx-auto">
                    <h3 class="section-title"><?php _e( 'Photo Gallery', 'nukage_2020' ); ?></h3>
                    <div class="header-strips-1"></div>
                    <div class="button-group filter-button-group oswald uppercase mx-auto inline-block text-center">
                        <button data-filter="*" class="btn  ">
                            <?php _e( 'Show', 'nukage_2020' ); ?>
                            <?php _e( 'all', 'nukage_2020' ); ?>
                        </button>
                        <button data-filter=".headshot" class="btn  ">
                            <?php _e( 'headshot', 'nukage_2020' ); ?>
                        </button>
                        <button data-filter=".live" class="btn">
                            <?php _e( 'live', 'nukage_2020' ); ?>
                        </button>
                        <button data-filter=".press" class="btn">
                            <?php _e( 'press', 'nukage_2020' ); ?>
                        </button>
                    </div>
                </div>
            <div class="grid flex flex-row flex-wrap justify-center   mx-auto pb-32 ">
                    <?php
                        if(have_rows('gallery')) :
                        while( have_rows('gallery') ): the_row();
                        $image = get_sub_field('image');
                        $caption = get_sub_field('caption');
                        $category = get_sub_field('category');
                        $class = ' element-item ' . $category ;
                        $thumb_image = wp_get_attachment_image($image, 'gallery_thumb', " " , array(
                        "draggable" => "false", "class" => "gallery-img" ) );
                        $full_image_url = wp_get_attachment_image_src($image, 'full' , false, '' );
                    ?>
                    <div class="<?php echo $class ?>">
                        <a href="<?php echo esc_url( $full_image_url[0] ); ?>" data-fancybox="images"> <?php echo  $thumb_image  ?></a>
                    </div>
                <?php endwhile;

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           endif;
                ?>
                </div>
            </div>
        </div>
    </section>
    <section id="videos">
        <div class="videos-bg">
            <div class="videos-overlay  pt-32 pb-24">
                <div class="container mx-auto ">
                    <h3 class="section-title "><?php _e( 'Videos', 'nukage_2020' ); ?></h3>
                    <div class="header-strips-1"></div>
                <div class="video-block flex flex-row flex-wrap w-full">
                        <?php
                            if(have_rows('video_gallery')) :
                            while( have_rows('video_gallery') ): the_row();
                            $image = get_sub_field('placeholder_image');
                            $caption = get_sub_field('video_caption');
                            $thumb_image = wp_get_attachment_image($image, 'gallery_thumb', " " , array(
                            "draggable" => "false" ) );
                            $full_image_url = wp_get_attachment_image_src($image, 'full' , false, '' );
                            $link = get_sub_field('video');
                        ?>
                        <div class="video-col ">
                            <img class="play-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/play-icon.svg" alt="">
                            <a class="" href="<?php echo esc_url( $link ); ?>" data-fancybox="video"> <?php echo  $thumb_image ?></a>
                            <p class="text-center mt-3 oswald uppercase text-sm"><?php echo $caption ?></p>
                        </div>
                    <?php endwhile;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="music">
        <div class="music-bg">
            <div class="music-overlay pt-32 pb-24">
                <div class="container mx-auto ">
                    <h3 class="section-title  "><?php _e( 'Music', 'nukage_2020' ); ?></h3>
                    <div class="header-strips-1"></div>
                    <div class="flex flex-col md:flex-row  md:flex-wrap justify-center pb-24 ">
                        <div class="w-full md:w-1/2 lg:w-1/3 p-10 ">
                            <iframe width="100%" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/346239864%3Fsecret_token%3Ds-yavhv&color=%23de225c&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 p-10"> 
                            <iframe width="100%" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/631193934&color=%23de225c&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 p-10 ">
                            <iframe width="100%" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/521934486&color=%23de225c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="press">
        <div class="press-bg">
            <div class="press-overlay pt-32 pb-24">
                <div class="container mx-auto">
                    <h3 class="section-title  "><?php _e( 'Press &amp; Features', 'nukage_2020' ); ?></h3>
                    <div class="header-strips-1"></div>
                    <div class="press flex flex-row flex-wrap justify-center pb-24">
                        <?php if ( have_rows('news_items') ) : while( have_rows('news_items') ) : the_row()                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ?>
                            <div class="press-item   ">
                                <div class="inner ">
                                    <h4 class="press-quote gray-txt-2"><?php echo get_sub_field('quote') ?></h4>
                                    <a class="press-link text-risered_1 oswald font-bold italic hover:underline" href="<?php echo esc_url( get_sub_field('news_link') ); ?>" target="_blank"><?php echo get_sub_field('news_source') ?></a>
                                </div>
                            </div>
                        <?php endwhile;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="logos">
        <h3 class="section-title ">Logos &amp; Banners</h3>
    </section> -->
    <section id="contact">
        <div class="contact-bg ">
            <div class="contact-overlay pt-16 pb-32">
                <h3 class="section-title   pt-24"><?php _e( 'Contact', 'nukage_2020' ); ?></h3>
                <div class="header-strips-1"></div>
                <div class="container mx-auto flex md:flex-row flex-col max-w-5xl pb-24">
                    <!-- <div class="p-1 md:w-1/2 w-full flex-grow flex flex-col hidden ">
                        <h4 class="contact-title  leading-loose text-2xl text-center font-hairline uppercase py-2 border border-blue-500 rounded-t-lg text-blue-500 ">Producer <i class="fas fa-circle "></i> Performer <i class="fas fa-circle"></i> DJ <i class="fas fa-circle"></i> Guitarist</h4>
                        <div class="flex flex-row flex-wrap  oswald leading-loose font-hairline border border-blue-500 flex-grow ">
                            <div class=" md:w-1/2 w-full flex items-center  ">
                                <img class="mx-auto p-5 md:block hidden" src="images/Nukage-Headshot.png">
                            </div>
                            <div class=" md:w-1/2 w-full   p-3 mb-3 md:text-left text-center "> I am inspired by producing meaningful content; making deep connections and helping others achieve their own level of personal greatness via my music, session singing services and various entrepreneurial endeavors. </div>
                            <div class="w-full text-center">Feel free to reach out to me any time! I'd love to hear from you :)</div>
                        </div>
                    </div> -->
                    <div class="p-1  w-full px-5 oswald uppercase">
                        <div style="border border-gray-200 rounded-lg">
                            <div class="wpcf7   pr-4">
                                <?php echo do_shortcode('[contact-form-7 id="62" title="Contact form 1"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>                

<?php get_footer( 'front-page' ); ?>