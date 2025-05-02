<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>


        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png" />

        
        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        

        <?php wp_head(); ?>
    </head>
    <div class="cursor"></div>
    <body <?php body_class(); ?> >
        <?php wp_body_open(); ?>
        <!-- header -->
        <header class="header js-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- logo -->
                    <div class="logo-web">
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <?php $logo = get_field('main_logo', 'option'); ?>
                 <?php if ($logo): ?>
                            <div class="logo-box">
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                            </div>
                            <?php else: ?>
                     <div class="logo-box">
                         <h2><?php bloginfo('name'); ?></h2>
                     </div>
                 <?php endif; ?>
                        </a>
                    </div>
                    <div class="right-head">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                             <?php 
                     wp_nav_menu( array(
                         'theme_location' => 'header-menu', 
                         'container'      => false, 
                         'menu_class'     => 'navbar-nav ml-lg-auto',
                         'fallback_cb'    => false, 
                    
                     ));
                  ?>
                            

                            <?php 
                     $button = get_field('top_right_button_link', 'option'); 
                     if ($button): 
                         $button_url = $button['url'];
                         $button_title = $button['title'];
                         $button_target = $button['target'] ? $button['target'] : '_self';
                  ?>
                            <div class="schedule-call">

                                  <a href="<?php echo esc_url($button_url); ?>" class="blue-btn" target="<?php echo esc_attr($button_target); ?>">
                            <?php echo esc_html($button_title); ?>
                         </a>
                               <!--  <a class="blue-btn" href="<?php echo esc_url($button_url); ?>">
                                    See AI in Action
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z"
                                            fill="white"
                                        />
                                    </svg>
                                </a> -->
                                <!-- <a class="blue-btn" href="#">See AI in Action <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white-arrow.svg" alt="arrow icon" /></a> -->
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--  <main class="viewport">
 <div id="scroll-container" class="scroll-container"> -->