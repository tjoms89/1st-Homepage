<?php 
/*! © 2014 by IT-Power GmbH (http://www.it-power.org); All rights reserved */

/**
 * Impressum
 *
 * @author Thomas Kleinert <thomas.kleinert@it-power.org>
 * @since 12/24/2014
 * @version @===version===@
 */
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="main">
    <div class="row  width2">
     <div class="col-md-12"><br><br><br><br>
<?php the_content(); ?>
</div></div></div>

	<?php endwhile; else: ?>
		<p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>