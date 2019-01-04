<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
if (!class_exists( 'CLS_MODULES')) {
    class CLS_MODULES {
        public static $instance;

        public static function instance() {
            if ( self::$instance === null ) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        private function __construct() {
        	
        }

        public function initialize(){
        	//Load all modules
        	$modules_dir = THEME_PATH . '/app/modules';
			foreach (scandir($modules_dir) as $filename) {
			    $path = $modules_dir . '/' . $filename;
			    if (is_file($path)) {
			        include_once $path;
			    }
			}
        }

	}

}

CLS_MODULES::instance()->initialize();