
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="intro-small" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Bosch.png) no-repeat center; background-color: #fff;">
        </div>
        
        <div id="main">        
            <div class="row">
                <br>
                <div class="col-md-12">
                    <h1>Bosch</h1>
                    <p>Bosch Software Innovations GmbH, das Software- und Systemhaus der Bosch-Gruppe, konzipiert, entwickelt und betreibt weltweit innovative Software- und Systeml&ouml;sungen, die unsere Kunden sowohl im klassischen Enterprise-Umfeld als auch im Internet of Things and Services voranbringen.</p>

<p>In diesem Umfeld konzentrieren wir uns insbesondere auf die Themenfelder Mobilit&auml;t, Energie- und Geb&auml;udemanagement, Industrie und Finanzdienstleistungen.</p>

<p>Unsere Software-Suite mit den speziellen, genau abgestimmten BPM+ und IoTS Editionen sowie den flexiblen Einzelprodukten ist sowohl f&uuml;r Projekte im Internet of Things and Services als auch f&uuml;r Projekte im Business Process Management (BPM)- und Business Rules Management (BRM)-Umfeld die perfekte Basis.</p>

<p>Bosch Software Innovations ist mit rund 550 Mitarbeitern weltweit mit Standorten in Deutschland (Berlin, Immenstaad am Bodensee, Waiblingen), in Singapur, China (Shanghai), Australien (Melbourne) und den USA (Chicago, Palo Alto und Vienna) vertreten.</p>
                   </div>
                <br> <a href="http://www.bosch-si.com/de/startseite/startseite.php" target="_blank"> <p style="text-align: center; text-decoration: none;"> > zum Unternehmen</p> </a>      
                    
                <br><br>
            </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
