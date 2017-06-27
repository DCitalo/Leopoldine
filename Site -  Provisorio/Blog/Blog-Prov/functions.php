<?php
/* WIDGETS */
add_theme_support( 'post-thumbnails' );

add_filter('excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length($length) {
return 24; //Nova quantidade de caracteres do excerpt
}
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more) {
	return ' ...';
}

if (function_exists('register_sidebar'))
{
    register_sidebar(array(
		'name'			=> 'Sidebar',
        'before_widget'	=> '<div class="widget">',
        'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
    ));
}

?>
