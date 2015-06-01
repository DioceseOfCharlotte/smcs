<?php
/**
 * Footer Sidebar Template
 *
 * @package BEMpress
 */

if ( ! is_active_sidebar( 'front' ) ) {
		return;
}
?>
	<div <?php hybrid_attr( 'sidebar', 'front' ); ?>>
		<?php dynamic_sidebar( 'front' ); ?>
	</div><!-- #sidebar-front-widgets -->
