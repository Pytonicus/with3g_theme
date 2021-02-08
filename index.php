<?php get_header(); ?>

<main>
    <h3>NOVEDADES</h3>
    <?php 
        while(have_posts()): the_post();
    ?>
        <div class="novedadesCard">

            <a href="<?php the_permalink(); ?>">
                <div class="novedadesCardTitle">
                    <h4><?php the_title(); ?></h4>
                </div>
                <div class="novedadesCardContent">
                    <div class="novedadesCardImagen">
                    <?php
                        if(has_post_thumbnail()): 
                            the_post_thumbnail('novedad');
                        else:
                            echo "<img src='" . get_template_directory_uri() . "/img/ggg.png' alt='sin imagen' style='width: 250px; padding-top: 75px;'>";
                        endif;
                    ?>
                    </div>
                    <div class="novedadesCardText">
                        <?php the_excerpt(); //the_content();  ?>
                    </div>
                </div>
                <div class="novedadesCardDate">
                    <small><?php the_time(get_option('date_format')); ?></small>
                </div>
            </a>    
        </div>

    <?php
        // cerramos el bucle:
        endwhile;
    ?>
    <div class="paginador row">
        <?php echo paginate_links(); ?>
    </div>
</main>

<?php get_footer(); ?>
<?php wp_footer(); ?>