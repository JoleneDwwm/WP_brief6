<?php get_header(); ?>

  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	
	<article class="post">
		<?php if ( has_post_thumbnail() ): ?>
			<div class="post__thumbnail">
				<?php the_post_thumbnail('thumbnail'); ?>
			</div>
		<?php endif; ?>

		<h1><?php the_title(); ?></h1>

		<div class="post__content">
			<div class="row">
				<div class="col-sm-6">
					<?php the_content(); ?>
				</div>
			</div>
	  	</div>
	</article>

<?php endwhile; endif; ?>
<?php get_footer(); ?>

