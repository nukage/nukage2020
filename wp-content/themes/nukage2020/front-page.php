<?php get_header( 'front-page' ); ?>

<div class="bg-overlay ">
    <section id="quick-stats" class="px-5">
        <div class="container mx-auto flex md:flex-row flex-col py-10">
            <div class=" md:w-1/3 w-full flex items-center  ">
                <img class="mx-auto" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Nukage-Headshot.png">
            </div>
            <div class="md:w-2/3 w-full container flex flex-row quick-list-holder md:pl-16  text-lg flex-wrap ">
                <div class="w-full">
                    <h3 class="qs-title"><?php _e( 'Quick Stats', 'nukage_2020' ); ?></h3>
                </div>
                <div class="sm:w-1/2 w-full ">
                    <ul>
                        <li>
                            <span><?php _e( 'ARTIST NAME:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'Nukage', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'EMAIL:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'nukage@nukage.net', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Website:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'www.nukage.net', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Genre:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'Dubstep, Future Bass, Trap', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Shows Played:', 'nukage_2020' ); ?></span> 
                            <?php _e( '100+', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Social Links:', 'nukage_2020' ); ?></span>
                            <br> 
                            <?php _e( 'Instagram Facebook Youtube Soundcloud', 'nukage_2020' ); ?>
                        </li>
                    </ul>
                </div>
                <div class="sm:w-1/2 w-full">
                    <ul>
                        <li>
                            <span><?php _e( 'REAL NAME:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'Tom Myruski', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Website:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'www.nukage.net', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Residence:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'Brooklyn, NY', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Perfomance Style:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'Live PA or DJ Set', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Beatport Charting Releases:', 'nukage_2020' ); ?></span> 
                            <?php _e( '5', 'nukage_2020' ); ?>
                        </li>
                        <li>
                            <span><?php _e( 'Support From:', 'nukage_2020' ); ?></span> 
                            <?php _e( 'Ill Gates, KJ Sawka, Future Magic, Demien Sixx', 'nukage_2020' ); ?>
                        </li>
                    </ul>
                </div>
                <div class="w-full">
                    <ul>
                        <li>
                            <span><?php _e( 'MEDIA NOTABLES:', 'nukage_2020' ); ?></span>
                            <br>
                            <?php _e( 'EDM Artist Organizes NYC Electronic Music Community (Interview) | Demien Sixx &', 'nukage_2020' ); ?>
                            <?php _e( 'Nukage Release Latest Original – “Maximum Overdrive” | Your EDM Premiere:', 'nukage_2020' ); ?>
                            <?php _e( 'Archtekt & Nukage - Black Mass', 'nukage_2020' ); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="infoboxes">
        <div class="accordion p-3 container mx-auto">
            <?php  
            if (have_rows('flex1')) :
            while ( have_rows('flex1') ) : 
            the_row(); if( get_row_layout() == 'accordion_group' ): 
            if( have_rows('accordion') ):                                                                     
            while ( have_rows('accordion') ) : 
            the_row();
             ?>
            <h3 class="accordian-h3"><?php echo get_sub_field('title'); ?></h3>
            <div class="sm:text-xl leading-loose  p-4">
                <?php echo get_sub_field('body') ?>
            </div>
            <?php 

            endwhile; 
            endif; 
            endif;
            endwhile;
            endif;

             ?>
            <h3 class="accordian-h3"><?php _e( 'Photo Gallery', 'nukage_2020' ); ?></h3>
            <div class="gallery">
                <div class="button-group filter-button-group">
                    <button data-filter="*" class="btn">
                        <?php _e( 'Show all', 'nukage_2020' ); ?>
                    </button>
                    <button data-filter=".headshot" class="btn">
                        <?php _e( 'headshot', 'nukage_2020' ); ?>
                    </button>
                    <button data-filter=".live" class="btn">
                        <?php _e( 'live', 'nukage_2020' ); ?>
                    </button>
                    <button data-filter=".press" class="btn">
                        <?php _e( 'press', 'nukage_2020' ); ?>
                    </button>
                </div>
            <div class="grid flex flex-row flex-wrap justify-center">
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
                        <a href="<?php echo esc_url( $full_image_url[0] ); ?>" data-fancybox="images"> <?php echo $thumb_image  ?></a>
                    </div>
                <?php endwhile;

                                                                                           endif;
                ?>
                </div>
            </div>
            <h3 class="accordian-h3"><?php _e( 'Press &amp; Features', 'nukage_2020' ); ?></h3>
            <div class="press flex flex-row flex-wrap">
                <?php if ( have_rows('news_items') ) : 
                                                                                   while( have_rows('news_items') ) : the_row(); 
                ?>
                    <div class="press-item   ">
                        <div class="inner ">
                            <h4 class="press-quote"><?php echo get_sub_field('quote') ?></h4>
                            <a class="press-link italic hover:underline" href="<?php echo esc_url( get_sub_field('news_link') ); ?>" target="_blank"><?php echo get_sub_field('news_source') ?></a>
                        </div>
                    </div>
                <?php endwhile;
                                                                                   endif;
                ?>
                <div class="press-item    ">
                    <div class="inner ">
                        <h4 class="press-quote"><?php _e( '"Quote Goes Here"', 'nukage_2020' ); ?></h4>
                        <a class="press-link italic hover:underline" href="#" target="_blank"><?php _e( '- This Song Slaps', 'nukage_2020' ); ?></a>
                    </div>
                </div>
                <div class="press-item  ">
                    <div class="inner ">
                        <h4 class="press-quote"><?php _e( '"Quote Goes Here"', 'nukage_2020' ); ?></h4>
                        <a class="press-link italic hover:underline" href="#" target="_blank"><?php _e( '- This Song Slaps', 'nukage_2020' ); ?></a>
                    </div>
                </div>
            </div>
        </div>                         

        <!-- .accordion -->
        <div class="accordion p-3 container mx-auto">
            <?php  
            if (have_rows('flex1')) :
            while ( have_rows('flex1') ) : 
            the_row(); if( get_row_layout() == 'accordion_group' ): 
            if( have_rows('accordion') ):                                                                     
            while ( have_rows('accordion') ) : 
            the_row();
             ?>
            <h3 class="accordian-h3"><?php echo get_sub_field('title'); ?></h3>
            <div class="sm:text-xl leading-loose  p-4">
                <?php echo get_sub_field('body') ?>
            </div>
            <?php 

            endwhile; 
            endif; 
            endif;
            endwhile;
            endif;

             ?>
            <h3 class="accordian-h3"><?php _e( 'Photo Gallery', 'nukage_2020' ); ?></h3>
            <div class="gallery">
                <div class="button-group filter-button-group">
                    <button data-filter="*" class="btn">
                        <?php _e( 'Show all', 'nukage_2020' ); ?>
                    </button>
                    <button data-filter=".headshot" class="btn">
                        <?php _e( 'headshot', 'nukage_2020' ); ?>
                    </button>
                    <button data-filter=".live" class="btn">
                        <?php _e( 'live', 'nukage_2020' ); ?>
                    </button>
                    <button data-filter=".press" class="btn">
                        <?php _e( 'press', 'nukage_2020' ); ?>
                    </button>
                </div>
            <div class="grid flex flex-row flex-wrap justify-center">
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
                        <a href="<?php echo esc_url( $full_image_url[0] ); ?>" data-fancybox="images"> <?php echo $thumb_image  ?></a>
                    </div>
                <?php endwhile;

                                                                                           endif;
                ?>
                </div>
            </div>
            <h3 class="accordian-h3"><?php _e( 'Press &amp; Features', 'nukage_2020' ); ?></h3>
            <div class="press flex flex-row flex-wrap">
                <?php if ( have_rows('news_items') ) : 
                                                                                   while( have_rows('news_items') ) : the_row(); 
                ?>
                    <div class="press-item   ">
                        <div class="inner ">
                            <h4 class="press-quote"><?php echo get_sub_field('quote') ?></h4>
                            <a class="press-link italic hover:underline" href="<?php echo esc_url( get_sub_field('news_link') ); ?>" target="_blank"><?php echo get_sub_field('news_source') ?></a>
                        </div>
                    </div>
                <?php endwhile;
                                                                                   endif;
                ?>
                <div class="press-item    ">
                    <div class="inner ">
                        <h4 class="press-quote"><?php _e( '"Quote Goes Here"', 'nukage_2020' ); ?></h4>
                        <a class="press-link italic hover:underline" href="#" target="_blank"><?php _e( '- This Song Slaps', 'nukage_2020' ); ?></a>
                    </div>
                </div>
                <div class="press-item  ">
                    <div class="inner ">
                        <h4 class="press-quote"><?php _e( '"Quote Goes Here"', 'nukage_2020' ); ?></h4>
                        <a class="press-link italic hover:underline" href="#" target="_blank"><?php _e( '- This Song Slaps', 'nukage_2020' ); ?></a>
                    </div>
                </div>
            </div>
        </div>                         

        <!-- .accordion -->
    </section>
    <!-- .infoboxes -->
</div>                

<?php get_footer( 'front-page' ); ?>