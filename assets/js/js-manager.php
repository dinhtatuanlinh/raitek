<?php
add_action( 'wp_enqueue_scripts', 'dttl_register_js');
function dttl_register_js(){
    $jsUrl = get_template_directory_uri() . '/assets/js';
        // wp_register_script('dttl_jquery', $jsUrl . '/jquery-3.5.1.min.js', array(), '1.0', true);
        // wp_enqueue_script('dttl_jquery');
        // wp_register_script('socketio', $jsUrl . '/socket.io.js', array(), '1.0', true);
        // wp_enqueue_script('socketio');
        // wp_register_script('createSocketIO', $jsUrl . '/createSocketIO.js', array(), '1.0', true);
        // wp_enqueue_script('createSocketIO');
        // wp_register_script('cookie', $jsUrl . '/cookie.js', array(), '1.0', false);
        // wp_enqueue_script('cookie');
        // wp_register_script('lazyload', $jsUrl . '/lazysizes.min.js', array(), '1.0', true);
        // wp_enqueue_script('lazyload');
        wp_register_script('swiper-bundle', $jsUrl . '/swiper-bundle.min.js', array( 'jquery' ), '1.00', true);
        wp_enqueue_script('swiper-bundle');
        wp_register_script('gsap', $jsUrl . '/gsap.min.js', array(), '1.00', true);
        wp_enqueue_script('gsap');
        wp_register_script('aos', $jsUrl . '/aos.js', array(), '1.00', true);
        wp_enqueue_script('aos');
        wp_register_script('open-close-menu', $jsUrl . '/open-close-menu.js', array(), '1.00', true);
        wp_enqueue_script('open-close-menu');
        wp_register_script('showHideTopBar', $jsUrl . '/showHideTopBar.js', array(), '1.00', true);
        wp_enqueue_script('showHideTopBar');
        wp_register_script('swiper-bundle', $jsUrl . '/swiper-bundle.min.js', array(), '1.00', true);
        wp_enqueue_script('swiper-bundle');

        wp_register_script('lazysizes', $jsUrl . '/lazysizes.js', array(), '1.00', true);
        wp_enqueue_script('lazysizes');
        // wp_register_script('bgkc', $jsUrl . '/bgkc.js', array(), '1.0', true);
        // wp_enqueue_script('bgkc');
        // wp_register_script('cart', $jsUrl . '/cart.js', array(), '1.0', true);
        // wp_enqueue_script('cart');
        // wp_register_script('diamondSizeChart', $jsUrl . '/diamondSizeChart.js', array(), '1.0', true);
        // wp_enqueue_script('diamondSizeChart');
        // wp_register_script('bannerSingle', $jsUrl . '/banner-single.js', array(), '1.0', true);
        // wp_enqueue_script('bannerSingle');
        // wp_register_script('tagManipulation', $jsUrl . '/tagManipulation.js', array(), '1.0', true);
        // wp_enqueue_script('tagManipulation');
    if(is_page("setup") || is_home()){
        wp_register_script('play-video', $jsUrl . '/play-video.js', array(), '1.00', true);
        wp_enqueue_script('play-video');

    }
    if(is_page("setup")){
        wp_register_script('setup_process_slide', $jsUrl . '/setup_process_slide.js', array(), '1.00', true);
        wp_enqueue_script('setup_process_slide');
    }
    if (is_home() || is_single()){
        wp_register_script('news_slide', $jsUrl . '/news_slide.js', array(), '1.00', true);
        wp_enqueue_script('news_slide');
    }
    // if(is_product()){
    //     wp_register_script('productSlider', $jsUrl . '/productSlider.js', array(), '1.0', true);
    //     wp_enqueue_script('productSlider');
    // }
}
?>