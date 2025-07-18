<?php /* Template Name: Homepage */

get_header(); ?>

        <!-- banner -->
<section class="banner p-relative">

    <?php
    $video_url = get_field("hero_section_video_url");
    if ($video_url): ?>
        <video autoplay muted loop playsinline class="bg-video">
            <source src="<?php echo esc_url($video_url); ?>" type="video/mp4" />
        </video>
    <?php endif;
    ?>

    <div class="container" role="listbox">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="hero-left-caption">
                   <?php if (have_rows("tech_list")): ?>
    <ul class="pl-4 wow fadeInUp">
        <?php while (have_rows("tech_list")):
            the_row(); ?>
            <li><?php the_sub_field("tech_item"); ?></li>
        <?php
        endwhile; ?>
    </ul>
<?php else: ?>
    <p>No technologies found.</p>
<?php endif; ?>

                    <h1 class="wow fadeInUp" style="animation-delay: 0.2s;">
                        <span><?php the_field("hero_section_heading"); ?></span>
                        
                    </h1>
                    <p class="wow fadeInUp" style="animation-delay: 0.4s;">
                        <?php the_field("hero_section_text"); ?><br />
                       
                    </p>
					<?php ?>

                    <div class="hero_link_btn">
                        <?php
                        $first_link = get_field("banner_first_link_");
                        $second_link = get_field("banner_second_link_");
                        ?>

                        <?php if ($first_link): ?>
                            <a class="blue-btn wow fadeInUp" style="animation-delay: 0.4s;" href="<?php echo esc_url(
                                $first_link["url"]
                            ); ?>" target="<?php echo esc_attr(
    $first_link["target"] ?: "_self"
); ?>">
                                <?php echo esc_html($first_link["title"]); ?>
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619V1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"/>
                                </svg>
                            </a>
                        <?php endif; ?>

                        <?php if ($second_link): ?>
                            <a class="blue-btn blue_bfr_btn wow fadeInUp ml-2" style="animation-delay: 0.4s;" href="<?php echo esc_url(
                                $second_link["url"]
                            ); ?>" target="<?php echo esc_attr(
    $second_link["target"] ?: "_self"
); ?>">
                                <?php echo esc_html($second_link["title"]); ?>
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619V1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <?php
                $video_second = get_field("video_second");
                if ($video_second): ?>
                    <video class="mobile-video mw-100" autoplay muted loop playsinline>
                        <source src="<?php echo esc_url(
                            $video_second
                        ); ?>" type="video/mp4" />
                    </video>
                <?php endif;
                ?>
            </div>
        </div>
    </div>
</section>


        
        <!-- section -->
<section class="logo_space">
    <div class="container">
        <div class="row logo_bdr">

            <!-- Logo Title Column -->
            <div class="col-lg-2 col-md-12 col-12 d-flex align-items-center">
                <div class="logo_slider_title wow fadeInUp">
                    <h4><?php the_field("partner_heading_"); ?></h4>
                </div>
            </div>

            <!-- Logo Carousel Column -->
<div class="col-lg-10 col-md-12 col-12 d-flex align-items-center">
    <div id="LogoSlider" class="owl-carousel pb-0">
        <?php if (have_rows("partner_logo")): ?>
            <?php while (have_rows("partner_logo")):
                the_row();
                $logo = get_sub_field("logos");
                if ($logo): ?>
                <div class="item">
                    <div class="logo_caption">
                        <img src="<?php echo esc_url(
                            $logo["url"]
                        ); ?>" alt="<?php echo esc_attr($logo["alt"]); ?>" />
                    </div>
                </div>
            <?php endif;
            endwhile; ?>
        <?php else: ?>
            <p>No partner logos found.</p>
        <?php endif; ?>
    </div>
</div>

        </div>
    </div>
</section>
<!-- section end -->


        <!-- section -->
        <section class="space">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-12 d-flex align-items-center">
                        <div class="heading-pnel wow fadeInUp">
                            <h2><?php the_field("services_main_heading"); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                        <div class="heading-pnel wow fadeInUp">
                            <p><?php the_field("services_main_subheading"); ?></p>
                        </div>
                    </div>
                  <?php
$link = get_field('services_button_link');
if ( $link ):
    
    $url    = esc_url( $link['url'] );
    $title  = esc_html( $link['title'] );
    $target = $link['target'] ? esc_attr( $link['target'] ) : '_self';
    
    $rel    = $target === '_blank' ? 'noopener noreferrer' : '';
    ?>
    
    <div class="col-lg-3 col-md-4 col-12 mobile-none">
      <a class="blue-btn blue_bfr_btn wow fadeInUp ml-auto"
         href="<?php echo $url; ?>"
         target="<?php echo $target; ?>"
         rel="<?php echo $rel; ?>"
      >
        <?php echo $title; ?>

        
        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194
                   L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619
                   C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619
                   C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619
                   C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619
                   L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652
                   L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z"
                fill="white"></path>
        </svg>
      </a>
    </div>

<?php
endif;
?>

                </div>

              <?php
    
    $args = array(
        'post_type'      => 'service',
        'posts_per_page' => -1, 
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post__not_in'   => array( get_the_ID() ), 
    );

    
    $service_query = new WP_Query($args);

    
    if ($service_query->have_posts()) : ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="owl-carousel" id="service-slider">
                    <?php while ($service_query->have_posts()) : $service_query->the_post(); ?>
                        <div class="item">
                            <div class="offer_card_gredient">
                                <div class="offer_card_caption">
                                    <div class="offer_card_img">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('full'); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-service-icon.svg" alt="Default Service Icon" />
                                        <?php endif; ?>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo get_the_excerpt(); ?></p>
<a href="<?php the_permalink(); ?>" class="service-btn">
    <?php 
    
    $btn_text = get_field('single_service_button_text1');
    echo esc_html( $btn_text ?: 'Learn More' );
    ?>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/right-arrow.svg" alt="Right Arrow" />
</a>

                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    
    <div class="row align-items-center">
              <?php
$btn = get_field('all_services_button_link');
if ( $btn ):
    $url    = esc_url( $btn['url'] );
    $title  = esc_html( $btn['title'] );
    $target = $btn['target'] ? esc_attr( $btn['target'] ) : '_self';
?>
<div class="row align-items-center">
  <div class="col-lg-12 mt-3 desktop-none">
    <a class="blue-btn blue_bfr_btn wow fadeInUp mr-auto"
       href="<?php echo $url; ?>"
       target="<?php echo $target; ?>">
       <?php echo $title; ?>
       <!-- SVG icon -->
       <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"/>
       </svg>
    </a>
  </div>
</div>
<?php endif; ?>

            </div>
</div>

        </section>
        <!-- section end-->

        <!-- section -->
       <section class="space pt-0">
    <div class="container">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-6 col-md-12 col-12 pr-lg-5 pr-md-5 pr-0">
                <div class="choose_image wow fadeInUp">
                    <div class="choose_top_text">
                        <?php
                        $check_image = get_field("information_iconbox1_image");
                        if (!empty($check_image)): ?>
                            <img src="<?php echo esc_url(
                                $check_image["url"]
                            ); ?>" alt="<?php echo esc_attr(
    $check_image["alt"]
); ?>" />
                        <?php endif;
                        ?>

                        <p><?php the_field("information_iconbox1_text"); ?></p>
                    </div>

                    <?php
                    $image = get_field("information_main_image");
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url(
                            $image["url"]
                        ); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" />
                    <?php endif;
                    ?>

                    <div class="choose_bottom_text">
                        <?php
                        $right_thumb_image = get_field("information_iconbox2_image");
                        if (!empty($right_thumb_image)): ?>
                            <img src="<?php echo esc_url(
                                $right_thumb_image["url"]
                            ); ?>" alt="<?php echo esc_attr(
    $right_thumb_image["alt"]
); ?>" />
                        <?php endif;
                        ?>

                        <p><?php the_field("enhance"); ?></p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6 col-md-12 col-12 pl-lg-5 pl-lg-3">
                <div class="choose_caption heading-pnel pl-lg-5 pl-0 wow fadeInUp">
                    <h2><?php the_field("information_heading"); ?></h2>
                    <h3><?php the_field("information_list__heading"); ?></h3>

                    <?php if (have_rows("information_list")): ?>
                        <ul>
                            <?php while (have_rows("information_list")):
                                the_row(); ?>
                                <li><p><?php the_sub_field(
                                    "all_feature"
                                ); ?></p></li>
                            <?php
                            endwhile; ?>
                        </ul>
                    <?php else: ?>
                        <p>No key features found.</p>
                    <?php endif; ?>

                    <h3 class="pt-lg-5 pt-md-5 pt-3"><?php the_field(
                        "features_main_heading"
                    ); ?></h3>

                    <div class="choose-card">
                        <ul>
                            <?php if (have_rows("features")): ?>
                                <?php while (have_rows("features")):
                                    the_row(); ?>
                                    <li class="choose_bg">
                                        <div class="choose_detail">
                                            <?php
                                            $image = get_sub_field(
                                                "feature_images"
                                            );
                                            if ($image): ?>
                                                <img src="<?php echo esc_url(
                                                    $image["url"]
                                                ); ?>" alt="<?php echo esc_attr(
    $image["alt"]
); ?>" />
                                            <?php endif;
                                            ?>
                                            <p><?php the_sub_field(
                                                "feature_heading"
                                            ); ?></p>
                                        </div>
                                    </li>
                                <?php
                                endwhile; ?>
                            <?php else: ?>
                                <p>No trust features found.</p>
                            <?php endif; ?>
                        </ul>

                        <ul class="choose_year">
                            <li><span><?php the_field(
                                "counter_number"
                            ); ?></span></li>
                            <li>
								<?php $years_in_ai_ = get_field('counter_heading'); ?>
                              
                                   <?php echo wp_kses_post($years_in_ai_); ?>

                                   
                                
								<?php ?>
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
         <section class="space pt-0 ">
            <div class="container">
            <div class="row align-items-center">
                     <div class="col-lg-9 col-md-8 col-12 mb-5">
                        <div class="heading-pnel real-caption wow fadeInUp">
                            <h2><?php the_field("case_study_main_heading"); ?></h2>
                            <p><?php the_field("case_study_main_subheading"); ?></p>
                        </div>
                    </div>
             <?php 
$link = get_field('case_study_link_button');

if ( is_array($link) && !empty($link['url']) && !empty($link['title']) ) :
    $link_url = esc_url($link['url']);
    $link_title = esc_html($link['title']);
    $link_target = isset($link['target']) ? esc_attr($link['target']) : '_self';
?>
    <div class="col-lg-3 col-md-4 col-12 mb-5 mobile-none">
        <a class="blue-btn blue_bfr_btn wow fadeInUp ml-auto" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>" style="visibility: visible;">
            <?php echo $link_title; ?>
            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"></path>
            </svg>
        </a>
    </div>
<?php endif; ?>


                </div>
                </div>
     <div class="ApplicationsSection">
    <div class="container">
        <div class="row">
            <div id="Real-Slider" class="owl-carousel owl-theme common-arrow">
                <?php
                $casestudies_query = new WP_Query([
                    'post_type'      => 'casestudies',
                    'posts_per_page' => -1,
                ]);

                if ( $casestudies_query->have_posts() ) :
                    while ( $casestudies_query->have_posts() ) :
                        $casestudies_query->the_post();
                        $featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                        $terms = get_the_terms( get_the_ID(), 'case_category' );
                        ?>
                        <div class="item">
                            <ul class="real-content heading-panel">
                                <li>
                                    <div class="real-image">
                                        <?php if ( $featured_img_url ) : ?>
                                            <img src="<?php echo esc_url( $featured_img_url ); ?>" alt="<?php the_title_attribute(); ?>" />
                                        <?php else : ?>
                                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/real-slider2.svg' ); ?>" alt="Default Image" />
                                        <?php endif; ?>
                                        <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
                                            <span>
                                                <?php
                                                foreach ( $terms as $term ) {
                                                    echo esc_html( $term->name ) . ' ';
                                                }
                                                ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="real-content heading-panel">
                                        <h5><?php the_title(); ?></h5>
                                        <p><?php echo get_the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="learlink">
    <?php
    
    $btn_text = get_field('single_case_studies_button');

    
    if ( empty( $btn_text ) ) {
        $btn_text = 'Learn More'; 
    }

    
    echo esc_html( $btn_text );
    ?>
    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icons/right-arrow.svg' ); ?>" alt="right arrow" />
</a>

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
</div>

        </section>
        <!-- section end-->

        <!-- section -->
    <section class="space pt-0">
    <div class="container">
        
    <div class="row align-items-center">
    <div class="col-lg-9 col-md-8 col-12 mb-5">
        <div class="heading-pnel real-caption wow fadeInUp" style="visibility: visible;">
           <h2><?php the_field("case_studies_2_heading"); ?></h2>
        </div>
    </div>
<?php
$link = get_field('all_case_studies_link');
if( $link ):
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
?>
    <div class="col-lg-3 col-md-4 col-12 mb-5 mobile-none">
        <a class="blue-btn blue_bfr_btn wow fadeInUp ml-auto" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="visibility: visible;">
            <?php echo esc_html( $link_title ); ?>
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

       
        <div class="row">
    <div class="col-12">
        <div class="Case-Studies-Box">
            <?php
            $args = array(
                'post_type' => 'casestudies',
                'posts_per_page' => 3,
                'order' => 'ASC',
            );
            $case_query = new WP_Query($args);

            if ($case_query->have_posts()) :
                while ($case_query->have_posts()) : $case_query->the_post();

                    
                    $bg_image = get_the_post_thumbnail_url(get_the_ID(), 'full') 
                        ?: get_template_directory_uri() . '/assets/images/default-bg.jpg';

                    
                    $terms = get_the_terms(get_the_ID(), 'case_category');
                    $category_name = !empty($terms) && !is_wp_error($terms) ? $terms[0]->name : 'Uncategorized';
            ?>
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
    <p><?php echo wp_trim_words( get_the_excerpt(), 25, '…' ); ?></p>
  </li>
  <li>
    <?php 
      
      $learn_more_text = get_field('case_study_single_post_button'); 
    ?>
    <a href="<?php the_permalink(); ?>" class="learlink">
      <?php 
        
        echo esc_html( $learn_more_text ?: 'Learn More' ); 
      ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/right-arrow.svg" alt="right arrow" />
    </a>
  </li>
</ul>

                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No case studies found.</p>';
            endif;
            ?>
        </div>
    </div>

    <div class="row align-items-center">
        <?php
        $link = get_field('all_case_studies_link');
        if ($link):
            $link_url = esc_url($link['url']);
            $link_title = esc_html($link['title']);
            $link_target = $link['target'] ? esc_attr($link['target']) : '_self';
        ?>
        <div class="col-lg-12 mt-3 desktop-none">
            <a class="blue-btn blue_bfr_btn wow fadeInUp mr-auto" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>" style="visibility: visible;">
                <?php echo $link_title; ?>
                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"/>
                </svg>
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>
		</div>

</section>


        <!-- section end-->

        <section class="space pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="SuperchargeStrip">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <div class="SuperchargeContent wow fadeInUp">
                                        <h3><?php the_field(
                                            "cta_heading"
                                        ); ?> <span class="Theme-Color"><?php the_field(
     "cta_highlighted_text"
 ); ?></span></h3>
                                        <p><?php the_field(
                                            "cta_text"
                                        ); ?></p>
                                    </div>
                                </div>

                               <?php $talk_to_expert = get_field(
                                   "cta_button"
                               ); ?>

<?php if (!empty($talk_to_expert)): ?>
    <div class="col-sm-4">
        <a class="blue-btn blue_bfr_btn wow fadeInUp ml-lg-auto" 
           href="<?php echo esc_url($talk_to_expert["url"]); ?>" 
           target="<?php echo esc_attr($talk_to_expert["target"]); ?>">
            <?php echo esc_html($talk_to_expert["title"]); ?>
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
            $hand_image = get_field("our_values_image");
            $hand_image_url = !empty($hand_image["url"])
                ? $hand_image["url"]
                : get_template_directory_uri() . "/assets/images/hand.png";

            $hand_image_alt = !empty($hand_image["alt"])
                ? $hand_image["alt"]
                : "Hand Image";
            ?>

            <div class="col-lg-5 col-md-6 col-12">
                <img src="<?php echo esc_url(
                    $hand_image_url
                ); ?>" alt="<?php echo esc_attr(
    $hand_image_alt
); ?>" class="img-fluid" />
            </div>

            <div class="col-lg-5 col-md-6 col-12">
                <div class="choose_caption heading-pnel wow fadeInUp">
                    <h2><?php the_field("our_values_heading_"); ?></h2>
                    <p><?php the_field("our_values_subheading_"); ?></p>
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


  <?php if (have_rows('values_list')): ?>
<div class="row">
    <?php while (have_rows('values_list')): the_row(); 
        $heading   = get_sub_field('values_list__heading');
        $subheading = get_sub_field('values_list_subheading');
        $icon      = get_sub_field('our_values_icon'); 
    ?>
    <div class="col-md-6 col-lg-3">
        <div class="ValuesItems wow fadeInUp">
            <?php if ($icon && is_array($icon)): ?>
                <img 
                    src="<?php echo esc_url($icon['sizes']['thumbnail'] ?? $icon['url']); ?>" 
                    alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>" 
                    class="values-icon"
                />
            <?php endif; ?>

            <?php if ($heading): ?>
                <h4><?php echo esc_html($heading); ?></h4>
            <?php endif; ?>
            <?php if ($subheading): ?>
                <p><?php echo esc_html($subheading); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>


            </div>
        </section>

        <section class="Competitive-Advantage space">
            <div class="container">
                <div class="AdvantageBox">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-pnel mb-5 wow fadeInUp">
                                <h2><?php the_field(
                                    "slider_main_heading"
                                ); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
    <div class="col-lg-12">
        <div id="Advantage-Slider" class="owl-carousel owl-theme">
            <?php if (have_rows("slider")): ?>
                <?php while (have_rows("slider")):

                    the_row();
                    $one_heading = get_sub_field("one_heading_");
                    $hybrid_heading = get_sub_field("slider_card_heading");
                    $hybrid_subheading = get_sub_field("slider_card_subheading");
                    $one_image = get_sub_field("slider_card_image");
                    $image_url = !empty($one_image["url"])
                        ? $one_image["url"]
                        : get_template_directory_uri() . "/assets/images/1.png";
                    $image_alt = !empty($one_image["alt"])
                        ? $one_image["alt"]
                        : "Advantage Image";
                    ?>
                    <div class="Advantage-Items">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="AdvantageImage">
                                    <img src="<?php echo esc_url(
                                        $image_url
                                    ); ?>" alt="<?php echo esc_attr(
    $image_alt
); ?>" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <div class="AdvantageContent">
                                    <?php if ($one_heading): ?>
                                        <h4><?php echo esc_html(
                                            $one_heading
                                        ); ?></h4>
                                    <?php endif; ?>

                                    <?php if ($hybrid_heading): ?>
                                        <h3><?php echo esc_html(
                                            $hybrid_heading
                                        ); ?></h3>
                                    <?php endif; ?>

                                    <?php if ($hybrid_subheading): ?>
                                        <p><?php echo esc_html(
                                            $hybrid_subheading
                                        ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

                </div>
            </div>
        </section>

        <section class="space pb-0 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-pnel mb-5 wow ">
                            <h2><?php the_field("blog_heading_"); ?></h2>
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

            
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if (!$featured_image) {
                $featured_image = get_template_directory_uri() . '/assets/images/blog/placeholder.png';
            }

           
            $right_arrow = get_field('right_arrow_');
            ?>
            <div class="item">
                <div class="Blog-Items wow">
                    <div class="Blog-Items-image">
                        <img src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid" />
                    </div>

                  <div class="Blog-Items-Content">
    <h4><?php the_title(); ?></h4>
    <?php 
        
        $btn_text = get_field('blog_post_button');
    ?>
    <a href="<?php the_permalink(); ?>" class="learlink">
        <?php 
            
            echo esc_html( $btn_text ?: 'Learn More' ); 
        ?>
        <?php if ( ! empty( $right_arrow['url'] ) ): ?>
            <img src="<?php echo esc_url( $right_arrow['url'] ); ?>" alt="<?php echo esc_attr( $right_arrow['alt'] ); ?>" />
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

        <section class="space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="SuperchargeStrip Let-get">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <div class="SuperchargeContent">
                                        <div class="wow fadeInUp">
                                            <h3><?php the_field(
                                                "cta_section2_heading"
                                            ); ?> <span class="Theme-Color"><?php the_field(
     "cta_section2_highlighted_heading"
 ); ?></span></h3>
                                            <h6><?php the_field(
                                                "cta_section2_subheading"
                                            ); ?></h6>
                                            <p><?php the_field(
                                                "cta_section2_text"
                                            ); ?></p>
                                        </div>
                                        
                                        <?php
                                        $link = get_field("cta_section2_button");
                                        if ($link):

                                            $link_url = $link["url"];
                                            $link_title = $link["title"];
                                            $link_target = $link["target"]
                                                ? $link["target"]
                                                : "_self";
                                            ?>
    <a class="blue-btn blue_bfr_btn wow fadeInUp mt-4" href="<?php echo esc_url(
        $link_url
    ); ?>" target="<?php echo esc_attr($link_target); ?>">
        <?php echo esc_html($link_title); ?>
        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z"
                fill="white"
            ></path>
        </svg>
    </a>
<?php
                                        endif;
                                        ?>

                                    </div>
                                </div>

                                <div class="col-sm-4">
                                     <?php
                                     $image = get_field("cta_section2_image");
                                     if ($image): ?>
    <img src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr(
    $image["alt"]
); ?>" />
<?php endif;
                                     ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <?php get_footer(); ?>