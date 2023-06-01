
<?php
// intégration css et js 
function add_theme_scripts() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); //css theme parent

    wp_enqueue_style( 'child-style', get_stylesheet_uri() ); // css theme enfant

    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/index.js', array( 'jquery' ), '1.1', true );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts');

// intégration swiper JS
function enqueue_swiper_js(){
    wp_enqueue_script( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.js', array(), true );
    wp_enqueue_style( 'swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.css', array(), );
    wp_enqueue_script( 'my-swiper', get_stylesheet_directory_uri() . '/js/my-swiper.js', array( 'jquery' ), '1.1', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_js');

// intégration simple parallaxe JS
function enqueue_simple_parallaxe_js(){
    wp_enqueue_script( 'simple-parallaxe-js', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@5.6.2/dist/simpleParallax.min.js', array(), true );
  
}
add_action( 'wp_enqueue_scripts', 'enqueue_simple_parallaxe_js');



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