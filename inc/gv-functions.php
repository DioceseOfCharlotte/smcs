<?php
/**
 * Add class to the list container
 */


function doc_gv_list_container( $classes ) {
    return $classes . ' gv-grid';
}
add_filter( 'gravityview/render/container/class', 'doc_gv_list_container', 10, 1 );

/**
 * Add class to the entries container
 */
function doc_gv_list_entry_container( $classes, $entry, $instance ) {
    return $classes . ' inline-block u-1/3 u-1/4@md';
}
add_filter( 'gravityview_entry_class', 'doc_gv_list_entry_container', 10, 3 );
