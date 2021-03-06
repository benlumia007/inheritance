<?php

/**
 * 1.0 - Compatibility Check
 */
function initiator_compatibility_check() {
	if ( version_compare( $GLOBALS['wp_version'], '4.9', '<' ) ) {
		return sprintf(
			// translators: 1 =  a version string, 2 = current wp version string.
			__( 'Initiator requires at least WordPress version %1$s. You are currently running %2$s. Please upgrade and try again.', 'initiator' ),
			'4.9',
			$GLOBALS['wp_version']
		);
	} elseif ( version_compare( PHP_VERSION, '5.6', '<' ) ) {
		return sprintf(
			// translators: 1 =  a version string, 2 = current wp version string.
			__( 'Initiator requires at least PHP version %1$s. You are currently running %2$s. Please upgrade and try again.', 'initiator' ),
			'5.6',
			PHP_VERSION
		);
	}
	return '';
}

/**
 * Triggered after switch themes and check if it meets the requirements.
 */
function initiator_switch_theme() {
	if ( version_compare( $GLOBALS['wp_version'], '4.9', '<' ) || version_compare( PHP_VERSION, '5.6', '<' ) ) {
		switch_theme( get_option( 'theme_switched' ) );
		add_action( 'admin_notices', 'initiator_upgrade_notice' );
	}
	return false;
}
add_action( 'after_switch_theme', 'initiator_switch_theme' );

/**
 * Displays an error if it doesn't meet the requirements.
 */
function initiator_upgrade_notice() {
	printf( '<div class="error"><p>%s</p></div>', esc_html( initiator_compatibility_check() ) );
}