<section id="slideshow" >
    <?php if( have_posts() ): while ( have_posts() ) : the_post();?>	
    <div class="slide">
                <hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup><!--Parte inferior de nuestro articulo-->
            <p class="date"><?php the_date(); ?> en <?php the_category(); ?></p><!--Define la catergoria y la fecha de las publicaciones-->
            <div class="thumb"> <a href="<?php the_permalink(); ?>"> <?php if ( has_post_thumbnail() ) { the_post_thumbnail('slider_thumbs'); } ?> ></a></div>
    </div>
    <?php endwhile; else : ?>
    <h2>No se encontraron elementos</h2>
<?php endif; ?>
</section>