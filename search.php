<?php get_header(); ?>

<?php // Get number of results
$results_count = $wp_query->found_posts;
?>
<div>
    <br><br><br><br>
    <div class="row width1" style="border:2px solid #2d438e;">
    <div class="row" style="width:90%;" >
        <h1>Suche <span class="keyword">&ldquo;<?php the_search_query(); ?>&rdquo;</span></h1>
        <?php if ($results_count == '' || $results_count == 0) { // No Results ?>
            <p><span class="label label-danger"><?php _e('keine Ergebnisse'); ?></span></p>
        <?php } else { // Results Found ?>
            <p><span class="label label-success"><?php echo $results_count . __(' Ergebnisse'); ?></span></p>
        <?php } // end results check ?>
        <div class="row">
            <br>
                <?php get_search_form(); ?>

            <br>
        </div>
    </div> <!-- .container -->
    </div>
</div>

<div id="main" class="width1">
    <div class="row">
                <br>
            <?php if (have_posts()) : // Results Found ?>

                <?php while (have_posts()) : the_post(); ?>

                <article <?php post_class(); ?>>
                    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <div class="entry">
                        <p><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
                    </div>
                    <br>
                    <a href="<?php the_permalink() ?>" style="color:green; text-decoration: none;"><?php echo the_permalink() ?></a>
                </article>
                <hr />

                <?php endwhile; ?>

                <ul class="pager">
                    <li style="text-decoration: none;"><?php next_posts_link('<i class="icon-chevron-left"></i>&nbsp; älter') ?></li>
                    <li style="text-decoration: none;"><?php previous_posts_link('neuer &nbsp;<i class="icon-chevron-right"></i>') ?></li>
                </ul>

            <?php else : // No Results ?>
                <br><br>
                <p><?php _e('Tut uns Leid wir konnten nichts zu Ihrer Suchanfrage finden '); ?></p>
                <br><br><br><br>
            <?php endif; ?>



    </div> <!-- .row -->
    <br><br>
</div><!-- .container -->

<?php get_footer(); ?>