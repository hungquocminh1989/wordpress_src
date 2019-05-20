<?php
/*
|--------------------------------------------------------------------------
| https://codex.wordpress.org/Plugin_API/Action_Reference/customize_register
|-------------------------------------------------------------------------- 
*/

//Load  customize : get_theme_mod(...) hoac get_option(...) tuy theo luc add_setting khai bao type

add_action('customize_register','repo_CustomizePhoneNumber');

function repo_CustomizePhoneNumber($wp_customize) {
	
	$wp_customize->add_section('themename_color_scheme', array(
        'title'    => __('Color Scheme', 'themename'),
        'description' => '',
        'priority' => 120,
    ));
 
    //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[text_test]', array(
        'default'        => 'value_xyz',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('themename_text_test', array(
        'label'      => __('Text Test', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'themename_theme_options[text_test]',
    ));
	
}

?>