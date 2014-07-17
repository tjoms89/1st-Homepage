<?php 
/*! © 2014 by IT-Power GmbH (http://www.it-power.org); All rights reserved */

/**
 * index
 *
 * @author Thomas Kleinert <thomas.kleinert@it-power.org>
 * @since 12/24/2014
 * @version @===version===@
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

         <?php the_content();?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

        
<?php get_footer(); ?>