
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div id="intro-small" class="mill">
            <div class="row">
                    <div class="background5">
                        <h1> Mentoring Program
                        </h1>
                    </div>
            </div>
        </div>
        
        <div id="main width1"> 
            <br>
            <?php the_content(); ?>
            <br>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
