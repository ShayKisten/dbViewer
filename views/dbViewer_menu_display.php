<?php
/*
This file is part of dbViewer.

dbViewer is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

dbViewer is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with Foobar. If not, see <https://www.gnu.org/licenses/>.
*/
/**
 * The main view of the plugin.
 *
 * Provides the main view of the plugin, including the database table selector
 * and table to view database table data.
 * 
 * @link       https://shaykisten.com/products-dbviewer/
 * @since      1.0.0
 *
 * @package    dbViewer
 * @subpackage dbViewer/views
 * @author     ShayKisten
 */
?>

<style type="text/css">
	table, td, th {
		border:  1px solid black;
	}
</style>

<div class="wrap">
	<h1>dbViewer</h1>
	<div>
		<form method="post">
			<select name="table_select" onchange="this.form.submit()">
				<option>---Select A Table---</option>
				<?php $tables = apply_filters('table_list', $tables)?>
			</select>

		</form>
		<?php
			$table = null;
			if(isset($_POST['table_select'])){
    			$table = $_POST['table_select'];
			}
			echo('<h2>');
			echo($table);
			echo('</h2>');
			echo('<table>');
			apply_filters('table_value', $table);
			echo('</table>')
		?>
	</div>
</div>
