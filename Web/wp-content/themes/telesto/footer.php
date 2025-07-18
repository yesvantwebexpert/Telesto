<footer class="MainFoorter">
            <div class="container">
                <div class="FooterTop">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 col-md-5">
                            <?php
				$image = get_field('footer_left_logo', 'option');
				if (!empty($image)): ?>
					<div class="footerLogo">
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div>
				<?php endif; ?>
                         
		<?php
if ( have_rows('information_address', 'option') ):
    while ( have_rows('information_address', 'option') ): the_row();
		$flag = get_sub_field('flag');
        $addr   = get_sub_field('addressnew1'); 
        $detail = get_sub_field('address_detailnew2'); 
        ?>
        <div class="FooterItems">
        
			 
            <?php if ( $addr ): ?>
                <h4><img src="<?php echo esc_url($flag['url']); ?>"> <?php echo esc_html( $addr ); ?></h4>
            <?php endif; ?>
            <?php if ( $detail ): ?>
                <p><?php echo wp_kses_post( nl2br( $detail ) ); ?></p>
            <?php endif; ?>
            
        </div>
        <?php
    endwhile;
endif;
?>
  <div class="MainBoxLinks">
                            <div class="FooterItems">
                         
                                <h4><?php echo get_field('contact_heading_', 'option'); ?></h4>
                               <?php 
$link = get_field('contact_detail', 'option');

if( $link && is_array($link) ):
  $url = esc_url($link['url']);
  $title = esc_html($link['title']);
  $target = !empty($link['target']) ? esc_attr($link['target']) : '_self';
?>
  <p>
    <a href="<?php echo $url; ?>" target="<?php echo $target; ?>">
      <?php echo $title; ?>
    </a>
  </p>
<?php endif; ?> 
                            </div>

                            
                            <?php
$link = get_field('footer_button','option'); 

if ($link):
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
?>
    <a class="blue-btn wow fadeInUp mt-4" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
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
                        <div class="col-lg-3 col-md-3">
                            <div class="FooterInfo">
                                <div class="FooterHeading">
                                    <h3><?php echo get_field('middle_column_heading', 'option'); ?></h3>
                                </div>
                                <div class="FooterLinks">
                                    
                                   
                                    <?php 
                            wp_nav_menu( array(
                                'theme_location' => 'footer-menu-middle', 
                                'container'      => false, 
                                'menu_class'     => 'footer-item',
                                'fallback_cb'    => false, 
                                'link_before'    => '<i class="fa fa-angle-right"></i> ', 
                            ));
                        ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="FooterInfo">
                                <div class="FooterHeading">
                                    <h3><?php echo get_field('right_column_heading', 'option'); ?></h3>
                                </div>
                                <div class="FooterItems">
                                    <p><?php echo get_field('newslettersubheading', 'option'); ?></p>
                                </div>
                                <div class="Newsletters">
                                    <div class="NewslettersInput">
                                        <?php
echo do_shortcode('[mailpoet_form id="1"]');
?>

                                    </div>
                                </div>

                                <div class="MediaBox">
  <ul>
    <?php if( have_rows('social_link', 'option') ): ?>
      <?php while( have_rows('social_link', 'option') ): the_row(); 
        $enabled = get_sub_field('enable_social_link');
        $link = get_sub_field('social_icon_button');
        $image = get_sub_field('social_icon_image');

        if( $enabled && in_array('enable', $enabled) && $link && $image ):
          $url = esc_url($link['url']);
          $target = esc_attr($link['target'] ?: '_self');
          $img_url = esc_url($image['url']);
          $img_alt = esc_attr($image['alt'] ?: 'Social Icon');
      ?>
        <li>
          <a href="<?php echo $url; ?>" target="<?php echo $target; ?>">
            <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>" />
          </a>
        </li>
      <?php endif; endwhile; ?>
    <?php endif; ?>
  </ul>
</div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="FooterBottom">
                    <p><?php echo get_field('copyright__first_', 'option'); ?><b><?php echo get_field('copyright_second_', 'option'); ?></b> <?php echo get_field('reserved_', 'option'); ?></p>
                </div>
            </div>
        </footer>
   <!--  </div> 
 </main>  -->



       
         <script type="text/javascript">
               document.querySelectorAll('.ser-tab a[href^="#"]').forEach((anchor) => {
             anchor.addEventListener("click", function (e) {
                 e.preventDefault();
         
                 const targetId = this.getAttribute("href").substring(1);
                 const target = document.getElementById(targetId);
         
                 if (target) {
                     const headerHeight = document.querySelector("header").offsetHeight;
                     const offsetTop = target.offsetTop - headerHeight - 70;
         
                     window.scrollTo({
                         top: offsetTop,
                         behavior: "smooth",
                     });
                 }
             });
         });
         </script>

 <script>
  
  function countWords(text) {
    return text.trim().split(/\s+/).filter(Boolean).length;
  }

  
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.read-more-container').forEach(function(container) {
      const contentEl = container.querySelector('.read-more-content');
      const toggle = container.querySelector('.read-more-toggle');
      const fullText = contentEl.textContent || '';
      const words = countWords(fullText);  

      if (words <= 15) {
        toggle.style.display = 'none';  
      }

      toggle.addEventListener('click', function(e) {
        e.preventDefault();
        const isExpanded = container.classList.toggle('expanded');
        toggle.textContent = isExpanded ? 'See Less' : 'See More';
      });
    });
  });
</script>

<script>
jQuery(document).ready(function($) {
  $('.ser-tab .tab-links').on('click', function(e) {
    e.preventDefault();

    $('.ser-tab .tab-links').removeClass('active');

    $(this).addClass('active');
  });
});
</script>








 
      </body>

      <?php wp_footer(); ?>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>


</html>