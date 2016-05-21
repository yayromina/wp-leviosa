<?php

// feature image stuff
add_theme_support('post-thumbnails');

// CSS and JS
function resources() {
    wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	wp_enqueue_style( 'wordpress', get_stylesheet_uri() );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/dist/js/scripts.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'resources' );

// 3. Hide ACF field group menu item
// add_filter('acf/settings/show_admin', '__return_false');


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page('General Options');

}

function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );


// Navigation Menus
register_nav_menus(array(
	'primary' => _('Primary Menu'),
	'footer' => _('Footer Menu'),
    'top_bar' => _('Top Bar Menu')
));

// excerpt stuff
function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

ob_start("sanitize_output");