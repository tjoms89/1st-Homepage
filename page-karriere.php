<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <div id="intro-small" class="pust">
            <div class="row">
                    <div class="background5">
                        <h1> Segeln Sie mit uns in die Zukunft</h1>
                    </div>
            </div></div>


        <div id="main">
            <div class="row">
                <div class="col-md-8"><br><br><br>
                    Wir sind immer daran interessiert, motivierte und gut ausgebildete Mitarbeiter zu finden. <br>
                    Wenn Sie gerne bei IT-Power arbeiten möchten, können Sie sich jederzeit bewerben. <br>
                    Senden Sie bitte in diesem Falle Ihre Bewerbungsunterlagen mit Ihrer Gehaltsvorstellung und dem frühestmöglichen Eintrittstermin an Herrn Sven Ladewig.
                    <br>
                    <div class="col-md-6"><h2> Aktuelle Stellenangebote: </h2> 
                        <div id="picture"> 
                            <a class="nonhoverpic" href="<?php echo get_permalink(get_page_by_path('karriere/stellen')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/employ.png" alt="document" width="150" height="150" class="alignnone size-thumbnail wp-image-182" /></a>
                            <a class="hoverpic" style="display:none" href="<?php echo get_permalink(get_page_by_path('karriere/stellen')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/employ1.png" alt="document" width="150" height="150" class="alignnone size-thumbnail wp-image-182" /></a>         
                        </div>
                        <br><br>
                    </div>
                    <div class="col-md-6"><h2> Mentorenprogramm: </h2>
                        <div id="picture">
                            <a class="nonhoverpic" href="<?php echo get_permalink(get_page_by_path('karriere/mentor')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/teach.png" alt="document" width="150" height="150" class="alignnone size-thumbnail wp-image-182" /></a>
                            <a class="hoverpic" style="display:none" href="<?php echo get_permalink(get_page_by_path('karriere/mentor')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/teach1.png" alt="document" width="150" height="150" class="alignnone size-thumbnail wp-image-182" /></a>

                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2> Kontakt </h2>
                    <div class="thumbnail">	 	 
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sven_ladewig.jpg" alt="BILD" width="150" height="100" class="alignnone size-thumbnail wp-image-182">		 	 
                        <div class="caption">	 	 
                            <h3>Sven Ladewig</h3>	 	 
                            <p style="font-weight: bold;">Geschäftsführer</p>
                            <p style="font-weight: bold;">Leiter Software Engineering<p>
                            <p style="font-weight: bold;">Leiter Vertrieb / Marketing   <p>
                                <br>
                            <p>Tel.: +49 (0)461 487-3424</p>
                            <p>Fax: +49 (0)461 487-2424</p>
                            <p>Mobil: +49 (0)171/5533629</p>
                            <p><a href="mailto:">sven.ladewig@it-power.org</a></p>
                        </div></div></div>    
            </div>
             <div style=" opacity: 0.7; font-size:10px;">Für mehr Informationen auf ein Icon klicken</div>
        </div>

    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>