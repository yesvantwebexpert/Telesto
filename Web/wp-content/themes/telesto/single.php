<?php

 get_header(); ?>

<!-- Service Detail content section start -->
<section id="service-detail-content" class="space mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="service-content-main wow fadeInUp policy-content-main">
                   <?php
$background_banner = get_field('background_banner');
if ($background_banner) :
    // Output the image using the 'url' and 'alt' from the image array
?>
    <img src="<?php echo esc_url($background_banner['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($background_banner['alt']); ?>">
<?php endif; ?>

                    <div class="service-detial-span">
                        <span>Automation</span>
                    </div>
                    <h2><?php the_field('first_heading'); ?></h2>
                    <p><?php the_field('first_subheading'); ?></p>
                    <h3><?php the_field('second_heading'); ?></h3>
                    <p><?php the_field('second_subheading'); ?></p>
                    <h4><?php the_field('third_heading'); ?></h4>
                    <p><?php the_field('third_subheading'); ?></p>
                    <h3><?php the_field('fourth_heading'); ?></h3>
                    <p><?php the_field('fourth_subheading'); ?></p>
                </div>
                
               

          
        </div>
        </div>
    </div>
</section>
<!-- Service Detail content section end -->
   <!-- section -->
        <section class="space pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-pnel mb-5 wow fadeInUp">
                            <h2><?php the_field('blog_heading'); ?></h2>
                        </div>
                    </div>
                </div>

                     <div id="Blog-Slider" class="owl-carousel owl-theme">
    <?php
    $args = [
        'post_type'      => 'post',
        'posts_per_page' => 4,
    ];
    $blog_query = new WP_Query($args);

    if ($blog_query->have_posts()):
        while ($blog_query->have_posts()):
            $blog_query->the_post();

            // Retrieve the featured image URL
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if (!$featured_image) {
                $featured_image = get_template_directory_uri() . '/assets/images/blog/placeholder.png';
            }

            // Retrieve the right arrow image from ACF (optional)
            $right_arrow = get_field('right_arrow_');
            ?>
            <div class="item">
                <div class="Blog-Items wow">
                    <div class="Blog-Items-image">
                        <img src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid" />
                    </div>

                    <div class="Blog-Items-Content">
                        <h4><?php the_title(); ?></h4>
                        <a href="<?php the_permalink(); ?>" class="learlink">
                            Learn More
                            <?php if (!empty($right_arrow['url'])): ?>
                                <img src="<?php echo esc_url($right_arrow['url']); ?>" alt="<?php echo esc_attr($right_arrow['alt']); ?>" />
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/right-arrow.svg" alt="Right Arrow" />
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>
            </div>
        </section>
        <!-- section end-->
 
 
 
<?php get_footer(); ?>