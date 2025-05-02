<?php
/* Template Name: about us */

 get_header(); ?>

   <!-- Comman banner section start -->
        <section id="cm-banner" 
    style="background-image: url('<?php 
        $about_banner = get_field('about_banner'); 
        if ($about_banner): 
            echo $about_banner; 
        else: 
            echo get_template_directory_uri() . '/assets/images/default-banner.png'; // 
        endif; 
    ?>');">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="banner-left-side wow fadeIn">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="banner-right-side wow fadeIn">
                            <nav aria-label="breadcrumb">
                              <?php custom_breadcrumbs(); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Comman banner section end -->
        <!-- About content section start -->
        <section id="about-cont" class="space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 m-auto">
                        <div class="about-cont-part wow fadeInUp">
                            <h2><?php the_field('about_heading_'); ?></h2>
                            <p><?php the_field('about_subheading_'); ?></p>
                            <p><?php the_field('about_second_subheading'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="about-vision-part wow fadeInUp">
                            <h3><?php the_field('our_vision_heading_'); ?></h3>
                            <p><?php the_field('our_vision_subheading_'); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="about-vision-part wow fadeInUp">
                            <h3><?php the_field('our_mission_heading_'); ?></h3>
                            <p><?php the_field('our_mission_subheading_'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About content section end -->
        <!-- Why choose section start -->
        <section class="space pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12 pr-lg-5 pr-md-5 pr-0">
                        <div class="choose_image wow fadeInUp">
                            <div class="choose_top_text">
                                <?php
$check_image = get_field('check_image');
if (!empty($check_image)) : ?>
    <img src="<?php echo esc_url($check_image['url']); ?>" alt="<?php echo esc_attr($check_image['alt']); ?>" />
<?php endif; ?>

                                <p><?php the_field('empowering'); ?></p>
                            </div>
                            <?php 
$image = get_field('choose_image');
if (!empty($image)) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
                            <div class="choose_bottom_text">
                                <?php
$right_thumb_image = get_field('right_thumb_image_');

if (!empty($right_thumb_image)) : ?>
    <img src="<?php echo esc_url($right_thumb_image['url']); ?>" alt="<?php echo esc_attr($right_thumb_image['alt']); ?>" />
<?php endif; ?>

                                <p><?php the_field('enhance'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 pl-lg-5 pl-lg-3">
                        <div class="choose_caption heading-pnel pl-lg-5 pl-0 wow fadeInUp">
                            <h2><?php the_field('why_choose_heading_'); ?></h2>
                            <h3><?php the_field('key_heading_'); ?></h3>
                            <?php if( have_rows('keyfeature') ): ?>
    <ul>
        <?php while( have_rows('keyfeature') ): the_row(); 
            $heading = get_sub_field('keysubheading');
        ?>
            <li><p><?php echo esc_html($heading); ?></p></li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>

                            <h3 class="pt-lg-5 pt-md-5 pt-3">Trust Indicators</h3>

                            <div class="choose-card">
                                <?php if( have_rows('trustfeature') ): ?>
    <ul>
        <?php while( have_rows('trustfeature') ): the_row(); 
            $image = get_sub_field('trustimage');
            $heading = get_sub_field('trustheading');
        ?>
            <li class="choose_bg">
                <div class="choose_detail">
                    <?php if( !empty($image) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <p><?php echo esc_html($heading); ?></p>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>

                                <ul class="choose_year">
                                    <li><span><?php the_field('ten_plus_heading_'); ?></span></li>
                                    <li>
                                        <p>
                                            <?php the_field('year__heading_'); ?><br />
                                            <?php the_field('data_science_heading_'); ?>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why choose section end-->
        <!-- Partners section start -->
        <section class="logo_space">
            <div class="container">
                <div class="row logo_bdr">
                    <div class="col-lg-2 col-md-12 col-12 d-flex align-items-center">
                        <div class="logo_slider_title wow fadeInUp">
                            <h4><?php the_field('partner_heading_'); ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12 col-12 d-flex align-items-center">
                        <!-- Corrected ID here, removed extra # -->
                        <?php if( have_rows('partner_logo') ): ?>
    <div id="LogoSlider" class="owl-carousel pb-0">
        <?php while( have_rows('partner_logo') ): the_row(); 
            $logo = get_sub_field('all_partner_logo');
        ?>
            <?php if( !empty($logo) ): ?>
                <div class="item">
                    <div class="logo_caption">
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- Partners section end-->
        <section class="space ValuesSection pb-0">
            <div class="container p-0 ml-0 mw-100 overflow-hidden">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <?php 
$hand_image = get_field('hand_image_');
if ($hand_image): ?>
    <img src="<?php echo esc_url($hand_image['url']); ?>" alt="<?php echo esc_attr($hand_image['alt']); ?>" class="img-fluid" />
<?php endif; ?>

                    </div>
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="choose_caption heading-pnel wow fadeInUp">
                            <h2><?php the_field('our_values_heading_'); ?></h2>
                            <p><?php the_field('our_values_subheading_'); ?></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="space pt-0">
            <div class="container">
                <div class="BoxSteps row">
                    <div class="BoxStepsItems col-md-3"><span></span></div>
                    <div class="BoxStepsItems col-md-3"><span></span></div>
                    <div class="BoxStepsItems col-md-3"><span></span></div>
                    <div class="BoxStepsItems col-md-3"><span></span></div>
                </div>
                <?php if( have_rows('value_') ): ?>
    <div class="row">
        <?php while( have_rows('value_') ): the_row(); 
            $heading = get_sub_field('value_feature');
            $description = get_sub_field('value_subfeature');
        ?>
            <div class="col-md-6 col-lg-3">
                <div class="ValuesItems wow fadeInUp">
                    <?php if( $heading ): ?>
                        <h4><?php echo esc_html($heading); ?></h4>
                    <?php endif; ?>
                    
                    <?php if( $description ): ?>
                        <p><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

            </div>
        </section>
        <!-- Happy clients section start -->
        <section class="happy-client space">
            <div class="container">
                <div class="happy-client-outer">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="happy-client-card br-right wow fadeInUp">
                            <h2 class="Count"><?php the_field('ninety_five_heading_'); ?></h2><span>%</span>
                            <p><?php the_field('happy_clients_heading_'); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="happy-client-card br-right wow fadeInUp">
                            <h2 class="Count"><?php the_field('ninty_nine_heading_'); ?></h2><span>k+</span>
                            <p><?php the_field('completed_projects_heading_'); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 wow fadeInUp">
                        <div class="happy-client-card">
                            <h2 class="Count"><?php the_field('seventy_two_heading_'); ?></h2><span>+</span>
                            <p><?php the_field('happy_clients_heading_'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Happy clients section end -->


        <!-- Our experts section start -->
       <section id="expert-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="expert-heading wow fadeInUp">
                    <h2>Our Experts</h2>
                    <p>Empowering businesses with cutting-edge AI solutions that drive automation, enhance decision-making, and revolutionize customer</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php if (have_rows('expert_team')) : ?>
                <?php while (have_rows('expert_team')) : the_row(); 
                    $expert_image = get_sub_field('expert_image');
                    $expert_name = get_sub_field('expert_name');
                    $expert_designation = get_sub_field('expert_designation');
                    $facebook_link = get_sub_field('facebook_link');
                    $twitter_link = get_sub_field('twitter_link');
                    $linkedin_link = get_sub_field('linkedin_link');
                ?>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="expert-card wow fadeInUp">
                        <?php if (!empty($expert_image)) : ?>
                            <img src="<?php echo esc_url($expert_image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($expert_image['alt']); ?>">
                        <?php endif; ?>
                        <h3><?php echo esc_html($expert_name); ?></h3>
                        <p><?php echo esc_html($expert_designation); ?></p>
                        <div class="social-links">
                            <?php if ($facebook_link) : ?>
                                <a href="<?php echo esc_url($facebook_link['url']); ?>" target="<?php echo esc_attr($facebook_link['target']); ?>" class="social-icons" title="Facebook">
                                    <!-- Facebook SVG -->
                                    <svg fill="#fff" width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg>
                                </a>
                            <?php endif; ?>

                            <?php if ($twitter_link) : ?>
                                <a href="<?php echo esc_url($twitter_link['url']); ?>" target="<?php echo esc_attr($twitter_link['target']); ?>" class="social-icons" title="Twitter">
                                    <!-- Twitter SVG -->
                                    <svg fill="#fff" width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48z"/></svg>
                                </a>
                            <?php endif; ?>

                            <?php if ($linkedin_link) : ?>
                                <a href="<?php echo esc_url($linkedin_link['url']); ?>" target="<?php echo esc_attr($linkedin_link['target']); ?>" class="social-icons" title="LinkedIn">
                                    <!-- LinkedIn SVG -->
                                    <svg fill="#fff" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

        <!-- Our experts section end --> 
        <!-- Get started section start -->
        <section class="space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="SuperchargeStrip Let-get">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <div class="SuperchargeContent">
                                        <div class="wow fadeInUp">
                                            <h3><?php the_field('lets_heading_'); ?><span class="Theme-Color"><?php the_field('lets_first_sub_heading_'); ?></span></h3>
                                            <h6><?php the_field('let_second_sub_heading_'); ?></h6>
                                            <p><?php the_field('lets_third_heading_'); ?></p>
                                        </div>
                                        <?php
$link = get_field('talk_to_expert_');
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

                                <div class="col-sm-4">
                                    <?php 
$image = get_field('lets_image_');
if ($image) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Get started section end -->


  <?php get_footer(); ?>