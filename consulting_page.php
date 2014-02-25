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
        </div>
        <div class="row" style="width: 60%;">
            <div class="col-md-12"  style="padding: 20px 0 !important;"> 
    
                    <ul class="content-navigation" >
                        <li id="1"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/projektmanagement')); ?>">Projektmanagement</a></li>
                        <li id="2"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/geschäftsprozess')); ?>">Geschäftsprozessmanagement</a></li>
                        <li id="3"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/geschäftsprozess')); ?>">Geschäftsprozessmanagement</a></li>
                        <li id="4"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/geschäftsprozess')); ?>">Geschäftsprozessmanagement</a></li>
                        <li id="5"><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting/geschäftsprozess')); ?>">Geschäftsprozessmanagement</a></li>
                   
                    </ul>
                </div>
        </div>
        <div id="main">
            <div class="col-md-12">

                <br>
            <?php the_content(); ?>
            </div>
        </div>

    <?php endwhile;
else:
    ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
