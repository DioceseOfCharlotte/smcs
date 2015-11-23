<?php

add_action('init', 'smcs_post_type_layouts_supports');
add_action( 'wp_enqueue_scripts', 'smcs_dequeue_script', 100 );




function smcs_post_type_layouts_supports() {
    add_post_type_support('thursday_packet', 'theme-layouts');
}

function smcs_dequeue_script() {
wp_dequeue_style( 'sc-events' );
}
