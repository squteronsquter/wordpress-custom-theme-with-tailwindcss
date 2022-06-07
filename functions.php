<?php

function dms_files() {
    wp_enqueue_script('dms_main_styles', get_theme_file_uri('/build/main.js'));
    wp_enqueue_style('dms_main_styles', get_theme_file_uri('/build/style.css'));
}

add_action('wp_enqueue_scripts', 'dms_files');