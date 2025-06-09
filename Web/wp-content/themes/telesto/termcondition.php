<?php
/* Template Name: term condition */

 get_header(); ?>

 <!-- Comman banner section start -->
    <?php 
$banner = get_field('term_banner');
if ($banner): 
?>
<section id="cm-banner" style="background-image: url(<?php echo esc_url($banner['url']); ?>);">
<?php endif; ?>

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
<!-- Policy content section start -->
<section id="Policy-content" class="space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="policy-content-main wow fadeInUp">
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
<!-- Policy content section end -->





 <?php get_footer(); ?>