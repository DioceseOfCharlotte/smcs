<?php

add_action( 'tha_header_top', 'doc_login_drop' );
add_shortcode( 'wpwa_logout_url', 'wpwebapp_get_logout_url' );
add_filter('wp_nav_menu', 'wpwebapp_menu_logout_url');
add_shortcode( 'wpwebapp_display_username', 'wpwebapp_display_username' );
add_filter('wp_nav_menu', 'wpwebapp_menu_display_username');

function doc_login_drop() {

ob_start();
?>

    <div class="panel u-text-white u-bg-1">
    <?php
        if ( is_user_logged_in() ) {
            $panel_button = esc_html__('&#xE5D2;');
            hybrid_get_menu('logged-in');

        } else {
            $panel_button = esc_html__('&#xE853;');

    	echo wp_login_form( array( 'echo' => false, 'redirect' => site_url( '/parent-home/' ) ) ). '<a class="btn small" href="' . wp_lostpassword_url() . '" title="Lost Password">Forgot password?</a><a href="/family-registration/" class="btn register-link menu-link">Register</a>';

        } ?>
    </div>

<button class="material-icons js-dropdown js-drop-before currentcolor btn--tiny panel-btn"><?php echo $panel_button ?></button>

<?php
    $output = ob_get_clean();

    echo $output;
}


// Get logged-out redirect URL
function wpwebapp_get_redirect_url_logged_out() {
	return site_url();
}
// Logout Link Shortcode
function wpwebapp_get_logout_url() {
	$front_page = esc_url_raw( wpwebapp_get_redirect_url_logged_out() );
	$logout = wp_logout_url( $front_page );
	return $logout;
}

// Logout Link Navigation Menu
// Let's you use the logout shortcode with `wp_nav_menu()`
function wpwebapp_menu_logout_url( $menu ){
	$logout_url = wpwebapp_get_logout_url();
	return str_replace( 'wpwa_logout_url', preg_replace( '~^(?:f|ht)tps?://~i', '', $logout_url ), do_shortcode( $menu ) );
}

/* ======================================================================
	DISPLAY USERNAME
	Create a shortcode to display a user's username.
 * ====================================================================== */
// Username Shortcode
function wpwebapp_display_username() {
	$current_user = wp_get_current_user();
	$username = $current_user->last_name;
	return $username;
}

// Username Navigation Menu
// Let's you use the username shortcode with `wp_nav_menu()`
function wpwebapp_menu_display_username( $menu ){
	$username = wpwebapp_display_username();
	return str_replace( '[wpwa_display_username]', $username, do_shortcode( $menu ) );
}
