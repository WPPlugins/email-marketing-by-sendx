<?php
/**
 * Uninstall procedures
 * 
 * @package SendX
 * @author Team SendX <hello@sendx.io>
 * @version 1.0.1
 * @since 1.0.1
 */

// Exit if not called from WordPress
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) { exit; }

// Remove options
delete_option( 'sendx_options' );