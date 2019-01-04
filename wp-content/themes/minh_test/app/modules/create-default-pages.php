<?php
wp_register_theme_activation_hook('mmen', '_mmen_theme_active');
wp_register_theme_deactivation_hook('mmen', '_mmen_theme_deactive');

function wp_register_theme_activation_hook($code, $function) {
    $optionKey = "theme_is_activated_" . $code;
    if(!get_option($optionKey)) {
        call_user_func($function);
        update_option($optionKey , 1);
    }
}

function wp_register_theme_deactivation_hook($code, $function) {
	$GLOBALS["wp_register_theme_deactivation_hook_function" . $code] = $function;
    add_action("switch_theme", function($theme) {
    	$code =  'mmen';
	    call_user_func($GLOBALS["wp_register_theme_deactivation_hook_function".$code]);
	    $option = delete_option("theme_is_activated_".$code);
	});
}

function _mmen_theme_active() {
    $default_pages = DEFAULT_PAGES;
    if(isset($default_pages) && count($default_pages) > 0){

    	$existing_pages  = get_pages();
	    $existing_titles = array();
    	foreach ($existing_pages as $page) {
	        $existing_titles[] = $page->post_title;
	    }
	    foreach ($default_pages as $new_page) {
	        if( !in_array( $new_page['title'], $existing_titles ) ) {
	            // create post object
	            $add_default_pages = array(
	                'post_title'   => $new_page['title'],
	                'post_content' => '',
	                'post_status'  => 'publish',
	                'post_type'    => 'page'
	              );
	            // insert the post into the database
	            $result = wp_insert_post($add_default_pages);
	        }
	    }
    }
}

function _mmen_theme_deactive() {
   // code to execute on theme deactivation
}