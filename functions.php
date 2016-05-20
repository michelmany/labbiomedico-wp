<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array());
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), '0.1.0', true );
}


// LIMITE DE CARACTERES DO RESUMO DOS POSTS
function custom_excerpt_length( $length ) {
    return 28;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// CRIANDO UM SIDEBAR WIDGET
register_sidebar (
    array (
        'name'          => 'Footer 01',
        'id'            => 'footer-01',
        'description'   => 'Primeiro Widget do Footer',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
        )
    );

// CRIANDO UM SIDEBAR WIDGET
register_sidebar (
    array (
        'name'          => 'Footer 02',
        'id'            => 'footer-02',
        'description'   => 'Segundo Widget do Footer',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
        )
    );

// CRIANDO UM SIDEBAR WIDGET
register_sidebar (
    array (
        'name'          => 'Footer 03',
        'id'            => 'footer-03',
        'description'   => 'Terceiro Widget do Footer',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
        )
    );