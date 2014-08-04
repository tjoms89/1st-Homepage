
<?php 
/*! © 2014 by IT-Power GmbH (http://www.it-power.org); All rights reserved */

/**
 * Mailing Site 
 *
 * @author Thomas Kleinert <thomas.kleinert@it-power.org>
 * @since 12/24/2014
 * @version @===version===@
 */
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="intro-small" class="news">
           <!--<div class="row">
                <div class="background5">
                    <h1> Test-Überschrift </h1>
                </div> 
            </div> -->
        </div>
        
        <div id="main" style="width:90%;">        
            <div class="row">
                <br>
                <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
        </div>

    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

    