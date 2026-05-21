<?php
/**
 * EduLearn Theme Functions
 */

// Theme Setup
function edulearn_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'edulearn'),
    ));
    
    // Set post thumbnail size
    set_post_thumbnail_size(800, 400, true);
    add_image_size('edulearn-medium', 600, 400, true);
}
add_action('after_setup_theme', 'edulearn_theme_setup');

// Enqueue styles and scripts
function edulearn_enqueue_scripts() {
    // Main stylesheet
    wp_enqueue_style('edulearn-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Google Fonts
    wp_enqueue_style('edulearn-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'edulearn_enqueue_scripts');

// Custom excerpt length
function edulearn_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'edulearn_excerpt_length');

// Custom excerpt more
function edulearn_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'edulearn_excerpt_more');

// Register widget areas
function edulearn_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'edulearn'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'edulearn'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'edulearn_widgets_init');

// Add custom body classes
function edulearn_body_classes($classes) {
    if (!is_singular()) {
        $classes[] = 'blog-page';
    }
    return $classes;
}
add_filter('body_class', 'edulearn_body_classes');

// Enable REST API for integration with HTML pages
function edulearn_rest_api_init() {
    // Allow CORS for local development
    header("Access-Control-Allow-Origin: *");
}
add_action('rest_api_init', 'edulearn_rest_api_init');
