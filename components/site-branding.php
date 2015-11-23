<?php tha_header_top(); ?>

<div class="header-wrap container--wide px2 flex flex-column@sm flex-justify flex-center">

	<div <?php hybrid_attr('branding'); ?>>

		<?php if( '1' == get_theme_mod( 'svg_logo' ) ) { ?>
			<a class="logo-image" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php get_template_part( 'images/svg', 'logo' ); ?>
			</a>
		<?php } ?>
		<?php hybrid_site_title(); ?>
		<?php hybrid_site_description(); ?>

	</div>

	<!-- <?php hybrid_get_menu('primary'); ?> -->
</div>

<?php tha_header_bottom();
