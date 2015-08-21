<?php

add_action( 'tha_header_top', 'doc_login_drop' );

function doc_login_drop() {

ob_start();
?>

    <div class="panel p2 white bg-1">
    <?php
        if ( is_user_logged_in() ) {

            hybrid_get_menu('logged-in');
            
        } else {
            
    	echo wp_login_form( array( 'echo' => false, 'redirect' => site_url( '/parent-home/' ) ) ). '<a class="btn small" href="' . wp_lostpassword_url() . '" title="Lost Password">Forgot password?</a><a href="/family-registration/" class="btn register-link menu-link">Register</a>';

        } ?>
    </div>
    
<button class="material-icons js-drop-panel panel-btn">&#xE853;</button>

<?php
    $output = ob_get_clean();

    echo $output;
}
