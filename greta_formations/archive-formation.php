<?php get_header(); ?>

<h2>Listing des formations proposées </h2>
</br>
</br>
<button class="btn btn-primary" onclick="delete_fav()" > suppr. favoris </button>

<?php if( have_posts() ) : ?> 
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" class="span2"><h5>Intitulé</h5></th>
                <th scope="col" class="span2"><h5>Descriptif</h5></th>
                <th scope="col" class="span2"><h5>Code EN</h5></th>
                <th scope="col" class="span2"><h5>Reconnaissance</h5></th>
                <th scope="col" class="span2"><h5>Date</h5></th>
                <th scope="col" class="span2"><h5>Lieu de formation</h5></th>
                <th scope="col" class="span2"><h5>Lien région</h5></th>
                <th scope="col" class="span2"><h5>Modalité</h5></th>
				<th colspan=3 scope="col" class="span2"><h5>Action</h5></th>
            </tr>
        </thead>
        <tboby>
        <?php while( have_posts() ) : the_post(); ?>
            <tr>
                <td class="span3"><span><b><?php the_title(); ?></b></span></td>
                <td class="table"><span><?php the_content(); ?></span></td>
                <td class="table"><?php echo get_field( 'code_en' ); ?></td>
                <td class="span4"><spzn><b><?php echo get_field( 'reconnaissance' ); ?></b></span></td>
                <td class="table"><?php echo get_field( 'date' ); ?></td>
                <td class="table"><?php echo get_field( 'lieu_de_la_formation' ); ?></td>
                <td class="table"><a class="link--crud" href="<?php echo get_field('lien_maforma'); ?>" target="_blank">Lien</a></td>
                <td class="table"><?php echo get_field( 'modalite' ); ?></td>
                <td class="table"><button class="btn btn-outline-warning"><a class="btn--crud" href="<?= the_permalink(); ?>">Voir</a></button></td>
                <td class="table"><button class="btn btn-outline-warning"><a class="btn--crud" href="/candidature" >Candidater</a></button></td>
                <td><button id="<?php echo the_ID(); ?>" onclick = "like_dislike(<?php echo the_ID(); ?>)" class="btn btn-outline-warning"><span class="dashicons dashicons-star-empty"></span></button></td>
            </tr>
        <?php endwhile; endif; ?>
        </tboby>
        
    </table>
    
<?php if(is_archive('formation') ): ?>
    <script>init()</script> <!-- Pour mise à jour des icones pour les formations dans la WishList -->
<?php endif; ?>

<?php 
    echo do_shortcode('[wp-osm id=1]'); 
?>

<?php get_footer(); ?>