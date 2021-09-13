<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF">
	<title>Servicios Escolares</title>

  <!--Icono UPPachuca-->
  <link rel="icon" href="http://www.upp.edu.mx/lib20/images/favicon.ico">
	
  <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">
  <!--Estilos para iconos de la escuela  
  <link href="http://www.upp.edu.mx/lib20/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<!--FONT ROBOTO-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet"> 
	<!--Librerias para sidebar-->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>  
	<script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
	 
<?php wp_head();?><!--Para los plugins -->

</head>
<body>
    <header>
    	<div id="logo">

        <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : ?>
        <span><?php echo $description; ?></span></div>
        <?php endif;
        ?>
      <img src="<?php echo get_template_directory_uri();?>/images/ESCUDO_UPP.png"/>
    	<nav><!--Menu-->
    		 <?php wp_nav_menu(//se encarga de llamar los menus que existan asignados
          array(
            'container' => false,
            'items_wrap' => '<ul id="menu-top">%3$s</ul>',
            'theme_location' => 'menu' 
          ));?>
    	</nav>
    </header>