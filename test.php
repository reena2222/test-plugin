<?php
/*
Plugin Name: test
Plugin URI:http://localhost/wordpress/wp-admin/
Description:A Simple Plugin
Author:Reena
Version:1.0
*/

register_activation_hook(__FILE__,'test_activate');
register_deactivation_hook(__FILE__,'test_deactivate');

function test_activate()
{
}

function test_deactivate()
{
}



add_action('admin_menu','test_add_custom_submenu');

function test_add_custom_submenu()
{
add_submenu_page('options-general.php','test submenu','test submenu','manage_options','test-submenu','test_submenu_callback_fn');
}

function test_submenu_callback_fn()

{
echo "<h1>Hello World</h1>";
}

?>