<?php
/* Template Name: post */

 get_header(); ?>

 <!-- Comman banner section start -->
  

<section id="cm-banner">

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



<!-- Blog section start -->
<section class="space pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="Case-Studies-Box">

                                <?php

$paged =get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'post',
   
    'paged' => $paged,
);


  $blog_query = new WP_Query($args);
         if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post(); 
         ?> 
                                 <div class="Advantage-Items BlogItems">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-5">
                <div class="AdvantageImage">
                   <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/default.jpg" class="img-fluid" alt="Default Image" />
                <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                 <div class="success-detial">
                    <h3><?php the_title(); ?></h3>
                    <ul class="d-block">
                            <li>
                                 <p><?php the_excerpt(); ?></p>
                            </li>
                            <li>
                                  <a href="<?php the_permalink(); ?>" class="learlink">
                    <?php the_field('recent_blogs_button_text'); ?>
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
    
else :
    echo '<p>No posts found.</p>';
endif;
?>
           
                </div>
<div class="row mt-4">
    <div class="col-12">
        <div class="pagination">
            <ul>
                <?php
                $big = 999999999; 

                $pagination = paginate_links(array(
                    'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format'    => '?paged=%#%',
                    'current'   => max(1, get_query_var('paged')),
                    'total'     => $blog_query->max_num_pages,
                    'type'      => 'list',
                    'prev_text' => '
                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.66566 6.18863L6.25916 9.79163L5.48688 10.6151L0.5 5.6151L5.48688 0.615112L6.25916 1.43855L2.66566 5.04157L13.5 5.04157V6.18863L2.66566 6.18863Z" fill="#fff"></path>
                        </svg> Prev',
                    'next_text' => 'Next 
                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3343 5.04159L7.74084 1.43859L8.51312 0.615112L13.5 5.61512L8.51312 10.6151L7.74084 9.79167L11.3343 6.18866H0.5V5.04159H11.3343Z" fill="#fff"></path>
                        </svg>',
                ));

                  if ($pagination) {
                  echo $pagination;
               } 

                ?>
            </ul>
        </div>
    </div>
</div>
 

            </div>
        </div>
        
    </div>
</section>
    


  <?php get_footer(); ?>