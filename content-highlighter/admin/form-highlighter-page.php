<?php
/**
 * The Highlighter Page Widget Form Template.
 *
 * This is used by the Highlighter Page widget to display an input form on the
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
		<label for="<?php echo $this->get_field_id( 'page_id' ); ?>"><?php _e( 'Page', 'content-highlighter' ); ?>:</label>
		<?php wp_dropdown_pages( array( 'name' => $this->get_field_name( 'page_id' ), 'selected' => $instance['page_id'] ) ); ?>
	</p>

</div>

<div class="content-highlighter-widget-box">

	<p>
		<label for="<?php echo $this->get_field_id( 'show_image' ); ?>"><?php _e( 'Show Image', 'content-highlighter' ); ?>:</label>
		<select class="widefat" id="<?php echo $this->get_field_id( 'show_image' ); ?>" name="<?php echo $this->get_field_name( 'show_image' ); ?>">
			<option value="none">- <?php _e( 'Don\'t Show an Image', 'content-highlighter' ); ?> -</option>
			<option value="before_widget_title" <?php selected( 'before_widget_title', $instance['show_image'] ); ?>><?php _e( 'Before Widget Title', 'content-highlighter' ); ?></option>
			<option value="before_title" <?php selected( 'before_title', $instance['show_image'] ); ?>><?php _e( 'Before Page Title', 'content-highlighter' ); ?></option>
			<option value="after_title" <?php selected( 'after_title', $instance['show_image'] ); ?>><?php _e( 'After Page Title', 'content-highlighter' ); ?></option>
			<option value="after_content" <?php selected( 'after_content', $instance['show_image'] ); ?>><?php _e( 'After Page Content', 'content-highlighter' ); ?></option>
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
		<select id="<?php echo $this->get_field_id( 'image_alignment' ); ?>" name="<?php echo $this->get_field_name( 'image_alignment' ); ?>">
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

<div class="content-highlighter-widget-box last">

	<p>
		<input id="<?php echo $this->get_field_id( 'show_title' ); ?>" type="checkbox" name="<?php echo $this->get_field_name( 'show_title' ); ?>" value="1"<?php checked( $instance['show_title'] ); ?> />
		<label for="<?php echo $this->get_field_id( 'show_title' ); ?>"><?php _e( 'Show Page Title', 'content-highlighter' ); ?></label>
	</p>

	<p>
		<input id="<?php echo $this->get_field_id( 'show_content' ); ?>" type="checkbox" name="<?php echo $this->get_field_name( 'show_content' ); ?>" value="1"<?php checked( $instance['show_content'] ); ?> />
		<label for="<?php echo $this->get_field_id( 'show_content' ); ?>"><?php _e( 'Show Page Content', 'content-highlighter' ); ?></label>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'content_limit' ); ?>"><?php _e( 'Content Character Limit', 'content-highlighter' ); ?>:</label>
		<input class="widefat" type="number" id="<?php echo $this->get_field_id( 'content_limit' ); ?>" name="<?php echo $this->get_field_name( 'content_limit' ); ?>" value="<?php echo esc_attr( $instance['content_limit'] ); ?>" size="3" />
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'more_text' ); ?>"><?php _e( 'More Text', 'content-highlighter' ); ?>:</label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'more_text' ); ?>" name="<?php echo $this->get_field_name( 'more_text' ); ?>" value="<?php echo esc_attr( $instance['more_text'] ); ?>" />
	</p>

</div>
