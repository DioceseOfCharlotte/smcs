<?php

class SMCS_Email {

	public function __construct() {

		if ( is_admin() ) {
			add_action( 'load-post.php',     array( $this, 'init_metabox' ) );
			add_action( 'load-post-new.php', array( $this, 'init_metabox' ) );
		}

	}

	public function init_metabox() {

		add_action( 'add_meta_boxes', array( $this, 'add_metabox'  )        );
		add_action( 'save_post',      array( $this, 'save_metabox' ), 10, 2 );

	}

	public function add_metabox() {

		add_meta_box(
			'faculty_metabox_1',
			__( 'Faculty Member Email', 'smcs' ),
			array( $this, 'render_faculty_email' ),
			'faculty',
			'normal',
			'high'
		);

	}

	public function render_faculty_email( $post ) {

		// Add nonce for security and authentication.
		wp_nonce_field( 'smcs_nonce_action', 'smcs_nonce' );

		// Retrieve an existing value from the database.
		$smcs_faculty_email = get_post_meta( $post->ID, 'smcs_faculty_email', true );

		// Set default values.
		if( empty( $smcs_faculty_email ) ) $smcs_faculty_email = '';

		// Form fields.
		echo '<table class="form-table">';

		echo '	<tr>';
		echo '		<th><label for="smcs_faculty_email" class="smcs_faculty_email_label">' . __( 'Email Address', 'smcs' ) . '</label></th>';
		echo '		<td>';
		echo '			<input type="email" id="smcs_faculty_email" name="smcs_faculty_email" class="smcs_faculty_email_field" placeholder="' . esc_attr__( '@stmarkcatholic.net', 'smcs' ) . '" value="' . esc_attr__( $smcs_faculty_email ) . '">';
		echo '		</td>';
		echo '	</tr>';

		echo '</table>';

	}

	public function save_metabox( $post_id, $post ) {

		// Add nonce for security and authentication.
		$nonce_name   = $_POST['smcs_nonce'];
		$nonce_action = 'smcs_nonce_action';

		// Check if a nonce is set.
		if ( ! isset( $nonce_name ) )
			return;

		// Check if a nonce is valid.
		if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) )
			return;

		// Check if the user has permissions to save data.
		if ( ! current_user_can( 'edit_post', $post_id ) )
			return;

		// Check if it's not an autosave.
		if ( wp_is_post_autosave( $post_id ) )
			return;

		// Check if it's not a revision.
		if ( wp_is_post_revision( $post_id ) )
			return;

		// Sanitize user input.
		$smcs_new_faculty_email = isset( $_POST[ 'smcs_faculty_email' ] ) ? sanitize_text_field( $_POST[ 'smcs_faculty_email' ] ) : '';

		// Update the meta field in the database.
		update_post_meta( $post_id, 'smcs_faculty_email', $smcs_new_faculty_email );

	}

}

new SMCS_Email;
