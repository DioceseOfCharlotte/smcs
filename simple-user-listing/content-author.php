<?php
/**
 * The Template for displaying Author listings
 *
 * Override this template by copying it to yourtheme/authors/content-author.php
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $user;

$user_info = get_userdata( $user->ID );
$num_posts = count_user_posts( $user->ID );
?>
<div class="grid__item u-1of3@md u-p-">
<div id="user-<?php echo $user->ID; ?>" class="media media-author shadow--z2 grid t-bg__1--light u-flex u-flex--w u-flex--row">
	<div class="media__img grid__item">
		<?php echo get_avatar( $user->ID, 90 ); ?>
	</div>
	<div class="media__body u-flexed--1 grid__item u-ph- u-pv--">
		<div class="media__title">
			<?php echo $user_info->display_name; ?>
		</div>
        <div class="media__text user__title"><?php echo $user_info->_smcs_user_staff_title; ?></div>
		<div class="media__text user__email"><?php echo $user_info->user_email; ?></div>
	</div>
</div>
</div>
