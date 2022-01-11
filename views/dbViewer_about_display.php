<?php
/*
This file is part of dbViewer.

dbViewer is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

dbViewer is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with Foobar. If not, see <https://www.gnu.org/licenses/>.
*/
/**
 * The about view of the plugin.
 *
 * Provides the about view for the plugin, including what it does,
 * how to use it and a donate link.
 * 
 * @link       https://shaykisten.com/products-dbviewer/
 * @since      1.0.0
 *
 * @package    dbViewer
 * @subpackage dbViewer/views
 * @author     ShayKisten
 */
?>

<div class="wrap">
	<h1>dbViewer</h1>
	<div>
		<h2>About</h2>
		<p>Name: dbViewer</p>
		<p>Description: View your WordPress database tables and data from your WordPress admin dashboard.</p>
		<p>Version: 1.0.0</p>
		<p>Author: ShayKisten</p>
		<p>Copyright © 2022 ShayKisten <br> under GNU GPL v3 license</p>
	</div>
	<div>
		<h2>Donate</h2>
		<p>Enjoyed using our plugin or found it helpful? <br> Donate to us</p>
		<form action="https://www.paypal.com/donate" method="post" target="_top">
		<input type="hidden" name="hosted_button_id" value="FMY5DPT2XVGUU" />
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
		<img alt="" border="0" src="https://www.paypal.com/en_ZA/i/scr/pixel.gif" width="1" height="1" />
		</form>
	</div>
	<div>
		<h2>Usage</h2>
		<li>Click on the dbViewer menu in your Wordpress admin sidebar.</li>
		<li>Select the table you want to view from the dropdown.</li>
		<li>Data should populate in a table below the dropdown.</li>
	</div>
</div>