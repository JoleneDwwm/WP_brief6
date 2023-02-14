<?php get_header(); ?>

<div class="container my-5">
    <h1 class="text-center">Résultats Recherche</h1>
    <?php if ( have_posts() ) : ?>
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-warning">Lire la suite</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php the_posts_navigation(); ?>
    <?php else : ?>
        <p>Aucun résultat trouvé pour votre recherche.</p>
    <?php endif; ?>
</div>

<?php
get_footer();