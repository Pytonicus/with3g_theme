<?php get_header(); ?>

<article>
    <?php 
        while(have_posts()): the_post();
    ?>

        <h3><?php the_title(); ?></h3>
        <div class="novedadesCardImagen">
            <?php
                if(has_post_thumbnail()): 
                    the_post_thumbnail('novedad');
                else:
                    echo "<img src='" . get_template_directory_uri() . "/img/ggg.png' alt='sin imagen' style='width: 250px; padding-top: 75px;'>";
                endif;
            ?>
        </div>
                <div class="novedadesCardContent">
                    
                    <div class="novedadesCardText">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <div class="novedadesCardDate">
                    <small><?php the_time(get_option('date_format')); ?></small>
                </div>

    <?php
        // cerramos el bucle:
        endwhile;
    ?>
</article>

<?php get_footer(); ?>
<?php wp_footer(); ?>