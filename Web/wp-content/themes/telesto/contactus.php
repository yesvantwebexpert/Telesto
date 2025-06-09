<?php
/* Template Name: contact us */

 get_header(); ?>

    <!-- Comman banner section start -->
        <?php
$image = get_field('contact_banner'); // returns an array
if ($image):
    $image_url = $image['url'];
?>
<section id="cm-banner" style="background-image: url('<?php echo esc_url($image_url); ?>');">
<?php else: ?>
<section id="cm-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/contact-us2.jpg');">
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
        <!-- Contact form section start -->
        <section id="contact-form-section">
            <div class="container">
                <div class="row">
                   <div class="col-sm-12 col-md-5 col-lg-4">
  <div class="contact-text-part wow fadeInUp">
    <span><?php the_field('get_heading'); ?></span>
    <h2><?php the_field('lets_heading'); ?></h2>
    <p><?php the_field('inquiry_subheading'); ?></p>
  </div>

  <?php if( have_rows('contact_detail') ): ?>
    <div class="email-main">
      <?php while( have_rows('contact_detail') ): the_row(); 
        $icon = get_sub_field('email_icon');
        $heading = get_sub_field('email_heading');
        $subheading = get_sub_field('email_subheading'); // This is now a link field (array)
      ?>
        <div class="email-part">
          <div class="icon-back">
            <?php if( !empty($icon) ): ?>
              <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($heading); ?>" class="img-fluid" />
            <?php endif; ?>
          </div>
          <div class="email-text">
            <?php if( $heading ): ?>
              <h4><?php echo esc_html($heading); ?></h4>
            <?php endif; ?>

            <?php if( $subheading && is_array($subheading) && !empty($subheading['url']) ): ?>
              <p>
                <a href="<?php echo esc_url($subheading['url']); ?>"
                   <?php if( !empty($subheading['target']) ): ?>
                     target="<?php echo esc_attr($subheading['target']); ?>"
                   <?php endif; ?>>
                  <?php echo esc_html($subheading['title']); ?>
                </a>
              </p>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>

                    <div class="col-sm-12 col-md-7 col-lg-8">
                        <div class="contact-form wow fadeInUp">
                   <?php echo do_shortcode('[contact-form-7 id="7496595" title="contact us"]'); ?>
               </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-12">
                       <div class="map wow fadeInUp">
   <?php echo do_shortcode('[wpgmza id="1"]'); ?>
</div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Contact form section end -->


<?php get_footer(); ?>