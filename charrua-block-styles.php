<?php
/**
 * Plugin Name: Charrúa Block Styles
 * Description: This plugin adds a highlight block style to paragraphs netive blocks.
 * Version:     1.0.0
 * Author:      Charrúa
 * Author URI:  https://charrua.es
 * Plugin URI:  https://github.com/danielcharrua/charrua-block-styles/
 * License:     GPL-3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	function charrua_register_block_styles() {
		/**
		 * Register stylesheet
		 */
		wp_register_style(
			'charrua-block-stylesheet',
			plugins_url( 'style.css', __FILE__ ),
			array(),
			'1.0.0'
		);

		/**
		 * Register block style
		 */
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'highlight-paragraph',
				'label'        => 'Highlight Parahraph',
				'style_handle' => 'charrua-block-stylesheet',
			)
		);
	}

	add_action( 'init', 'charrua_register_block_styles' );
}