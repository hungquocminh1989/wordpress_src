<?php
/*
|--------------------------------------------------------------------------
| POSTTYPE
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;
if (!is_admin()) return;

add_action( 'init', 'repoCreatePostType' );

function repoCreatePostType() {
	
	register_post_type( 'urgent_message',
        [
        'label' => '緊急メッセージ',
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => 
            [
                'title',
                'editor',
                'thumbnail',
                'revisions'
            ]
        ]
    );
	
}

