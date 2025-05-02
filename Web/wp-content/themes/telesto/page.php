<?php get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php
                    the_content();

                    // If the page has multiple pages (using <!--nextpage-->), show pagination
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'your-textdomain'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </article>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
