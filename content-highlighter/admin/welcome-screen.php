<?php
/**
 * Template for the Content Highlighter's welcome screen.
 *
 * @package   ContentHighlighter
 * @copyright Copyright (c) 2015, WP Site Care, LLC
 * @license   GPL-2.0+
 * @since     1.0.0
 */
?>
<div class="wrap about-wrap">
	<h1><?php _e( 'Welcome to Content Highlighter', 'content-highlighter' ); ?></h1>
	<div class="about-text">
		<?php printf( __( 'Thanks for downloading Content Highlighter %s! We created this plugin to help you to highlight your website\'s best content without writing any code.', 'content-highlighter' ), $display_version ); ?>
	</div>
	<div class="flagship-badge" style="background: url('<?php echo esc_url( $badge_url ); ?>') no-repeat;">
		<?php printf( __( 'Version %s', 'content-highlighter' ), $display_version ); ?>
	</div>

	<div class="changelog">
		<h3><?php _e( 'Highlight Your Content in Real-Time', 'content-highlighter' );?></h3>

		<div class="feature-section">

			<img src="<?php echo esc_url( $images_dir . 'screenshots/customizer-preview.gif' ); ?>" class="flagship-welcome-screenshots"/>

			<h4><?php _e( 'Drag and Drop, the WordPress Way', 'content-highlighter' );?></h4>
			<p><?php _e( 'Because Content Highlighter uses the built-in WordPress theme customizer and handy widgets, you don\'t have to worry about slowing down your site or breaking things.', 'content-highlighter' ); ?></p>

			<h4><?php _e( 'Built for Flagship Themes', 'content-highlighter' );?></h4>
			<p><?php _e( 'Content Highlighter will work with nearly all standard WordPress themes, but to get the most out of it we recommend using one of our Puporse-Built WordPress themes. We\'ve hand-crafted templates that make highlighting your content simple, fun, and beautiful. Visit our website and test drive one our amazing designs for yourself!', 'content-highlighter' );?></p>

		</div>
	</div>

	<div class="changelog">
		<h3><?php _e( 'Three Widgets to Choose From', 'content-highlighter' );?></h3>

		<div class="feature-section col three-col">
			<div>
				<h4><?php _e( 'Highlighter Posts', 'content-highlighter' );?></h4>
				<p><?php _e( 'Want to display standard WordPress posts in a widgeted area? No problem! This widget has plenty of options for highlighting your best posts.', 'content-highlighter' );?></p>
			</div>

			<div>
				<h4><?php _e( 'Highlighter Page', 'content-highlighter' );?></h4>
				<p><?php _e( 'Need to direct visitors to a particular page such as a services or about page? We\'ve got you covered with this widget. Select any page on your site quickly and easily!' ,'content-highlighter' );?></p>
			</div>

			<div class="last-feature">
				<h4><?php _e( 'Highlighter Custom Post Types', 'content-highlighter' );?></h4>
				<p><?php _e( 'Need to highlight custom post type content? Don\'t worry, we\'ve got the perfect widget for you. Select any public post type just like standard posts!', 'content-highlighter' );?></p>
			</div>
		</div>
	</div>

	<div class="changelog">
		<a class="button button-primary" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"><?php _e( 'Go to the Customizer', 'content-highlighter' ); ?></a>
		<a class="button" href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php _e( 'Go to the Widgets Screen', 'content-highlighter' ); ?></a>
	</div>

</div>
