<?php
register_nav_menus( array(//permite la implementacion de un menu dinamico
'menu' => 'Menu superior',
));
//Nos permie agregar las imagenes desde wordpress
add_theme_support( 'post-thumbnails');
add_image_size( 'slider_thumbs', 570, 300, true ); //dimenciones de las imagenes a cargar
add_image_size( 'list_articles_thumbs', 450, 300, true );	

register_sidebar(array(
 'name' => 'Sidebar',//indica la etiquete dentro de la cual se encuentran los widgets
 'before_widget' => '<section class="widget">',//indicamos el ID o clase de los widgets
 'after_widget' => '</section>',//indicamos donde termina
 'before_title' => '<h4>',//indicamos bajo que etiqueta comienza
 'after_title' => '</h4>',
 ));

?>