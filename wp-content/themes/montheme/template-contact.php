<?php
/**
 * Template Name: Template Contact
 */
?>

<?php
get_header();

// Affichage d'une page sans la boucle
if ( have_posts() ):
    the_post();
    ?>
    <article class="positionArticle">
          
          <?php
          if ( has_post_thumbnail() ):
             the_post_thumbnail( 'medium' );
          endif;
          ?>
          <div class="formulaireContact"><?php the_content(); ?></div>
    </article>
    <?php
endif;

get_footer();