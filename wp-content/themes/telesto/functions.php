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




// function custom_theme_enqueue_scripts() {
//     // Enqueue the built-in jQuery if needed (WordPress already includes jQuery).
//     wp_enqueue_script('jquery');

//     // Enqueue a custom jQuery script (if needed).
//     wp_enqueue_script('jquery-script', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), '3.6.0', true);

//     // Enqueue other scripts with jQuery as a dependency.
//     wp_enqueue_script('carousal-script', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), null, true);
//     wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), null, true);
//     wp_enqueue_script('wow-script', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), null, true);
//     wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
// }

// // add_action('wp_enqueue_scripts', 'custom_theme_enqueue_scripts');

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function enqueue_custom_scripts() {
    wp_enqueue_script(
        'custom-jquery', 
        get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', 
        array(), 
        '3.6.0', 
        true // Load in footer
    );

    wp_enqueue_script(
        'slider', 
        get_template_directory_uri() . '/assets/js/owl.carousel.js', 
        array(), 
        '3.6.0', 
        true // Load in footer
    );

    wp_enqueue_script(
        'slider1', 
        get_template_directory_uri() . '/assets/js/bootstrap.js', 
        array(), 
        '3.6.0', 
        true // Load in footer
    );

    wp_enqueue_script(
        'slider2', 
        get_template_directory_uri() . '/assets/js/wow.js', 
        array(), 
        '3.6.0', 
        true // Load in footer
    );


    wp_enqueue_script(
        'slider3', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array(), 
        '3.6.0', 
        true // Load in footer
    );



}



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


remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');



function remove_wpautop_for_cf7($content) {
    if (has_shortcode($content, 'contact-form-7')) {
        remove_filter('the_content', 'wpautop');
        remove_filter('the_excerpt', 'wpautop');
    }
    return $content;
}
add_filter('the_content', 'remove_wpautop_for_cf7', 1);






?>