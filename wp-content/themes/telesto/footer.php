 <footer class="MainFoorter">
            <div class="container">
                <div class="FooterTop">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 col-md-5">
                            <div class="footerLogo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" />
                            </div>
                            <div class="FooterItems">
                                <h4><?php echo get_field('address', 'options'); ?></h4>
                                <p>
                                    <?php echo get_field('address_detail', 'options'); ?>
                                </p>
                            </div>
                            <div class="MainBoxLinks">
                            <div class="FooterItems">
                                <h4><?php echo get_field('contact_heading_', 'options'); ?></h4>
                                <p><a href="#"><?php echo get_field('contact_detail', 'options'); ?></a></p>
                            </div>

                            
                            <?php
$link = get_field('talk_to_expert'); // ACF link field returning an array

if ($link):
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
?>
    <a class="blue-btn blue_bfr_btn wow fadeInUp mt-4" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
        <?php echo esc_html($link_title); ?>
        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z"
                fill="white"
            ></path>
        </svg>
    </a>
<?php endif; ?>

                        </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="FooterInfo">
                                <div class="FooterHeading">
                                    <h3><?php echo get_field('important_links', 'options'); ?></h3>
                                </div>
                                <div class="FooterLinks">
                                    <ul>
                                       

                                    <?php 
                            wp_nav_menu( array(
                                'theme_location' => 'footer-menu-middle', 
                                'container'      => false, 
                                'menu_class'     => 'footer-item',
                                'fallback_cb'    => false, 
                                'link_before'    => '<i class="fa fa-angle-right"></i> ', 
                            ));
                        ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="FooterInfo">
                                <div class="FooterHeading">
                                    <h3><?php echo get_field('newsletter', 'options'); ?></h3>
                                </div>
                                <div class="FooterItems">
                                    <p><?php echo get_field('newslettersubheading', 'options'); ?></p>
                                </div>
                                <div class="Newsletters">
                                    <div class="NewslettersInput">
                                        <?php echo do_shortcode('[contact-form-7 id="eb1aedc" title="newsletter form"]'); ?>

                                    </div>
                                </div>

                                <div class="MediaBox">
                                    <ul>
                                        <li>
                                         <?php $facebook = get_field('facebook'); ?>

                                            <a href="<?php echo $facebook['url']; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/footer/1.png" /></a>
                                        </li>
                                        <li>
                                            <?php $twitter = get_field('twitter'); ?>
                                            <a href="<?php echo $twitter['url']; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/footer/2.png" /></a>
                                        </li>
                                        
                                        <li>
                                            <?php $youtube = get_field('youtube'); ?>
                                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/footer/4.png" /></a>
                                        </li>

                                        <li>
                                            <?php $linkedin = get_field('linkedin'); ?>
                                            <a href="<?php echo $linkedin['url']; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/footer/3.png" /></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="FooterBottom">
                    <p><?php echo get_field('copyright__first_', 'options'); ?><b><?php echo get_field('copyright_second_', 'options'); ?></b> <?php echo get_field('reserved_', 'options'); ?></p>
                </div>
            </div>
        </footer>
   <!--  </div> 
 </main>  -->
 
      </body>

      <?php wp_footer(); ?>

</html>







