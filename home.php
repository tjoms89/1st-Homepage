<?php
/*! © 2014 by IT-Power GmbH (http://www.it-power.org); All rights reserved */

/**
 * News Page
 *
 * @author Thomas Kleinert <thomas.kleinert@it-power.org>
 * @since 12/24/2014
 * @version @===version===@
 */
get_header(); ?>
<div id="intro-small" class="news">
    <div class="row">

            <div class="background5"><h1>News</h1></div>

    </div>


</div>
<div class="row width2">
        
        <div id="sidebar">
            <?php get_sidebar(); ?>
        </div>

</div>
<div id="posts" class="width2">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                       <div class="col-md-12">
                        <h2><a href="<?php the_permalink(); ?>">
                        <div class="title"><?php the_title(); ?></div></a>
                        <div class="content"><?php the_content(); ?></div></h2><p><em>
                        <div class="time"><?php the_time('d.m.y G:i'); ?></div></em></p>
                <hr></div>


        <?php endwhile;
    else: ?>
        <p><?php _e('Keine Neuigkeiten vorhanden'); ?></p>
<?php endif; ?>

</div>




<?php get_footer(); ?>