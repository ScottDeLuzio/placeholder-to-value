<?php
/*
Plugin Name: Placeholder to Value
Plugin URI: https://conditionalcheckoutfields.com
Description: Set placeholder text to a value
Version: 1.0
Author: Scott DeLuzio
Author URI: https://scottdeluzio.com
*/

/*  Copyright 2017  Scott DeLuzio  (email : support (at) conditionalcheckoutfields.com)	*/

function cwcfp_placeholder_to_value_script() {
   if( function_exists( 'is_checkout' ) && is_checkout() ){
	  wp_enqueue_script( 'placeholder-to-value', plugins_url('/js/placeholder-to-value.js', __FILE__ ), array( 'jquery' ) );
   }
}
add_action( 'wp_enqueue_scripts', 'cwcfp_placeholder_to_value_script' );