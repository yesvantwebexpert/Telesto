<?php
/* Template Name: case categories */

 get_header(); ?>

 <!-- Comman banner section start -->
    <?php 
$banner_image = get_field('casestudies_banner');

if ($banner_image): 
    $banner_url = $banner_image['url']; 
?>
<section id="cm-banner" >
<?php else: ?>
<section id="cm-banner">
<?php endif; ?>

       <div class="container">
    <div class="row align-items-center">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="banner-left-side wow fadeIn">
                <h1><?php single_term_title(); ?></h1>
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
<!-- section -->


<main>
    <section class="space pt-0">
        <div class="container">
            <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php
                        $bg_image = get_the_post_thumbnail_url(get_the_ID(), 'full') 
                            ?: get_template_directory_uri() . '/assets/images/default-bg.jpg';

                        
                        $terms = get_the_terms(get_the_ID(), 'case_category');
                        $category_name = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : 'Uncategorized';
                    ?>
                    <div class="col-12">
                        <div class="Case-Studies-Box">
                            <div class="Advantage-Items">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-6 col-lg-5">
                                        <div class="AdvantageImage">
                                            <img src="<?php echo esc_url($bg_image); ?>" alt="Advantage Image" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="success-detial">
                                            <span><?php echo esc_html($category_name); ?></span>
                                            <h3><?php the_title(); ?></h3>
                                            <ul class="d-block">
                                                <li>
                                                    <p><?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?></p>
                                                </li>
                                                <li>
                                                    <a href="<?php the_permalink(); ?>" class="learlink">
                                                       <?php the_field('button_text', 'option'); ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/right-arrow.svg" alt="right arrow" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else : ?>
                    <p class="case">No case studies found in this category.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>



<!-- section end-->
<section class="space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="SuperchargeStrip Let-get">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <div class="SuperchargeContent">
                                       <div class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <h3>
        <?php echo get_field('lets', 42); ?>
        <span class="Theme-Color"><?php echo get_field('started', 42); ?></span>
    </h3>
    <h6><?php echo get_field('get_advanced', 42); ?></h6>
    <p><?php echo get_field('automation', 42); ?></p>
</div>

                               <div class="hero_link_btn">
                                    <?php
                                    $first_link = get_field('banner_first_link', 42);
                                    $second_link = get_field('banner_second_link', 42);
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

                               <?php 
$image = get_field('mobile_image', 42);
if( !empty( $image ) ): ?>
    <div class="col-sm-4">
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </div>
<?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 <?php get_footer(); ?>