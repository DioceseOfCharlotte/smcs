<?php
/**
 * @package    doc
 * @author     Marty Helmick <info@martyhelmick.com>
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */

add_action( 'after_setup_theme', 'smcs_theme_setup' );

add_action( 'widgets_init', 'smcs_register_sidebars', 5 );

/**
 * Setup function.
 */
function smcs_theme_setup() {

    /*
     * Add a custom background to overwrite the defaults.
     *
     * @link http://codex.wordpress.org/Custom_Backgrounds
     */
    add_theme_support(
        'custom-background',
        array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )
    );


    add_filter( 'theme_mod_primary_color', 'smcs_primary_color' );
    add_filter( 'theme_mod_secondary_color', 'smcs_secondary_color' );
    add_filter( 'theme_mod_accent_color', 'smcs_accent_color' );
}



function smcs_primary_color( $hex ) {
    return $hex ? $hex : '004899';
}

function smcs_secondary_color( $hex ) {
    return $hex ? $hex : 'FFD870';
}

function smcs_accent_color( $hex ) {
    return $hex ? $hex : 'f5f5f5';
}


// Register User Contact Methods
function meh_user_phone( $user_contact_method ) {

    $user_contact_method['doc_primary_phone'] = __( 'Primary Phone or Extension', 'bempress' );

    return $user_contact_method;

}

// Hook into the 'user_contactmethods' filter
add_filter( 'user_contactmethods', 'meh_user_phone' );


function smcs_register_sidebars() {
    hybrid_register_sidebar( [
        'id'            => 'front',
        'name'          => _x( 'Front Page Highlights', 'sidebar', 'bempress' ),
        'before_widget' => '<section id="%1$s" class="widget widget-front %2$s u-flexed--1 u-ph u-mb@respond grid__item u-flex"><div class="u-br u-oh widget__wrap t-bg__1--dark">',
        'after_widget'  => '</div></section>',
        'before_title'  => '<h3 class="widget-title widget-footer__title">',
        'after_title'   => '</h3>',
    ] );
}