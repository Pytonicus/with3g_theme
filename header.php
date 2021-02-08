<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGG</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ggg.png" alt="Logo"></a>
        <div class="">
            <h1>Guillermo Granados Gómez</h1>
            <h2>Profesor y desarrollador web Fullstack</h2>
        </div>
    </header>
    <nav>
        <i id="close" class="fas fa-times"></i>
        <?php 
            $args = array(
                'theme-location' => 'nav-menu'
            );
            wp_nav_menu($args);
        ?>
    </nav>
    <div class="menuMob">
        <i class="fas fa-bars"></i>
    </div>