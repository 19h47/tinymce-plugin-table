<?php
/**
 * Plugin Name: TinyMCE Plugin Table
 * Plugin URI:        https://github.com/19h47/tinymce-plugin-table/
 * Description:       Add Table controls to the WordPress TinyMCE 4.9.9 editor
 * Version:           0.0.0
 * Requires at least: 5.4
 * Requires PHP:      7.3.11
 * Author:            Jérémy Levron
 * Author URI:        https://19h47.fr/
 * License:           GPL2
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-tinymce-table
 *
 * TinyMCE Plugin Table is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * TinyMCE Plugin Table is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with TinyMCE Plugin Table or WordPress. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'mce_buttons', 'add_the_table_button', 10, 2 );

/**
 * Add the table button
 *
 * @param  array $mce_buttons First-row list of buttons.
 * @param string $editor_id Unique editor identifier, e.g. 'content'. Accepts 'classic-block' when called from block editor's Classic block.
 *
 * @return array mce_buttons
 */
function add_the_table_button( array $mce_buttons, string $editor_id ) : array {
	$mce_buttons[] = 'table';

	return $mce_buttons;
}


add_filter( 'mce_external_plugins', 'add_the_table_plugin', 10, 2 );

/**
 * Add the table plugin
 *
 * @param array  $external_plugins An array of external TinyMCE plugins.
 * @param string $editor_id Unique editor identifier, e.g. 'content'. Accepts 'classic-block' when called from block editor's Classic block.
 *
 * @return array external_plugins
 */
function add_the_table_plugin( array $external_plugins, string $editor_id ) : array {
	$external_plugins['table'] = plugins_url( 'tinymce/plugins/table/plugin.min.js', __FILE__ );

	return $external_plugins;
}
