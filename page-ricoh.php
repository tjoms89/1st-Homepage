
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="intro-small" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ricoh.jpg) no-repeat center; background-color: #fff;">
        </div>
        
        <div id="main" class="width1">        
            <div class="row">
                <br>
                <div class="col-md-12">
                    <h1>Ricoh</h1>
                    <p>Gegenstand der Kooperation ist die gemeinsame Entwicklung und der gemeinsame Vertrieb von Produkten und Leistungen. Dabei handelt es sich insbesondere um Beratungsleistungen im SAP-Umfeld, der Dokumententwicklung mit OpenText sowie um multimediale Tagespostanwendungen. Hinzu kommen s&auml;mtliche Leistungen aus den Kompetenzfeldern data, docu und dialog von Ricoh mit den Schwerpunkten Portoservices, Adressservices und R&uuml;cklaufbearbeitung.</p>

<p>Profitieren Sie vom Know-How der IT-Power und Ricoh, wir</p>

<p> entwickeln individuelle L&ouml;sungen f&uuml;r jeden einzelnen Kunden  beraten unsere Kunden, damit Sie effizienter arbeiten k&ouml;nnen  kooperieren um Synergien f&uuml;r unsere Kunden zu generieren</p></div>
                <br> <a href="http://www.ricoh.de/" target="_blank"> <p style="text-align: center; text-decoration: none;"> > zum Unternehmen</p> </a>      
                    
                <br><br>
            </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
