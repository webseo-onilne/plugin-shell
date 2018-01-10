<?php
/* 
 * Removing Plugin data using uninstall.php
 * the below function clears the database table on uninstall
 * only loads this file when uninstalling a plugin.
 */

/* 
 * exit uninstall if not called by WP, defined during the uninstall.php invocation.
 */
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

/* 
 * Making WPDB as global
 * to access database information.
 */
global $wpdb;

/* 
 * @var $table_name 
 * name of table to be dropped
 * prefixed with $wpdb->prefix from the database
 */
$table_name = $wpdb->prefix . 'table_name_to_be_dropped';

// drop the table from the database.
$wpdb->query( "DROP TABLE IF EXISTS $table_name" );

// @TODO: Define any further uninstall functionality here