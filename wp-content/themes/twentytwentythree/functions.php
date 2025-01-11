<?php
function wizard_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/styles/main.css'); 
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('customeCarusel', get_template_directory_uri() . '/assets/js/customeCarusel.js', array(), null, true); 
}

add_action('wp_enqueue_scripts', 'wizard_scripts');
show_admin_bar(false);
?>
