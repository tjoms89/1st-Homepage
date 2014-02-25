<?php get_header(); ?>
<?php /*
Template Name: Outputmanagement Template
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="water2">
            <div class="row">
                <div class="background5">
                    <h1>Output Management</h1>
                </div>
            </div>
        </div>
       <div class="row" style="width: 60%;">
            <div class="col-md-12"  style="padding: 20px 0 !important;"> 
    
                    <ul class="content-navigation" >
                        <li id="0"><a href="<?php echo get_permalink(get_page_by_path('leistungen/outputmanagement')); ?>">Allgemein</a></li>
                        <li id="1"><a href="<?php echo get_permalink(get_page_by_path('leistungen/outputmanagement/rechenzentrum')); ?>">Rechenzentrumsdienste</a></li>
                    </ul>
                </div>
        </div>


        <div id="main" style="width: 60%;">
            <div class="col-md-12">
                <br>
                    <?php the_content(); ?>
                <br>
            </div>
        </div>

    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
