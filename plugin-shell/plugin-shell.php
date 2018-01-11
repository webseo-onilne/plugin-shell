<?php
/*
Plugin Name: Shell
Plugin URI: https://github.com/webseo-onilne/plugin-shell
Description: A basic plugin shell to get you started on any new plugin, fork this repository for the basic set-up
Author: Web SEO Online (PTY) LTD
Author URI: https://webseo.co.za
Version: 0.1
  Copyright: © 2016 Web SEO Online (PTY) LTD (email : code@webseo.co.za or dev@webseo.co.za)
  License: GNU General Public License v3.0
  License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/
  
if (!defined('ABSPATH')) die ('No direct access allowed');


/* Register Uninstall Hook */
/* 
These uninstall methods are used to clean up after your plugin is deleted using the WordPress Admin. 
You would use this to delete all data created by your plugin, such as any options that were added to the options table. 
*/
register_uninstall_hook('uninstall.php', 'on_uninstall');

/* Register Deactivation Hook */
/*
The deactivation hook is run when you deactivate your plugin.
You would use this to provide a function that clears any temporary data stores by your plugin.
*/
function on_deactivation()
{
    // @TODO: Define deactivation functionality here
}

/* Register Activation Hook */
/*
The activation hook is run when you activate your plugin. 
You would use this to provide a function to set up your plugin — for example, creating some default settings in the options table.
*/
function on_activation()
{
    // @TODO: Define activation functionality here
}

register_activation_hook(__FILE__, 'on_activation');
register_deactivation_hook(__FILE__, 'on_deactivation');

if ( ! class_exists( 'WP_PluginShell' ) ) {

	/**
	 * Localisation
	 **/
	load_plugin_textdomain( 'WP_PluginShell', false, dirname( plugin_basename( __FILE__ ) ) . '/' );
	class WP_PluginShell {
    
	/**
	* Constructor
	**/
	public function __construct() {
		// @TODO: Define public constructors here
	}

	// Instantiate the plugin class and add it to the set of globals
	$GLOBALS['WP_PluginShell'] = new WP_PluginShell();
      
    }
  
}
