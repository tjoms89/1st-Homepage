
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="intro-small" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/deerbergsmall.jpg) no-repeat center; background-color: #fff;">
        </div>
        
        <div id="main" class=" width2">        
            <div class="row">
                <br>
                <div class="col-md-12">
                    <h1>Deerberg</h1>
                    <p>Ein weiterer Kunde auf Erfolgskurs! Wir bedanken uns f&uuml;r dieses tolle Feedback.</p>

<p>&raquo;Als stark wachsender Versandh&auml;ndler mit verschieden Standorten ist eine zeitnahe und einheitliche Kommunikation f&uuml;r uns immer wichtiger geworden.</p>

<p>Das Ziel, eine einheitliche Kommunikationsplattform einzuf&uuml;hren, die die Standorte miteinander verbindet, ist durch die Einf&uuml;hrung unseres Intranets mehr als erf&uuml;llt worden.<br />
Aber unser Intranet kann noch viel mehr: Es ist ohne gro&szlig;en Schulungsbedarf intuitiv bedienbar und speichert zentral Informationen, die schnell abrufbar sind. Die unternehmensindividuellen Inhalte k&ouml;nnen schnell und einfach gepflegt werden.</p>

<p>Auch die Geschwindigkeit und Qualit&auml;t unseres Servicecenters konnte stark verbessert werden. Die Mitarbeiter haben vorher auf vielf&auml;ltige Medien und Datenformate sowie dezentrale Informationen zur&uuml;ckgegriffen. Mit unserem neuen Intranet wurden alle Informationen in einer einfachen und innovativen Form geb&uuml;ndelt.</p>

<p>Mit einem leistungsstarken Partner wie der IT-Power an unserer Seite ist das Projekt &ldquo;Intranet&ldquo; mit den Parametern time, budget und quality zu einem echten Erfolg geworden!&laquo; - Gesche Busch, Abteilungsleiterin Kundenservicecenter</p>
                <br> <a href="http://www.deerberg.info/" target="_blank"> <p style="text-align: center; text-decoration: none;"> > zum Unternehmen</p> </a>      
                    
                <br><br>
            </div>
        </div>
            </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
