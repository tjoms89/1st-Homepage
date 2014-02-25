
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="intro-small" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/app4value.png) no-repeat center; background-color: #fff;">
        </div>
        
        <div id="main" class="width1">        
            <div class="row">
                <br>
                <div class="col-md-12">
                    <h1>app4value</h1>
                    <p>Die app4value GmbH wurde gegr&uuml;ndet um mittelst&auml;ndischen und gro&szlig;en Unternehmen zu helfen, den Herausforderungen des Informationszeitalters entgegen zu stehen. Seit &uuml;ber 10 Jahren ber&auml;t sie nun in den Bereichen Enterprise Content Management und Output Management.</p>

<p>F&uuml;r diese T&auml;tigkeiten kann app4value auf ein gro&szlig;es Spektrum an Dienstleistungen und L&ouml;sungen zur&uuml;ckgreifen, so dass dem Kunden nicht nur ein Produkt angeboten werden kann, sondern ein Konzept, mit dem seine Kommunikationsprozesse vollst&auml;ndig ausgesch&ouml;pft werden k&ouml;nnen. Dabei werden die Konzepte auf eine effiziente Nutzung von Informationen und von Kommunikationskan&auml;len angelegt.</p>

<p>Da die IT-Power GmbH und die app4value GmbH Kooperationspartner von OpenText sind, haben die beiden Unternehmen entschlossen eine Partnerschaft einzugehen. Hierbei wird eine Kooperation auf verschiedenen Ebenen angestrebt. Neben einem intensiven Erfahrungsaustausch beinhaltet die Zusammenarbeit auch den gemeinsamen Vertrieb sowie die gemeinsame Beratungsdienstleistung bei den Kunden.</p>

<p>Durch die Partnerschaft sind IT-Power und app4value gemeinsam in der Lage, ECM Gro&szlig;projekte im SAP Umfeld gekonnt und souver&auml;n umzusetzen.</p>
                
                </div>
                <br> <a href="http://www.app4value.com/" target="_blank"> <p style="text-align: center; text-decoration: none;"> > zum Unternehmen</p> </a>      
                    
                <br><br>
            </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
