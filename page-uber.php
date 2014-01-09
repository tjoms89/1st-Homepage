<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <div id="intro" class="pust">
            <div class="row">
                <div class="col-md-12">
                    <div class="background5">
                        <h1> Über Uns</h1>
                    </div>
                </div>
            </div></div>


        <div id="main">
            <div class="row">
          
                    <div class="col-md-6"><h2> Organigramm </h2> 
                        <div id="picture"> 
                            <a class="nonhoverpic" href="<?php echo get_permalink(get_page_by_path('uber/orga')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/employ.png" alt="document" width="150" height="150" class="alignnone size-thumbnail wp-image-182" /></a>
                            <a class="hoverpic" style="display:none" href="<?php echo get_permalink(get_page_by_path('uber/orga')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/employ1.png" alt="document" width="150" height="150" class="alignnone size-thumbnail wp-image-182" /></a>         
                        </div>
                        <br><br>
                    </div>
                    <div class="col-md-6"><h2> Strategie </h2>
                        <div id="picture">
                            <a class="nonhoverpic" href="<?php echo get_permalink(get_page_by_path('uber/strategie')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/teach.png" alt="document" width="150" height="150" class="alignnone size-thumbnail wp-image-182" /></a>
                            <a class="hoverpic" style="display:none" href="<?php echo get_permalink(get_page_by_path('uber/strategie')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/teach1.png" alt="document" width="150" height="150" class="alignnone size-thumbnail wp-image-182" /></a>

                        </div>
                        <br><br>
                    </div>
                </div>   
            </div>
             <div style=" opacity: 0.7; font-size:10px;">Für mehr Informationen auf ein Icon klicken</div>
        </div>

    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>