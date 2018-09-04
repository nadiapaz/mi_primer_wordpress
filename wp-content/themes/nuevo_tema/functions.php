<?php

//Registro de styles

function register_enqueue_style() {
    $theme_data = wp_get_theme();

 /* Registrando estilos */
 wp_register_style('portfolio-item', get_parent_theme_file_uri('/assets/css/portfolio-item.css'),
'null', '1.0', 'screen');
 wp_register_style('styles', get_parent_theme_file_uri('/assets/css/styles.css'),
'null', '1.0', 'screen');
wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css'),
'null', '4.1.1', 'screen');

 /* Estilos en cola */
 wp_enqueue_style('portfolio-item');
 wp_enqueue_style('styles');
 wp_enqueue_style('bootstrap');

}
add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );



//Registro de scripts

function register_enqueue_scripts() {
  $theme_data = wp_get_theme();

 /* Registrando scripts */
 wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/vendor/bootstrap/js/bootstrap.min.js'),
 '4.1.1',null, true);
 wp_register_script('jquery', get_parent_theme_file_uri('/assets/vendor/jquery/jquery.min.js'),
null, '3.2.1',true);

 /* Estilos en cola */
 wp_enqueue_script('bootstrap');
 wp_enqueue_script('jquery');

}
add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

/* Registrando scripts */

/*Logo personalizado*/

  function config_custom_logo() {
    add_theme_support( 'custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
    ));
  }
  add_action( 'after_setup_theme', 'config_custom_logo' );
/*Tamaños personalizados*/

  function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }
  function dl_image_sizes( $sizes ) {
    $add_sizes = array(
      'portfolio-home'		=> __( 'Tamaño de las imágenes del portafolio en el home' ),
      'square'				=> __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
      'post-custom-size'	=> __( 'Tamaño personalizado para la imagen destada de los post' ),
      'custom-size-blog'	=> __( 'Tamaño personalizado para la imagen destada de los post' )
    );
    return array_merge( $sizes, $add_sizes );
  }
  if ( function_exists( 'add_theme_support' ) ) {
    add_image_size( 'portfolio-home', 465, 250, true );
    add_image_size( 'square', 400, 400, true );
    add_image_size( 'post-custom-size', 800, 600, true );
    add_image_size( 'custom-size-blog', 400, 300, true );
    add_filter( 'image_size_names_choose', 'dl_image_sizes' );
  }
  add_action( 'after_setup_theme', 'thumbnails_setup' );

  /*menus personalizados*/
  
  function menus_setup() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'footer-menu'	=> __( 'Footer Menu' ),
		)
	);
}
add_action( 'after_setup_theme', 'menus_setup' );

?>