<?php get_header(); ?>

<!-- Service Detail content section start -->
<section id="service-detail-content" class="space mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="service-content-main wow fadeInUp afterNone pb-5">

                    <?php 
                   
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    if ($featured_img_url): ?>
                        <img src="<?php echo esc_url($featured_img_url); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>" />
                    <?php endif; ?>

                    <div class="service-detial-span">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'case_category');
                        if (!empty($terms) && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                echo '<span>' . esc_html($term->name) . '</span>';
                            }
                        } else {
                            echo '<span>Uncategorized</span>';
                        }
                        ?>
                    </div>

                    <h2><?php the_title(); ?></h2>

					<?php $project_overview_text = get_field('project_overview_text'); ?>
<?php if ($project_overview_text): ?>
    <?php echo wp_kses_post($project_overview_text); ?>
<?php endif; ?>
                    

                </div>
				
                <!-- Tech Features -->
				

                <?php if (have_rows('project_details')): ?>
                    <div class="case-studiesBox">
						 <h2><?php the_field('cards_main_heading'); ?></h2>
                        <div class="row">
                            <?php while (have_rows('project_details')): the_row(); 
                                $heading = get_sub_field('heading');
                                $description = get_sub_field('description');
                                if ($heading || $description): ?>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="offer_card_gredient wow fadeInUp">
                                            <div class="offer_card_caption">
                                                <?php if ($heading): ?>
                                                    <p class="pb-0"><span class="Theme-Color"><?php echo esc_html($heading); ?>:</span></p>
                                                <?php endif; ?>
                                                <?php if ($description): ?>
                                                    <h3><?php echo esc_html($description); ?></h3>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif;
                            endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
				

                
                <div class="AfterBg mt-5 mb-5">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/after.png" class="img-fluid" alt="After Image" />
                </div>

                <!-- The Challenges -->
                <?php if ($the_challenges = get_field('second_section_heading')): ?>
                    <div class="TheChallenges mb-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-pnel real-caption wow fadeInUp mb-3 pb-3">
                                    <h2><?php echo esc_html($the_challenges); ?></h2>
                                    <?php if ($challenge_subheading2 = get_field('second_section_subheading')): ?>
                                       <?php echo wp_kses_post($challenge_subheading2); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <?php if (have_rows('second_section_cards')): ?>
                            <div class="row">
                                <?php while (have_rows('second_section_cards')): the_row(); 
                                    $image = get_sub_field('second_section_card_image');
                                    $heading = get_sub_field('second_section_card_heading');
                                    $subheading = get_sub_field('second_section_card_text');
                                ?>
                                    <div class="col-md-6">
                                        <div class="offer_card_gredient wow fadeInUp NewGridCard">
                                            <div class="offer_card_caption">
                                                <?php if (!empty($image)): ?>
                                                    <figure>
                                                        <img src="<?php echo esc_url($image['url']); ?>" class="attachment-full size-full wp-post-image" alt="<?php echo esc_attr($image['alt']); ?>" decoding="async" />
                                                    </figure>
                                                <?php endif; ?>
                                                <figcaption>
                                                    <?php if ($heading): ?>
                                                        <h3><?php echo esc_html($heading); ?></h3>
                                                    <?php endif; ?>
                                                    <?php if ($subheading): ?>
                                                        <p><?php echo esc_html($subheading); ?></p>
                                                    <?php endif; ?>
                                                </figcaption>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($challenge_subheading3 = get_field('second_section_last_text')): ?>
                    <div class="heading-pnel real-caption wow fadeInUp mb-3 pb-3">
                        <?php echo wp_kses_post($challenge_subheading3); ?>
                    </div>
                <?php endif; ?>

                <!-- The Solutions -->
                <?php if ($the_solutions = get_field('third_section_heading')): ?>
                    <div class="TheChallenges mb-5 SolutionsBox">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-pnel real-caption wow fadeInUp mb-3 pb-3">
                                    <h2><?php echo esc_html($the_solutions); ?></h2>
                                    <?php if ($solution_subheading1 = get_field('third_section_text')): ?>
                                        <?php echo wp_kses_post($solution_subheading1); ?>
                                    <?php endif; ?>
                                    <?php if ($solution_subheading2 = get_field('third_section_subheading')): ?>
                                        <h2><?php echo esc_html($solution_subheading2); ?></h2>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <?php if (have_rows('third_section_cards')): ?>
                            <div class="row">
                                <?php while (have_rows('third_section_cards')): the_row(); 
                                    $image = get_sub_field('third_section_card_image');
                                    $heading = get_sub_field('solution_heading');
                                    $subheading = get_sub_field('solution_subheading');
                                ?>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="offer_card_gredient wow fadeInUp">
                                            <div class="offer_card_caption">
                                                <?php if (!empty($image)): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                                <?php if ($heading): ?>
                                                    <h3><?php echo esc_html($heading); ?></h3>
                                                <?php endif; ?>
                                                <?php if ($subheading): ?>
                                                    <?php
$full_html = get_sub_field('solution_subheading'); 
$full_text = strip_tags($full_html);
?>
<div class="read-more-container">
	<div class="read-more-content">
		<?php echo wp_kses_post($full_html); ?>
</div>
  <a href="#" class="read-more-toggle">See More</a>
</div>

                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($solution_subheading3 = get_field('third_section_last_text')): ?>
                    <div class="heading-pnel real-caption wow fadeInUp mb-3 pb-3">
                        <?php echo wp_kses_post($solution_subheading3); ?>
                    </div>
                <?php endif; ?>

                <!-- After Image -->
                <div class="AfterBg mt-5 mb-5">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/after.png" class="img-fluid" alt="After Image" />
                </div>

                <!-- Impact & Results -->
                <?php if ($impact_results = get_field('fourth_section_heading')): ?>
                    <div class="TheChallenges mb-5 SolutionsBox ImpactResults">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-pnel real-caption wow fadeInUp mb-3 pb-3">
                                    <h2><?php echo esc_html($impact_results); ?></h2>
                                </div>
                            </div>
                        </div>

                        <div class="happy-client pb-0">
                            <div class="happy-client-outer">
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="happy-client-card wow fadeInUp">
                                            <?php if ($cost_heading = get_field('fourth_section_counter_heading')): ?>
                                                <h2><?php echo esc_html($cost_heading); ?></h2>
                                            <?php endif; ?>
                                            <p>
                                                <?php 
                                                if ($cost_savings = get_field('fourth_section_counter_subheading')) {
                                                    echo esc_html($cost_savings) . '<br />';
                                                }
                                                
                                                ?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="happy-client-card wow fadeInUp">
                                            <?php if ($eighty_five = get_field('counter_1')): ?>
                                                <h2 class="Count"><?php echo esc_html($eighty_five); ?></h2><span>%</span>
                                            <?php endif; ?>
                                            <?php if ($faster_calculations = get_field('counter_1_text')): ?>
                                                <p><?php echo esc_html($faster_calculations); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="happy-client-card wow fadeInUp">
                                            <?php if ($sixty = get_field('counter_2')): ?>
                                                <h2 class="Count"><?php echo esc_html($sixty); ?></h2><span>%</span>
                                            <?php endif; ?>
                                            <?php if ($engineering_efficiency = get_field('counter_2_text')): ?>
                                                <p><?php echo esc_html($engineering_efficiency); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="happy-client-card wow fadeInUp">
                                            <?php if ($thirty = get_field('counter_3')): ?>
                                                <h2 class="Count"><?php echo esc_html($thirty); ?></h2><span>%</span>
                                            <?php endif; ?>
                                            <?php if ($waste_reduction = get_field('counter_3_text')): ?>
                                                <p><?php echo esc_html($waste_reduction); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
<?php 
$fifth_section_text = get_field('fifth_section_text'); 
if (trim($fifth_section_text)) : ?>
    <div class="fifth-section-text">
        <?php echo wpautop(wp_kses_post($fifth_section_text)); ?>
    </div>
<?php endif; ?>

                <!-- Impact Features List -->
                <?php if (have_rows('impact_feature')): ?>
                    <div class="TheChallenges SolutionsBox ImpactResults policy-content-main">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-pnel real-caption wow fadeInUp">
                                    <h2><?php the_field('fifth_section_heading'); ?></h2>
								
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<!-- Service Detail content section end -->

<section class="space pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="SuperchargeStrip Let-get">
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <div class="SuperchargeContent">
                                <div class="wow fadeInUp">
                                    <h3>
                                        <?php if ($lets_get = get_field('cta_heading')) echo esc_html($lets_get); ?> 
                                        <span class="Theme-Color">
                                            <?php if ($started = get_field('cta_highlighted_heading')) echo esc_html($started); ?>
                                        </span>
                                    </h3>
                                    <?php if ($get_advanced = get_field('cta_subheading')): ?>
                                        <h6><?php echo esc_html($get_advanced); ?></h6>
                                    <?php endif; ?>
                                    <?php if ($ai_automation = get_field('cta_text')): ?>
                                        <p><?php echo esc_html($ai_automation); ?></p>
                                    <?php endif; ?>
                                </div>

                                <div class="hero_link_btn">
                                    <?php
                                    $first_link = get_field('cta_button_1');
                                    $second_link = get_field('cta_button_2');
                                    if ($first_link): ?>
                                        <a class="blue-btn wow fadeInUp" style="animation-delay: 0.4s;"
                                           href="<?php echo esc_url($first_link['url']); ?>"
                                           target="<?php echo esc_attr($first_link['target'] ?: '_self'); ?>">
                                            <?php echo esc_html($first_link['title']); ?>
                                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619V1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($second_link): ?>
                                        <a class="blue-btn blue_bfr_btn wow fadeInUp ml-2" style="animation-delay: 0.4s;"
                                           href="<?php echo esc_url($second_link['url']); ?>"
                                           target="<?php echo esc_attr($second_link['target'] ?: '_self'); ?>">
                                            <?php echo esc_html($second_link['title']); ?>
                                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619V1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <?php 
                            $image = get_field('cta_image');
                            if (!empty($image)): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid wow fadeInUp" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
