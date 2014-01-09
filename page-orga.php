
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="intro-small" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/boat.jpg) no-repeat center; background-color: #fff;">
        </div>
        
        <div id="main">        
            <div class="row">
                <br>
                <div class="col-md-12">
                    <h1>TEST</h1>
                    <p> bla </p>
                <br><br>
            </div>
        </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
