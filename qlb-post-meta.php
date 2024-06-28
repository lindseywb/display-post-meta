<?php
/**
 * Plugin Name:       Query Loop Block: Display Post Meta
 * Plugin URI:        https://lindseybell.com
 * Description:       Display post meta from ACF in the Query Loop Block
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Lindsey Bell
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       qlb-post-meta
 *
 * @package Lb
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
function lb_qlb_post_meta_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'lb_qlb_post_meta_block_init' );
