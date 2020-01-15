
            </div>
            <!-- .by-overlay -->
            <div class="footer-push"></div>
        </div>
        <!-- .body-wrapper -->
        <div class="modal-mc-bg fixed h-full w-full       left-0 top-0    justify-center  items-center ">
            <div class="container h-full w-full flex flex-col items-center justify-center mx-auto  ">
                <div class="modal-mc max-w-lg lg:1/2 md:w-3/4 w-5/6 text-white bg-black bg-rounded-lg border border-gray-600 rounded-lg  text-center  uppercase oswald py-8  ">
                    <div class="modal-close">
                        <img src="https://singstreet.com/wp-content/themes/singstreet-v1/_images/close_icon.png" alt="" class="image-2 cursor-pointer absolute top-0 right-0 w-3 m-3 hover:opacity-25 trans">
                    </div>
                    <h3 class="text-3xl uppercase font-black   text-center  "><?php _e( 'Sign Up', 'nukage_2020' ); ?></h3> 
                    <!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form class="validate w-3/4 m-auto" action="https://nukage.us3.list-manage.com/subscribe/post?u=4c766702504e58545dacbb076&amp;id=7e4e3aa0cb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="indicates-required my-1">
                                    <span class="asterisk">*</span> 
                                    <?php _e( 'indicates required', 'nukage_2020' ); ?>
                                </div>
                                <div class="mc-field-group">
                                    <!-- <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                            </label> -->
                                    <input type="email" value="" name="EMAIL" class="required email border border-gray-600  my-2 p-2 w-full bg-transparent text-white uppercase " id="mce-EMAIL" placeholder="Email *">
                                </div>
                                <div class="mc-field-group">
                                    <!-- <label for="mce-FNAME">First Name </label> -->
                                    <input type="text" value="" name="FNAME" class="border border-gray-600  my-2 p-2 w-full bg-transparent text-white uppercase" id="mce-FNAME" placeholder="First Name">
                                </div>
                                <div class="mc-field-group">
                                    <!-- <label for="mce-LNAME">Last Name </label> -->
                                    <input type="text" value="" name="LNAME" class=" border border-gray-600  my-2 p-2 w-full bg-transparent text-white uppercase" id="mce-LNAME" placeholder="Last Name">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>                                 

                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_4c766702504e58545dacbb076_7e4e3aa0cb" tabindex="-1" value="">
                                </div>
                                <div class="clear">
                                    <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button w-full border border-risered my-1 p-2 bg-transparent text-white uppercase text-risered hover:text-black hover:bg-risered cursor-pointer trans">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
            </div>
        </div>
        <footer>
            <div class="container mx-auto flex flex-row items-center h-full p-5 align-middle justify-center text-gray-700 text-xs">
                <?php _e( '&copy; Copyright 2020 Nukage', 'nukage_2020' ); ?>
            </div>
        </footer>
        <!-- .body-wrapper -->
        <!-- Js lib -->
        <!-- <script type="text/javascript" src="js/jquery.combinedScroll.js"></script> -->
        <?php wp_footer(); ?>
    </body>
