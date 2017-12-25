<?php
wp_enqueue_style( 'style', get_stylesheet_uri() ,array(), time() );
function groovebox_script_enqueue(){
    wp_enqueue_style('customstyle', get_template_directory_uri(). '/css/groovebox.css', array(),'', '');
    wp_enqueue_script('customjs', get_template_directory_uri(). '/js/groovebox.js', array(), '', '');
}

add_action('wp_enqueue_scripts', 'groovebox_script_enqueue');

function groovebox_theme_setup(){

    add_theme_support('menus');
    register_nav_menu('primaryHome','Primary navigation for homepage');
    register_nav_menu('secondaryHome','Secondary navigation for homepage');
    register_nav_menu('primaryOther','Primary navigation for all other pages');
    register_nav_menu('footer','Footer navigation');
}
add_action('init', 'groovebox_theme_setup');