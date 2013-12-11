<?php
/*
 * Plugin Name: Jetpack Thrusters
 * Plugin URI: https://github.com/BFTrick/jetpack-thrusters
 * Description: Modify the behavior of Jetpack to make it to what you want
 * Author: Patrick Rauland
 * Version: 0.1
 * Author URI: http://patrickrauland.com
 * License: GPL2+
 * Text Domain: jetpack-thrusters
 * Domain Path: /languages/
 */

function jp_thrusters_modules ( $modules ) {
	// unset( $modules['after-the-deadline'] );
	// unset( $modules['carousel'] );
	unset( $modules['comments'] );
	unset( $modules['contact-form'] );
	unset( $modules['custom-css'] );
	// unset( $modules['enhanced-distribution'] );
	// unset( $modules['gplus-authorship'] );
	unset( $modules['gravatar-hovercards'] );
	// unset( $modules['infinite-scroll'] );
	// unset( $modules['json-api'] );
	unset( $modules['latex'] );
	// unset( $modules['likes'] );
	// unset( $modules['minileven'] );
	// unset( $modules['mobile-push'] );
	// unset( $modules['monitor'] );
	// unset( $modules['notes'] );
	// unset( $modules['omnisearch'] );
	// unset( $modules['photon'] );
	unset( $modules['post-by-email'] );
	// unset( $modules['publicize'] );
	// unset( $modules['sharedaddy'] );
	unset( $modules['shortcodes'] );
	// unset( $modules['shortlinks'] );
	// unset( $modules['stats'] );
	// unset( $modules['sso'] );
	// unset( $modules['subscriptions'] );
	// unset( $modules['tiled-gallery'] );
	// unset( $modules['vaultpress'] );
	// unset( $modules['videopress'] );
	// unset( $modules['widget-visibility'] );
	// unset( $modules['widgets'] );
	// unset( $modules['wpcc'] );

	return $modules;
}
add_filter( 'jetpack_get_available_modules', 'jp_thrusters_modules' );

