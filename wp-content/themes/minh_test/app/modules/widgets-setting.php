<?php
add_action( 'after_setup_theme',  function(){
	
	

});

//Load widget
add_action( 'widgets_init', function(){
	
	register_widget( 'Foo_Widget' );
	
});

