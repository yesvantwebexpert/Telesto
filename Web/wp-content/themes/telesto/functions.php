<?php


function custom_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('common-style', get_template_directory_uri() . '/assets/css/common.css');
    wp_enqueue_style('carousal-style', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('default-style', get_template_directory_uri() . '/assets/css/owl.theme.default.css');
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css');

}

add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');





function enqueue_custom_scripts() {
    
    // Deregister default WordPress jQuery and use custom
    wp_deregister_script('jquery');
    wp_enqueue_script(
        'jquery', 
        get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', 
        array(), 
        '3.6.0', 
        true
    );

    // Owl Carousel
    wp_enqueue_script(
        'owl-carousel', 
        get_template_directory_uri() . '/assets/js/owl.carousel.js', 
        array('jquery'), 
        null, 
        true
    );

    // Bootstrap
    wp_enqueue_script(
        'bootstrap', 
        get_template_directory_uri() . '/assets/js/bootstrap.js', 
        array('jquery'), 
        null, 
        true
    );

    // WOW.js
    wp_enqueue_script(
        'wow', 
        get_template_directory_uri() . '/assets/js/wow.js', 
        array('jquery'), 
        null, 
        true
    );

    // Main script
    wp_enqueue_script(
        'main-script', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array('jquery'), 
        null, 
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');



if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}


register_nav_menus( array(
 'header-menu' => esc_html__( 'Header Menu', 'header_menu' ),
 'mobile-menu' => esc_html__( 'Mobile Menu', 'mobile_menu' ),
 
 'footer-menu-middle' => esc_html__( 'Footer Menu Middle', 'footer-menu-middle' ),
 
  ));


function allow_svg_uploads($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_uploads');





// Enable post thumbnails in your theme
add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
});

// Register Custom Post Type: Industries
function create_industries_post_type() {
    $labels = array(
        'name'               => 'Industries',
        'singular_name'      => 'Industry',
        'menu_name'          => 'Industries',
        'name_admin_bar'     => 'Industry',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Industry',
        'new_item'           => 'New Industry',
        'edit_item'          => 'Edit Industry',
        'view_item'          => 'View Industry',
        'all_items'          => 'All Industries',
        'search_items'       => 'Search Industries',
        'not_found'          => 'No industries found.',
        'not_found_in_trash' => 'No industries found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-portfolio', 
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' ),
        'hierarchical'       => true,
        'show_in_rest'       => true,
        'rewrite'            => array('slug' => 'references'),
        'query_var'          => true,
        'taxonomies'         => array( 'category' ) // ✅ fixed comma and added category taxonomy
    );

    register_post_type( 'industries', $args );

    // Make sure default categories work with the custom post type
    register_taxonomy_for_object_type( 'category', 'industries' );
}
add_action( 'init', 'create_industries_post_type' );




function custom_breadcrumbs() {
    echo '<ol class="breadcrumb">';
    echo '<li class="breadcrumb-item"><a href="' . home_url() . '">Home</a></li>';

    if (is_single() || is_page()) {
        echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
    }

    echo '</ol>';

}



// Register Custom Post Type: Case
function create_cases_post_type() {
    $labels = array(
        'name'               => 'Cases',
        'singular_name'      => 'Case',
        'menu_name'          => 'Cases',
        'name_admin_bar'     => 'Case',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Case',
        'new_item'           => 'New Case',
        'edit_item'          => 'Edit Case',
        'view_item'          => 'View Case',
        'all_items'          => 'All Cases',
        'search_items'       => 'Search Cases',
        'not_found'          => 'No industries found.',
        'not_found_in_trash' => 'No industries found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-portfolio', 
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' ),
        'hierarchical'       => true,
        'show_in_rest'       => true,
        'rewrite'            => array('slug' => 'references'),
        'query_var'          => true,
        'taxonomies'         => array( 'category' ) // ✅ fixed comma and added category taxonomy
    );

    register_post_type( 'cases', $args );

    // Make sure default categories work with the custom post type
    register_taxonomy_for_object_type( 'category', 'cases' );
}
add_action( 'init', 'create_cases_post_type' );


// Enable support for post thumbnails globally
add_theme_support('post-thumbnails');

// Register custom post type 'service'
function register_services_cpt() {
    register_post_type('service', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'new_item' => 'New Service',
            'view_item' => 'View Service',
            'all_items' => 'All Services',
            'search_items' => 'Search Services',
            'not_found' => 'No services found',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes'),
        'menu_icon' => 'dashicons-hammer', // optional icon
    ));
}
add_action('init', 'register_services_cpt');





add_filter('wpcf7_autop_or_not', '__return_false');


function enqueue_gsap_script() {
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.0/gsap.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_gsap_script');






?>