<?php

function mettreJs() {
    wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mettreJs');

function dw_asset(string $file): string
{
    return get_template_directory_uri() . '/ressources/' . $file;
}
