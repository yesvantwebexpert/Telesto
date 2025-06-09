<?php get_header(); ?>

<!-- Service Detail content section start -->
<section id="service-detail-content" class="space mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="service-content-main wow fadeInUp afterNone pb-5">

                    <?php 
                    // Featured image
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

                    <?php if ($title_subheading = get_field('title_subheading')): ?>
                        <h2><?php echo esc_html($title_subheading); ?></h2>
                    <?php endif; ?>

                    <?php if (has_excerpt()): ?>
                        <p><?php echo get_the_excerpt(); ?></p>
                    <?php endif; ?>

                    <?php if ($project_heading = get_field('project_heading')): ?>
                        <h2><?php echo esc_html($project_heading); ?></h2>
                    <?php endif; ?>

                </div>

                <!-- Tech Features -->
                <?php if (have_rows('tech_feature')): ?>
                    <div class="case-studiesBox">
                        <div class="row">
                            <?php while (have_rows('tech_feature')): the_row(); 
                                $heading = get_sub_field('tech_heading');
                                $description = get_sub_field('tech_description');
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

                <!-- After Image -->
                <div class="AfterBg mt-5 mb-5">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/after.png" class="img-fluid" alt="After Image" />
                </div>

                <!-- The Challenges -->
                <?php if ($the_challenges = get_field('the_challenges')): ?>
                    <div class="TheChallenges mb-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-pnel real-caption wow fadeInUp mb-3 pb-3">
                                    <h2><?php echo esc_html($the_challenges); ?></h2>
                                    <?php if ($challenge_subheading2 = get_field('challenge_subheading2')): ?>
                                        <p><?php echo esc_html($challenge_subheading2); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <?php if (have_rows('challenge_feature')): ?>
                            <div class="row">
                                <?php while (have_rows('challenge_feature')): the_row(); 
                                    $image = get_sub_field('challenge_image');
                                    $heading = get_sub_field('challenge_heading');
                                    $subheading = get_sub_field('challenge_subheading');
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

                <?php if ($challenge_subheading3 = get_field('challenge_subheading3')): ?>
                    <div class="heading-pnel real-caption wow fadeInUp mb-3 pb-3">
                        <p><?php echo wp_kses_post($challenge_subheading3); ?></p>
                    </div>
                <?php endif; ?>

                <!-- The Solutions -->
                <?php if ($the_solutions = get_field('the_solutions')): ?>
                    <div class="TheChallenges mb-5 SolutionsBox">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-pnel real-caption wow fadeInUp mb-3 pb-3">
                                    <h2><?php echo esc_html($the_solutions); ?></h2>
                                    <?php if ($solution_subheading1 = get_field('solution_subheading1')): ?>
                                        <p><?php echo esc_html($solution_subheading1); ?></p>
                                    <?php endif; ?>
                                    <?php if ($solution_subheading2 = get_field('solution_subheading2')): ?>
                                        <h2><?php echo esc_html($solution_subheading2); ?></h2>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <?php if (have_rows('solution_feature')): ?>
                            <div class="row">
                                <?php while (have_rows('solution_feature')): the_row(); 
                                    $image = get_sub_field('solution_image');
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
                                                    <p><?php echo wp_kses_post($subheading); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($solution_subheading3 = get_field('solution_subheading3')): ?>
                    <div class="heading-pnel real-caption wow fadeInUp mb-3 pb-3">
                        <p><?php echo wp_kses_post($solution_subheading3); ?></p>
                    </div>
                <?php endif; ?>

                <!-- After Image -->
                <div class="AfterBg mt-5 mb-5">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/after.png" class="img-fluid" alt="After Image" />
                </div>

                <!-- Impact & Results -->
                <?php if ($impact_results = get_field('impact_&_results')): ?>
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
                                            <?php if ($cost_heading = get_field('cost_heading')): ?>
                                                <h2><?php echo esc_html($cost_heading); ?></h2>
                                            <?php endif; ?>
                                            <p>
                                                <?php 
                                                if ($cost_savings = get_field('cost_savings')) {
                                                    echo esc_html($cost_savings) . '<br />';
                                                }
                                                if ($_time_saved = get_field('_time_saved')) {
                                                    echo esc_html($_time_saved);
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="happy-client-card wow fadeInUp">
                                            <?php if ($eighty_five = get_field('eighty_five')): ?>
                                                <h2 class="Count"><?php echo esc_html($eighty_five); ?></h2><span>%</span>
                                            <?php endif; ?>
                                            <?php if ($faster_calculations = get_field('faster_calculations')): ?>
                                                <p><?php echo esc_html($faster_calculations); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="happy-client-card wow fadeInUp">
                                            <?php if ($sixty = get_field('sixty')): ?>
                                                <h2 class="Count"><?php echo esc_html($sixty); ?></h2><span>%</span>
                                            <?php endif; ?>
                                            <?php if ($engineering_efficiency = get_field('engineering-efficiency')): ?>
                                                <p><?php echo esc_html($engineering_efficiency); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="happy-client-card wow fadeInUp">
                                            <?php if ($thirty = get_field('thirty')): ?>
                                                <h2 class="Count"><?php echo esc_html($thirty); ?></h2><span>%</span>
                                            <?php endif; ?>
                                            <?php if ($waste_reduction = get_field('waste_reduction')): ?>
                                                <p><?php echo esc_html($waste_reduction); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Impact Features List -->
                <?php if (have_rows('impact_feature')): ?>
                    <div class="TheChallenges SolutionsBox ImpactResults policy-content-main">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-pnel real-caption wow fadeInUp">
                                    <h2><?php the_field('impact_&_results'); ?></h2>
                                    <ul class="mb-0">
                                        <?php while (have_rows('impact_feature')): the_row(); 
                                            $impact_item = get_sub_field('impact_list');
                                            if ($impact_item):
                                                echo '<li>' . esc_html($impact_item) . '</li>';
                                            endif;
                                        endwhile; ?>
                                    </ul>
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
                                        <?php if ($lets_get = get_field('let’s_get')) echo esc_html($lets_get); ?> 
                                        <span class="Theme-Color">
                                            <?php if ($started = get_field('started!')) echo esc_html($started); ?>
                                        </span>
                                    </h3>
                                    <?php if ($get_advanced = get_field('get_advanced')): ?>
                                        <h6><?php echo esc_html($get_advanced); ?></h6>
                                    <?php endif; ?>
                                    <?php if ($ai_automation = get_field('ai_automation')): ?>
                                        <p><?php echo esc_html($ai_automation); ?></p>
                                    <?php endif; ?>
                                </div>

                                <div class="hero_link_btn">
                                    <?php
                                    $first_link = get_field('banner_first_link');
                                    $second_link = get_field('banner_second_link');
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
                            $image = get_field('mobile_image');
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
