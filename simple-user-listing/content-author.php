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
<div id="user-<?php echo $user->ID; ?>" class="media media-author shadow--z2 grid__item u-1of2@md u-mb@respond">
	<div class="media__img">
		<?php echo get_avatar( $user->ID, 90 ); ?>
	</div>
	<div class="media__body">
		<h4 class="media__title">
			<?php echo $user_info->display_name; ?>
		</h4>

		<p><?php echo $user_info->user_email; ?></p>
	</div>
</div>
