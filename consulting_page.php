<?php get_header(); ?> 
<?php /*
Template Name: Consulting Template
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="ice">
            <div class="row">
                <div class="background5">
                    <h1> Consulting </h1>
                </div>
            </div>
            <br><br><br><br>
            <div id="inhalt"></div>
        </div>
        <div class="row width1" >
            <div class="col-md-12"  style="padding: 20px 0 !important;"> 
    
                    <ul class="content-navigation" >
                        <li id="0"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting')); ?>#inhalt" >Allgemein</a></li>
                        <li id="1"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/projektmanagement')); ?>#inhalt">Projektmanagement</a></li>
                        <li id="2"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/geschaftsprozessmanagement')); ?>#inhalt">Geschäftsprozessmanagement</a></li><br>
                        <li id="3"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/requirements-engineering')); ?>#inhalt">Requirements Engineering</a></li>
                        <li id="4"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/change-management')); ?>#inhalt">Change Management</a></li>
                        <li id="5"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/qualitatsmanagement')); ?>#inhalt">Qualitätsmanagement</a></li><br>
                        <li id="6"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/sap-berechtigungswesen')); ?>#inhalt">SAP Berechtigungswesen</a></li>
                        <li id="7"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/erp')); ?>#inhalt">ERP</a></li>
                        <li id="8"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/energiedatenmanagement')); ?>#inhalt">Energiedatenmanagement</a></li><br>
                        <li id="9"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/business-intelligence')); ?>#inhalt">Business Intelligence</a></li>
                       
                    </ul>
                </div>
        </div>
        <div id="main" class="width1">
            <div class="col-md-12">

                <br>
            <?php the_content(); ?>
                <br>
            </div>
        </div>

    <?php endwhile;
else:
    ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
