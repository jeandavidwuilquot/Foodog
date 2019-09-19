<?php
// lien vers le css

function fonctionAppelCss(){
    wp_enqueue_style('style_de_mon_parent', get_template_directory_uri() . '/style.css'  );
}
add_action('wp_enqueue_scripts', 'fonctionAppelCss');

function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title');