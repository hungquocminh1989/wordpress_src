<?php
defined( 'ABSPATH' ) || exit;

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

/**
* Second database
*/
define('DATABASE_TYPE', 'pgsql');
define('DATABASE_NAME', 'sdh_2018');
define('DATABASE_HOST', 'localhost');
define('DATABASE_USER', 'postgres');
define('DATABASE_PASS', '123456');
define('DATABASE_PORT', '5433');
define('DATABASE_DNS', sprintf ('%1$s:dbname=%2$s;host=%3$s;port=%4$s',DATABASE_TYPE, DATABASE_NAME, DATABASE_HOST, DATABASE_PORT));