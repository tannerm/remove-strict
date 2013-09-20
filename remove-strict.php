/**
Plugin Name: Remove Strict Errors
Description: Remove strict errors when running PHP 5.4 with WP_DEBUG on
Author: Tanner
Version 1.0
*/
if ( WP_DEBUG ) {
    error_reporting( E_ALL & ~E_STRICT );
}
