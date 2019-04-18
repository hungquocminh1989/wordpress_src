<?php 
if (!defined('ABSPATH')) die('Direct access forbidden.');

//Arr all folder
$arr_loader = [];
$arr_logs = [];

//Add widgets
$widgets_dir = TEMPLATE_DIRECTORY . '/app/classes/widgets';
$arr_loader[] = $widgets_dir;

//Add walkers
$walkers_dir = TEMPLATE_DIRECTORY . '/app/classes/walkers';
$arr_loader[] = $walkers_dir;

//Add modules
$modules_dir = TEMPLATE_DIRECTORY . '/app/modules';
$arr_loader[] = $modules_dir;

//Load All
foreach($arr_loader as $dir){
	foreach (scandir($dir) as $filename) {
		$ext_info = new SplFileInfo($filename);
		if($ext_info->getExtension() === 'php'){
			$path = $dir . '/' . $filename;
			if (is_file($path)) {
				$arr_logs[] = $path;
				require_once $path;
			}
		}
	}
}
//var_dump($arr_logs);