<?php get_header(); ?>


<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <h1><?= the_title(); ?>	</h1>
    <h2><?= the_content(); ?>	</h2>

<?php endwhile; endif; ?>

<?php get_footer(); ?>