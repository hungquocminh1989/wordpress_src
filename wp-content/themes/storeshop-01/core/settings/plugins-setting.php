<?php
add_action( 'after_setup_theme',  function(){
	
	repoLoadPlugin('advanced-custom-fields-pro', 'acf.php');
	repoLoadPlugin('woocommerce', 'woocommerce.php');
	repoLoadPlugin('wp-debugging', 'wp-debugging.php');
	repoLoadPlugin('wp-reset', 'wp-reset.php');
	
});

function repoLoadPlugin($pluginFolder, $pluginFile){
	
	if (function_exists('unzip_file') === FALSE){ 
	    require_once ABSPATH . '/wp-admin/includes/file.php' ;
		WP_Filesystem();
	}
	
	if (function_exists('is_plugin_active') === FALSE){ 
	    require_once ABSPATH . '/wp-admin/includes/plugin.php' ;
	}
	
	/**
	* Unzip and load plugin
	*/
	if(file_exists(WP_PLUGIN_DIR . "/$pluginFolder") === FALSE){
		if(unzip_file(TEMPLATEPATH . "/plugins/$pluginFolder" . '.zip',WP_PLUGIN_DIR) === TRUE)
		{
			/*if (is_plugin_active( WP_PLUGIN_DIR . "/$pluginFolder/$pluginFile") === FALSE) {
				activate_plugin(WP_PLUGIN_DIR . "/$pluginFolder/$pluginFile");
			}*/
		}
	}
	
}