<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_filter( 'cwcfp_change_disabled_to_readonly', 'placeholder_to_value_readonly' );
function placeholder_to_value_readonly( $read_only ){
	switch ( $read_only ) {
		case 'disabled':
			$read_only = 'readonly';
			break;
		
		default:
			$read_only = '';
			break;
	}
	return $read_only;
}