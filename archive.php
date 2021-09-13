<!--Esto es para las categorias de los elementos-->
<?php get_header(); ?>
<section id="main"><!--Contenedor principal-->
   	   
   	   <section id="articles_list"><!--Lista de articulos-->
        <!--Titulo para las categorias-->
   	   	<h2 id="categoria_name"><?php single_cat_title( $prefix = '', $display = true ); ?></h2>
   	   		<!--Código de busqueda de contenido de post/artículos-->
			<?php if ( have_posts() ): while (have_posts() ) : the_post();?>

			<article>
   	   			
   	   			<div class="thumb"> 
   	   				<!--Se encarga de las imagenes de los articulos-->
   	   				<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?></a> 
   	   			</div>
   	   			<hgroup ><h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2></hgroup>
   	   			<div class="date"><?php the_date();?> en <span><?php the_category();?></span></div>
        			<div class="extract"><?php the_excerpt();?></div><!--the_excerpt();[solo muestra fragmentos del texto], the_content();[muestra contenido completo en lo referente a textos]-->
   	   		</article>
   	   		 
			<!--Código que se ejecuta  si encuentra posts-->
			<?php endwhile; else: ?>
				<h1>No se encontraron elementos</h1>
			<?php endif?>

   	   </section>
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>