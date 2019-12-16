<?php get_header(); ?>

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
                            <?php _e( 'EDM Artist Organizes NYC Electronic Music Community (Interview) | Demien Sixx & Nukage Release Latest Original – “Maximum Overdrive” | Your EDM Premiere: Archtekt & Nukage - Black Mass', 'nukage_2020' ); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php if ( have_rows('flex1') ) : ?>
        <section id="infoboxes">
            <div class="accordion p-5 container mx-auto">
                <?php  
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

         ?>
                <?php                                                 

                elseif( get_row_layout() == 'gallery' ):               

                $images = get_field('gallery');
                $size = 'full'; // (thumbnail,medium, large, full or custom size)    


                if( $images ):  



                        ?>
                <h3 class="accordian-h3"><?php _e( 'Gallery', 'nukage_2020' ); ?></h3>
                <?php 

        foreach( $images as $image_id ): ?>
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
                        <div class="element-item headshot">
                            <a href="images/gallery/MP303054_md.jpg" data-fancybox="images"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/MP303054_md.jpg" alt=""></a>
                        </div>
                        <div class="element-item live">
                            <a href="images/gallery/MP303051_md.jpg" data-fancybox="images"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/MP303051_md.jpg" alt=""></a>
                        </div>
                        <div class="element-item headshot">
                            <a href="images/gallery/MP303052_md.jpg" data-fancybox="images"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/MP303052_md.jpg" alt=""></a>
                        </div>
                        <div class="element-item live">
                            <a href="images/gallery/MP303053_md.jpg" data-fancybox="images"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/MP303053_md.jpg" alt=""></a>
                        </div>
                        <div class="element-item press">
                            <a href="images/gallery/MP303054_md.jpg" data-fancybox="images"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/MP303054_md.jpg" alt=""></a>
                        </div>
                        <div class="element-item live">
                            <a href="images/gallery/MP303055_md.jpg" data-fancybox="images"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/MP303055_md.jpg" alt=""></a>
                        </div>
                        <div class="element-item press">
                            <a href="images/gallery/MP303056_md.jpg" data-fancybox="images"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/MP303056_md.jpg" alt=""></a>
                        </div>
                        <div class="element-item live">
                            <a href="images/gallery/MP303057_md.jpg" data-fancybox="images"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/MP303057_md.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <?php  
        endforeach;

        endif;
        endif;
         ?>
            </div>
            <?php   endwhile ;  ?>
        </section>
    <?php endif; ?> 
    <!-- .infoboxes -->
</div>                    

<?php get_footer(); ?>