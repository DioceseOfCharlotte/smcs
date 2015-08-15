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
<div class="media-wrap grid__item u-1/1 u-1/2@md u-1/3@lg p1">
<div id="user-<?php echo $user->ID; ?>" class="media media-author shadow2 grid bg-1--light flex flex-wrap">
	<div class="media__img grid__item">
		<?php echo get_avatar( $user->ID, 90 ); ?>
	</div>
	<div class="media__body flex-auto grid__item p1">
		<div class="media__title">
			<?php echo $user_info->display_name; ?>
		</div>
        <div class="media__text user__title"><?php echo $user_info->_smcs_user_staff_title; ?></div>
		<div class="media__text user__email"><?php echo $user_info->user_email; ?></div>
	</div>
</div>
</div>
