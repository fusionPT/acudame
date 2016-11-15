<?php


/************************************************/
/* Definir variables */
/************************************************/

define ('THEMEROOT', get_stylesheet_directory_uri());
define ('THEME_IMAGES', THEMEROOT.'/img');
define ('THEME_JS', THEMEROOT.'/js');

/************************************************/
/* Menus */
/************************************************/

function register_my_menus (){
	
	register_nav_menus(array(
		'menu' => 'Menu Principal',
		'menu2' => 'submenu'
	));
	
}

add_action('init', 'register_my_menus');

/************************************************/
/* Advanced Custom Fields Options */
/************************************************/





/************************************************/
/* Automatic Image sizes */
/************************************************/

if ( function_exists( 'add_image_size' ) ) { 
	
	add_image_size( 'foto_perro', 150, 'auto', true ); //(scaled)
	add_image_size( 'foto_perro2', 170, 'auto', true ); //(scaled)
	add_image_size( 'foto_perro_sidebar', 120, 'auto', true ); //(scaled)
	add_image_size( 'foto-tienda', 300, 'auto', true ); //(scaled)
	add_image_size( 'foto-tienda_sidebar', 120, 'auto', true ); //(scaled)
}



/************************************************/
/* Sidebar */
/************************************************/


$args = array(
	'name'          => __( 'Sidebar-1', 'acudame.org' ),
	'id'            => 'sidebar-id1',
	'description'   => '',
    'class'         => '',
	'before_widget' => '<div class="sidebox  %1$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>' ); 
	
$args2 = array(
	'name'          => __( 'Sidebar-2', 'acudame.org' ),
	'id'            => 'sidebar-id2',
	'description'   => '',
    'class'         => '',
	'before_widget' => '<div class="sidebox  %1$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>' ); 

register_sidebar( $args );
register_sidebar( $args2 );






?>