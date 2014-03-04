<?php get_header(); ?>
<?php /*
Template Name: Softwareengineering Template
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="water">
            <div class="row">
                <div class="background5">
                    <h1> Software Engineering</h1>
                </div>

            </div>
            <br><br><br><br>
            <div id="inhalt"></div>
        </div>
<br>
        <div class="row width1" style="border:2px solid #2d438e;">
            <div class="col-md-6"  style="padding: 10px 0 !important;"> 
    
                    <ul class="content-navigation" >
                        <li id="0"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering')); ?>#inhalt">Allgemein</a></li>
                        <li id="1"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/software-architektur')); ?>#inhalt">Software Architektur</a></li>
                        <li id="2"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/open-source')); ?>#inhalt">Open Source Implementierung</a></li>
                    </ul>
            </div>
             <div class="col-md-6"  style="padding: 10px 0 !important;">    
                    <ul class="content-navigation" >
                        <li id="3"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/webentwicklung')); ?>#inhalt">Webentwicklung</a></li>
                        <li id="4"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/inubit')); ?>#inhalt">Kompetenzzentrum Inubit</a></li>
                        <li id="5"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/gamification')); ?>#inhalt">Produktivität durch Gamification</a></li>
                   
                    </ul>
             </div>
        </div>


        <div id="main" style="width: 60%;">
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

                        myWindow=window.open('','','width=auto,height=auto');
                        myWindow.document.write('<div style="width:60%; margin-left:auto; margin-right:auto;">');
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
