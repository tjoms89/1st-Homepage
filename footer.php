<?php 
/*! © 2014 by IT-Power GmbH (http://www.it-power.org); All rights reserved */

/**
 * footer
 *
 * @author Thomas Kleinert <thomas.kleinert@it-power.org>
 * @since 12/24/2014
 * @version @===version===@
 */
?>

<footer style="z-index: 10;">
<div id="foot" >

         <div class="row">
        <div class="col-sm-6 col-md-3" >
            <ul class="ulfooter">
                <li><a href="<?php echo get_permalink(get_page_by_path('homepage')); ?>">Home</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('unternehmen')); ?>">Unternehmen</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('kontakt')); ?>">Kontakt</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('karriere')); ?>">Karriere</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('referenzen/kunden')); ?>">Kunden</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('referenzen/partner')); ?>">Partner</a></li>

            </ul>
            <br>
        </div>
        <div class="col-sm-6 col-md-3">
            <ul class="ulfooter">
                <li><a href="<?php echo get_permalink(get_page_by_path('leistungen/dienstleistungen')); ?>">Dienstleistungen</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting')); ?>">Consulting</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('leistungen/outputmanagement')); ?>">Output Management</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering')); ?>">Software Engineering</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('leistungen/infrastruktur')); ?>">IT-Infrastruktur</a></li>
            </ul>
            <br><br>
        </div>     
        <div class="col-sm-6 col-md-3">
            <div class="row">
            <ul class="ulfooter2">
                <li><a href="mailto:service@it-power.org"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/reply.png" alt="BILD" width="50" height="50" class="alignnone size-thumbnail "></a></li>		 	 
                <li><a href="tel:+494614873434"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/dialup2.png" alt="BILD" width="50" height="50" class="alignnone size-thumbnail "></a></li>		 	 
            </ul>
            </div>
            <div class="row">
            <ul class="ulfooter2"> 	 	 	 
                <li><a href="tel:+494614873434">Tel.: +49 461 487-3434</a></li><br>
                <li><a href="mailto:service@it-power.org">service@it-power.org</a></li>
            </ul>
            </div>
            <br>
        </div>


        <div class="col-sm-6 col-md-3">
            <div class="row">
            <ul class="ulfooter2">
                <li> <a href="http://www.facebook.com/ITPowerGmbh" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/fb.png" alt="facebook" width="50" height="50" class="alignnone size-thumbnail" /></a></li>
                <li> <a href="http://twitter.com/itpower_org" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/twit.png" alt="twitter" width="50" height="50" class="alignnone size-thumbnail" /></a></li>
                <li> <a href="http://www.xing.com/companies/it-powergmbh" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/xing.png" alt="xing" width="50" height="50" class="alignnone size-thumbnail" /></a></li>
            </ul>
            </div>

            <div class="row">
            <ul class="ulfooter2">
                <li><a href="<?php echo get_permalink(get_page_by_path('impressum')); ?>">Impressum</a></li><br>
                <li>&copy; IT-Power GmbH <?php echo date("Y") ?></li>

            </ul>
            </div>
            <br>
        </div></div>
         <br>

         <div class="row">
             <br>
             <div class="col-md-3" style="padding-left: 55px !important;">
             <?php get_search_form(); ?>
             </div>
         </div>
         
            <script type="text/javascript">
            var php = JSON.stringify(
            <?php
                 $string = array();
                 $string[content] = apply_filters('the_content', get_the_content());
                    
                 echo json_encode($string[content]);
            ?>
            );
                
            var templateDir = "<?php bloginfo('template_directory') ?>";

            </script>

</div>
</div> 
</footer>

<?php
wp_footer();
?>

</body>
</html>