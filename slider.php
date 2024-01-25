<?php
/**
 * Plugin Name:       Slider
 * Description:       A Plugin for Image Slider
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Ahamed Arshad
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       slider
 *
 * @package           create-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function slider_slider_block_init() {
	register_block_type( __DIR__ . '/build/blocks/slider' );
	register_block_type( __DIR__ . '/build/blocks/sliderImage' );
}
add_action( 'init', 'slider_slider_block_init' );
