<?php
add_action( 'wp_enqueue_scripts', 'dttl_register_style');
function dttl_register_style() {
    $cssUrl = get_template_directory_uri() . '/assets/css';
    wp_register_style('normalize', $cssUrl . '/normalize.css', array(), '1.0');
    wp_enqueue_style('normalize');
    wp_register_style('dttl_fontawesome-all', $cssUrl . '/font-awesome/css/font-awesome.min.css', array(), '1.00');
    wp_enqueue_style('dttl_fontawesome-all');
    wp_register_style('swiper-bundle', $cssUrl . '/swiper-bundle.min.css', array(), '1.00');
    wp_enqueue_style('swiper-bundle');
    wp_register_style('style', $cssUrl . '/style.css', array(), '1.00');
    wp_enqueue_style('style');
    wp_register_style('mobile', $cssUrl . '/mobile.css', array(), '1.00');
    wp_enqueue_style('mobile');
    wp_register_style('tablet', $cssUrl . '/tablet.css', array(), '1.00');
    wp_enqueue_style('tablet');
    wp_register_style('w3', $cssUrl . '/w3.css', array(), '1.00');
    wp_enqueue_style('w3');
    wp_register_style('aos', $cssUrl . '/aos.css', array(), '1.00');
    wp_enqueue_style('aos');
    if(is_user_logged_in()){
        wp_register_style('login', $cssUrl . '/login.css', array(), '1.00');
        wp_enqueue_style('login');
    }
}
?>
