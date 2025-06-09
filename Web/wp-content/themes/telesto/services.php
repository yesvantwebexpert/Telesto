<?php
/* Template Name: Services Page */

 get_header(); ?>

  <!-- Comman banner section start -->
    <?php
$about_banner = get_field('service_banner_'); 
if ($about_banner):
    $banner_url = $about_banner['url'];
else:
    // Fallback image
    $banner_url = get_template_directory_uri() . '/assets/images/service-img.jpg';
endif;
?>

<!-- <section id="cm-banner" style="background-image: url(</?php echo esc_url($banner_url); ?>);"> -->
 <section id="cm-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-9 col-md-9 col-lg-9">
                   <div class="banner-left-side wow fadeIn">
  <h1><?php the_title(); ?></h1>
  <p>
   <?php the_content(); ?>
  </p>
</div>

                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                           <div class="banner-right-side wow fadeIn">
    <nav aria-label="breadcrumb">
        <?php if (function_exists('custom_breadcrumbs')) custom_breadcrumbs(); ?>
    </nav>
</div>
            </div>
        </div>
    </div>
</section>
<!-- Comman banner section end -->
<!-- Services card section start -->
        <section class="space pt-0">
            <div class="container">
               <!--  <div class="row">
                    <div class="col-lg-5 col-md-6 col-12 d-flex align-items-center">
                        <div class="heading-pnel wow fadeInUp">
                            <h2></?php the_field('what_we_offer_heading_'); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 d-flex align-items-center ml-auto">
                        <div class="heading-pnel wow fadeInUp">
                            <p></?php the_field('what_we_offer_subheading_'); ?></p>
                        </div>
                    </div>
                </div> -->

                
<div class="row">
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
            <div class="col-lg-12 col-md-12 col-12">
                <div class="offer_card_gredient wow fadeInUp NewGridCard">
                    <div class="offer_card_caption">
                    <figure>
                        <?php 
                        // Display service icon (featured image or a default icon)
                        if (has_post_thumbnail()) :
                            the_post_thumbnail('full', ['alt' => get_the_title()]); // Use 'medium' or another size
                        else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/default-icon.svg" alt="default icon" />
                        <?php endif; ?>
</figure>
<figcaption>
                        <h3><?php the_title(); ?></h3> <!-- Display service title -->

                        <?php if (has_excerpt()) : ?>
                            <?php the_excerpt(); ?> <!-- Display custom excerpt -->
                        <?php else : ?>
                            <?php echo wp_trim_words(get_the_content(), 15); ?> <!-- Fallback to content if no excerpt is provided -->
                        <?php endif; ?>
</figcaption>
<div class="linkBox"> 
                        <a href="<?php the_permalink(); ?>"> <!-- Link to the service detail page -->
                            Learn More <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/right-arrow.svg" alt="right arrow" />
                        </a>
                        </div>
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






       
                </div>
            </div>
        </section>



<!-- Services card section end -->


                 





 <?php get_footer(); ?>