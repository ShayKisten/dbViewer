<?php
/*
This file is part of dbViewer.

dbViewer is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

dbViewer is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with Foobar. If not, see <https://www.gnu.org/licenses/>.
*/

/**
 * @link              https://shaykisten.com/products-dbviewer/
 * @since             1.0.0
 * @package           dbViewer
 *
 * @wordpress-plugin
 * Plugin Name:       dbViewer
 * Plugin URI:        https://shaykisten.com/products-dbviewer/
 * Description:       View your WordPress database tables and data from your WordPress admin dashboard.
 * Version:           1.0.0
 * Author:            ShayKisten
 * Author URI:        https://shaykisten.com/products-dbviewer/
 * License:           GPL-3.0+
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       dBViewer
 * Domain Path:       /languages
 */


/**
 * Create the main menu view for dbViewer in the sidebar.
 * 
 * add_action hook used to display the menu.
 * 
 * @since 1.0.0 
 */
function add_dbViewer_menu_page(){
	add_menu_page('dbViewer', 'dbViewer', 'manage_options', 'dbviewer', 'display_dbviewer_page', 'dashicons-database');
}
function display_dbviewer_page(){
	include_once('views/dbViewer_menu_display.php');
}
add_action( 'admin_menu', 'add_dbViewer_menu_page');

/**
 * Create the about sub-menu view for dbViewer in the sidebar.
 * 
 * add_action hook used to display the menu.
 * 
 * @since 1.0.0 
 */

function add_dbViewer_about_page(){
	add_submenu_page( 'dbviewer', 'dbViewer About', 'About', 'manage_options', 'dbViewer-about', 'display_dbViewer_about_page');
}
function display_dbViewer_about_page(){
	include_once('views/dbViewer_about_display.php');
}
add_action( 'admin_menu', 'add_dbViewer_about_page');

/**
 * Function to get list of tables in WordPress db.
 * 
 * Inserts an array of <option> tags into HTML. To be called inside <select> tags.
 * add_filter hook used to hook into function.
 * Use apply_filters('table_list', $) to use filter.
 * 
 * @since 1.0.0 
 */
function get_tables(){
	global $wpdb;
	$tables = $wpdb->get_results("SHOW TABLES FROM ".$wpdb->dbname, 'ARRAY_N');
	foreach ($tables as $table) {
		echo('<option value="' . $table[0] .'">');
		echo($table[0]);
		echo('</option>');
	}
}
add_filter('table_list', 'get_tables');

/**
 * Function to get data from the table in the WordPress db.
 * 
 * Inserts contents of table into HTML. To be called within <table> tags. 
 * add_filter hook used to hook into function.
 * Use apply_filters('table_value', $table) to use filter.
 * 
 * @since 1.0.0 
 */
function get_table($table){
	global $wpdb;
	$table_name = $table;
	$field_names = $wpdb->get_results("DESCRIBE $table_name"); //field_names[index]->Field = field name
	$fields = $wpdb->get_results("SELECT * FROM $table_name", 'ARRAY_N');
	echo('<tr>');
	foreach ($field_names as $field_name) {
		echo('<th>');
		echo($field_name->Field);
		echo('</th>');
	}
	echo('</tr>');

	foreach ($fields as $field) {
		echo('<tr>');
		foreach ($field as $data) {
			echo('<td>');
			echo($data);
			echo('</td>');
		}
		echo('</tr>');
	}
}
add_filter('table_value', 'get_table');

















