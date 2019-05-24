<?php
/*
|--------------------------------------------------------------------------
| LOAD CONFIG
|-------------------------------------------------------------------------- 
*/
locate_template('/core/config.php', TRUE);

/*
|--------------------------------------------------------------------------
| LOAD SHARE FUNCTIONS
|-------------------------------------------------------------------------- 
*/
locate_template('/core/functions.php', TRUE);

/*
|--------------------------------------------------------------------------
| LOAD CLASSES
|-------------------------------------------------------------------------- 
*/
locate_template('/core/classes/walkers/class-walker-nav-menu-category.php', TRUE);
locate_template('/core/classes/walkers/class-walker-nav-menu-top.php', TRUE);
locate_template('/core/classes/widgets/my_widget.php', TRUE);
locate_template('/core/classes/widgets/content_widget.php', TRUE);
locate_template('/core/classes/class-tgm-plugin-activation.php', TRUE);

/*
|--------------------------------------------------------------------------
| LOAD SETTINGS
|-------------------------------------------------------------------------- 
*/
locate_template('/core/settings/ajax-request.php', TRUE);
locate_template('/core/settings/ajax-setting.php', TRUE);
locate_template('/core/settings/client-side-script.php', TRUE);
locate_template('/core/settings/default-posts-setting.php', TRUE);
locate_template('/core/settings/default-pages-setting.php', TRUE);
locate_template('/core/settings/customize-setting.php', TRUE);
locate_template('/core/settings/metabox-setting.php', TRUE);
locate_template('/core/settings/navigation-menus-setting.php', TRUE);
locate_template('/core/settings/sidebars-setting.php', TRUE);
locate_template('/core/settings/theme-setting.php', TRUE);
locate_template('/core/settings/widgets-setting.php', TRUE);
locate_template('/core/settings/post-type-setting.php', TRUE);
locate_template('/core/settings/plugins-setting.php', TRUE);
locate_template('/core/settings/admin-setting.php', TRUE);
locate_template('/core/settings/api-setting.php', TRUE);

/*
|--------------------------------------------------------------------------
| LOAD VENDOR CLASS
|-------------------------------------------------------------------------- 
*/