
<?php
function add_theme_scripts() {
    //css theme parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 

    //css theme enfant
    wp_enqueue_style( 'child-style', get_stylesheet_uri() ); 

    //js
    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/index.js', array( 'jquery' ), '1.1', true );

    //swipper js
    wp_enqueue_script( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.js', array(), true );
    wp_enqueue_style( 'swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.css', array(), );
    wp_enqueue_script( 'my-swiper', get_stylesheet_directory_uri() . '/js/my-swiper.js', array( 'jquery' ), '1.1', true );

    //gsap et scroll trigger pour parallaxe
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', array(), true );
    wp_enqueue_script( 'scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js', array('gsap'), true );

    // simple parallaxe js
    wp_enqueue_script( 'simple-parallaxe', 'https://cdnjs.cloudflare.com/ajax/libs/simple-parallax-js/5.6.2/simpleParallax.min.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts');



// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}