<?php
/* Template Name: applications */

 get_header(); ?>

 <!-- Comman banner section start -->
    <section id="cm-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <div class="banner-left-side wow fadeIn">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="banner-right-side wow fadeIn">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Applications</li>
                        </ol>
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
           
<div class="row">
    <?php
    $args = array(
        'post_type' => 'industries',
        'posts_per_page' => -1, 
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $industries_query = new WP_Query($args);
    if ($industries_query->have_posts()) :
        while ($industries_query->have_posts()) : $industries_query->the_post();
            $category = get_the_category();
            $category_name = !empty($category) ? $category[0]->name : '';
            $category_link = !empty($category) ? get_category_link($category[0]->term_id) : '#';
            ?>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="ApplicationsItem">
                    <div class="item">
                        <ul class="real-content heading-panel">
                            <li>
                                <div class="real-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/real-slider2.svg" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                    <span><?php echo esc_html($category_name); ?></span>
                                </div>
                            </li>
                            <li>
                                <div class="real-content heading-pnel">
                                    <h5><?php the_title(); ?></h5>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="learlink" target="">Learn More <img src="https://www.myprojectdemonstration.com/development1/telesto/wp-content/uploads/2025/04/right-arrow.svg" alt=""></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No industries found.</p>';
    endif;
    ?>
</div>

                        </div>
        </div>
        <div class="row mt-4">
        <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'post', // Replace with your custom post type if needed
    'posts_per_page' => 10, // Adjust the number of posts per page
    'paged' => $paged,
);

$the_query = new WP_Query($args);

if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();
        // Your loop code here
    endwhile;

    // Pagination
    $big = 999999999; // need an unlikely integer

    echo '<div class="col-12"><div class="pagination"><ul>';

    $pagination_links = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $the_query->max_num_pages,
        'prev_text' => '<svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.66566 6.18863L6.25916 9.79163L5.48688 10.6151L0.5 5.6151L5.48688 0.615112L6.25916 1.43855L2.66566 5.04157L13.5 5.04157V6.18863L2.66566 6.18863Z" fill="#fff"></path></svg> Prev',
        'next_text' => 'Next <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.3343 5.04159L7.74084 1.43859L8.51312 0.615112L13.5 5.61512L8.51312 10.6151L7.74084 9.79167L11.3343 6.18866H0.5V5.04159H11.3343Z" fill="#fff"></path></svg>',
        'type' => 'array',
    ));

    if (is_array($pagination_links)) {
        foreach ($pagination_links as $link) {
            echo '<li>' . $link . '</li>';
        }
    }

    echo '</ul></div></div></div>';

    wp_reset_postdata();
else :
    echo '<p>No posts found.</p>';
endif;
?>

            </div>
            </div>
        </section>
<!-- Services card section end -->
 
 
 
 
 
 <?php get_footer(); ?>