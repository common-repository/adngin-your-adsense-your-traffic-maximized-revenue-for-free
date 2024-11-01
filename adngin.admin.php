<?php

function adngin_test_api_key($key)
{
	$url = 'http://srv.adngin.com/'.$key.'.js';
	$handle = curl_init($url);

	curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);

	$response = curl_exec($handle);
	$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);

	curl_close($handle);

	return $httpCode == 200;
}

function adngin_menu_page() {
	$key = sanitize_text_field($_POST['adngin_api_key']);
	$disable_portion = sanitize_text_field($_POST['adngin_disable_portion_traffic']);
	if (!empty($key)) {
		$valid = adngin_test_api_key($key);
		if ($valid) update_option('adngin_api_key', $key);
	}
	if (!empty($disable_portion)) {
		update_option('adngin_disable_portion_traffic',$disable_portion);
		$disable_portion_valid = true;
	}
	require 'adngin.admin.page.php';
}

function adngin_menu() {
	$icon = plugins_url('img/icon.png', __FILE__);
	add_menu_page('Adngin', 'Adngin', 'manage_options', 'adngin', 'adngin_menu_page', $icon);
}
add_action('admin_menu', 'adngin_menu');


add_filter( 'plugin_action_links_' . ADNGIN_PLUGIN_FILE_PATH, 'my_plugin_action_links' );
function my_plugin_action_links( $links ) {
	$links[] = '<a href="'. esc_url( get_admin_url(null, 'admin.php?page=adngin') ) .'">Settings</a>';
	return $links;
}