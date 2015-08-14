<?php
/**
 * The Highlighter Posts Widget Form Template.
 *
 * This is used by the Highlighter Posts widget to display an input form on the
 * WordPress admin widgets screen as well as within the customizer interface.
 *
 * @package   ContentHighlighter
 * @copyright Copyright (c) 2015, WP Site Care, LLC
 * @license   GPL-2.0+
 * @since     1.0.0
 */
?>
<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'content-highlighter' ); ?>:</label>
	<input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" class="widefat" />
</p>

<div class="content-highlighter-widget-box first">

	<p>
		<label for="<?php echo $this->get_field_id( 'posts_cat' ); ?>"><?php _e( 'Category', 'content-highlighter' ); ?>:</label>
		<?php
		$categories_args = array(
			'name'            => $this->get_field_name( 'posts_cat' ),
			'selected'        => $instance['posts_cat'],
			'orderby'         => 'Name',
			'hierarchical'    => 1,
			'show_option_all' => __( 'All Categories', 'content-highlighter' ),
			'hide_empty'      => '0',
		);
		wp_dropdown_categories( $categories_args ); ?>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'posts_num' ); ?>"><?php _e( 'Number of Posts to Show', 'content-highlighter' ); ?>:</label>
		<input class="widefat" type="number" id="<?php echo $this->get_field_id( 'posts_num' ); ?>" name="<?php echo $this->get_field_name( 'posts_num' ); ?>" value="<?php echo esc_attr( $instance['posts_num'] ); ?>" size="2" />
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'posts_offset' ); ?>"><?php _e( 'Number of Posts to Offset', 'content-highlighter' ); ?>:</label>
		<input class="widefat" type="number" id="<?php echo $this->get_field_id( 'posts_offset' ); ?>" name="<?php echo $this->get_field_name( 'posts_offset' ); ?>" value="<?php echo esc_attr( $instance['posts_offset'] ); ?>" size="2" />
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'orderby' ); ?>"><?php _e( 'Order By', 'content-highlighter' ); ?>:</label>
		<select class="widefat" id="<?php echo $this->get_field_id( 'orderby' ); ?>" name="<?php echo $this->get_field_name( 'orderby' ); ?>">
			<option value="date" <?php selected( 'date', $instance['orderby'] ); ?>><?php _e( 'Date', 'content-highlighter' ); ?></option>
			<option value="title" <?php selected( 'title', $instance['orderby'] ); ?>><?php _e( 'Title', 'content-highlighter' ); ?></option>
			<option value="parent" <?php selected( 'parent', $instance['orderby'] ); ?>><?php _e( 'Parent', 'content-highlighter' ); ?></option>
			<option value="ID" <?php selected( 'ID', $instance['orderby'] ); ?>><?php _e( 'ID', 'content-highlighter' ); ?></option>
			<option value="comment_count" <?php selected( 'comment_count', $instance['orderby'] ); ?>><?php _e( 'Comment Count', 'content-highlighter' ); ?></option>
			<option value="rand" <?php selected( 'rand', $instance['orderby'] ); ?>><?php _e( 'Random', 'content-highlighter' ); ?></option>
		</select>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'order' ); ?>"><?php _e( 'Sort Order', 'content-highlighter' ); ?>:</label>
		<select class="widefat" id="<?php echo $this->get_field_id( 'order' ); ?>" name="<?php echo $this->get_field_name( 'order' ); ?>">
			<option value="DESC" <?php selected( 'DESC', $instance['order'] ); ?>><?php _e( 'Descending (3, 2, 1)', 'content-highlighter' ); ?></option>
			<option value="ASC" <?php selected( 'ASC', $instance['order'] ); ?>><?php _e( 'Ascending (1, 2, 3)', 'content-highlighter' ); ?></option>
		</select>
	</p>

	<p>
		<input id="<?php echo $this->get_field_id( 'exclude_displayed' ); ?>" type="checkbox" name="<?php echo $this->get_field_name( 'exclude_displayed' ); ?>" value="1" <?php checked( $instance['exclude_displayed'] ); ?>/>
		<label for="<?php echo $this->get_field_id( 'exclude_displayed' ); ?>"><?php _e( 'Exclude Previously Displayed Posts?', 'content-highlighter' ); ?></label>
	</p>

</div>

<div class="content-highlighter-widget-box">

	<p>
		<label for="<?php echo $this->get_field_id( 'simple_grid' ); ?>"><?php _e( 'Grid Columns', 'content-highlighter' ); ?>:</label>
		<select class="widefat" id="<?php echo $this->get_field_id( 'simple_grid' ); ?>" name="<?php echo $this->get_field_name( 'simple_grid' ); ?>">
			<option value="full" <?php selected( 'full', $instance['simple_grid'] ); ?>><?php _e( 'Full Width', 'content-highlighter' ); ?></option>
			<option value="one_half" <?php selected( 'one_half', $instance['simple_grid'] ); ?>><?php _e( 'One Half', 'content-highlighter' ); ?></option>
			<option value="one_third" <?php selected( 'one_third', $instance['simple_grid'] ); ?>><?php _e( 'One Third', 'content-highlighter' ); ?></option>
			<option value="one_fourth" <?php selected( 'one_fourth', $instance['simple_grid'] ); ?>><?php _e( 'One Fourth', 'content-highlighter' ); ?></option>
			<option value="one_sixth" <?php selected( 'one_sixth', $instance['simple_grid'] ); ?>><?php _e( 'One Sixth', 'content-highlighter' ); ?></option>
		</select>
	</p>

</div>

<div class="content-highlighter-widget-box">

	<p>
		<label for="<?php echo $this->get_field_id( 'show_image' ); ?>"><?php _e( 'Show Image', 'content-highlighter' ); ?>:</label>
		<select class="widefat" id="<?php echo $this->get_field_id( 'show_image' ); ?>" name="<?php echo $this->get_field_name( 'show_image' ); ?>">
			<option value="none">- <?php _e( 'Don\'t Show an Image', 'content-highlighter' ); ?> -</option>
			<option value="before_title" <?php selected( 'before_title', $instance['show_image'] ); ?>><?php _e( 'Before Post Title', 'content-highlighter' ); ?></option>
			<option value="after_title" <?php selected( 'after_title', $instance['show_image'] ); ?>><?php _e( 'After Post Title', 'content-highlighter' ); ?></option>
			<option value="after_content" <?php selected( 'after_content', $instance['show_image'] ); ?>><?php _e( 'After Post Content', 'content-highlighter' ); ?></option>
		</select>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'image_size' ); ?>"><?php _e( 'Image Size', 'content-highlighter' ); ?>:</label>
		<select class="widefat" id="<?php echo $this->get_field_id( 'image_size' ); ?>" class="flagship-image-size-selector" name="<?php echo $this->get_field_name( 'image_size' ); ?>">
			<option value="full"><?php _e( 'full', 'content-highlighter' ); ?></option>
			<?php
			$sizes = $this->get_additional_image_sizes();
			foreach ( (array) $sizes as $name => $size )
				echo '<option value="' . esc_attr( $name ) . '" ' . selected( $name, $instance['image_size'], FALSE ) . '>' . esc_html( $name ) . ' (' . absint( $size['width'] ) . 'x' . absint( $size['height'] ) . ')</option>';
			?>
		</select>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'image_alignment' ); ?>"><?php _e( 'Image Alignment', 'content-highlighter' ); ?>:</label>
		<select class="widefat" id="<?php echo $this->get_field_id( 'image_alignment' ); ?>" name="<?php echo $this->get_field_name( 'image_alignment' ); ?>">
			<option value="alignnone">- <?php _e( 'None', 'content-highlighter' ); ?> -</option>
			<option value="alignleft" <?php selected( 'alignleft', $instance['image_alignment'] ); ?>><?php _e( 'Left', 'content-highlighter' ); ?></option>
			<option value="alignright" <?php selected( 'alignright', $instance['image_alignment'] ); ?>><?php _e( 'Right', 'content-highlighter' ); ?></option>
			<option value="aligncenter" <?php selected( 'aligncenter', $instance['image_alignment'] ); ?>><?php _e( 'Center', 'content-highlighter' ); ?></option>
		</select>
	</p>

	<p>
		<input id="<?php echo $this->get_field_id( 'link_image' ); ?>" type="checkbox" name="<?php echo $this->get_field_name( 'link_image' ); ?>" value="1" <?php checked( $instance['link_image'] ); ?>/>
		<label for="<?php echo $this->get_field_id( 'link_image' ); ?>"><?php _e( 'Link Image to Post', 'content-highlighter' ); ?></label>
	</p>

</div>

<div class="content-highlighter-widget-box">

	<p>
		<input id="<?php echo $this->get_field_id( 'show_title' ); ?>" type="checkbox" name="<?php echo $this->get_field_name( 'show_title' ); ?>" value="1" <?php checked( $instance['show_title'] ); ?>/>
		<label for="<?php echo $this->get_field_id( 'show_title' ); ?>"><?php _e( 'Show Post Title', 'content-highlighter' ); ?></label>
	</p>

	<p>
		<input id="<?php echo $this->get_field_id( 'show_author' ); ?>" type="checkbox" name="<?php echo $this->get_field_name( 'show_author' ); ?>" value="1" <?php checked( $instance['show_author'] ); ?>/>
		<label for="<?php echo $this->get_field_id( 'show_author' ); ?>"><?php _e( 'Show Author link', 'content-highlighter' ); ?></label>
	</p>

	<p>
		<input id="<?php echo $this->get_field_id( 'show_date' ); ?>" type="checkbox" name="<?php echo $this->get_field_name( 'show_date' ); ?>" value="1" <?php checked( $instance['show_date'] ); ?>/>
		<label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Show Published Date', 'content-highlighter' ); ?></label>
	</p>

	<p>
		<input id="<?php echo $this->get_field_id( 'show_comments' ); ?>" type="checkbox" name="<?php echo $this->get_field_name( 'show_comments' ); ?>" value="1" <?php checked( $instance['show_comments'] ); ?>/>
		<label for="<?php echo $this->get_field_id( 'show_comments' ); ?>"><?php _e( 'Show Comments Link', 'content-highlighter' ); ?></label>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'show_content' ); ?>"><?php _e( 'Content Type', 'content-highlighter' ); ?>:</label>
		<select class="widefat" id="<?php echo $this->get_field_id( 'show_content' ); ?>" name="<?php echo $this->get_field_name( 'show_content' ); ?>">
			<option value="content" <?php selected( 'content', $instance['show_content'] ); ?>><?php _e( 'Show Content', 'content-highlighter' ); ?></option>
			<option value="excerpt" <?php selected( 'excerpt', $instance['show_content'] ); ?>><?php _e( 'Show Excerpt', 'content-highlighter' ); ?></option>
			<option value="content-limit" <?php selected( 'content-limit', $instance['show_content'] ); ?>><?php _e( 'Show Content Limit', 'content-highlighter' ); ?></option>
			<option value="" <?php selected( '', $instance['show_content'] ); ?>><?php _e( 'No Content', 'content-highlighter' ); ?></option>
		</select>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'content_limit' ); ?>"><?php _e( 'Content Character Limit', 'content-highlighter' ); ?>:</label>
		<input class="widefat" type="number" id="<?php echo $this->get_field_id( 'content_limit' ); ?>" name="<?php echo $this->get_field_name( 'content_limit' ); ?>" value="<?php echo esc_attr( $instance['content_limit'] ); ?>" size="3" />
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'more_text' ); ?>"><?php _e( 'More Text (if applicable)', 'content-highlighter' ); ?>:</label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'more_text' ); ?>" name="<?php echo $this->get_field_name( 'more_text' ); ?>" value="<?php echo esc_attr( $instance['more_text'] ); ?>" />
	</p>

</div>

<div class="content-highlighter-widget-box last">

	<p>
		<input id="<?php echo $this->get_field_id( 'more_from_category' ); ?>" type="checkbox" name="<?php echo $this->get_field_name( 'more_from_category' ); ?>" value="1" <?php checked( $instance['more_from_category'] ); ?>/>
		<label for="<?php echo $this->get_field_id( 'more_from_category' ); ?>"><?php _e( 'Show Category Archive Link', 'content-highlighter' ); ?></label>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'more_from_category_text' ); ?>"><?php _e( 'Link Text', 'content-highlighter' ); ?>:</label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'more_from_category_text' ); ?>" name="<?php echo $this->get_field_name( 'more_from_category_text' ); ?>" value="<?php echo esc_attr( $instance['more_from_category_text'] ); ?>" class="widefat" />
	</p>

</div>
