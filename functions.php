<?php

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}                    



function perso_setup() {

	register_nav_menu( 'primary', 'Menu principal' );

}

add_image_size('image_cat', 635, 685, true);

add_action( 'after_setup_theme', 'perso_setup' );

add_theme_support( 'post-thumbnails' ); // ajout de image à la une //


add_action('widgets_init', 'merveilleuse_widgets_init');
function merveilleuse_widgets_init(){
   register_sidebar(array(
      'name' => 'Header column 1',
      'id' => 'header_1',
      'before_widget' => '',
      'after_widget' => ''
   ));
}

//chargement script JS
add_action('wp_enqueue_scripts', 'nomades_load_scripts');
function nomades_load_scripts() {
   wp_enqueue_script(
      'nomade-main',
      get_stylesheet_directory_uri() . '/javascript/script.js',
      array('jquery'),
      'v1.2',
      true
   );
   
   wp_enqueue_style(
   'slick-css',
   get_stylesheet_directory_uri() . '/javascript/slick/slick.css'
);

wp_enqueue_style(
   'slick-css-theme',
   get_stylesheet_directory_uri() . '/javascript/slick/slick-theme.css'
);

wp_enqueue_script(
   'slick-js',
   get_stylesheet_directory_uri() . '/javascript/slick/slick.min.js',
   array('jquery'),
   'v1.2',
   true
);
}



?>