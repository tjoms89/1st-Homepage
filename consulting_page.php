
<?php 
/*! © 2014 by IT-Power GmbH (http://www.it-power.org); All rights reserved */

/**
 * Consulting Template 
 *
 * @author Thomas Kleinert <thomas.kleinert@it-power.org>
 * @since 12/24/2014
 * @version @===version===@
 */

get_header(); 
/*
Template Name: Consulting Template
*/


?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="water3">
            <div class="row">
                <div class="background5">
                    <h1> Consulting </h1>
                </div>
            </div>
            <br><br><br><br>
            <div id="inhalt"></div>
        </div>
<br>
<div class="row">
    <div class="col-md-8">
        <div class="row width1" style="border:2px solid #2d438e;">
            <div class="col-md-6"  style="padding: 10px 0 !important;"> 
    
                    <ul class="content-navigation" >
                        <li id="0"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting')); ?>#inhalt" >Allgemein</a></li>
                        <li id="1"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/projektmanagement')); ?>#inhalt">Projektmanagement</a></li>
                        <li id="2"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/geschaftsprozessmanagement')); ?>#inhalt">Geschäftsprozessmanagement</a></li>
                        <li id="3"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/requirements-engineering')); ?>#inhalt">Requirements Engineering</a></li>
                        <li id="4"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/change-management')); ?>#inhalt">Change Management</a></li>
                    </ul>
            </div>
            <div class="col-md-6"  style="padding: 10px 0 !important;"> 
                    <ul class="content-navigation" >
                        <li id="5"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/qualitatsmanagement')); ?>#inhalt">Qualitätsmanagement</a></li>
                        <li id="6"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/sap-berechtigungswesen')); ?>#inhalt">SAP Berechtigungswesen</a></li>
                        <li id="7"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/erp')); ?>#inhalt">ERP</a></li>
                        <li id="8"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/energiedatenmanagement')); ?>#inhalt">Energiedatenmanagement</a></li>
                        <li id="9"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/business-intelligence')); ?>#inhalt">Business Intelligence</a></li>
                       
                    </ul>
                </div>
        </div>
        <div id="main" class="width1" >
            <div class="col-md-12">

                <br>
            <?php the_content(); ?>
                <br>
                 <br>
                <input id="btntest" type="button" value="drucken" style="height: 25px; border:none;  background-color: #2d438e; color: #FFFFFF;"/>
                <br>
                 
            
            </div>

        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3 ">
        <?php get_sidebar("consulting"); ?>
            </div>

</div>
            <br>
            <br>

    <?php endwhile;
else:
    ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
