<?php

/*
 * Plugin Name: GT Front End
 * Plugin URI:  https://gauravtiwari.org/plugins/gt-front-end/
 * Description: Edit your posts on the front-end of your site.
 * Version:     1.0.5
 * Author:      Ella Iseulde Van Dorpe & Gaurav Tiwari
 * Author URI:  http://gauravtiwari.org
 * Text Domain: gt-front-end
 * Domain Path: languages
 * Network:     false
 * License:     GPL-2.0+
 */

if ( class_exists( 'FEE' ) ) {
	return;
}

require_once( 'class-fee.php' );

new FEE;
