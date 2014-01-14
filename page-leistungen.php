<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="ship">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="background5">
                        <h1> Unsere Leistungen 
                        </h1>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>

        <div id="main">
            <div class="row">
                <h3> Leistungen von uns für Sie </h3>
                Kompetenz gebündelt an einem Ort 
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div id="picture" class="user"></div>
                    <a class="nonhoverpic" href="<?php echo get_permalink(get_page_by_path('leistungen/consulting')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/meet.png" alt="meeting" width="150" height="150" class="alignnone size-thumbnail wp-image-185" /></a>
                    <a class="hoverpic" style="display:none" href="<?php echo get_permalink(get_page_by_path('lesitungen/consulting')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/meet1.png" alt="meeting" width="150" height="150" class="alignnone size-thumbnail wp-image-185" /></a>
                    <h4>Consulting</h4>
                    <p></p>
                    <br>
                </div>

                <div id="picture" class="col-sm-6 col-md-3">
                    <div class="document nonhoverpic"></div>
                    <a class="nonhoverpic" href="<?php echo get_permalink(get_page_by_path('leistungen/Output Management')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/document2.png" alt="document" width="150" height="150" class="alignnone size-thumbnail wp-image-182" /></a>
                    <a class="hoverpic" style="display:none" href="<?php echo get_permalink(get_page_by_path('leistungen/Output Management')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/document3.png" alt="document" width="150" height="150" class="alignnone size-thumbnail wp-image-182" /></a>

                    <h4>Output Management</h4>
                    <p></p>
                    <br>
                </div>
                <div id="picture" class="col-sm-6 col-md-3">
                    <div class="keyboard nonhoverpic"></div>
                    <a class="nonhoverpic" href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/keyboard.png" alt="keyboard" width="150" height="150" class="alignnone size-thumbnail wp-image-183" /></a>
                    <a class="hoverpic" style="display:none" href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/keyboard1.png" alt="keyboard" width="150" height="150" class="alignnone size-thumbnail wp-image-183" /></a>

                    <h4>Softwareengineering</h4>
                    <p></p>
                    <br>
                </div>
                <div id="picture" class="col-sm-6 col-md-3">
                    <div class="network nonhoverpic"></div>
                    <a class="nonhoverpic" href="<?php echo get_permalink(get_page_by_path('leistungen/infrastruktur')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/network2.png" alt="network" width="150" height="150" class="alignnone size-thumbnail wp-image-184" /></a>
                    <a class="hoverpic" style="display:none" href="<?php echo get_permalink(get_page_by_path('leistungen/infrastruktur')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/network3.png" alt="network" width="150" height="150" class="alignnone size-thumbnail wp-image-184" /></a>

                    <h4>IT-Infrastruktur</h4>
                    <p></p>
                </div>

            </div>
            <div class="row">                   <div class="col-md-12" style=" opacity: 0.7; font-size:10px;" >Für mehr Informationen auf ein Icon klicken</div></div>
        </div>

    <?php endwhile;
else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?><?php
