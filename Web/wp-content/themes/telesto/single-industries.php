<?php

 get_header(); ?>
<!-- Service Detail content section start -->
<section id="service-detail-content" class="space mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="service-content-main wow fadeInUp policy-content-main  ">
                   <?php
$banner_image = get_field('banner_image');
if (!empty($banner_image)) :
    $image_url = esc_url($banner_image['url']);
    $image_alt = esc_attr($banner_image['alt']);
    ?>
    <img src="<?php echo $image_url; ?>" class="img-fluid" alt="<?php echo $image_alt; ?>">
<?php endif; ?>

                    <div class="service-detial-span">
                        <span>Automation</span>
                    </div>
                    <h2><?php the_field('pos_heading'); ?></h2>
                    <p>
						<?php the_field('pos'); ?>
 </p>

                    <h3><?php the_field('sedut_heading'); ?></h3>
                    <p><?php the_field('sedut_subheading'); ?></p>
                    <h4><?php the_field('thirdsed_heading'); ?></h4>
                    <p><?php the_field('thirdsed_subheading'); ?></p>
                    <h3><?php the_field('fourthsed_heading'); ?></h3>
                    <p><?php the_field('fourth_subheading'); ?></p>
                </div>
                
               

           
        </div>
        </div>
    </div>
</section>
<!-- Service Detail content section end -->
   <!-- section -->
        <section class="space pt-0  ">
            <div class="container">
            <div class="row align-items-center">
                     <div class="col-lg-9 col-md-8 col-12 mb-5">
                        <div class="heading-pnel real-caption wow fadeInUp">
                            <h2>Related Applications</h2>
                            <p>How Telesto-InStandart’s AI is helping industries:</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 mb-5 mobile-none">
                        <a class="blue-btn blue_bfr_btn wow fadeInUp ml-auto" href="#" target="" style="visibility: visible;">
            All Services         <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"></path>
            </svg>
        </a>
                    </div>
                </div>
                </div>
                <div class="ApplicationsSection">
            <div class="container">
                <div class="row">
                     
<div id="Real-Slider" class="owl-carousel owl-theme">
    <?php
    $args = array(
        'post_type' => 'industries',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $industries_query = new WP_Query($args);
    if ($industries_query->have_posts()) :
        while ($industries_query->have_posts()) : $industries_query->the_post();
            $industry_tag = get_field('industry_tag'); // ACF फ़ील्ड
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $categories = get_the_terms(get_the_ID(), 'category');
            ?>
            <div class="item">
                <ul class="real-content heading-panel">
                    <li>
                        <div class="real-image">
                            <?php if ($featured_image): ?>
                                <img src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>" />
                            <?php endif; ?>
                            <?php if ($industry_tag): ?>
                                <span><?php echo esc_html($industry_tag); ?></span>
                            <?php endif; ?>
                            <?php
                            if ($categories && !is_wp_error($categories)) {
                                echo '<div class="industry-categories">';
                                foreach ($categories as $category) {
                                    echo '<span>' . esc_html($category->name) . '</span>';
                                }
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </li>
                    <li>
                        <div class="real-content heading-pnel">
                            <h5><?php the_title(); ?></h5>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="learlink">
                                Learn More
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/right-arrow.svg" alt="right arrow" />
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No industries found.</p>';
    endif;
    ?>
</div>


                </div>
            </div>
            <div class="container">
            <div class="row align-items-center">
    <div class="col-lg-12 mt-3 desktop-none">
        <a class="blue-btn blue_bfr_btn wow fadeInUp mr-auto animated animated" href="#" target="" style="visibility: visible;">
            All Services
            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"></path>
            </svg>
        </a>
    </div>
</div>
</div>
            </div>
        </section>
        <!-- section end-->
 
 
 
 
<?php get_footer(); ?>