<?php get_header(); ?>
<?php /*
Template Name: Softwareengineering Template
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="water">
            <div class="row">
                <div class="background5">
                    <h1> Software Engineering</h1>
                </div>

            </div>
        </div>
        <div class="row" style="width: 60%;">
            <div class="col-md-12"  style="padding: 20px 0 !important;"> 
    
                    <ul class="content-navigation" >
                        <li id="0"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering')); ?>">Allgemein</a></li>
                        <li id="1"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/software-architektur')); ?>">Software Architektur</a></li>
                        <li id="2"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/open-source')); ?>">Open Source Implementierung</a></li>
                        <li id="3"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/webentwicklung')); ?>">Webentwicklung</a></li>
                        <li id="4"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/inubit')); ?>">Kompetenzzentrum Inubit</a></li>
                        <li id="5"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/gamification')); ?>">Produktivität durch Gamification</a></li>
                   
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
