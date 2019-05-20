<?php
/*
|--------------------------------------------------------------------------
| CREATE DEFINE
|-------------------------------------------------------------------------- 
*/
define('TEMPLATE_DIRECTORY', get_template_directory());
define('TEMPLATE_URL', get_template_directory_uri());
define('TEMPLATE_FW7_URL', TEMPLATE_URL . '/resources/assets/framework7');
define('TEMPLATE_BUSHIDO_URL', TEMPLATE_URL . '/resources/assets/bushido_template');
define('THEME_TEXT_START', '[ ');
define('THEME_TEXT_END', ' ]');
define('DEFAULT_PAGES',array(
		'title' => 'testpage',
));

/*
|--------------------------------------------------------------------------
| LOAD WORDPRESS COMMON FUNCTIONS
|-------------------------------------------------------------------------- 
*/
if(is_admin() === TRUE){
	if (function_exists('unzip_file') === FALSE){ 
	    require_once ABSPATH . '/wp-admin/includes/file.php' ;
		WP_Filesystem();
	}
	if (function_exists('is_plugin_active') === FALSE){ 
	    require_once ABSPATH . '/wp-admin/includes/plugin.php' ;
	}
}