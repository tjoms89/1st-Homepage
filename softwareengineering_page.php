<?php get_header(); ?>
<?php /*
Template Name: Softwareengineering Template
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="water">
            <div class="row">
                <div class="background5">
                    <h1> Software Engineering</h1>
                </div>

            </div>
        </div>



        <div id="main">
            <div class="col-md-12">
                <br>
                    <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
