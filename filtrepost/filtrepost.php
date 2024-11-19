<?php
/*
plugin name: Filtre Post
author: Roxanne Auclair
description: Une extension qui permettra de filtrer nos articles
*/ 

function enfiler_css_js() {
    filemtime(plugin_dir_path(__FILE__))
    filemtime(plugin_dir_path(__FILE__))
    plugin_dir_url(__FILE__)
    wp_enqueue_style();
    wp_enqueue_script()
    
}
add_action('wp_enqueue_scripts', 'charger_scripts_css');

?>