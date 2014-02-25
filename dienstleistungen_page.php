<?php get_header(); ?>
<?php /*
Template Name: Dienstleistungen Template
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="hamburg">
            <div class="row">
                <div class="background5">
                    <h1>Dienstleistungen</h1>
                </div>
            </div>
        </div>
        <div class="row" style="width: 60%;">
            <div class="col-md-12"  style="padding: 20px 0 !important;"> 
    
                    <ul class="content-navigation" >
                        <li id="1"><a href="<?php echo get_permalink(get_page_by_path('leistungen/dienstleistungen/aareon-schnittstelle')); ?>">Aareon Schnittstelle</a></li>
                        <li id="2"><a href="<?php echo get_permalink(get_page_by_path('leistungen/dienstleistungen/facilitymanager')); ?>">Facility Access Manager</a></li><br>
                        <li id="3"><a href="<?php echo get_permalink(get_page_by_path('leistungen/dienstleistungen/kundenselbstablesung')); ?>">Kundenselbstablesung</a></li>
                    </ul>
                </div>
        </div>

        <div id="main" style="width: 60%;">
            <div class="col-md-12">
                <br>
                    <?php the_content(); ?>
            </div>
        </div>

    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
