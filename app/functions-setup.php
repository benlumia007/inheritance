<?php
/**
 * Theme - Setup
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/inheritance
 */

/**
 * Define namespace
 */
namespace Inheritance;

/**
 * Setup Theme Support.
 *
 * This is where all of the add_theme_support(); will happen.
 *
 * @since  1.0.0
 * @access public
 * @return void
 *
 * @link   https://developer.wordpress.org/reference/functions/add_theme_support/
 * @link   https://developer.wordpress.org/themes/basics/theme-functions/
 * @link   https://developer.wordpress.org/reference/functions/load_theme_textdomain/
 */
add_action( 'after_setup_theme', function() {
		/**
		 * Content width is a theme feature, when set, it can set the maximum allow width for any content in teh theme like
		 * oEmbeds and images added to posts.
		 */
		$GLOBALS['content_width'] = 800;

		/**
		 * By adding add_theme_support( 'title-tag' );, this will let WordPress manage all document titles and should be use instead of wp_title();.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * By adding add_theme_support( 'automatic-feed-links' );, this feature when enabled allows feed links for post and comments
		 * in the head of the theme. This feature should be used in place of of the deprecated function automatic_feed_links();.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * By adding add_theme_support( 'html5', arrayy() );, this feature when enabled allows the user use of HTML5 markup for
		 * comment list, comment forms, search forms, galleries, and captions.
		 */
		add_theme_support( 'html5', [
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
		] );

		/**
		 * By adding add_theme_support( 'post-thumbnails' );, this feature when enabled allows you to setup featured images
		 * also known as featured image. If you need to use conditional, please consider using has_post_thumbnail.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * By adding add_theme_support( 'post-formats' );, this feature when enabled allows you to setup post formats.
		 */
		add_theme_support( 'post-formats', [
			'aside',
		] );

		/**
		 * By add_image_size( 'inheritance-small-thumbnails', 324, 324, true );. This should be used for content in the home for blogs.
		 */
		add_image_size( 'inheritance-small-thumbnails', 324, 324, true );

		/**
		 * By add_image_size( 'inheritance-medium-thumbnails', 810, 396, true );. This should be used for content that has sidebars.
		 */
		add_image_size( 'inheritance-medium-thumbnails', 810, 396, true );

		/**
		 * By add_image_size( 'inheritance-large-thumbnails', 1170, 614, true );. This should be used for content that has no sidebars.
		 */
		add_image_size( 'inheritance-large-thumbnails', 1170, 614, true );

		/**
		 * Load theme translation.
		 */
		load_theme_textdomain( 'inheritance', get_parent_theme_file_path( '/languages ' ) );
	}
);

/**
 * Registers custom templates with WordPress.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $templates
 * @return void
 */
add_action( 'backdrop/templates/register', function( $templates ) {
	$templates->add( 'template-left-sidebar.php', [
		'label' => esc_html__( 'Left Sidebar', 'inheritance' )
	] );

	$templates->add( 'template-right-sidebar.php', [
		'label' => esc_html__( 'Right Sidebar', 'inheritance' )
	] );
} );
