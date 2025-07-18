<?php
function custom_theme_enqueue_styles()
{
    wp_enqueue_style("main-style", get_stylesheet_uri());
    wp_enqueue_style(
        "animate-style",
        get_template_directory_uri() . "/assets/css/animate.css"
    );
    wp_enqueue_style(
        "bootstrap-style",
        get_template_directory_uri() . "/assets/css/bootstrap.css"
    );
    wp_enqueue_style(
        "common-style",
        get_template_directory_uri() . "/assets/css/common.css"
    );
    wp_enqueue_style(
        "carousal-style",
        get_template_directory_uri() . "/assets/css/owl.carousel.min.css"
    );
    wp_enqueue_style(
        "default-style",
        get_template_directory_uri() . "/assets/css/owl.theme.default.css"
    );
    wp_enqueue_style(
        "responsive-style",
        get_template_directory_uri() . "/assets/css/responsive.css"
    );
}

add_action("wp_enqueue_scripts", "custom_theme_enqueue_styles");

function enqueue_custom_scripts()
{
    // Deregister WordPress bundled jQuery and add custom one
    wp_deregister_script("jquery");
    wp_enqueue_script(
        "jquery",
        get_template_directory_uri() . "/assets/js/jquery-3.7.1.js",
        [],
        "3.6.0",
        true
    );

    // Owl Carousel
    wp_enqueue_script(
        "owl-carousel",
        get_template_directory_uri() . "/assets/js/owl.carousel.js",
        ["jquery"],
        null,
        true
    );

    // Bootstrap
    wp_enqueue_script(
        "bootstrap",
        get_template_directory_uri() . "/assets/js/bootstrap.js",
        ["jquery"],
        null,
        true
    );

    // WOW.js
    wp_enqueue_script(
        "wow",
        get_template_directory_uri() . "/assets/js/wow.js",
        ["jquery"],
        null,
        true
    );

    // Main script
    wp_enqueue_script(
        "main-script",
        get_template_directory_uri() . "/assets/js/main.js",
        ["jquery"],
        null,
        true
    );
}

add_action("wp_enqueue_scripts", "enqueue_custom_scripts");

if (function_exists("acf_add_options_page")) {
    acf_add_options_page();
}

register_nav_menus([
    "header-menu" => esc_html__("Header Menu", "header_menu"),
    "mobile-menu" => esc_html__("Mobile Menu", "mobile_menu"),

    "footer-menu-middle" => esc_html__(
        "Footer Menu Middle",
        "footer-menu-middle"
    ),
]);

function allow_svg_uploads($mimes)
{
    $mimes["svg"] = "image/svg+xml";
    return $mimes;
}
add_filter("upload_mimes", "allow_svg_uploads");

add_action("after_setup_theme", function () {
    add_theme_support("post-thumbnails");
});

function custom_breadcrumbs()
{
    $separator = " &raquo; ";
    $home_title = "Home";

    global $post;
    $home_link = home_url();

    echo '<ol class="breadcrumb">';

    echo '<li class="breadcrumb-item"><a href="' .
        $home_link .
        '">' .
        $home_title .
        "</a></li>";

    if (is_home()) {
        echo '<li class="breadcrumb-item active" aria-current="page">' .
            get_the_title(get_option("page_for_posts")) .
            "</li>";
    } elseif (is_tax("case_category")) {
        $term = get_queried_object();
        echo '<li class="breadcrumb-item active" aria-current="page">' .
            esc_html($term->name) .
            "</li>";
    } elseif (is_singular("casestudies")) {
        $terms = get_the_terms($post->ID, "case_category");
        if (!empty($terms) && !is_wp_error($terms)) {
            $term = $terms[0];
            $term_link = get_term_link($term);
            echo '<li class="breadcrumb-item"><a href="' .
                esc_url($term_link) .
                '">' .
                esc_html($term->name) .
                "</a></li>";
        }
        echo '<li class="breadcrumb-item active" aria-current="page">' .
            get_the_title() .
            "</li>";
    } elseif (is_category() || is_single()) {
        $category = get_the_category();
        if (!empty($category)) {
            echo '<li class="breadcrumb-item"><a href="' .
                get_category_link($category[0]->term_id) .
                '">' .
                $category[0]->cat_name .
                "</a></li>";
        }
        if (is_single()) {
            echo '<li class="breadcrumb-item active" aria-current="page">' .
                get_the_title() .
                "</li>";
        }
    } elseif (is_page() && $post->post_parent) {
        $parent_id = $post->post_parent;
        $breadcrumbs = [];
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] =
                '<li class="breadcrumb-item"><a href="' .
                get_permalink($page->ID) .
                '">' .
                get_the_title($page->ID) .
                "</a></li>";
            $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) {
            echo $crumb;
        }
        echo '<li class="breadcrumb-item active" aria-current="page">' .
            get_the_title() .
            "</li>";
    } elseif (is_page()) {
        echo '<li class="breadcrumb-item active" aria-current="page">' .
            get_the_title() .
            "</li>";
    } elseif (is_search()) {
        echo '<li class="breadcrumb-item active" aria-current="page">Search results for "' .
            get_search_query() .
            '"</li>';
    } elseif (is_404()) {
        echo '<li class="breadcrumb-item active" aria-current="page">Error 404</li>';
    }

    echo "</ol>";
}

add_theme_support("post-thumbnails");

// Register custom post type 'casestudies' with category support
function register_case_studies_cpt()
{
    register_post_type("casestudies", [
        "labels" => [
            "name" => "Case Studies",
            "singular_name" => "Case Study",
            "add_new" => "Add New",
            "add_new_item" => "Add New Case Study",
            "edit_item" => "Edit Case Study",
            "new_item" => "New Case Study",
            "view_item" => "View Case Study",
            "all_items" => "All Case Studies",
            "search_items" => "Search Case Studies",
            "not_found" => "No case studies found",
        ],
        "public" => true,
        "has_archive" => true,
        "rewrite" => ["slug" => "casestudies"],
        "supports" => [
            "title",
            "editor",
            "thumbnail",
            "excerpt",
            "custom-fields",
            "page-attributes",
        ],
        "menu_icon" => "dashicons-portfolio",
    ]);
}
add_action("init", "register_case_studies_cpt");

function register_case_category_taxonomy()
{
    $labels = [
        "name" => "Case Categories",
        "singular_name" => "Case Category",
        "search_items" => "Search Case Categories",
        "all_items" => "All Case Categories",
        "parent_item" => "Parent Case Category",
        "parent_item_colon" => "Parent Case Category:",
        "edit_item" => "Edit Case Category",
        "update_item" => "Update Case Category",
        "add_new_item" => "Add New Case Category",
        "new_item_name" => "New Case Category Name",
        "menu_name" => "Case Categories",
    ];

    $args = [
        "hierarchical" => true,
        "labels" => $labels,
        "show_ui" => true,
        "show_admin_column" => true,
        "rewrite" => ["slug" => "case-category"],
        "show_in_rest" => true,
    ];

    register_taxonomy("case_category", ["casestudies"], $args);
}
add_action("init", "register_case_category_taxonomy");

// Enable support for post thumbnails globally
add_theme_support("post-thumbnails");

function register_services_cpt()
{
    register_post_type("service", [
        "labels" => [
            "name" => "Service",
            "singular_name" => "Service",
            "add_new" => "Add New",
            "add_new_item" => "Add New Service",
            "edit_item" => "Edit Service",
            "new_item" => "New Service",
            "view_item" => "View Service",
            "all_items" => "All Services",
            "search_items" => "Search Services",
            "not_found" => "No services found",
        ],
        "public" => true,
        "has_archive" => true,
        "rewrite" => ["slug" => "service"],
        "supports" => [
            "title",
            "editor",
            "thumbnail",
            "excerpt",
            "custom-fields",
            "page-attributes",
        ],
        "menu_icon" => "dashicons-hammer",
        "show_in_rest" => true,
    ]);
}
add_action("init", "register_services_cpt");

function register_service_category_taxonomy()
{
    $labels = [
        "name" => "Service Categories",
        "singular_name" => "Service Category",
        "search_items" => "Search Service Categories",
        "all_items" => "All Service Categories",
        "parent_item" => "Parent Service Category",
        "edit_item" => "Edit Service Category",
        "update_item" => "Update Service Category",
        "add_new_item" => "Add New Service Category",
        "new_item_name" => "New Service Category Name",
        "menu_name" => "Service Categories",
    ];

    $args = [
        "hierarchical" => true,
        "labels" => $labels,
        "show_ui" => true,
        "show_admin_column" => true,
        "show_in_rest" => true,
        "rewrite" => ["slug" => "service", "with_front" => false],
    ];

    register_taxonomy("service_category", ["service"], $args);
}
add_action("init", "register_service_category_taxonomy");

add_filter("wpcf7_autop_or_not", "__return_false");

function enqueue_gsap_script()
{
    wp_enqueue_script(
        "gsap",
        "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.0/gsap.min.js",
        [],
        null,
        true
    );
}
add_action("wp_enqueue_scripts", "enqueue_gsap_script");

function add_active_class_to_menu_item($classes, $item)
{
    if (
        in_array("current-menu-item", $classes) ||
        in_array("current_page_item", $classes)
    ) {
        $classes[] = "active";
    }
    return $classes;
}
add_filter("nav_menu_css_class", "add_active_class_to_menu_item", 10, 2);

function add_custom_favicon()
{
    $favicon = get_field("favicon", "option");

    if ($favicon && isset($favicon["url"])) {
        echo '<link rel="icon" type="image/png" href="' .
            esc_url($favicon["url"]) .
            '" />';
    } else {
        echo '<link rel="icon" type="image/png" href="' .
            get_template_directory_uri() .
            '/assets/images/favicon.png" />';
    }
}
add_action("wp_head", "add_custom_favicon");

function remove_empty_p_and_br_tags($content)
{
    $content = preg_replace("/<p>\s*<\/p>/i", "", $content);
    $content = preg_replace("/<br\s*\/?>\s*/i", "", $content);
    return $content;
}

add_filter("acf/format_value/type=wysiwyg", "remove_empty_p_and_br_tags");

// add_filter("the_content", "disable_wpautop_for_casestudies", 0);
// function disable_wpautop_for_casestudies($content)
// {
//     if ("casestudies" === get_post_type()) {
//         remove_filter("the_content", "wpautop");
//         remove_filter("the_excerpt", "wpautop");
//     }
//     return $content;
// }

// add_action("acf/init", function () {
//     remove_filter("acf_the_content", "wpautop");
// });

function get_raw_acf_field($name)
{
    return get_field($name, false, false);
}

add_filter(
    "the_content",
    function ($content) {
        return preg_replace("#<p>\s*(</?[^>]+>)\s*</p>#i", '$1', $content);
    },
    20
);

add_filter( 'wpcf7_validate_configuration', '__return_false' );

?>



	

