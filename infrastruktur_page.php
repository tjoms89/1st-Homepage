<?php get_header(); ?>
<?php /*
Template Name: Infrastruktur Template
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="cabos">
            <div class="row">
                <div class="background5">
                    <h1>IT-Infrastruktur</h1>
                </div>

            </div>
            <br><br><br><br>
            <div id="inhalt"></div>
        </div>
<div id="row">
    <div class="col-md-8">
        <div id="main" class="width1">
            <div class="col-md-12">

                <br>
                    <?php the_content(); ?>
                <br>
                             <br>
                <input id="btntest" type="button" value="drucken" style="height: 25px; border:none;  background-color: #2d438e; color: #FFFFFF;"/>
                <br>
                 <br>
                  <br>
            
            </div>
            
        </div></div>
<br>
    <div class="col-md-1"></div>
    <div class="col-md-3 ">
        <?php get_sidebar("infrastruktur"); ?>
            </div>
</div>
<br>
<br>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
