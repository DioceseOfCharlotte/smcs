<?php
/**
 * @package    doc
 * @author     Marty Helmick <info@martyhelmick.com>
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */

add_action( 'after_setup_theme', 'smcs_theme_setup' );

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
