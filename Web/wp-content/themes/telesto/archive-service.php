<?php
/* Template Name: services */

 get_header(); ?>

  <!-- Comman banner section start -->
    <?php
$about_banner = get_field('about_banner_'); // ACF field (image returned as array)
if ($about_banner):
    $banner_url = $about_banner['url'];
else:
    // Fallback image
    $banner_url = get_template_directory_uri() . '/assets/images/about-banner-img.png';
endif;
?>

<section id="cm-banner" style="background-image: url(<?php echo esc_url($banner_url); ?>);">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6 col-lg-6">
                   <div class="banner-left-side wow fadeIn">
  <h1><?php the_title(); ?></h1>
  <p>
   <?php the_field('services_subheading_'); ?>
  </p>
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
<!-- Services card section start -->
        <section class="space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12 d-flex align-items-center">
                        <div class="heading-pnel wow fadeInUp">
                            <h2><?php the_field('what_we_offer_heading_'); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 d-flex align-items-center ml-auto">
                        <div class="heading-pnel wow fadeInUp">
                            <p><?php the_field('what_we_offer_subheading_'); ?></p>
                        </div>
                    </div>
                </div>

                
<div class="row offer_card">
    <?php
    // Set up custom query for 'services' post type
    $args = array(
        'post_type' => 'service', // Custom post type
        'posts_per_page' => -1,   // Display all services
    );
    $services_query = new WP_Query($args);

    if ($services_query->have_posts()) :
        while ($services_query->have_posts()) : $services_query->the_post();
    ?>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="offer_card_gredient wow fadeInUp">
                    <div class="offer_card_caption">
                        <?php 
                        // Display service icon (featured image or a default icon)
                        if (has_post_thumbnail()) :
                            the_post_thumbnail('full', ['alt' => get_the_title()]); // Use 'medium' or another size
                        else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/default-icon.svg" alt="default icon" />
                        <?php endif; ?>

                        <h3><?php the_title(); ?></h3> <!-- Display service title -->

                        <?php if (has_excerpt()) : ?>
                            <p><?php the_excerpt(); ?></p> <!-- Display custom excerpt -->
                        <?php else : ?>
                            <p><?php echo wp_trim_words(get_the_content(), 15); ?></p> <!-- Fallback to content if no excerpt is provided -->
                        <?php endif; ?>

                        <a href="<?php the_permalink(); ?>"> <!-- Link to the service detail page -->
                            Learn More <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/right-arrow.svg" alt="right arrow" />
                        </a>
                    </div>
                </div>
            </div>
    <?php 
        endwhile;
    else :
    ?>
        <p>No services found.</p>
    <?php
    endif;
    wp_reset_postdata(); // Reset post data after custom query
    ?>






       <div class="col-lg-3 col-md-6 col-12">
                        <div class="offer_card_gredient wow fadeInUp">
                            <div class="offer_card_caption green-bg">
                                <?php
$image = get_field('twelve_icon_images_'); // returns an array

if ($image):
?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

                                <h3><?php the_field('twelve_heading_'); ?></h3>
                                <?php
$link = get_field('get_started_'); // ACF link field (array format)

if ($link):
    $url = esc_url($link['url']);
    $title = esc_html($link['title']);
    $target = $link['target'] ? $link['target'] : '_self';
?>
    <a class="blue-btn" href="<?php echo $url; ?>" target="<?php echo esc_attr($target); ?>">
        <?php echo $title; ?>
        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"></path>
        </svg>
    </a>
<?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</div>

<!-- Services card section end -->


                 





 <?php get_footer(); ?>