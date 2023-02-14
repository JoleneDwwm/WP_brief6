<?php get_header(); ?>

<div class="page--404">
    <img class="404-img" src="<?= get_template_directory_uri(); ?>/images/404.jpg" alt="Image d'erreur">
      <h1 >Oops, il semble que la page que vous cherchez soit introuvable !</h1>
      <p>Peut-être que vous avez suivi un lien brisé, ou que la page s'est enfuie.</p>
      <p>Nous l'a recherchons activement, donc pas de panique, rejoignez notre page d'accueil et trouvez ce que vous cherchez !</p>
      <a href="<?= home_url('/'); ?>" class="btn btn-outline-warning">Accueil</a>
</div>