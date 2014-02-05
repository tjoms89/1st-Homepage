
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="intro" class="meer">
            <div class="row">

                    <div class="background5" style="width: 100%;">
                        <h1><b> Ein Strom guter Ideen</b><h1>
                    </div><br>

            </div>

            <br>
            <div class="row">
                        <div id="changer" class="col-sm-6 col-md-3" style="padding-left: 0px; padding-right: 10px;">
                            <a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting')); ?>"><span class="links"></span></a>
                                <div id="inner">       
                                    <img class="nonhoverpic img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/user.png" alt="user" width="150" height="150" class="aligncenter size-thumbnail wp-image-185" />
                                    <img style="display:none" class="hoverpic img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/user3.png" alt="user2" width="150" height="150" class="aligncenter size-thumbnail wp-image-185" />      
                                </div>
                                <div id="inner2">
                                    <b style="color: #FFFFFF;">Consulting</b>
                                </div>
                            
                        </div>

                        <div id="changer" class="col-sm-6 col-md-3" style="padding-right: 10px; padding-left: 10px;">
                                <a href="<?php echo get_permalink(get_page_by_path('leistungen/outputmanagement')); ?>"><span class="links"></span></a>
                                    <div id="inner">
                                        <img class="nonhoverpic img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/print.png" alt="document" width="150" height="150" class="aligncenter  size-thumbnail wp-image-182" />
                                        <img style="display:none" class="hoverpic img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/print1.png" alt="document" width="150" height="150" class="aligncenter  size-thumbnail wp-image-182" />
                                    </div>
                                    <div id="inner2">
                                       <b style="color: #FFFFFF;">Output Management</b>
                                    </div>
                        </div>
                        <div  id="changer" class="col-sm-6 col-md-3" style="padding-right: 10px; padding-left: 10px;">
                                <a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering')); ?>"><span class="links"></span></a>
                                    <div id="inner">
                                        <img class="nonhoverpic img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/keyboard.png" alt="keyboard" width="150" height="150" class="aligncenter  size-thumbnail wp-image-183" />
                                        <img class="hoverpic img-responsive" style="display:none" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/keyboard1.png" alt="keyboard" width="150" height="150" class="aligncenter  size-thumbnail wp-image-183" />
                                    </div>
                                    <div id="inner2">
                                        <b style="color: #FFFFFF;">Software Engineering</b>
                                    </div>
                        </div>
                        <div id="changer" class="col-sm-6 col-md-3" style="padding-right: 0px; padding-left: 10px;">
                              <a href="<?php echo get_permalink(get_page_by_path('leistungen/infrastruktur')); ?>"><span class="links"></span></a>
                                    <div id="inner">                  
                                        <img class="nonhoverpic img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/network.png" alt="network" width="150" height="150" class="aligncenter  size-thumbnail wp-image-184" />
                                        <img class="hoverpic img-responsive" style="display:none" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/network1.png" alt="network" width="150" height="150" class="aligncenter  size-thumbnail wp-image-184" />
                                    </div>
                                    <div id="inner2">
                                        <b style="color: #FFFFFF;">IT-Infrastruktur</b>
                                    </div>
                        </div>
                <br><br><br>
        </div>
            
        
        <div class="home-footer">
            <a class="pfeil" href="#foot"><img class="aligncenter" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow.png" alt="footer" /></a>
        </div>
    </div>


<!--
        <div id="main">
            <div class="row">
                <div class="col-md-12">
                    <div class="caption">
                        <h3> Ein Strom guter Ideen </h3>
                        <p>
                        <div  id="text">
                            Aus der Praxis für die Praxis bieten wir pragmatische IT-Lösungen für bestehende Herausforderungen oder entwickeln mit unseren Kunden innovative Strategien, die Ihnen spürbare, langfristige Wettbewerbsvorteile verschaffen und das Unternehmensergebnis nachhaltig verbessern.
                        </div>
                        <br>
                    </div>
                </div>


            </div>
            <div class="row">
                <br><br>
                <div class="col-sm-6 col-md-3">

                    <div class="user"> </div>
                    <a class="nonhoverpic" href="<?php echo get_permalink(get_page_by_path('leistungen/consulting')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/user.png" alt="user" width="150" height="150" class="alignnone size-thumbnail wp-image-185" /></a>
                    <a class="hoverpic" style="display:none" href="<?php echo get_permalink(get_page_by_path('leistungen/consulting')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/user3.png" alt="user2" width="150" height="150" class="alignnone size-thumbnail wp-image-185" /></a>

                    
                    <h4><b>Consulting</b></h4>
                        <p>Wir lösen Probleme für Sie</p>
                        <br>
                        </div>
                        <div id="picture" class="col-sm-6 col-md-3">
                            <div class="document"></div>

                            <a class="nonhoverpic" href="<?php echo get_permalink(get_page_by_path('leistungen/Output Management')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/print.png" alt="document" width="150" height="150" class="alignnone size-thumbnail wp-image-182" /></a>
                            <a class="hoverpic" style="display:none" href="<?php echo get_permalink(get_page_by_path('leistungen/outputmanagement')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/print1.png" alt="document" width="150" height="150" class="alignnone size-thumbnail wp-image-182" /></a>
                            <br>
                            <h4><b>Output Management</b></h3>
                                <p>Wir optimieren und verbessern für Sie</p>
                                <br>
                                </div>
                                <div id="picture" class="col-sm-6 col-md-3">
                                    <div class="keyboard"></div>
                                    <a class="nonhoverpic" href="<?php echo get_permalink(get_page_by_path('leistungen/Software Engineering')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/keyboard.png" alt="keyboard" width="150" height="150" class="alignnone size-thumbnail wp-image-183" /></a>
                                    <a class="hoverpic" style="display:none" href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/keyboard1.png" alt="keyboard" width="150" height="150" class="alignnone size-thumbnail wp-image-183" /></a>
                                    <br>
                                    <h4><b>Entwicklung</b></h3>
                                        <p>Wir entwickeln für Sie</p>
                                        <br>
                                        </div>
                                        <div id="picture" class="col-sm-6 col-md-3">
                                            <div class="network"></div>
                                            <a class="nonhoverpic" href="<?php echo get_permalink(get_page_by_path('leistungen/infrastruktur')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/network.png" alt="network" width="150" height="150" class="alignnone size-thumbnail wp-image-184" /></a>
                                            <a class="hoverpic" style="display:none" href="<?php echo get_permalink(get_page_by_path('leistungen/infrastruktur')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/network1.png" alt="network" width="150" height="150" class="alignnone size-thumbnail wp-image-184" /></a>
                                            <br>
                                            <h4><b>Infrastruktur</b> </h3>
                                                <p>Wir verbinden Sie</p>
                                        </div>
                                </div>
                                <div class="row">                   <div class="col-md-12" style=" opacity: 0.5; font-size:10px;">Für mehr Informationen auf ein Icon klicken</div></div>

                        </div>
-->

                    <?php endwhile;
                else: ?>
                    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
                <?php endif; ?>

                <?php get_footer(); ?>
