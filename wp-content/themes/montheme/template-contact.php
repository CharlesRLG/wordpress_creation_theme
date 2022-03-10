<?php
/**
 * Template Name: Template Contact
 */
?>

<?php

get_header();


?>
<article>
  <h1><?php the_title(); ?></h1>
  <div id="formulaireContact">
      <form action="#" method="POST" class="comment-form">
          <?php wp_nonce_field('faire-don', 'cagnotte-verif'); ?>
            <div>
              <label for="don">Prénom</label>
              <br>
              <input id="contactPrénom" type="text" name="don"  />
            </div>
            <div>
              <label for="don">Nom</label>
              <br>
              <input id="contactNom" type="text" name="don"  />
            </div>
            <div>
              <label for="don">email</label>
              <br>
              <input id="contactEmail" type="text" name="don"  />
            </div>
            <div >
              <label for="don">Description du projet</label>
              <br>
              <textarea id="contactDescription" type="text" name="don"></textarea>
            </div>
            <div>
              <button value="Envoyer" >Envoyer</button>
            </div>
          
      </form>
  </div>
</article>
<?php

get_footer();