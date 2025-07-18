<?php

 get_header(); ?>

<!-- Comman banner section start -->

<?php
$image = get_field('main_banner_image');
$image_url = $image['url'];
?>

<section id="cm-banner" style="background-image: url('<?php echo esc_url($image_url); ?>');">
  
 <div class="container">
    <div class="row align-items-center">
       <div class="col-sm-12 col-md-7 col-lg-8">
          <div class="banner-left-side wow fadeIn">
             <h1><?php the_title(); ?></h1>
          </div>
       </div>
       <div class="col-sm-12 col-md-5 col-lg-4">
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
<!-- Service Tab section start -->
<section id="service-tab" class="service-tab">
 <div class="container">
    <div class="ser-tab">
       <a href="#description" class="tab-links active"><?php the_field('tab_first_title'); ?></a>
       <a href="#industry-applications" class="tab-links"><?php the_field('tab_second_title'); ?></a>
       <a href="#choose-telesto" class="tab-links"><?php the_field('tab_third_title'); ?></a>
       <a href="#ecosystem" class="tab-links"><?php the_field('tab_fourth_title'); ?></a>
       <a href="#faq" class="tab-links"><?php the_field('tab_fifth_title'); ?></a>
    </div>
 </div>
</section>
<section class="service-detail space" id="description">
 <div class="container">
    <div class="row">
       <div class="col-md-6 col-lg-6 col-12">
          <div class="service-detial-img">
  <?php
  $image = get_field('tab_one_image');
  if (!empty($image)) :
  ?>
    <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>">
  <?php endif; ?>
</div>

       </div>
       <div class="col-md-6 col-lg-6 col-12">
         <div class="service-detial-content">
            <div class="service-detial-span">
               <span>  <?php
                        $terms = get_the_terms(get_the_ID(), 'service_category');
                        if (!empty($terms) && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                echo '<span>' . esc_html($term->name) . '</span>';
                            }
                        } else {
                            echo '<span>Uncategorized</span>';
                        }
                        ?></span>
            </div>
            <h2><?php the_field('tab_one_heading'); ?></h2>
            <p><?php the_field('tab_one_text'); ?></p>
            <h5><?php the_field('list__main_heading'); ?></h5>
            <?php if( have_rows('tab_one_list') ): ?>
    <ul>
        <?php while( have_rows('tab_one_list') ): the_row(); 
            $heading = get_sub_field('list_heading');
            $subheading = get_sub_field('list_text');
        ?>
            <li>
                <?php echo esc_html($heading); ?>
                <?php if( $subheading ): ?>
                    <p><?php echo esc_html($subheading); ?></p>
                <?php endif; ?>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>

          <?php
$further_link = get_field('first_tab_section_button');
if( $further_link ):
    $link_url = $further_link['url'];
    $link_title = $further_link['title'];
    $link_target = $further_link['target'] ? $further_link['target'] : '_self';
?>
<div class="service-detial-button">
    <a class="blue-btn wow fadeInUp" style="animation-delay: 0.4s;" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
        <?php echo esc_html( $link_title ); ?>
        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"/>
        </svg>
    </a>
</div>
<?php endif; ?>

        </div>
     </div>
  </div>
</div>
</section>
<!-- Industry applications sections start -->
<section id="industry-applications" class="industry-applications-section">
 <div class="container">
    <div class="row">
       <div class="col-lg-12 col-md-12 col-12">
          <div class="industry-applications-heading">
             <h2><?php the_field('tab_two_section_heading'); ?></h2>
          </div>
       </div>
    </div>
<div class="row">
   <div class="col-lg-12 col-md-12 col-12">
      <div class="owl-carousel" id="industry-silder">
         <?php
         $terms = get_terms(array(
            'taxonomy' => 'case_category',
            'hide_empty' => false,
         ));

         if (!empty($terms) && !is_wp_error($terms)) :
            foreach ($terms as $term) :
             
               $description = get_field('case_description', 'case_category_' . $term->term_id);
         ?>
               <div class="item">
                  <div class="industry-applications-card">
                     <h4><?php echo esc_html($term->name); ?></h4>
                     <?php if ($description) : ?>
                        <div class="industry-applications-description">
                           <?php echo wp_kses_post($description); ?>
                        </div>
                     <?php endif; ?>
                     <div class="industry-applications-button">
                        <a class="blue-btn wow fadeInUp" style="animation-delay: 0.4s;" href="<?php echo esc_url(get_term_link($term)); ?>">
                           <?php the_field('case_studies_button__text'); ?>
                           <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"/>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
         <?php
            endforeach;
         endif;
         ?>
      </div>
   </div>
</div>



</div>
</section>
<!-- Industry applications sections end -->

<!-- Why choose section start -->
<section id="choose-telesto">
  <?php
  $hand_image = get_field('tab_three_section_image');
  if( !empty($hand_image) ): ?>
    <div class="robot-hand">
        <img src="<?php echo esc_url($hand_image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($hand_image['alt']); ?>">
    </div>
  <?php endif; ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-5 col-12">
        <div class="choose-telesto-process">
          <h2><?php the_field('tab_third_section_first_heading'); ?> <span><?php the_field('highlighted_heading'); ?></span><br><?php the_field('tab_third_second__heading'); ?></h2>
          <p><?php the_field('tab_third_section_text'); ?></p>
          <?php
          $link = get_field('tab_third_section_button');
          if( $link ):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
              <a class="blue-btn wow fadeInUp" style="animation-delay: 0.4s;" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                  <?php echo esc_html($link_title); ?>
                  <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"/>
                  </svg>
              </a>
          <?php endif; ?>
        </div>
      </div>

      <?php if( have_rows('tab_third_cards') ): ?>
      <div class="col-lg-7 col-md-7 col-12">
        <div class="choose-telesto-list-wrapper">
          <?php while( have_rows('tab_third_cards') ): the_row(); 
              $heading = get_sub_field('tab_third_card_heading');
              $image = get_sub_field('tab_third__card_image');
              $subheading = get_sub_field('tab_third__card_text');
          ?>
            <div class="choose-telesto-list">
              <?php if( !empty($image) ): ?>
                <div class="choose-telesto-list-icon">
                  <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
              <?php endif; ?>
              <div class="choose-telesto-list-inner">
                <?php if( !empty($heading) ): ?>
                  <h3><?php echo esc_html($heading); ?></h3>
                <?php endif; ?>
                <?php if( !empty($subheading) ): ?>
                  <p><?php echo esc_html($subheading); ?></p>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="our-process">
  <div class="human-hand">
  <?php 
    $image = get_field('fourth_section_image');
    if( !empty($image) ): ?>
      <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>">
  <?php endif; ?>
</div>

    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-12">
          <div class="our-process-heading">
            <h2><span><?php the_field('fourth_section_highlighted_heading'); ?></span> <?php the_field('fourth_section_heading'); ?></h2>
          </div>
        </div>
      </div>
      <?php if ( have_rows('fourth__section_card_items') ) : ?>
  <div class="row">
    <?php $i = 0; ?>
    <?php while ( have_rows('fourth__section_card_items') ) : the_row(); ?>
      <?php
        $no = get_sub_field('fourth_section_card_number');
        $heading = get_sub_field('fourth_section_card_heading');
        $subheading = get_sub_field('fourth_section_card__text');
        $link = get_sub_field('fourth_secton_button');
        $link_url = $link['url'] ?? '';
        $link_title = $link['title'] ?? '';
        $link_target = $link['target'] ?? '_self';

        // Determine additional classes based on the index
        $additional_class = '';
        if ( $i === 1 ) {
          $additional_class = ' mt-60';
        } elseif ( $i === 2 ) {
          $additional_class = ' mt-120';
        }
      ?>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="process-card<?php echo esc_attr( $additional_class ); ?>">
          <div class="process-number<?php echo $i === 0 ? ' side-line1' : ( $i === 1 ? ' top-line1 side-line2' : ' top-line1' ); ?>">
            <span><?php echo esc_html( $no ); ?></span>
          </div>
          <h3><?php echo wp_kses_post( $heading ); ?></h3>
          <p><?php echo wp_kses_post( $subheading ); ?></p>
          <?php if ( $link_url && $link_title ) : ?>
            <a class="blue-btn wow fadeInUp mt-4" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
              <?php echo esc_html( $link_title ); ?>
              <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"></path>
              </svg>
            </a>
          <?php endif; ?>
        </div>
      </div>
      <?php $i++; ?>
    <?php endwhile; ?>
  </div>
<?php endif; ?>

    </div>
  </div>
</section>

<!-- Our Process section end -->
<!-- Ecosystem section start -->
<section id="ecosystem">
   <div class="container">
      <div class="row">
         <div class="col-lg-5 col-md-8 col-12">
            <div class="ecosystem-heading">
               <h2><?php the_field('fifth_section_first_heading'); ?> <span><?php the_field('fifth_section_highlightd_heading'); ?></span> <?php the_field('fifth_section_second_heading'); ?></h2>
            </div>
         </div>
      </div>
      <?php if( have_rows('fifth_section_cards') ): ?>
    <div class="row">
        <?php while( have_rows('fifth_section_cards') ): the_row(); ?>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="ecosystem-card">
                   <?php the_sub_field('fifth_section_cards_heading'); ?>
					
                  
					<div class="read-more-container">
  <div class="read-more-content">
    <?php echo wp_kses_post(get_sub_field('fifth_section_card_list')); ?>
  </div>
  <a href="#" class="read-more-toggle">See More</a>
</div>

					 
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

   </div>
</section>
<!-- Ecosystem section end -->


<!-- faq start -->
<?php if ( have_rows('faq_items') ) : ?>
<section id="faq" class="space">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <div class="accordion" id="accordionExample">
          <h2><?php the_field('tab_six_section_heading')?></h2>
          <?php $i = 0; ?>
          <?php while ( have_rows('accordion') ) : the_row(); ?>
            <?php
              $i++;
              $question = get_sub_field('accordion_heading');
              $answer = get_sub_field('accordion_text');
              $heading_id = 'heading' . $i;
              $collapse_id = 'collapse' . $i;
              $show_class = ($i === 1) ? 'show' : '';
              $aria_expanded = ($i === 1) ? 'true' : 'false';
            ?>
            <div class="card">
              <div class="card-header" id="<?php echo esc_attr($heading_id); ?>">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left <?php echo ($i !== 1) ? 'collapsed' : ''; ?>" type="button" data-toggle="collapse" data-target="#<?php echo esc_attr($collapse_id); ?>" aria-expanded="<?php echo esc_attr($aria_expanded); ?>" aria-controls="<?php echo esc_attr($collapse_id); ?>">
                    <?php echo esc_html($question); ?>
                  </button>
                </h2>
              </div>
              <div id="<?php echo esc_attr($collapse_id); ?>" class="collapse <?php echo esc_attr($show_class); ?>" aria-labelledby="<?php echo esc_attr($heading_id); ?>" data-parent="#accordionExample">
                <div class="card-body">
                  <?php echo wp_kses_post($answer); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- end faq -->

<!-- More services section start -->
<section>
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 d-flex align-items-center">
            <div class="heading-pnel wow fadeInUp">
                <h2><?php the_field('services_heading'); ?></h2>
            </div>
        </div>
    </div>
    <?php
    // Define the query arguments to fetch 'service' posts, excluding the current post
    $args = array(
        'post_type'      => 'service',
        'posts_per_page' => -1, // Adjust the number as needed
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post__not_in'   => array( get_the_ID() ), // Exclude current post
    );

    // Execute the query
    $service_query = new WP_Query($args);

    // Check if there are any posts to display
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
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_field('service_card_button'); ?>
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
</div>

</section>
<!-- More services section end -->
	
	

   <?php get_footer(); ?>