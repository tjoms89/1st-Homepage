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
            
        </div>

    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
