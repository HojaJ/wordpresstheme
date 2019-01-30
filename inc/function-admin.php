<?php

/**
 * @package sunsettheme
 *
 *  =====================
 *      ADMIN PAGE
 *  =====================
 */

function sunset_add_admin_page(){

    // Generate Sunset Admin Page
    add_menu_page('Sunset Theme Options', 'Sunset', 'manage_options', 'alecaddd-sunset', 'sunset_theme_create_page', get_template_directory_uri() . '/img/sunset-icon.png', 110);
}
add_action('admin_menu', 'sunset_add_admin_page');
function sunset_theme_create_page(){
    // Generate of our admin page
}
