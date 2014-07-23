/*! © 2014 by IT-Power GmbH (http://www.it-power.org); All rights reserved */

/**
 * Main.js
 *
 * @author Thomas Kleinert <thomas.kleinert@it-power.org>
 * @since 12/24/2014
 * @version @===version===@
 */ 
;(function(window, document){
    
    jQuery(document).ready(function(jQuery) {

            // insert pictures with backstretch

            jQuery(".kurs").backstretch(templateDir + "/assets/img/kurs.jpg");
            jQuery(".ice").backstretch(templateDir + "/assets/img/ice.jpg");
            jQuery(".eis").backstretch(templateDir + "/assets/img/eis.jpg");
            jQuery(".water2").backstretch(templateDir + "/assets/img/water2.jpg");
            jQuery(".water3").backstretch(templateDir + "/assets/img/water3.jpg");   
            jQuery(".water").backstretch(templateDir + "/assets/img/water.jpg");           
            jQuery(".news").backstretch(templateDir + "/assets/img/news.jpg");
            jQuery(".work").backstretch(templateDir + "/assets/img/work.jpg");
            jQuery(".cabos").backstretch(templateDir + "/assets/img/cabos.jpg");
            jQuery(".gras").backstretch(templateDir + "/assets/img/gras.jpg");
            jQuery(".pust").backstretch(templateDir + "/assets/img/pust.jpg");
            //jQuery(".boat").backstretch(templateDir + "/assets/img/boat.jpg");             
            jQuery(".mill").backstretch(templateDir + "/assets/img/mill.jpg");            
            jQuery(".hamburg").backstretch(templateDir + "/assets/img/hamburg.jpg");            
            jQuery(".solar").backstretch(templateDir + "/assets/img/solar.jpg");           
            //jQuery(".mainpic").backstretch(templateDir + "/assets/img/main.jpg");           
            jQuery(".meer").backstretch(templateDir + "/assets/img/meer.jpg");

        }); 
                // print function              
        jQuery(function(){
                    
                     jQuery('#btntest').on('click', function() {

                             
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
                        myWindow.document.write('<img src="'+ templateDir +'/assets/img/itplogo2.png" alt="logo" width="235" height="30" class="alignnew"/>');
                        myWindow.document.write(escaped);
                        myWindow.document.write('</div>');
                        myWindow.document.close();
                        myWindow.focus();
                        myWindow.print(); 
                    });
                         
           });
        // choose height for #intro
        if(jQuery("#intro").height() > jQuery(window).height()) {
            jQuery("#intro").css('height', jQuery("#intro").height());
        }
        else {
            jQuery("#intro").css('height', jQuery(window).height() - 150);
        }

        /* carousel - not used
        jQuery('.carousel').carousel({
            interval: 3000, cycle: true, pause: "hover"
        }); */
        
        // hoverpic for icons - not working properly 
        jQuery('.changer').on('mouseenter', function() {
                jQuery(this).find('.nonhoverpic').hide();
                jQuery(this).find('.hoverpic').show();
        });
        jQuery('.changer').on('mouseleave', function() {
                jQuery('.hoverpic').hide();
                jQuery('.nonhoverpic').show();
        });
        /*
        jQuery('.nonhoverpic').on('mouseenter', function() {
            jQuery(this).hide();
            jQuery(this).next('.hoverpic').show();
        });
        jQuery('.hoverpic').on('mouseleave', function() {
            jQuery('.hoverpic').hide();
            jQuery('.nonhoverpic').show();
        }); */
        
       
        // height for post-page
        jQuery(function() {
            var totalHeight = 0;
            jQuery("#posts > div").each(function() {
                totalHeight += jQuery(this).height();
            });
            jQuery('#posts').css('height', totalHeight + 50);
        });

        // script for second navigation layer´
        jQuery(function() {

                if (jQuery(window).width() < 765) {
                        jQuery('.expand').children('.children').css('height','35');
                        jQuery('.expand').children('.children').css('line-height','1');
                        jQuery('.navbar').css('height','auto');         
                }
                
                jQuery('.expand').on('mouseenter', function() {

                    if (jQuery(window).width() > 765) {
                        // hide all other sub menus
                        //jQuery(this).siblings(this).find('ul').hide();
                        jQuery(this).addClass('hover');
                        // show sub nav
                        jQuery('#subnav').css('height', '72');
                        jQuery('.navbar').css('height', '122');
                        jQuery(this).children('.children').css('height','70');
                        jQuery(this).children('.children').css('line-height','36');

                    }
                    if (jQuery(window).width() > 980) {
                        jQuery('#subnav').css('height', '36');
                        jQuery('.navbar').css('height', '86');
                        
                        jQuery(this).children('.children').css('height','35');
                    }
                    
            });
            
                jQuery('.expand').on('mouseleave', function() {
                    
                    if (jQuery(window).width() > 765) {

                                jQuery('.expand').removeClass('hover');
                                jQuery('#subnav').css('height', '4');
                                jQuery('.navbar').css('height', '50');
                                //jQuery(this).children('.children').hide();
                                jQuery(this).children('.children').css('height','0');
                                jQuery(this).children('.children').css('line-height','0');
                    }
                    
                  }); 
           


            });

        function isTouchDevice(){
                        return true === ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
        };
        
        // load fonts
        WebFont.load({
            google: {
                families: ['Quicksand', 'Lato', 'Roboto', 'Quattrocento Sans']
            }
        });
        

        
        // ticker for post-page
        jQuery(function(){
            setInterval(function(){
                jQuery('#ticker li:first').animate({'opacity':0}, 200, function () { jQuery(this).appendTo(jQuery('#ticker')).css('opacity', 1);});
        }, 5000);
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
                        
})(this);
       