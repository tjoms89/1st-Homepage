<?php 
/*! © 2014 by IT-Power GmbH (http://www.it-power.org); All rights reserved */

/**
 * Stellenangebote
 *
 * @author Thomas Kleinert <thomas.kleinert@it-power.org>
 * @since 12/24/2014
 * @version @===version===@
 */
get_header(); ?>
<div id="intro-small" class="work">
    <div class="row">
        <div class="col-md-12">
            <div class="background5"><h1>Stellenangebote</h1></div>
        </div>
    </div>
</div>
<div class="row">
<div class="col-md-9">
<div id="posts">

    <?php query_posts('category_name=work'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row">
            <div class="col-md-12">
                <h2><a href="<?php the_permalink(); ?>">
                        <div class="title"><?php the_title(); ?></div></a>
                        <div class="content"><?php the_content(); ?></div></h2><p><em>
                        <div class="time"><?php the_time('d.m.y G:i'); ?></div></em></p>
                <hr></div>
    </div>
        
    
        <?php endwhile;
    else: ?>  
        <p><br><b><?php _e('Derzeit haben wir keine konkreten Stellenangebote ausgeschrieben. Falls Sie jedoch der Meinung sind, besonders gut zu uns passen, freuen wir uns immer über eine Initiativbewerbung an Sven Ladewig'); ?></b></p>
<?php endif; ?>
       
</div>
</div>
    <div class="col-md-3 ">

         <?php get_sidebar("consulting"); ?>

   </div>
</div>



<?php get_footer(); ?>