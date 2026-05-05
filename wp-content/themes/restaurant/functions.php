<?php

function ca_theme_menu_sidebar(){
    register_nav_menus([
        'main' => 'Menu principal'
    ]);
}

add_action('init', 'ca_theme_menu_sidebar');
