<?php 
    add_theme_support( 'menus' );
    
    function featureImage() {
        // add feature image support 
        add_theme_support('post-thumbnails');
    };
    
    add_action('after_setup_theme', 'featureImage');