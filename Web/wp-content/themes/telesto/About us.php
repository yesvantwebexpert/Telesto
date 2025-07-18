<?php
/* Template Name: about us */

 get_header(); ?>

  <!-- Comman banner section start -->
      <?php
      $about_banner = get_field("about_banner");
      $banner_url = $about_banner
          ? esc_url($about_banner)
          : get_template_directory_uri() . "/assets/images/default-banner.png";
      ?>
<section id="cm-banner" style="background-image: url('<?php echo $banner_url; ?>');">


            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <div class="banner-left-side wow fadeIn">
                          <span><?php the_field("breadcrumb_subheading"); ?></span>
                            
                           <h1> <?php the_field("breadcrumb_heading"); ?></h1>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
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
      <section class=" About-Exp ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="offer_card_gredient wow fadeInUp">
                            <div class="offer_card_caption">
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="OurExpBox wow fadeInUp">
                            <div class="OurExpItem">
                                <div class="OurExpContent">
                                    <p><?php the_field("first_section_heading"); ?></p>
                                </div>

                                <div class="OurExpContent2">
                                    <h3><?php the_field("counter_number"); ?></h3>
                                    <p><?php the_field("counter_heading"); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About content section end -->

      <section class="space pb-sm-0">
            <div class="container">
            <div class="Powerhouse wow fadeInUp">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="PowerhouseImage">
  <?php
  $rocket_image = get_field("green_section_image");
  if (!empty($rocket_image)): ?>
    <img src="<?php echo esc_url(
        $rocket_image["url"]
    ); ?>" alt="<?php echo esc_attr($rocket_image["alt"]); ?>">
  <?php endif;
  ?>
</div>


                    </div>
                     <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="PowerhouseContent">
							<?php $integrity = get_field("green_section_text"); ?>
                            <p>
							<?php echo wp_kses_post($integrity); ?>
							</p>
<?php  ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>


        <!-- vision mission start -->
        <section id="about-cont" class="space pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="about-vision-part wow fadeInUp">
                            <div class="about-vision-Item">
                                <h3><?php the_field("1_column_heading"); ?></h3>
                                <?php if (have_rows("1_column_list")): ?>
									<ul>
										<?php while (have_rows("1_column_list")):
											the_row(); ?>
											<?php $feature = get_sub_field("1_column_list_text"); ?>
											<?php if ($feature): ?>
												<li><?php echo esc_html($feature); ?></li>
											<?php endif; ?>
										<?php
										endwhile; ?>
									</ul>
								<?php endif; ?>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="about-vision-part wow fadeInUp">
                            <div class="about-vision-Item">
                                <h3><?php the_field("2_column_heading"); ?></h3>
                                <?php if (have_rows("2_column_list")): ?>
    <ul>
        <?php while (have_rows("2_column_list")):
            the_row(); ?>
            <?php $feature = get_sub_field("2_column_list_text"); ?>
            <?php if ($feature): ?>
                <li><?php echo esc_html($feature); ?></li>
            <?php endif; ?>
        <?php
        endwhile; ?>
    </ul>
<?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- vision mission section end-->


  <!-- why choose telesto-->

  <section class="space pt-0">
            <div class="container">
                <div class="WhyChooseMain">
                    <div class="WhyChooseItems">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-pnel wow fadeInUp mb-5">
                                    <h2><?php the_field("features_main_heading"); ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-lg-5 col-md-4">
                             <?php if (have_rows("column_1_list")): ?>
    <div class="WhyUsItem wow fadeInUp">
        <div class="WhyUsHeading">
            <h3><?php the_field("features_column_1_heading"); ?></h3>
        </div>
        <?php while (have_rows("column_1_list")):
            the_row(); ?>
            <?php
            $image = get_sub_field("column_1_image");
            $heading = get_sub_field("column_1_heading");
            ?>
            <div class="WhyUsBox">
                <?php if ($image): ?>
                    <div class="WhyUsImage">
                        <img src="<?php echo esc_url(
                            $image["url"]
                        ); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
                    </div>
                <?php endif; ?>
                <?php if ($heading): ?>
                    <div class="WhyUsContent">
                        <h4><?php echo esc_html($heading); ?></h4>
                    </div>
                <?php endif; ?>
            </div>
        <?php
        endwhile; ?>
    </div>
<?php endif; ?>

                            </div>
                            <div class="col-lg-4 col-md-4">
                             <?php if (have_rows("trust_feature")): ?>
								<div class="WhyUsItem wow fadeInUp">
									<div class="WhyUsHeading">
										<h3><?php the_field("features_column_2_heading"); ?></h3>
									</div>
									<?php while (have_rows("column_2_list")):
										the_row(); ?>
										<?php
										$image = get_sub_field("column_2_image");
										$subheading = get_sub_field("column_2_heading");
										?>
										<div class="WhyUsBox">
											<?php if ($image): ?>
												<div class="WhyUsImage">
													<img src="<?php echo esc_url(
														$image["url"]
													); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
												</div>
											<?php endif; ?>
											<?php if ($subheading): ?>
												<div class="WhyUsContent">
													<h4><?php echo esc_html($subheading); ?></h4>
												</div>
											<?php endif; ?>
										</div>
									<?php
									endwhile; ?>
								</div>
							<?php endif; ?>

                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="VerifiedBox wow fadeInUp">
                                    <h4><?php the_field("counter_number_2"); ?></h4>
                                    <p><?php the_field("counter_heading_2"); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- why choose telesto end-->



<div class="mainBox"> 
    
 <!-- About content section end -->
        <section class="space ValuesSection pb-0">
            <div class="container p-0 ml-0 mw-100 overflow-hidden">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                <?php 
                $hand_image = get_field('values_image');
                if ($hand_image): ?>
                    <img src="<?php echo esc_url($hand_image['url']); ?>" alt="<?php echo esc_attr($hand_image['alt']); ?>" class="img-fluid" />
                <?php endif; ?>
            </div>
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="choose_caption heading-pnel wow fadeInUp">
                            <h2><?php the_field('our_values_heading_'); ?></h2>
                            <p><?php the_field('our_values_subheading_'); ?><b><?php the_field('our_values_second_subheading_'); ?></b></p>
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
                <?php if( have_rows('value_section_list') ): ?>
    <div class="row">
        <?php while( have_rows('value_section_list') ): the_row(); 
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
        <section class="happy-client space pb-0">
            <div class="container">
                <div class="happy-client-outer">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="happy-client-card br-right wow fadeInUp">
                                <h2 class="Count"><?php the_field('counter_1'); ?></h2>
                                <span>%</span>
                                <p><?php the_field('counter_1_heading'); ?></p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="happy-client-card br-right wow fadeInUp">
                                <h2 class="Count"><?php the_field('counter_2'); ?></h2>
                                <span>k+</span>
                                <p><?php the_field('counter_2_heading'); ?></p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 wow fadeInUp">
                            <div class="happy-client-card">
                                <h2 class="Count"><?php the_field('counter_3'); ?></h2>
                                <span>+</span>
                                <p><?php the_field('counter_3_heading'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    </div>
        <!-- Happy clients section end -->


        <!-- Our experts section start -->
       <section id="expert-section" class="space pt-0">
    <div class="container">
  <div class="row">
                    <div class="col-md-3 col-lg-5">
                        <div class="expert-heading wow fadeInUp">
                            <h2><?php the_field('team_heading'); ?></h2>
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-7">
                        <div class="expert-heading wow fadeInUp">
                            <p><?php the_field('team_subheading'); ?></p>
                        </div>
                    </div>
                </div>

        <div class="row">
            <?php if (have_rows('team_members')) : ?>
                <?php while (have_rows('team_members')) : the_row(); 
                    $expert_image = get_sub_field('member_image');
                    $expert_name = get_sub_field('member_name');
                    $expert_designation = get_sub_field('member_designation');
                    $facebook_link = get_sub_field('member_facebook_link');
                    $twitter_link = get_sub_field('member_twitter_link');
                    $linkedin_link = get_sub_field('member_linkedin_link');
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
                                  
                                    <svg fill="#fff" width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg>
                                </a>
                            <?php endif; ?>

                            <?php if ($twitter_link) : ?>
                                <a href="<?php echo esc_url($twitter_link['url']); ?>" target="<?php echo esc_attr($twitter_link['target']); ?>" class="social-icons" title="Twitter">
                                   
                                    <svg fill="#fff" width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48z"/></svg>
                                </a>
                            <?php endif; ?>

                            <?php if ($linkedin_link) : ?>
                                <a href="<?php echo esc_url($linkedin_link['url']); ?>" target="<?php echo esc_attr($linkedin_link['target']); ?>" class="social-icons" title="LinkedIn">
                                    
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


<!-- Partners section start -->
        <section class="logo_space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-12 d-flex align-items-center">
                        <div class="logo_slider_title wow fadeInUp">
                            <h4><?php the_field('partner_heading_'); ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12 col-12 d-flex align-items-center">
                       
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
                                    <h3>
                                        <?php echo esc_html(get_field('lets_heading_')); ?>
                                        <span class="Theme-Color">
                                            <?php echo esc_html(get_field('cta_hightlighted_heading')); ?>
                                        </span>
                                    </h3>
                                    <h6><?php echo esc_html(get_field('cta__subheading')); ?></h6>
                                    <p><?php echo esc_html(get_field('cta__text')); ?></p>
                                </div>

                                <div class="hero_link_btn">
                                    <?php
                                    $first_link = get_field('cta_button_1');
                                    $second_link = get_field('cta_button_2');
                                    ?>

                                    <?php if ($first_link): ?>
                                        <a class="blue-btn wow fadeInUp" style="animation-delay: 0.4s;"
                                           href="<?php echo esc_url($first_link['url']); ?>"
                                           target="<?php echo esc_attr($first_link['target'] ?: '_self'); ?>">
                                            <?php echo esc_html($first_link['title']); ?>
                                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619V1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z"
                                                      fill="white"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($second_link): ?>
                                        <a class="blue-btn blue_bfr_btn wow fadeInUp ml-2" style="animation-delay: 0.4s;"
                                           href="<?php echo esc_url($second_link['url']); ?>"
                                           target="<?php echo esc_attr($second_link['target'] ?: '_self'); ?>">
                                            <?php echo esc_html($second_link['title']); ?>
                                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619V1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z"
                                                      fill="white"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <?php
                            $image = get_field('cta_image');
                            if ($image):
                                ?>
                                <img src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
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