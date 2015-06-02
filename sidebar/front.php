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
<section class="row t-bg__1">
	<div <?php hybrid_attr( 'sidebar', 'front' ); ?>>
		<?php dynamic_sidebar( 'front' ); ?>
	</div><!-- #sidebar-front-widgets -->
</section>