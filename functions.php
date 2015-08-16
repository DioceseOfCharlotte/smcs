<?php
/**
 * @package    doc
 * @author     Marty Helmick <info@martyhelmick.com>
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */

$includes_dir = trailingslashit( get_stylesheet_directory() );

require_once $includes_dir . 'inc/user-tax.php';
require_once $includes_dir . 'inc/post-types.php';
require_once $includes_dir . 'inc/log-in-form.php';
require_once $includes_dir . 'inc/forms.php';

add_action( 'after_setup_theme', 'smcs_theme_setup' );
add_action( 'widgets_init', 'smcs_register_sidebars' );
add_filter( 'user_contactmethods', 'smcs_user_contact_methods' );
add_action( 'cmb2_init', 'smcs_register_user_profile_metabox' );


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


// User Contact Methods
function smcs_user_contact_methods( $user_contact_method ) {

    $user_contact_method['doc_primary_phone'] = __( 'Phone (or extension)', 'smcs' );

    	// Remove user contact methods
	unset( $user_contact_method['aim']    );
	unset( $user_contact_method['jabber'] );
	unset( $user_contact_method['yim'] );

    return $user_contact_method;

}


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


/**
 * Hook in and add a metabox to add fields to the user profile pages
 */
function smcs_register_user_profile_metabox() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_smcs_user_';
	/**
	 * Metabox for the user profile screen
	 */
	$cmb_user = new_cmb2_box( array(
		'id'               => $prefix . 'staff_position',
		'title'            => __( 'Position', 'cmb2' ),
		'object_types'     => array( 'user' ), // Tells CMB2 to use user_meta vs post_meta
		'show_names'       => true,
		'new_user_section' => 'add-existing-user', // where form will show on new user page. 'add-existing-user' is only other valid option.
	) );
	$cmb_user->add_field( array(
		'name'     => __( 'Position Details', 'cmb2' ),
		'id'       => $prefix . 'position_details',
		'type'     => 'title',
		'on_front' => false,
	) );

	$cmb_user->add_field( array(
		'name' => __( 'Title, Class or Grade', 'cmb2' ),
		'id'   => $prefix . 'staff_title',
		'type' => 'text',
	) );
}

register_taxonomy('staff_type', 'user', array(
    'public'      =>true,
    'single_value' => false,
    'show_admin_column' => true,
    'labels'      =>array(
        'name'                        =>'Staff Types',
        'singular_name'               =>'Staff Type',
        'menu_name'                   =>'Staff Types',
        'search_items'                =>'Search Staff Types',
        'popular_items'               =>'Popular Staff Types',
        'all_items'                   =>'All Staff Types',
        'edit_item'                   =>'Edit Staff Type',
        'update_item'                 =>'Update Staff Type',
        'add_new_item'                =>'Add New Staff Type',
        'new_item_name'               =>'New Staff Type Name',
        'separate_items_with_commas'  =>'Separate staff types with commas',
        'add_or_remove_items'         =>'Add or remove staff types',
        'choose_from_most_used'       =>'Choose from the most popular staff types',
    ),
        'rewrite'     =>array(
        'with_front'                  =>true,
        'slug'                        =>'author/profession',
    ),
    'capabilities'    => array(
        'manage_terms'                =>'edit_users',
        'edit_terms'                  =>'edit_users',
        'delete_terms'                =>'edit_users',
        'assign_terms'                =>'read',
    ),
));


add_action( 'tha_footer_top', 'smcs_affiliates' );
function smcs_affiliates() {
    ?>
    <div class="grid wrap u-flex--j-sa u-flex u-flex--row u-flex--w u-flex--ai-c">
    <div class="affiliate-img grid__item u-max--150 u-mb-">
    <a href="http://schools.charlottediocese.net/macs/about-macs" title="Mecklenburg Area Catholic Schools">
        <img src="http://stmarkcatholicschool.net/wp-content/uploads/sites/2/2015/06/macs_250.png" alt="MACS">
        </a>
    </div>
    <div class="affiliate-img grid__item u-max--150 u-mb-">
    <a href="http://macseducationfoundation.org" title="MACS Education Foundation">
        <img src="http://stmarkcatholicschool.net/wp-content/uploads/sites/2/2015/06/path524.png" alt="MACS Education Foundation">
    </a>
    </div>
    <div class="affiliate-img grid__item u-max--150 u-mb-">
    <a href="http://www.advanc-ed.org" title="AdvancED">
        <img src="http://stmarkcatholicschool.net/wp-content/uploads/sites/2/2015/06/adv-ed.png" alt="AdvancED">
        </a>
    </div>
    <?php
}


add_action( 'tha_content_top', 'bempress_meh_slider');
function bempress_meh_slider() {
    if ( is_front_page() ) {
    echo do_shortcode( '[slider type="slider" group="front" order="DESC" orderby="rand" limit="-1"]' );
    }
}
