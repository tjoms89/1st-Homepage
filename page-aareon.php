
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="intro-small" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aareon.jpg) no-repeat center; background-color: #fff;">
        </div>
        
        <div id="main" class=" width2">        
            <div class="row">
                <br>
                <div class="col-md-12">
                    <h1> Aareon </h1>
                    <p>Die IT-Power GmbH bietet im Rahmen der Rechnungserstellung f&uuml;r Wohnungsunternehmen einen Prozess in Kooperation mit Aareon zur elektronischen Rechnungserstellung. Sowohl bei der fachlichen Beratung der Rechnungsinhalte als auch der technischen Umsetzung und dem Betrieb zur Anbindung an Aareon Rechnungsservice steht Ihnen IT-Power zur Seite.</p>

<p>Dieser Prozess kann mit strukturierten Datenstr&ouml;men oder vorformatierten Dokumenten, in der Regel PDF Dateien mit Steuerdateien, beliefert werden. Desweiteren k&ouml;nnen nat&uuml;rlich auch die im Output Management vorhandenen Prozesse wie Formularaufbereitung, Druckdienstleistung und R&uuml;ckgabe von Archivdateien realisiert werden. Die Kommunikation bei der Annahme und Weiterleitung bzw. R&uuml;ckgabe an den Kunden erfolgt dabei ausschlie&szlig;lich &uuml;ber gesicherte Kommunikationskan&auml;le. </p>
                </div>
                <br> 
                  <br> <a href="http://www.aareon.com/" target="_blank"> <p style="text-align: center; text-decoration: none;"> > zum Unternehmen</p> </a>
                <br><br>
            </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
