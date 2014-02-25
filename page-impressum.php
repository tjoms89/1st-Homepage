<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="main">
    <div class="row width1">
     <div class="col-md-12"><br><br><br><br>
<?php the_content(); ?>
</div></div></div>

	<?php endwhile; else: ?>
		<p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>