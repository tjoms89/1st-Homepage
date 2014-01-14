
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div id="intro-small" class="mill">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="background5">
                        <h1> Mentoring Program
                        </h1>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        
        <div id="main">        
            <div class="row">
                <br>
                <div class="col-md-12">
                    <?php the_content(); ?> 
                <br><br>
            </div>
        </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
