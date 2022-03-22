<?php

get_header();

// Affichage d'une page sans la boucle
if ( have_posts() ):
    the_post();
    ?>
    <article>
          <h1><?php the_title(); ?></h1>
          <?php
          if ( has_post_thumbnail() ):
             the_post_thumbnail( 'medium' );
          endif;
          ?>
          <div class="contenuArticle"><?php the_content(); ?></div>
    </article>
    <?php
endif;

get_footer();