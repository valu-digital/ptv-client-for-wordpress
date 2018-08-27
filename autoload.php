<?php

/**
 * PTV Client for WordPress
 *
 * PTV Open API Version: v7
 *
 */


/**
 * PTV Client for WordPress Autoloader
 *
 * @param string $class The fully-qualified class name.
 *
 * @return void
 */
spl_autoload_register( function ( $class ) {

	// base directory for the namespace prefix
	$base_dirs = array(
		__DIR__ . '/lib/',
		__DIR__ . '/lib/api/',
		__DIR__ . '/lib/model/',
	);

	$prefix = 'PTV_';

	// does the class use WordPress style class name prefix?
	if ( strpos( $class, $prefix ) !== 0 ) {
		// no, move to the next registered autoloader
		return;
	}

	if ( ! is_array( $base_dirs ) ) {
		return;
	}

	foreach ( $base_dirs as $base_dir ) {
		$file = $base_dir . 'class-' . strtolower( str_replace( '_', '-', $class ) ) . '.php';
		// if the file exists, require it
		if ( file_exists( $file ) ) {
			require_once $file;
			break;
		}
	}
} );

