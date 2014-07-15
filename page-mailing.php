
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="intro-small" class="water2">
        </div>
        
        <div id="main" class=" width2">        
            <div class="row">
                <br>
                <div class="col-md-12">
                                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
