<?php
/**
 * Default highlighter page template.
 *
 * Copy this template to /content-highlighter/highlighted-page.php in
 * your theme or child theme to make edits.
 *
 * @package   ContentHighlighter
 * @copyright Copyright (c) 2015, WP Site Care, LLC
 * @license   GPL-2.0+
 * @since     1.0.0
 */
?>
<?php
if ( 'before_widget_title' === $show_image ) :
	content_highlighter_image( $image_args );
endif;

if ( ! empty( $title ) ) :
	echo $before_title . $title . $after_title;
endif;
?>

<article <?php content_highlighter_attr( 'post' ); ?>>

	<?php if ( 'before_title' === $show_image ) : ?>
		<?php content_highlighter_image( $image_args ); ?>
	<?php endif; ?>

	<?php if ( ! empty( $show_title ) ) : ?>

		<div class="u-ph u-pb">

			<?php $title = get_the_title() ? get_the_title() : __( '(no title)', 'content-highlighter' ); ?>

			<div class="block__title">
				<a href="<?php the_permalink(); ?>"><?php echo esc_html( $title ) ?></a>
			</div>

	<?php endif; ?>

	<?php if ( 'after_title' === $show_image ) : ?>
		<?php content_highlighter_image( $image_args ); ?>
	<?php endif; ?>

	<?php if ( ! empty( $show_content ) ) : ?>

		<div class="entry-content">

			<?php if ( empty( $content_limit ) ) : ?>

				<?php global $more; ?>

				<?php $orig_more = $more; ?>
				<?php $more = 0; ?>

				<?php the_content( esc_html( $more_text ) ); ?>

				<?php $more = $orig_more; ?>

			<?php else : ?>

				<?php content_highlighter_content_limit( absint( $content_limit ), esc_html( $more_text ) ); ?>

			<?php endif; ?>

			<?php edit_post_link(); ?>

		</div>
		</div>

	<?php endif; ?>

	<?php if ( 'after_content' === $show_image ) : ?>
		<?php content_highlighter_image( $image_args ); ?>
	<?php endif; ?>

</article>
