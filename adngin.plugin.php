<?php

$config = require('adngin.config.php');

function adngin_replace_scripts($buffer){
  global $config;
  $key = get_option('adngin_api_key', false);
  if (!$key) return $buffer;
  return str_replace($config['match_urls'], $config['replace_url'], $buffer);
}

function adngin_buffer_start() {
	ob_start("adngin_replace_scripts");
}

function adngin_buffer_end() {
	ob_end_flush();
}

function adngin_enqueue_scripts() {
  $key = get_option('adngin_api_key', false);
  if (!$key) return;
  $src = '//srv.adngin.com/'.$key.'.js';
  wp_enqueue_script('adngin-script', $src, array(), null);
}


// If this function returns "TRUE" AdNgin Plugin Will Activate.
function isActivateAdNginPlugin() {
  
  //Can't activate the plugin without a key set
  $key = get_option('adngin_api_key', false);
  if (!$key) return FALSE;

  // If coockie value is set, it takes precedence
  if(isset($_COOKIE['_ngn_ctrl'])){
    return (strcasecmp($_COOKIE['_ngn_ctrl'],'true')!=0);
  }
  
  // Make a decision
  $rand = mt_rand(1,100);
  $adngin_disable_portion_traffic = get_option('adngin_disable_portion_traffic');
  
  //Activate the plugin if no value was set for the split or the random number falls within the range
  if ((!$adngin_disable_portion_traffic) || ($rand <= $adngin_disable_portion_traffic)) {
    setcookie('_ngn_ctrl', 'false', time() + (86400 * 365), "/");
    return TRUE;
  }
  
  //random number was larger than the dedicated percentage, serve control
  setcookie('_ngn_ctrl', 'true', time() + (86400 * 365), "/");
  return FALSE;
}


// Activate Plugin
if ((!is_admin()) && (isActivateAdNginPlugin())) {
  add_action('after_setup_theme', 'adngin_buffer_start');
  add_action('shutdown', 'adngin_buffer_end');
  add_action('wp_enqueue_scripts', 'adngin_enqueue_scripts');
}