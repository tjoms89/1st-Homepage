
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div style="height:87px; background:#fff;"></div>
        <div style=" background: 0 0 repeat #FFFFFF; color: #2d438e;">        
            <div class="row width2">
                <div class="col-md-12" style="margin-left: auto; margin-right: auto;">
                <div class="title"><?php the_title(); ?></div>
                <br>
                <p>
                    <?php the_content(); ?>
                </p>
                </div>
            </div>
            <br>
        </div>
	<?php endwhile; else: ?>
		<p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>
