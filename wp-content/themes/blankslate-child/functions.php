<?php


    define('EMC_CACHE_BUSTER', '20230203');

    /**
    * Enqueue Theme Styles
    *
    * @return void
    */
    
    function blankslate_theme_enqueue_styles() {
        $theme                 = wp_get_theme();
        $cache_busting_version = $theme->get( 'Version' ) . EMC_CACHE_BUSTER;

        wp_enqueue_style( 'emc-main', get_stylesheet_directory_uri() . '/style.css' );
        wp_enqueue_style( 'emc-child', get_stylesheet_directory_uri() . '/assets/dist/css/main.css' );

        // This was copied over. I'm not sure if we need it
        wp_enqueue_script( 'jquery' );

    }

    add_action( 'wp_enqueue_scripts', 'blankslate_theme_enqueue_styles' );

    add_action( 'init', function() {
        remove_action('wp_enqueue_scripts', 'blankslate_enqueue');
    } );

?>