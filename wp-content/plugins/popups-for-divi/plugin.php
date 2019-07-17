<?php
/**
 * Enables JS popups within Divi.
 *
 * @package     Evr_Divi_Popup
 * @author      Philipp Stracker
 * @license     GPL2+
 *
 * Plugin Name: Popups for Divi
 * Plugin URI:  https://philippstracker.com/divi-popup/
 * Description: Finally a simple and intuitive way to add custom popups to your divi pages!
 * Author:      Philipp Stracker
 * Author URI:  https://philippstracker.com/
 * Created:     30.12.2017
 * Version:     1.4.0
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: divi-popup
 * Domain Path: /lang
 *
 * Popups for Divi is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Popups for Divi is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Popups for Divi. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

define( 'EVR_DIVI_POPUP_PLUGIN', plugin_basename( __FILE__ ) );

/**
 * A new version value will force refresh of CSS and JS files for all users.
 */
define( 'EVR_DIVI_POPUP_VERSION', '1.4.0' );

add_action(
	'plugins_loaded',
	'divi_popup_load_plugin_textdomain'
);

/**
 * Add multilanguage support for the plugin.
 *
 * @since  1.0.0
 */
function divi_popup_load_plugin_textdomain() {
	load_plugin_textdomain(
		'popups-for-divi',
		false,
		dirname( EVR_DIVI_POPUP_PLUGIN ) . '/lang/'
	);
}

require 'include/class-evr-divi-popup.php';

global $divi_popup;
$divi_popup = new Evr_Divi_Popup();
