<?php
/**
 * wp-request-do-stuff.php
 *
 * Copyright (c) 2019 "kento" Karim Rahimpur www.itthinx.com
 *
 * This code is provided subject to the license granted.
 * Unauthorized use and distribution is prohibited.
 * See COPYRIGHT.txt and LICENSE.txt
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This header and all notices must be kept intact.
 *
 * @author itthinx
 * @package wp-request-do-stuff
 * @since 1.0.0
 *
 * Plugin Name: WP Request Do Stuff
 * Plugin URI: http://www.itthinx.com/
 * Description: An example of triggering an action via a parameter in the $_REQUEST. 
 * Version: 1.0.0
 * Author: itthinx
 * Author URI: http://www.itthinx.com
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Do stuff ... hooked on init. Checks if we have do-stuff in the $_REQUEST.
 */
function wp_request_do_stuff() {
	if ( isset( $_REQUEST['do-stuff'] ) ) {
		if ( current_user_can( '' ) ) {
			// do stuff
		}
	}
}
add_action( 'init', 'wp_request_do_stuff' );

/**
 * Prints a message in the footer if we have do-stuff in the $_REQUEST, hooked on wp_footer.
 */
function wp_request_do_stuff_wp_footer() {
	if ( isset( $_REQUEST['do-stuff'] ) ) {
		echo '<div>';
		_e( 'I can do stuff!', 'wp-request-do-stuff' );
		echo '</div>';
	}
}
add_action( 'wp_footer', 'wp_request_do_stuff_wp_footer' );
