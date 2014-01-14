<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="container">
            <div class="row">
                <div class="background5">
                    <h1> Dienstleistungen</h1>
                </div>
            </div>
        </div>

        <div id="main" style="text-align: justify;"> 
            <?php the_content(); ?>
        </div>

    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
