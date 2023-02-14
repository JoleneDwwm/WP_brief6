<?php 
get_header(); 

echo '<img src="/wp-content/themes/greta_formations/images/trombinoscope.jpg" class="rounded mx-auto d-block img-fluid mb-5" alt="...">';
echo '<div class="banner--trombi">Trombinoscope des différentes promotions</div>';

// Menu déroulant des catégories parentes
$promotions_parentes = get_categories( array(
  'taxonomy' => 'promotions',
  'hide_empty' => false,
  'parent' => 0,
));

$secteurs_parentes = get_categories( array(
  'taxonomy' => 'secteurs',
  'hide_empty' => false,
  'parent' => 0,
));

echo '<form class="form-promotion" action="" method="post">';
echo '<select class="form-control form-control-lg mb-5" name="promotions">';
echo '<option value="">Sélectionnez une Formation</option>';
foreach ( $promotions_parentes as $promotion_parente ) {
  // Récupération des sous-catégories
  $promotions_enfants = get_categories( array(
    'taxonomy' => 'promotions',
    'hide_empty' => false,
    'parent' => $promotion_parente->term_id,
  ));
  if ( !empty( $promotions_enfants ) ) {
    echo '<optgroup label="' . $promotion_parente->name . '">';
    foreach ( $promotions_enfants as $promotion_enfant ) {
      echo '<option value="' . $promotion_enfant->slug . '">' . $promotion_enfant->name . '</option>';
    }
    echo '</optgroup>';
  }
}
echo '</select>';

echo '<select class="form-control form-control-lg mb-5" name="secteurs">';
echo '<option value="">Sélectionnez un Secteur</option>';
foreach ( $secteurs_parentes as $secteur_parente ) {
  // Récupération des sous-catégories
  $secteurs_enfants = get_categories( array(
    'taxonomy' => 'secteurs',
    'hide_empty' => false,
    'parent' => $secteur_parente->term_id,
  ));
  if ( !empty( $secteurs_enfants ) ) {
    echo '<optgroup label="' . $secteur_parente->name . '">';
    foreach ( $secteurs_enfants as $secteur_enfant ) {
      echo '<option value="' . $secteur_enfant->slug . '">' . $secteur_enfant->name . '</option>';
    }
    echo '</optgroup>';
  }
}
echo '</select>';
echo '<div class="d-grid gap-2 col-6 mx-auto mb-5">';
  echo '<button class="btn btn--trombinoscope btn-warning" type="submit value="afficher">Afficher</button>';
echo '</div>';
echo '</form>';

// Si une catégorie a été sélectionnée
if ( ! empty( $_POST['promotions'] ) || ! empty( $_POST['secteurs'] ) ) {
  $promo_taxonomy = sanitize_text_field( $_POST['promotions'] );
  $secteur_taxonomy = sanitize_text_field( $_POST['secteurs'] );

  $args = array(
    'post_type' => 'apprenant_type',
    'posts_per_page' => -1,
    'tax_query' => array(
    'relation' => 'AND',
    array(
    'taxonomy' => 'promotions',
    'field' => 'slug',
    'terms' => $promo_taxonomy,
    ),
    array(
    'taxonomy' => 'secteurs',
    'field' => 'slug',
    'terms' => $secteur_taxonomy,
    ),
    ),
    );
    
    $apprenant_posts = get_posts( $args );
    
    // Vérification de l'existence des posts
    if ( ! $apprenant_posts ) {
    echo 'Aucun TROMBINOSCOPE trouvé';
    return;
    }

    
    echo '<table style="border-collapse: collapse;">';
    $counter = 0;
    
    foreach ( $apprenant_posts as $apprenant_post ) {
    if ($counter % 5 == 0) ;
    

$image_id = get_field('image', $apprenant_post->ID);
if ($image_id) {
    $image_url = wp_get_attachment_url( $image_id );
}

echo '<td style="border: 5px solid orange;">';
if ($image_id) {
    echo '<img src="' . $image_url . '" alt="photo APPRENANT">';
}
echo '</td>';

if ($counter % 5 == 4 || $counter == count($apprenant_posts) -1) {
  echo '</tr>';
}
$counter++;
}



echo '</table>';

}
      
      
get_footer(); 
?>
      
      
