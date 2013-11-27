
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="intro-small" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/opentext.jpg) no-repeat center; background-color: #fff;">
        </div>
        
        <div id="main">        
            <div class="row">
                <br>
                <div class="col-md-12">
                    <h1>Opentext</h1>
                    <p>Wir, die IT-Power GmbH, sind zertifizierter Consulting- und Reseller Partner der OpenText Software GmbH.</p>

<p>Die IT-Power GmbH hilft Ihnen, bei Ihren OpenText Projekten.</p>

<p>Unsere Dienstleistungen werden derzeit sowohl von regionalen und &uuml;berregionalen als auch internationalen Unternehmen aus verschiedenen Branchen wie etwa Energieversorgung, Telekommunikation, Logistik und Handel, Banken und Versicherungen in Anspruch genommen. Mit unseren mehr als 15 OpenText-Consultants sind wir unserer Meinung nach gut und vor allem breit aufgestellt.</p>

<p>Profitieren Sie vom Know-How der IT-Power, wir</p>

<p> bedienen jeden einzelnen Kunden ganz individuell  bieten neue Produkte an &ndash; damit wir umgehend auf die Marktsituation reagieren k&ouml;nnen  sind zukunftsorientiert &ndash; lassen Sie sich Ihre Wachstumsfreuden nicht durch technologische Engp&auml;sse tr&uuml;ben  vereinigen idealerweise OpenText Knowhow mit SAP RDI, SAP script und SAP adobe interactive forms Knowhow</p>
                    </div>
                <br> <a href="http://www.opentext.de/" target="_blank"> <p style="text-align: center; text-decoration: none;"> > zum Unternehmen</p> </a>      
                    
                <br><br>
            </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
