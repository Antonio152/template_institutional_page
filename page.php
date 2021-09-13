<!--ESTO ES PARA LOS ARTICULOS, ES EL CUERPO PARA LOS ARTICULOS DE LA PAGINA-->
<?php get_header(); ?>
<section id="main"><!--Contenedor principal-->
   	   
   	   <section id="articles_list"><!--Lista de articulos-->
   	   		
   	   		<!--Código de busqueda de contenido de post/artículos-->
			<?php if ( have_posts() ): while (have_posts() ) : the_post();?>

			<article>
   	   			
   	   			<div class="thumb"> 
   	   				<!--Se encarga de las imagenes de los articulos-->
   	   				<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?></a> 
   	   			</div>
   	   			<hgroup ><h2><?php the_title();?></h2></hgroup>
   	   			<div class="date"><?php the_date();?> en <span><?php the_category();?></span></div>
        			<div class="extract"><?php the_content();?></div>
   	   		</article>
   	   		 
			<!--Código que se ejecuta  si encuentra posts-->
			<?php endwhile; else: ?>
				<h1>No se encontraron elementos</h1>
			<?php endif?>

   	   </section>
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>