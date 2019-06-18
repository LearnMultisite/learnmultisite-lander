<?php

/**
 * File which contains the setup information about this theme. Settings, colour palettes, font sizes
 * etc.
 *
 * @package WordPress
 * @subpackage LearnMultisiteLander
 * @since 0.1.0
 */

namespace LearnMultisiteLander;

use \LearnMultisiteLander\Utils as Utils;

/**
 * Class which handles the theme configurtion.
 */
class ThemeSetup {

	/**
	 * Initialize this class.
	 *
	 * @return void
	 */
	public function init() {

		$this->actions();
		$this->filters();

	}//end init()

	/**
	 * Register our actions.
	 *
	 * @return void
	 */
	public function actions() {

		add_action( 'after_setup_theme', array( $this, 'theme_config' ) );

		add_action( 'after_setup_theme', array( $this, 'content_width' ), 0 );

		add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );

	}//end actions()

	/**
	 * Register our filters.
	 *
	 * @return void
	 */
	public function filters() {

	}//end filters()

	/**
	 * Main settings and config for this theme.
	 *
	 * @return void
	 */
	public function theme_config() {

		load_theme_textdomain( 'learnmultisitelander', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'learnmultisitelander' ),
				'footer' => __( 'Footer Menu', 'learnmultisitelander' ),
			)
		);

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'learnmultisitelander' ),
					'shortName' => __( 'S', 'learnmultisitelander' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'learnmultisitelander' ),
					'shortName' => __( 'M', 'learnmultisitelander' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'learnmultisitelander' ),
					'shortName' => __( 'L', 'learnmultisitelander' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'learnmultisitelander' ),
					'shortName' => __( 'XL', 'learnmultisitelander' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'learnmultisitelander' ),
					'slug'  => 'primary',
					'color' => Utils::hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => __( 'Secondary', 'learnmultisitelander' ),
					'slug'  => 'secondary',
					'color' => Utils::hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'learnmultisitelander' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'learnmultisitelander' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'learnmultisitelander' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

	}//end theme_config()

	/**
	 * Set the content width in pixels, based on the theme's design and stylesheet.
	 *
	 * Priority 0 to make it available to lower priority callbacks.
	 *
	 * @global int $content_width Content width.
	 */
	public function content_width() {
		// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
		$GLOBALS['content_width'] = 640;
	}//end content_width()

	/**
	 * Enqueue scripts and styles.
	 */
	public function scripts() {

		wp_enqueue_style( 'learnmultisitelander-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_script( 'learnmultisite-mainjs', get_theme_file_uri( '/assets/js/main.js' ), array(), wp_get_theme()->get( 'Version' ), true );

	}//end scripts()

}//end class
