<?php
/*
Plugin Name: Standard Bootstrap Javascript
Plugin URI: https://github.com/eightbit/plugins/tree/master/standard-bootstrap-javascript
Description: Adds additional bootstrap javascript components that are not included in the Standard core.
Version: 1.0
Author: Jason Bradley
Author URI: http://everchangingmedia.com
Author Email: jason.bradley@me.com
License: GNU General Public License v3.0 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/


/*
/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ CONTENTS /\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\

	1. Constructor
	2. Filters
	4. Instantiation

/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\/\/\/\/\/\
*/


class Standard_Bootstrap_Javascript {
	 
	/* Constructor
	---------------------------------------------------------------------------------- */
	
	/**
	 * Initializes the plugin by setting localization, filters, and administration 
	 * functions.
	 */
	 
	function __construct() {
		
		// register scripts and styles
		add_action( 'wp_enqueue_scripts', array( &$this, 'standard_bootstrap_javascript_enqueue_scripts' ), 11 );
		
	} // end constructor
	
	
	/* Filters
	---------------------------------------------------------------------------------- */
	
	/**
	 * Registers and enqueues plugin-specific scripts and styles.
	 */
	public function standard_bootstrap_javascript_enqueue_scripts() {
		
		// additional-bootstrap scripts
		wp_register_script( 'standard-bootstrap-javascript-script', plugins_url( 'standard-bootstrap-javascript/js/additional-bootstrap-min.js' ) );
		wp_enqueue_script( 'standard-bootstrap-javascript-script' );
		
		// plugin styles
		wp_register_style( 'standard-bootstrap-javascript-style', plugins_url( 'standard-bootstrap-javascript/css/bootstrap.min.css' ) );
		wp_enqueue_style( 'standard-bootstrap-javascript-style' );
		
	} // end standard_bootstrap-javascript_enqueue_scripts
  
  
} // end class


/* Instantiation
---------------------------------------------------------------------------------- */

new Standard_Bootstrap_Javascript();


?>