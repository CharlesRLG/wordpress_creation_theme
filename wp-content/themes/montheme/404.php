<?php
/**
 * Template Name: 404
 * The template for displaying the 404 template in the LerNumerique Theme.
 * @package WordPress
 * @subpackage WP LerNumerique Theme
 * @since LerNumerique 1.0
 */
 
?>
<?php get_header(); ?>

    <section class="error-404 not-found">
        <header class="page-header headerPageErreur404">

            <!-- Personnaliser le titre ici -->
            <h1 class="page-title">Erreur 404 : Page Non Trouvée</h1>
        </header>

        <div class="page-content PageErreur404">

        <!-- Placer ici le lien vers votre image d'erreur 404 personnalisée -->
            <img src="http://localhost/wordpress_theme/wp-content/uploads/2022/03/err404.png" alt="Erreur 404" />
        </div>
        <div>
            <!-- Personnaliser le message comme vous le souhaitez -->
            <p>Nous sommes désolé mais la page que vous cherchez n'est pas ou plus 
            disponible.</p>
        </div>

        <?php
        $my_query = new WP_Query('showposts=5');
        while ($my_query->have_posts()) : $my_query->the_post();

        endwhile;
        ?>

    </section>


<?php get_footer(); ?>
