
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="intro-small" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/formware.jpg) no-repeat center; background-color: #fff;">
        </div>
        
        <div id="main" class=" width2">        
            <div class="row">
                <br>
                <div class="col-md-12">
                    <h1>Formware GmbH</h1>
                    <p>Die Formware GmbH bietet, mit Hilfe ihrer Tochter M3 GmbH gemeinsam mit der IT-Power Dienstleistungen und L&ouml;sungen f&uuml;r die Produktion von Dokumenten z.B. f&uuml;r die Druckvorstufe und den Dokumenten-Versand in elektronischer- oder Papierform an.</p>

<p>Gemeinsam analysieren wir individuell f&uuml;r unsere Kunden Ihre permanenten, saisonalen oder sporadischen Druckaufgaben und zeigen Ihnen die m&ouml;glichen Verbesserungspotenziale auf. Danach pr&auml;sentieren wir Ihnen ein klar verst&auml;ndliches, individuelles und unabh&auml;ngiges Konzept f&uuml;r die Optimierung Ihrer Abl&auml;ufe beim Output mit den entsprechenden Einsparungspotenzialen.</p>

<p>Im Dokumentenalltag personalisieren, drucken, kuvertieren, portooptimieren und archivieren wir gemeinsam den Output diverser Kunden.</p></div>
                <br> <a href="http://www.formware.de/" target="_blank"> <p style="text-align: center; text-decoration: none;"> > zum Unternehmen</p> </a>      
                    
                <br><br>
            </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
