<?php 
/* Template Name: Homepage */

get_header(); 



?>

        <!-- banner -->
        <section class="banner p-relative">
            <!-- <video autoplay muted loop playsinline class="bg-video">
                <source src="/assets/images/media/hero-right-video.mp4" type="video/mp4" />
            </video>
 -->


 <?php
$video_url = get_field('video_url');
if ($video_url): ?>
    <video autoplay muted loop playsinline class="bg-video">
        <source src="<?php echo esc_url($video_url); ?>" type="video/mp4" />
    </video>
<?php endif; ?>


            <div class="container" role="listbox">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="hero-left-caption">
                            <ul class="pl-4 wow fadeInUp">




                                <?php $automation_content_ = get_field('automation_content_'); ?>
                     <?php if(!empty($automation_content_)){ ?>
                  <li><?php echo $automation_content_; ?></li>
                   <?php } ?>



                        
                                <?php $artificial_content_ = get_field('artificial_content_'); ?>
                     <?php if(!empty($artificial_content_)){ ?>
                  <li><?php echo $artificial_content_; ?></li>
                   <?php } ?>



                                
                            </ul>
                            <h1 class="wow fadeInUp" style="animation-delay: 0.2s;"><span><?php the_field('ai_powered_heading_'); ?></span><?php the_field('solution_heading_'); ?><span>.</span></h1>
                            <p class="wow fadeInUp" style="animation-delay: 0.4s;">
                                <?php the_field('merging_ai_subheading_'); ?><br />
                                <?php the_field('intelligent'); ?>
                            </p>
                           

<div class="hero_link_btn">
    <?php
    $first_link = get_field('banner_first_link_');
    $second_link = get_field('banner_second_link_');
    ?>

    <?php if ($first_link): ?>
        <a class="blue-btn wow fadeInUp" style="animation-delay: 0.4s;" href="<?php echo esc_url($first_link['url']); ?>" target="<?php echo esc_attr($first_link['target'] ?: '_self'); ?>">
            <?php echo esc_html($first_link['title']); ?>
            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619V1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"/>
            </svg>
        </a>
    <?php endif; ?>

    <?php if ($second_link): ?>
        <a class="blue-btn blue_bfr_btn wow fadeInUp ml-2" style="animation-delay: 0.4s;" href="<?php echo esc_url($second_link['url']); ?>" target="<?php echo esc_attr($second_link['target'] ?: '_self'); ?>">
            <?php echo esc_html($second_link['title']); ?>
            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619V1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"/>
            </svg>
        </a>
    <?php endif; ?>
</div>





                    <div class="col-lg-6 col-12">
                      

                       <?php
$video_url = get_field('video_second');
?>

<?php if ($video_url): ?>
    <video class="mobile-video mw-100" autoplay muted loop playsinline>
        <source src="<?php echo esc_url($video_url); ?>" type="video/mp4" />
    </video>
<?php endif; ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- section -->

        <!-- section -->
        <section class="logo_space">
            <div class="container">
                <div class="row logo_bdr">
                    <div class="col-lg-2 col-md-12 col-12 d-flex align-items-center">
                        //



                        <div class="logo_slider_title wow fadeInUp">
    <h4><?php the_field('partner_heading_'); ?></h4>
</div>
</div>

<div class="col-lg-10 col-md-12 col-12 d-flex align-items-center">
    <div id="LogoSlider" class="owl-carousel pb-0">
        <?php if (have_rows('partner_logo_')): ?>
            <?php while (have_rows('partner_logo_')): the_row(); ?>
                <?php
                    // Get each image subfield
                    $first_logo  = get_sub_field('parner_first_logo_');
                    $second_logo = get_sub_field('_partner_second_logo_');
                    $third_logo  = get_sub_field('partner_third_logo');
                    $fourth_logo = get_sub_field('parner_fourth_logo_');

                    $logos = [$first_logo, $second_logo, $third_logo, $fourth_logo];
                ?>

                <?php foreach ($logos as $logo): ?>
                    <?php if (!empty($logo)): ?>
                        <div class="item">
                            <div class="logo_caption">
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt'] ?: 'logo'); ?>" />
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>


//


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end-->

        <!-- section -->
        <section class="space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12 d-flex align-items-center">
                        <div class="heading-pnel wow fadeInUp">
                            <h2><?php the_field('offer_heading_'); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-12 d-flex align-items-center">
                        <div class="heading-pnel wow fadeInUp">
                            <p><?php the_field('offer_subheading_'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="row offer_card">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="offer_card_gredient wow fadeInUp">
                            <div class="offer_card_caption">
                                <?php 
$image = get_field('ai_first_image_');
if ($image) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

                                <h3><?php the_field('ai_first_heading_'); ?></h3>
                                <p><?php the_field('ai_first_subheading_'); ?></p>
                                <?php 
$link = get_field('_first_learn');
$image = get_field('first_learn_more_arrow_');

if ($link && $image) :
    $url = $link['url'];
    $title = $link['title'];
    $target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($target); ?>">
        <?php echo esc_html($title); ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </a>
<?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="offer_card_gredient wow fadeInUp">
                            <div class="offer_card_caption">
                                <?php 
$image = get_field('ai_second_image_');
if ($image) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
                                <h3><?php the_field('ai_second_heading_'); ?></h3>
                                <p><?php the_field('ai_second_subheading_'); ?></p>
                               <?php 
$link = get_field('_first_learn');
$image = get_field('first_learn_more_arrow_');

if ($link && $image) :
    $url = $link['url'];
    $title = $link['title'];
    $target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($target); ?>">
        <?php echo esc_html($title); ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </a>
<?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="offer_card_gredient wow fadeInUp">
                            <div class="offer_card_caption">
                                <?php 
$image = get_field('ai_third_image_');
if ($image) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
                                <h3><?php the_field('ai_first_heading_'); ?></h3>
                                <p><?php the_field('ai_first_subheading_'); ?></p>
                                 <?php 
$link = get_field('_first_learn');
$image = get_field('first_learn_more_arrow_');

if ($link && $image) :
    $url = $link['url'];
    $title = $link['title'];
    $target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($target); ?>">
        <?php echo esc_html($title); ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </a>
<?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="offer_card_gredient wow fadeInUp">
                            <div class="offer_card_caption">


                                 <?php 
$image = get_field('fourth_ai_image_');
if ($image) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
                                
                                <h3><?php the_field('ai_first_heading_'); ?></h3>
                                <p><?php the_field('ai_first_subheading_'); ?></p>
                                <?php 
$link = get_field('_first_learn');
$image = get_field('first_learn_more_arrow_');

if ($link && $image) :
    $url = $link['url'];
    $title = $link['title'];
    $target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($target); ?>">
        <?php echo esc_html($title); ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </a>
<?php endif; ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end-->

        <!-- section -->
        <section class="space pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12 pr-lg-5 pr-md-5 pr-0">
                        <div class="choose_image wow fadeInUp">
                            <div class="choose_top_text">
                                <?php
$check_image = get_field('check_image_');
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
$right_thumb_image = get_field('right_thumb_image');

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
                            <ul>
                                <li><p><?php the_field('ai_driven_heading_'); ?></p></li>
                                <li><p><?php the_field('pnel'); ?></p></li>
                                <li><p><?php the_field('cutting_edge_'); ?></p></li>
                                <li><p><?php the_field('scalable'); ?></p></li>
                                <li><p><?php the_field('expertise'); ?></p></li>
                            </ul>
                            <h3 class="pt-lg-5 pt-md-5 pt-3"><?php the_field('trust_heading_'); ?></h3>

                            <div class="choose-card">
                                <ul>
                                    <li class="choose_bg">
                                        <div class="choose_detail">
                                            <?php
$ai_patent_image = get_field('ai_patent__image_');

if (!empty($ai_patent_image)) : ?>
    <img src="<?php echo esc_url($ai_patent_image['url']); ?>" alt="<?php echo esc_attr($ai_patent_image['alt']); ?>" />
<?php endif; ?>

                                            <p><?php the_field('ai__patent_heading_'); ?></p>
                                        </div>
                                    </li>
                                    <li class="choose_bg">
                                        <div class="choose_detail">
                                            

                                            <?php
$ai_partner_image = get_field('ai_partner_image_');

if (!empty($ai_partner_image)) : ?>
    <img src="<?php echo esc_url($ai_partner_image['url']); ?>" alt="<?php echo esc_attr($ai_partner_image['alt']); ?>" />
<?php endif; ?>

                                            <p><?php the_field('ai_partnership_heading_'); ?></p>
                                        </div>
                                    </li>
                                    <li class="choose_bg">
                                        <div class="choose_detail">
                                            <?php
$research_image = get_field('research_image_');

if (!empty($research_image)) : ?>
    <img src="<?php echo esc_url($research_image['url']); ?>" alt="<?php echo esc_attr($research_image['alt']); ?>" />
<?php endif; ?>

                                            <p><?php the_field('research_heading_'); ?></p>
                                        </div>
                                    </li>
                                </ul>

                                <ul class="choose_year">
                                    <li><span><?php the_field('ten_plus_heading_'); ?></span></li>
                                    <li>
                                        <p>
                                            <?php the_field('years_in_ai_'); ?><br />
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
        <!-- section end-->

        <!-- section -->
        <section class="space pt-0 ApplicationsSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 mb-5">
                        <div class="heading-pnel real-caption wow fadeInUp">
                            <h2><?php the_field('real_world_heading_'); ?></h2>
                            <p><?php the_field('how_telesto'); ?></p>
                        </div>
                    </div>

                    <div id="Real-Slider" class="owl-carousel owl-theme">




    <?php
    $industries_query = new WP_Query(array(
        'post_type' => 'industries',
        'posts_per_page' => -1, // Change this to a number if you want to limit
    ));

    if ($industries_query->have_posts()) :
        while ($industries_query->have_posts()) : $industries_query->the_post();
            $learn_more_link = get_field('learn_more_'); // ACF Link field
            $right_arrow_image = get_field('right_arrow_image_'); // ACF Image (array)
            $categories = get_the_category(); // Get default WordPress categories
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>
            <div class="item">
                <ul class="real-content heading-panel">
                    <li>
                        <div class="real-image">
                            <?php if ($featured_img_url) : ?>
                                <img src="<?php echo esc_url($featured_img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/real-slider2.svg" alt="Default Image" />
                            <?php endif; ?>
                            <span>
                                <?php
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
                                }
                                ?>
                            </span>
                        </div>
                    </li>

                    <li>
                        <div class="real-content heading-pnel">
                            <h5><?php the_title(); ?></h5>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <?php if (!empty($learn_more_link)) : ?>
                                <a href="<?php echo esc_url($learn_more_link['url']); ?>" class="learlink" target="<?php echo esc_attr($learn_more_link['target']); ?>">
                                    <?php echo esc_html($learn_more_link['title']); ?>
                                    <?php if (!empty($right_arrow_image['url'])) : ?>
                                        <img src="<?php echo esc_url($right_arrow_image['url']); ?>" alt="<?php echo esc_attr($right_arrow_image['alt']); ?>" />
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/right-arrow.svg" alt="right arrow" />
                                    <?php endif; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>



                </div>
            </div>
        </section>
        <!-- section end-->

        <!-- section -->
        <section class="space pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-pnel success_caption mb-4 wow fadeInUp">
                            <h2><?php the_field('case_studies'); ?></h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="">
                            <?php
$success_image = get_field('success');
$success_image_url = !empty($success_image['url']) 
    ? $success_image['url'] 
    : get_template_directory_uri() . '/assets/images/success-img.svg';
?>

<div class="success_image_main" style="background-image: url('<?php echo esc_url($success_image_url); ?>');">

                                 <div class="success-detial">
                                        <span><?php the_field('finance_heading_'); ?></span>
                                        <h3><?php the_field('automating_finance_'); ?></h3>

                                        <ul>
                                            <li>
                                                <p>
                                                    <?php the_field('ai_automation'); ?><br />
                                                    <?php the_field('technologies'); ?>
                                                </p>
                                            </li>
                                            <li>
                                                <?php 
$link = get_field('_first_learn');
$image = get_field('first_learn_more_arrow_');

if ($link && $image) :
    $url = $link['url'];
    $title = $link['title'];
    $target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($target); ?>">
        <?php echo esc_html($title); ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </a>
<?php endif; ?>
                                            </li>
                                        </ul>
                                    </div>

                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end-->

        <section class="space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="SuperchargeStrip">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <div class="SuperchargeContent wow fadeInUp">
                                        <h3><?php the_field('superchange_heading_'); ?> <span class="Theme-Color"><?php the_field('workflow'); ?></span></h3>
                                        <p><?php the_field('superchangesubheading_'); ?></p>
                                    </div>
                                </div>

                               <?php
$talk_to_expert = get_field('talk_to_expert');
?>

<?php if (!empty($talk_to_expert)) : ?>
    <div class="col-sm-4">
        <a class="blue-btn blue_bfr_btn wow fadeInUp ml-lg-auto" 
           href="<?php echo esc_url($talk_to_expert['url']); ?>" 
           target="<?php echo esc_attr($talk_to_expert['target']); ?>">
            <?php echo esc_html($talk_to_expert['title']); ?>
            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z"
                    fill="white"
                ></path>
            </svg>
        </a>
    </div>
<?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="space ValuesSection pb-0">
            <div class="container p-0 ml-0 mw-100 overflow-hidden">
                <div class="row">
                    <?php
$hand_image = get_field('hand_');
$hand_image_url = !empty($hand_image['url']) 
    ? $hand_image['url'] 
    : get_template_directory_uri() . '/assets/images/hand.png';

$hand_image_alt = !empty($hand_image['alt']) 
    ? $hand_image['alt'] 
    : 'Hand Image';
?>

<div class="col-lg-5 col-md-6 col-12">
    <img src="<?php echo esc_url($hand_image_url); ?>" alt="<?php echo esc_attr($hand_image_alt); ?>" class="img-fluid" />
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
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="ValuesItems wow fadeInUp">
                            <h4><?php the_field('global_expertise'); ?></h4>
                            <p>
                                <?php the_field('global_expertise_subheading_'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="ValuesItems wow fadeInUp">
                            <h4><?php the_field('end-to-end__heading_'); ?></h4>
                            <p>
                                <?php the_field('end-to-end__subheading_'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="ValuesItems wow fadeInUp">
                            <h4><?php the_field('industry-specific_heading_'); ?></h4>
                            <p><?php the_field('industry-specific_subheading_'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="ValuesItems wow fadeInUp">
                            <h4><?php the_field('rapid_deployment_heading_'); ?></h4>
                            <p><?php the_field('rapid_deployment_subheading_'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="Competitive-Advantage space">
            <div class="container">
                <div class="AdvantageBox">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-pnel mb-5 wow fadeInUp">
                                <h2><?php the_field('competitive_advantage_heading_'); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
    <div class="col-lg-12">
        <div id="Advantage-Slider" class="owl-carousel owl-theme">
            <?php if (have_rows('advantage_slider')) : ?>
                <?php while (have_rows('advantage_slider')) : the_row(); 
                    $one_heading = get_sub_field('one_heading_');
                    $hybrid_heading = get_sub_field('hybrid_heading_');
                    $hybrid_subheading = get_sub_field('hybrid_subheading_');
                    $one_image = get_sub_field('one_image_');
                    $image_url = !empty($one_image['url']) ? $one_image['url'] : get_template_directory_uri() . '/assets/images/1.png';
                    $image_alt = !empty($one_image['alt']) ? $one_image['alt'] : 'Advantage Image';
                ?>
                    <div class="Advantage-Items">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="AdvantageImage">
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <div class="AdvantageContent">
                                    <?php if ($one_heading) : ?>
                                        <h4><?php echo esc_html($one_heading); ?></h4>
                                    <?php endif; ?>

                                    <?php if ($hybrid_heading) : ?>
                                        <h3><?php echo esc_html($hybrid_heading); ?></h3>
                                    <?php endif; ?>

                                    <?php if ($hybrid_subheading) : ?>
                                        <p><?php echo esc_html($hybrid_subheading); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

                </div>
            </div>
        </section>

        <section class="space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-pnel mb-5 wow fadeInUp">
                            <h2><?php the_field('blog_heading_'); ?></h2>
                        </div>
                    </div>
                </div>

            <div id="Blog-Slider" class="owl-carousel owl-theme">
    <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 4
    );
    $blog_query = new WP_Query($args);

    if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post();

            $learn_more = get_field('learn_more');
            $right_arrow = get_field('right_arrow_');
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $featured_image = $featured_image ? $featured_image : get_template_directory_uri() . '/assets/images/blog/placeholder.png';
    ?>
            <div class="item">
                <div class="Blog-Items wow fadeInUp">
                    <div class="Blog-Items-image">
                        <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="img-fluid" />
                    </div>

                    <div class="Blog-Items-Content">
                        <h4><?php the_title(); ?></h4>

                        <?php if ($learn_more) : ?>
                            <a href="<?php echo esc_url($learn_more['url']); ?>" target="<?php echo esc_attr($learn_more['target']); ?>" class="learlink">
                                <?php echo esc_html($learn_more['title']); ?>
                                <?php if (!empty($right_arrow['url'])) : ?>
                                    <img src="<?php echo esc_url($right_arrow['url']); ?>" alt="<?php echo esc_attr($right_arrow['alt']); ?>" />
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/right-arrow.svg" alt="Right Arrow" />
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
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

        <section class="space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="SuperchargeStrip Let-get">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <div class="SuperchargeContent">
                                        <div class="wow fadeInUp">
                                            <h3><?php the_field('lets_get'); ?> <span class="Theme-Color"><?php the_field('started_'); ?></span></h3>
                                            <h6><?php the_field('get_advanced_'); ?></h6>
                                            <p><?php the_field('get_automation_subheading_'); ?></p>
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
$image = get_field('mobile_image_');
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

       <?php get_footer(); ?>


       