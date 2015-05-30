<?php
/**
 * This template is the fallback template if no other top-level template files can be found in the theme.
 * This can be overwritten by context-specific templates or by a `/board/board.php` in the theme.
 */

get_header(); ?>

    <?php tha_content_before(); ?>

    <main <?php hybrid_attr( 'content' ); ?>>

        <?php tha_content_top(); ?>

	<?php
		/*
		 * Action hook for the plugin to output its content. Technically, what this will
		 * do is load one of the `content-*.php` template parts for the specific page
		 * that is being viewed. Themes can either overwrite those template parts or
		 * overwrite this entire template.
		 */
		do_action( 'mb_theme_compat' );
	?>

        <?php tha_content_bottom(); ?>

        </main><!-- #main -->

    <?php tha_content_after(); ?>

<?php hybrid_get_sidebar( 'primary' ); ?>

<?php
get_footer();
