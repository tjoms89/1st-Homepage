

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
                <li><a href="tel:+494614873434">Tel.: +49  461 487-3434</a></li><br>
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

</div>
</div> 
</footer>

<?php

// javascript functions for the frontend 
function add_this_script_footer() {
 
    ?>


    
    <script type="text/javascript">


        // print function              
        jQuery(function(){
                    
                     jQuery('#btntest').on('click', function() {
                        var php = JSON.stringify(
                                                    <?php
                                                        $string = array();
                                                        $string[content] = apply_filters('the_content', get_the_content());

                                                        echo json_encode($string[content]);
                                                    ?>
                         );
                             
                         var escaped = php.replace(/\\n/g, "")
                                      .replace(/\\'/g, "")
                                      .replace(/\\"/g, '')
                                      .replace(/\\&/g, "")
                                      .replace(/\\r/g, "")
                                      .replace(/\\t/g, "")
                                      .replace(/\\b/g, "")
                                      .replace(/\\f/g, "")
                                      .replace('"', '')
                                      .replace(/<a\b[^>]*>/i,"")
                                      .replace(/<\/a>/i, "");
                              
                         escaped = escaped.substring(0, escaped.length - 1);
                         
                         var kontakt = 'E-Mail: service@it-power.org - Tel.:+49  461 487-3434';
                  
                         var escaped = escaped.concat(kontakt);

                        myWindow=window.open('','','width=auto,height=auto,scrollbars=1');
                        myWindow.document.write('<div style="width:80%; margin-left:auto; margin-right:auto;">');
                        myWindow.document.write('<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/itplogo2.png" alt="logo" width="235" height="30" class="alignnew"/>');
                        myWindow.document.write(escaped);
                        myWindow.document.write('</div>');
                        myWindow.document.close();
                        myWindow.focus();
                        myWindow.print(); 
                    });
                          if (jQuery(".scroll").length){
                            stickyTop = jQuery('.scroll').offset().top; // returns number   
                            stickybot = jQuery('#foot').height();

                            jQuery(window).scroll(function(){ // scroll event
 
                            var windowTop = jQuery(window).scrollTop() + 80; // returns number
             
                            if (stickybot < windowTop ) {
                            jQuery('.scroll').css({ position: 'fixed' });

                            if (stickyTop < windowTop ) {
                                jQuery('.scroll').css({ position: 'fixed', top: 80 });
                                jQuery('.showup').hide();
                            }

                            else {
                                jQuery('.scroll').css('position','static');
                            }   
                            }
                            else {
                                jQuery('.scroll').css('position','static');
                                jQuery('.showup').show();
                            }
                            });}
           });

    </script>
    <?php
}

add_action('wp_footer', 'add_this_script_footer', 20);

wp_footer();
?>

</body>
</html>