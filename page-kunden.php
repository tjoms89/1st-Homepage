<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="kurs">
            <div class="row">
                <div class="background1">
                    <h1> Unsere Kunden sind auf Erfolgskurs</h1>
                </div>
            </div>
        </div>
        </div>
        <div id="kunde">
            <div class="row">
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/deerberg.png" width="370" height="200" class="alignnone size-thumbnail wp-image-185" /></a>
                    <br>
                </div>
                <div class="col-md-8">
                    <br><br><br>
                    <h4>Deerberg</h4>
                    Mit einem leistungsstarken Partner wie der IT-Power an unserer Seite ist das Projekt “Intranet“ mit den Parametern time, budget und quality zu einem echten Erfolg geworden!« 
                        
                    <h4>- Gesche Busch, Abteilungsleiterin Kundenservicecenter</h4> 
                    <br>
                                        <a href="<?php echo get_permalink(get_page_by_path('referenzen/kunden/deerberg')); ?>"> <p style="text-align: center; text-decoration: none;"> > mehr lesen  </p> </a>

                    <br>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vodafone.svg" width="300" height="200" class="alignnone size-thumbnail wp-image-185" /></a>
                    <br>
                </div>
                <div class="col-md-8">
                    <br><br><br>
                    <h4>Vodafone</h4>
                    »Ich habe die IT-Power als kompetenten Partner kennengelernt. Projekte sind professionell besetzt und werden in-time sowie in-budget realisiert. Ein Lieferant wie er einem Kunden gefällt.«
                    <h4>
                        - Peter Plank, Leiter Finanzen Region Nord</h4>                         
                    <br>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flens.png" width="300" height="230" class="alignnone size-thumbnail wp-image-185" /></a>
                    <br>
                </div>
                <div class="col-md-8">
                    <br><br><br>
                    <h4>Flensburger Brauerei</h4>
                    »Wir haben uns mit der IT-Power bewusst für einen regionalen Partner entschieden. Unsere Ansprechpartner sitzen vor Ort, die Produkte werden individuell gestaltet und der Service ist ausgezeichnet.«
                    <h4>
                        - Helmut Horn, IT-Leitung</h4>                     
                    <br>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <br><br><br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/conergos.jpg" width="220" height="60" class="alignnone size-thumbnail wp-image-185" /></a>
                    <br>
                </div>
                <div class="col-md-8">
                    <br>
                    <h4>Conergos</h4>
                    <p>»Wir schätzen die Mitarbeiter der IT-Power GmbH seit vielen Jahren als kompetente Partner für die Formularentwicklung sowohl im StreamServe Umfeld sowie bei der Betreuung und Umsetzung komplexer Output-Management-Lösungen im Umfeld der Verbrauchsabrechnung mit SAP IS-U. Die Unterstützung der Outputprozesse in der IT-Landschaft für mehrere Energieversorger wird seit Jahren begleitet und gemeinsam stetig verbessert. Die IT-Power überzeugt durch lösungsorientierte Arbeitsweise und kooperative Zusammenarbeit.«</p>
                    <h4>- Axel Falge, Leiter Technologie
                    </h4>                     
                    <br>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bilfinger.png" width="400" height="150" class="alignnone size-thumbnail wp-image-185" /></a>
                    <br><br>
                </div>
                <div class="col-md-8">
                    <br>
                    <h4>Bilfinger GreyLogix</h4>
                    <p>»Eine zuverlässige Datenkommunikation ist in unserem Unternehmen sehr wichtig. Unsere Kunden kommen aus aller Welt und unsere Standorte befinden sich in ganz Europa. Mit dem Glasfaseranschluss und Internet-Access von IT-Power kommunizieren wir sicher und zuverlässig.«</p>
                    <h4>- Lars Malter, Managing Director
                    </h4>                     
                    <br><br>
                </div>
            </div>

        </div>


    <?php
    endwhile;
else:
    ?>
    <p><?php _e('Keine Neuigkeiten'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
