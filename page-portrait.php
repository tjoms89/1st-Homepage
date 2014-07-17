
<?php 
/*! © 2014 by IT-Power GmbH (http://www.it-power.org); All rights reserved */

/**
 * Portrait
 *
 * @author Thomas Kleinert <thomas.kleinert@it-power.org>
 * @since 12/24/2014
 * @version @===version===@
 */
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div id="intro-small" class="meer">
            <div class="row">
                <div class="background5">
                    <h1>Portrait</h1>
                </div>
            </div>
            </div>
        
        <div id="main" class=" width2"> 
            <br>
            <?php the_content(); ?>
            <br>
                 <br>
                <input id="btntest" type="button" value="drucken" style="height: 25px; border:none;  background-color: #2d438e; color: #FFFFFF;"/>
                <br>
                 <br>
                  <br>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

    