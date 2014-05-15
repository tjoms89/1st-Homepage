
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="intro-small" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/grimm.jpg) no-repeat center; background-color: #fff;">
        </div>
        
        <div id="main" class=" width2">        
            <div class="row">
                <br>
                <div class="col-md-12">
                    <h1>grimm data Team GmbH</h1>
                    <p>Gegenstand der Kooperation mit der grimm data Team GmbH sind die gemeinsame Ausbildung und Qualifizierung von Mitarbeitern im Bereich energiewirtschaftliche Prozesse und IT.</p>

<p>Zielstellung ist es au&szlig;erdem, gemeinsam Projekte und L&ouml;sungen im Umfeld von technischer als auch organisatorischer Beratung anbieten zu k&ouml;nnen.</p>

<p>Profitieren Sie von unserer geb&uuml;ndelten Dienstleistung!</p></div>
                <br> <a href="http://gd-team.de/index.php/de/" target="_blank"> <p style="text-align: center; text-decoration: none;"> > zum Unternehmen</p> </a>      
                    
                <br><br>
            </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
