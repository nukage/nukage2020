<?php get_header(); ?>

<div class="navbar w-full fixed">
    <div class="container mx-auto h-20 px-5  flex flex-row   justify-between items-center">
        <div>
            <img class=" sm:h-10 h-6" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nukage logo.png">
        </div>
        <div class="">
            <a href="#" class="sign-up-nav-link uppercase p-2 rounded-lg"><?php _e( 'Sign Up', 'nukage_2020' ); ?> <span class="md:inline hidden "><?php _e( 'For Updates', 'nukage_2020' ); ?></span></a>
        </div>
    </div>
</div>
<div class="body-wrapper pt-20">
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
        <section id="infoboxes">
            <div class="accordion p-5 container mx-auto">
                <h3 class="accordian-h3"><?php _e( 'Short Bio', 'nukage_2020' ); ?></h3>
                <div class="sm:text-xl leading-loose  p-4     ">
                    <p><?php _e( 'This year, Nukage has raised the bar yet again. Using his knowledge of sound design as well as guitar prowess, he created a show conceptualized to truly play his music live.  His guitar becomes a filtered, distorted ‘reese’ bass, which is then further modulated into growls, screeches, and wobbles. Audiences aren’t sure whether to dance or mosh, all the while cheering for more gurgling bass.', 'nukage_2020' ); ?></p>
                </div>
                <h3 class="accordian-h3"><?php _e( 'Long Bio', 'nukage_2020' ); ?></h3>
                <div class="sm:text-xl leading-loose p-4  ">
                    <p> <?php _e( 'Inspired from a young age by the sounds of synthesizers and heavy metal guitars, Tom Myruski aka Nukage, set out to create a unique sound combining two things: the incredibly complex beats of electronic music, and the melodic stylings of progressive heavy metal.', 'nukage_2020' ); ?></p>
                    <p><?php _e( 'Somewhere along the way, he encountered heavy bass music via artists like Skrillex, Bassnectar, and Kill the Noise and he was hooked. Within only a few months of releasing his first dubstep remix, he had his first hit with Zedd – Clarity (Nukage Remix). It was featured on ThisSongSlaps and was listed as one of the top remixes for that song. Since then, Nukage has been turning twisting, filtered bass and meticulously crafted beats into undeniable, funky filth.', 'nukage_2020' ); ?></p>
                    <p><?php _e( 'This year, Nukage has raised the bar yet again. Using his knowledge of sound design as well as guitar prowess, he created a show conceptualized to truly play his music live.  His guitar becomes a filtered, distorted ‘reese’ bass, which is then further modulated into growls, screeches, and wobbles. Audiences aren’t sure whether to dance or mosh, all the while cheering for more gurgling bass.', 'nukage_2020' ); ?></p>
                    <p><?php _e( 'So get the new album now, load up the tracks, and brace yourself. Because as Kolourbridge Records once wrote, his beats are “as seismic as they are meticulously well-written.”', 'nukage_2020' ); ?></p>
                </div>
            </div>
        </section>                 
        <!-- .infoboxes -->
    </div>
    <!-- .by-overlay -->
</div>        

<?php get_footer(); ?>