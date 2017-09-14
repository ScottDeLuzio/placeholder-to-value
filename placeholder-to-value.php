<?php
/*
Plugin Name: Placeholder to Value
Plugin URI: https://conditionalcheckoutfields.com
Description: Set placeholder text to a value on readonly fields
Version: 1.2
Author: Scott DeLuzio
Author URI: https://scottdeluzio.com
*/

/*  Copyright 2017  Scott DeLuzio  (email : support (at) conditionalcheckoutfields.com)	*/

if( ! defined( 'PTV_PLUGIN_DIR' ) ) {
   define( 'PTV_PLUGIN_DIR', dirname( __FILE__ ) );
}

function cwcfp_placeholder_to_value_script() {
   if( function_exists( 'is_checkout' ) && is_checkout() ){
	  wp_enqueue_script( 'placeholder-to-value', plugins_url('/js/placeholder-to-value.js', __FILE__ ), array( 'jquery' ) );
   }
}
add_action( 'wp_enqueue_scripts', 'cwcfp_placeholder_to_value_script' );

/* Filter to make textbox and textarea fields readonly instead of disabled.
 * Required in order for field's value to be submitted on checkout.
 */
include_once( PTV_PLUGIN_DIR . '/filter_cwcfp_change_disabled_to_readonly.php' );
