<?php get_header(); ?>
<div id="intro-small" class="news">
    <div class="row">
        <div class="col-md-12">
            <div class="background5"><h1>Neuigkeiten</h1></div>
        </div>
    </div>
</div>

<div id="posts">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row">
                       <div class="col-md-8">
                <h2><a href="<?php the_permalink(); ?>">
                        <div class="title"><?php the_title(); ?></div></a>
                        <div class="content"><?php the_content(); ?></div></h2><p><em>
                        <div class="time"><?php the_time('d.m.y G:i'); ?></div></em></p>
                <hr></div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
    </div>
</div>
        <?php endwhile;
    else: ?>
        <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>




<?php get_footer(); ?>