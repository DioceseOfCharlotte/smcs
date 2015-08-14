<?php
/**
 * Default highlighter CPTs article template.
 *
 * Copy this template to /content-highlighter/highlighted-cpts.php in
 * your theme or child theme to make edits.
 *
 * @package   ContentHighlighter
 * @copyright Copyright (c) 2015, WP Site Care, LLC
 * @license   GPL-2.0+
 * @since     1.0.0
 */
?>
<article <?php content_highlighter_attr( 'post' ); ?>>

	<?php if ( 'before_title' === $show_image ) : ?>
		<?php content_highlighter_image( $image_args ); ?>
	<?php endif; ?>

	<?php if ( ! empty( $show_title ) || ! empty( $show_meta ) ) : ?>

		<header class="entry-header">

			<?php if ( ! empty( $show_title ) ) : ?>

				<?php $title = get_the_title() ? get_the_title() : __( '(no title)', 'content-highlighter' ); ?>

				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php echo esc_html( $title ) ?></a>
				</h2>

			<?php endif; ?>

			<?php if ( ! empty( $show_meta ) ) : ?>

				<p class="entry-meta">
					<?php if ( ! empty( $show_author ) ) : ?>
						<?php content_highlighter_entry_author(); ?>
					<?php endif; ?>
					<?php if ( ! empty( $show_date ) ) : ?>
						<?php content_highlighter_entry_published(); ?>
					<?php endif; ?>
					<?php if ( ! empty( $show_comments ) ) : ?>
						<?php content_highlighter_entry_comments_link(); ?>
					<?php endif; ?>
				</p><!-- .entry-meta -->

			<?php endif; ?>

		</header>

	<?php endif; ?>

	<?php if ( 'after_title' === $show_image ) : ?>
		<?php content_highlighter_image( $image_args ); ?>
	<?php endif; ?>

	<?php if ( ! empty( $show_content ) ) : ?>

		<div class="entry-content">

			<?php if ( 'excerpt' === $show_content ) : ?>

				<?php the_excerpt(); ?>

			<?php elseif ( 'content-limit' === $show_content ) : ?>

				<?php content_highlighter_content_limit( absint( $content_limit ), esc_html( $more_text ) ); ?>

			<?php else : ?>

				<?php global $more; ?>

				<?php $orig_more = $more; ?>
				<?php $more = 0; ?>

				<?php the_content( esc_html( $more_text ) ); ?>

				<?php $more = $orig_more; ?>

			<?php endif; ?>

			<?php edit_post_link(); ?>

		</div>

	<?php endif; ?>

	<?php if ( 'after_content' === $show_image ) : ?>
		<?php content_highlighter_image( $image_args ); ?>
	<?php endif; ?>

</article>
