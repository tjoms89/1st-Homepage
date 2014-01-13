<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="gras">
            <div class="row">
                <div class="background5">
                    <h1> Unsere Partner</h1>
                </div>
            </div>
        </div>
        </div>
        <div id="kunde">

         <!--   <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>

                <div class="background2">
                    <div class="carousel-inner" >

                        <div class="item active" style="height: 500px; width: auto; background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bosch.png) no-repeat center; background-color: #fff;">

                            <div class="carousel-caption" style="color: #2d438e;">
                                <h3>Bosch</h3>
                            </div>
                        </div>
                        
                        <div class="item" style="height: 500px; width: auto;">
                            <div id="picture" class="col-md-6"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aareon.jpg) no-repeat center; width=auto; height=auto;" class="alignnone size-thumbnail"></div>
                            <div class="col-md-6" style="text-align:center;"><h3>Aareon</h3>
                                <p>Die IT-Power GmbH bietet im Rahmen der Rechnungserstellung f&uuml;r Wohnungsunternehmen einen Prozess in Kooperation mit Aareon zur elektronischen Rechnungserstellung. Sowohl bei der fachlichen Beratung der Rechnungsinhalte als auch der technischen Umsetzung und dem Betrieb zur Anbindung an Aareon Rechnungsservice steht Ihnen IT-Power zur Seite.</p>

                    <p>Dieser Prozess kann mit strukturierten Datenstr&ouml;men oder vorformatierten Dokumenten, in der Regel PDF Dateien mit Steuerdateien, beliefert werden. Desweiteren k&ouml;nnen nat&uuml;rlich auch die im Output Management vorhandenen Prozesse wie Formularaufbereitung, Druckdienstleistung und R&uuml;ckgabe von Archivdateien realisiert werden. Die Kommunikation bei der Annahme und Weiterleitung bzw. R&uuml;ckgabe an den Kunden erfolgt dabei ausschlie&szlig;lich &uuml;ber gesicherte Kommunikationskan&auml;le. </p>
                            </div>
                        </div>
                        
                        <div class="item" style="height: 500px; width: auto; background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/opentext.jpg) no-repeat center; background-color: #fff;">

                            <div class="carousel-caption" style="color: #2d438e;">
                                <h3>OpenText</h>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="text" style="font-size:8pt">Maus drüberhalten um zu pausieren </div>
                </a> </div>-->
                
         <div class="row">
                <div class="col-md-4">
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aareon.jpg" width="400" height="220" class="alignnone size-thumbnail wp-image-185" /></a>
                    <br>
                </div>
                <div class="col-md-8">
                    <br><br>
                    <h4>Aareon</h4>
                    <p>Die IT-Power GmbH bietet im Rahmen der Rechnungserstellung f&uuml;r Wohnungsunternehmen einen Prozess in Kooperation mit Aareon zur elektronischen Rechnungserstellung. Sowohl bei der fachlichen Beratung der Rechnungsinhalte als auch der technischen Umsetzung und dem Betrieb zur Anbindung an Aareon Rechnungsservice steht Ihnen IT-Power zur Seite.</p>
                    <a href="<?php echo get_permalink(get_page_by_path('referenzen/partner/aareon')); ?>"> <p style="text-align: center; text-decoration: none;"> > mehr lesen  </p> </a>
                    <!--
                    <p>Dieser Prozess kann mit strukturierten Datenstr&ouml;men oder vorformatierten Dokumenten, in der Regel PDF Dateien mit Steuerdateien, beliefert werden. Desweiteren k&ouml;nnen nat&uuml;rlich auch die im Output Management vorhandenen Prozesse wie Formularaufbereitung, Druckdienstleistung und R&uuml;ckgabe von Archivdateien realisiert werden. Die Kommunikation bei der Annahme und Weiterleitung bzw. R&uuml;ckgabe an den Kunden erfolgt dabei ausschlie&szlig;lich &uuml;ber gesicherte Kommunikationskan&auml;le. </p>
                    -->        
                    <br>
                </div>
        </div>
         <hr>
        <div class="row">
            <br>
                <div class="col-md-4">
                    <div id="picture" class="user"></div>
                    <br>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Bosch.png" width="400" height="90" class="alignnone size-thumbnail wp-image-185" /></a>
                    <br><br>
                </div>
                <div class="col-md-8">
                   
                    <h4>Bosch</h4>
                    <p>Bosch Software Innovations GmbH, das Software- und Systemhaus der Bosch-Gruppe, konzipiert, entwickelt und betreibt weltweit innovative Software- und Systemlösungen, die unsere Kunden sowohl im klassischen Enterprise-Umfeld als auch im Internet of Things and Services voranbringen.</p>
                    <a href="<?php echo get_permalink(get_page_by_path('referenzen/partner/bosch')); ?>"> <p style="text-align: center; text-decoration: none;"> > mehr lesen  </p> </a>      
                    <br><br>
                </div>
        </div>
         <hr>
        <div class="row">
            <br>
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/opentext.jpg" width="400" height="130" class="alignnone size-thumbnail wp-image-185" /></a>
                    <br><br><br>
                </div>
                <div class="col-md-8">
                    <br>
                    <h4>OpenText</h4>
                    <p> Wir, die IT-Power GmbH, sind zertifizierter Consulting- und Reseller Partner der OpenText Software GmbH. <br> Die IT-Power GmbH hilft Ihnen, bei Ihren OpenText Projekten. </p>
                    <a href="<?php echo get_permalink(get_page_by_path('referenzen/partner/opentext')); ?>"> <p style="text-align: center; text-decoration: none;"> > mehr lesen  </p> </a>         
                    <br><br><br>
                </div>
            
        </div>
         <hr>
        <div class="row">
            <br>
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/app4value.png" width="300" height="100" class="alignnone size-thumbnail wp-image-185" /></a>
                    <br><br><br>
                </div>
                <div class="col-md-8">
                    <br>
                    <h4>app4value</h4>
                    <p> Die app4value GmbH wurde gegründet um mittelständischen und großen Unternehmen zu helfen, den Herausforderungen des Informationszeitalters entgegen zu stehen. Seit über 10 Jahren berät sie nun in den Bereichen Enterprise Content Management und Output Management. </p>
                    <a href="<?php echo get_permalink(get_page_by_path('referenzen/partner/app4value')); ?>"> <p style="text-align: center; text-decoration: none;"> > mehr lesen  </p> </a>         
                    <br><br><br>
                </div>
            
        </div>
         <hr>
              <div class="row">
            <br>
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/formware.jpg" width="220" height="100" class="alignnone size-thumbnail wp-image-185" /></a>
                    <br><br><br>
                </div>
                <div class="col-md-8">
                    <br>
                    <h4>Formware</h4>
                    <p>Die Formware GmbH bietet, mit Hilfe ihrer Tochter M3 GmbH gemeinsam mit der IT-Power Dienstleistungen und L&ouml;sungen f&uuml;r die Produktion von Dokumenten z.B. f&uuml;r die Druckvorstufe und den Dokumenten-Versand in elektronischer- oder Papierform an.</p>
                    <a href="<?php echo get_permalink(get_page_by_path('referenzen/partner/formware')); ?>"> <p style="text-align: center; text-decoration: none;"> > mehr lesen  </p> </a>         
                    <br><br><br>
                </div>
            
        </div>
         <hr>
         
              <div class="row">
            <br>
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ricoh.jpg" width="400" height="130" class="alignnone size-thumbnail wp-image-185" /></a>
                    <br><br><br>
                </div>
                <div class="col-md-8">
                    <br>
                    <h4>Ricoh</h4>
                    <p>Gegenstand der Kooperation ist die gemeinsame Entwicklung und der gemeinsame Vertrieb von Produkten und Leistungen. Dabei handelt es sich insbesondere um Beratungsleistungen im SAP-Umfeld, der Dokumententwicklung mit OpenText sowie um multimediale Tagespostanwendungen.</p>
                    <a href="<?php echo get_permalink(get_page_by_path('referenzen/partner/ricoh')); ?>"> <p style="text-align: center; text-decoration: none;"> > mehr lesen  </p> </a>         
                    <br><br><br>
                </div>
            
        </div>
         <hr>
              <div class="row">
            <br>
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/grimm.jpg" width="150" height="150" class="alignnone size-thumbnail wp-image-185" /></a>
                    <br><br><br>
                </div>
                <div class="col-md-8">
                    <br>
                    <h4>grimm data</h4>
                    <p>Gegenstand der Kooperation mit der grimm data Team GmbH sind die gemeinsame Ausbildung und Qualifizierung von Mitarbeitern im Bereich energiewirtschaftliche Prozesse und IT.</p>
                    <a href="<?php echo get_permalink(get_page_by_path('referenzen/partner/grimm')); ?>"> <p style="text-align: center; text-decoration: none;"> > mehr lesen  </p> </a>         
                    <br><br><br>
                </div>
            
        </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Keine Neuigkeiten'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
