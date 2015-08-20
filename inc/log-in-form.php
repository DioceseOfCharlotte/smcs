<?php

add_action( 'tha_header_top', 'doc_login_drop' );

function doc_login_drop() {
    $current_user = wp_get_current_user();
    $user_ID = get_current_user_id();

    if ( is_user_logged_in() ) {
    $username = 'keyboard_arrow_down';
} else {
    $username = '&#xE853;';
}

ob_start();
?>


    <div class="panel p2 black">
    <?php
        if ( is_user_logged_in() ) {

            hybrid_get_menu('logged-in');

            global $wp_query;
            $post_id = $wp_query->get_queried_object_id();
            $post_link = get_permalink($post_id);
            ?>
        <div class="user-account absolute" title="Logged in as <?php echo $current_user->display_name; ?>">
            <!-- Left aligned menu below button -->
            <button id="manage-account-lower-left" class="btn btn--default">
              <?php echo $current_user->display_name; ?><i class="ml1 material-icons">&#xE254;</i>
            </button>

            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                for="manage-account-lower-left">
              <a class="mdl-menu__item" href="<?php echo site_url( '/update-family-profile/'); ?>"><i class="mr1 material-icons">&#xE8D3;</i>Update your profile</a>
              <a class="mdl-menu__item" href="<?php echo wp_logout_url( get_bloginfo('url') ); ?>"><i class="mr1 material-icons">&#xE879;</i>Sign Out</a>
            </ul>



        </div>
            <?php
            if (class_exists('SimpleFavorites')) { ?>
            <div class="pt2 pb1"> <?php the_favorites_button($post_id); ?> </div> <?php
            the_user_favorites_list($user_id = null, $site_id = null, $include_links = true, $filters = null);
            }
        } else {
    	echo wp_login_form( array( 'echo' => false, 'redirect' => site_url( '/parent-home/' ) ) ). '<a class="btn small" href="' . wp_lostpassword_url() . '" title="Lost Password">Forgot password?</a><a href="/family-registration/" class="btn register-link menu-link">Register</a>';

        } ?>
    </div>
    <button class="material-icons js-drop-panel panel-btn"><?php echo $username ?></button>


<?php
    $output = ob_get_clean();

    echo $output;
}
