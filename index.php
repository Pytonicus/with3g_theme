<?php get_header(); ?>

<main>
    <?php 
        // recorremos con un bucle la página:
        while(have_posts()): the_post();
    ?>
    <!-- Con esta función imprimimos el título de cada página: -->
    <h1><?php the_title(); ?></h1>
    <!-- Y con esta función cargamos el contenido de la página: -->
    <?php the_content(); ?>

    <!-- podemos mostrar el autor: -->
    Escrito por: <?php the_author(); ?>

    <!-- y la fecha: -->
    Fecha: <?php the_date(); ?>

    <?php
        // cerramos el bucle:
        endwhile;
    ?>
</main>

<?php get_footer(); ?>
<?php wp_footer(); ?>