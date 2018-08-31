<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.axistechnolabs.com
 * @since      1.0.0
 *
 * @package    Axis_Testimonials
 * @subpackage Axis_Testimonials/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Axis_Testimonials
 * @subpackage Axis_Testimonials/includes
 * @author     Axis Technolabs <chirag@axistechnolabs.com>
 */
class Axis_Testimonials_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'axis-testimonials',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
