<?php

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

// inherit parent theme (Divi)
function enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// replace shortcode with FB button code
function fb_button_replace($content) {
    $fb_button_code = '<div class="fb-like" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>';
    $content = str_replace('[fbbutton]', $fb_button_code, $content);

    return $content;
}

add_filter( 'the_content', 'fb_button_replace' );
