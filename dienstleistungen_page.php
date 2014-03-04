<?php get_header(); ?>
<?php /*
Template Name: Dienstleistungen Template
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="hamburg">
            <div class="row">
                <div class="background5">
                    <h1>Dienstleistungen</h1>
                </div>
            </div>
            <br><br><br><br>
            <div id="inhalt"></div>
        </div>
        <br>
        <div class="row width1" style="border:2px solid #2d438e;">
            <div class="col-md-12"  style="padding: 10px 0 !important;"> 
    
                    <ul class="content-navigation" >
                        <li id="0"><a href="<?php echo get_permalink(get_page_by_path('leistungen/dienstleistungen')); ?>#inhalt">Allgemein</a></li>  
                        <li id="1"><a href="<?php echo get_permalink(get_page_by_path('leistungen/dienstleistungen/aareon-schnittstelle')); ?>#inhalt">Aareon Schnittstelle</a></li>
                        <li id="2"><a href="<?php echo get_permalink(get_page_by_path('leistungen/dienstleistungen/facilitymanager')); ?>#inhalt">Facility Access Manager</a></li>
                        <li id="3"><a href="<?php echo get_permalink(get_page_by_path('leistungen/dienstleistungen/kundenselbstablesung')); ?>#inhalt">Kundenselbstablesung</a></li>
                    </ul>
                </div>
        </div>

        <div id="main" class="width1">
            <div class="col-md-12">
                <br>
                    <?php the_content(); ?>
                <br>
                 <br>
                <input id="btntest" type="button" value="drucken" style="height: 25px; border:none;  background-color: #2d438e; color: #FFFFFF;"/>
                <br>
                 <br>
                  <br>
            
            </div>
            
            <script>
                            
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

                        myWindow=window.open('','','width=auto,height=auto,scrollbars=1');
                        myWindow.document.write('<div style="width:80%; margin-left:auto; margin-right:auto;">');
                        myWindow.document.write('<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/itplogo2.png" alt="logo" width="235" height="30" class="alignnew"/>');
                        myWindow.document.write(escaped);
                        myWindow.document.write('</div>');
                        myWindow.focus();
                        myWindow.print(); 
                    });
                    });
            </script>
        </div>

    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
