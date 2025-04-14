<?php
/**
 * Plugin Name: Daan - Allow Emoji's
 * Description: This plugin makes sure you can use emoji's in your posts' content.
 * Version: 1.0.0
 * Author: Daan from Daan.dev
 * Author URI: https://daan.dev
 * GitHub Plugin URI: Dan0sz/allow-emojis
 * Primary Branch: master
 * License: MIT
 */

add_filter(
	'wp_insert_post_data',
	function ( $data ) {
		if ( ! empty( $data[ 'post_content' ] ) ) {
			$data[ 'post_content' ] = wp_encode_emoji( $data[ 'post_content' ] );
		}

		return $data;
	},
	99
);
