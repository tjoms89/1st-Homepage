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
            <br><br><br><br>
            <div id="inhalt"></div>
        </div>
<br>
       <div class="row width1" style="border:2px solid #2d438e;">
            <div class="col-md-12"  style="padding: 20px 0 !important;"> 
    
                    <ul class="content-navigation" >
                        <li id="0"><a href="<?php echo get_permalink(get_page_by_path('leistungen/outputmanagement')); ?>#inhalt">Allgemein</a></li>
                        <li id="1"><a href="<?php echo get_permalink(get_page_by_path('leistungen/outputmanagement/rechenzentrum')); ?>#inhalt">Rechenzentrumsdienste</a></li>
                    </ul>
                </div>
        </div>


        <div id="main" class="width1">
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
