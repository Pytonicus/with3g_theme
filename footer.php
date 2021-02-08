<footer>
        <div class="row">
            <div class="col">
                <h3>GGG</h3>
                <div class="footerLinks">
                    <?php 
                        $args = array(
                            'theme-location' => 'nav-menu'
                        );
                        wp_nav_menu($args);
                    ?>
                </div>
            </div>
            <div class="col">
                <h3>Redes</h3>
                <div class="footerLinks social">
                    <?php 
                        dynamic_sidebar('social'); 
                    ?>
                </div>
            </div>
            <div class="col">
                <h3>Novedades</h3>
                <div class="footerLinks">
                    <?php 
                        dynamic_sidebar('novedades'); 
                    ?>
                </div>
            </div>
        </div>
        <small class="licencia">MIT 2021 - Guillermo Granados Gómez | Vector de Fondo creado por freepik - www.freepik.es</small> 
    </footer>
</body>
</html>