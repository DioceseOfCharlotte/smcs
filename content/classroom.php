<?php if (is_singular(get_post_type())) : ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <?php tha_entry_before(); ?>

    <article <?php hybrid_attr('post'); ?>>

        <?php tha_entry_top(); ?>

            <div <?php hybrid_attr('entry-content'); ?>>
                <h2 <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></h2>
                <?php tha_entry_content_before(); ?>
                <?php the_content(); ?>
                <?php tha_entry_content_after(); ?>
				<?php hybrid_post_terms( array( 'taxonomy' => 'classroom_grade', 'text' => __( 'Posted in %s', 'abraham' ) ) ); ?>
            </div>

            <footer <?php hybrid_attr('entry-footer'); ?>>
                <?php wp_link_pages(array(
                    'before' => '<nav class="page-nav"><p>'.__('Pages:', 'abraham'),
                    'after'  => '</p></nav>',
                )); ?>
            </footer>

            <?php comments_template('', true); ?>

			<?php tha_entry_bottom(); ?>

		    </article>

		<?php endwhile; ?>

	    <?php the_posts_navigation( array(
	    'prev_text'          => __( 'Previous page', 'abraham' ),
	    'next_text'          => __( 'Next page', 'abraham' ),
	) ); ?>

	<?php
endif; ?>

        <?php else : // If not viewing a single post. ?>

			<?php if (have_posts()) : ?>

<?php hybrid_post_terms( array( 'taxonomy' => 'classroom_grade', 'wrap' => '<li class="page_item">%s</li>' ) ); ?>

			    <?php while (have_posts()) : the_post(); ?>

			    <?php tha_entry_before(); ?>

			<article <?php hybrid_attr('post'); ?>>

		        <?php tha_entry_top(); ?>

            <header <?php hybrid_attr('entry-header'); ?>>
                <?php
                    get_the_image(array(
                        'size' => 'abraham-lg',
                    ));
                ?>
                <h2 <?php hybrid_attr('entry-title'); ?>>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                    <time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
                    </a>
                </h2>
            </header>

            <div <?php hybrid_attr('entry-summary'); ?>>
                <?php tha_entry_content_before(); ?>
                <?php the_content(); ?>
                <?php tha_entry_content_after(); ?>
            </div>

			<?php tha_entry_bottom(); ?>

		    </article>

    <?php tha_entry_after(); ?>

    <?php endwhile; ?>

<?php
endif;
<?php endif; // End check for posts. ?>
