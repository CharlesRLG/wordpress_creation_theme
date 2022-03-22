<?php

get_header();

// Affichage de la page d'accueil sans la boucle
if ( have_posts() ):
    the_post();
    ?>
<article>
          
    <?php
    if ( has_post_thumbnail() ):
        the_post_thumbnail( 'medium' );
    endif;
    ?>
    <div class="bande"></div>

    <div class="contenuArticlePageAccueil"><?php the_content(); ?></div>
    
</article>
    <?php
endif;

get_footer();