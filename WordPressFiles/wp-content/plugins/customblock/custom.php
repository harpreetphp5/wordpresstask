<?php
/**
* Plugin Name: Custom Block
* Author: RFP
* Description: Plugin to add extra blocks in WordPress
*/

if(! defined('ABSPATH')){
	exit;
}

function multiple_blocks($block_name, $options=array()){
	register_block_type(
		'customblock/' .$block_name,
		array_merge(
			array(
				'editor_script' => 'customblock-editor-script',
				// 'script',
				// 'style',
				'editor_style' => 'customblock-editor-style'
			),
			$options
		)
	);
}

function mytheme_blocks_register(){

	wp_register_script(
		'customblock-editor-script',
		plugins_url('dist/editor.js', __FILE__),
		array('wp-blocks','wp-i18n','wp-element')
	);

	wp_register_style(
		'customblock-editor-style',
		plugins_url('dist/editor.css', __FILE__),
		array('wp-edit-blocks')
	);

	multiple_blocks('firstblock');
	multiple_blocks('secondblock');
	
}

add_action('init', 'mytheme_blocks_register');
