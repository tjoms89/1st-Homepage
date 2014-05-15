
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div id="intro-small" class="mill">
            <div class="row">
                    <div class="background5">
                        <h1> Mentoring Program
                        </h1>
                    </div>
            </div>
        </div>
        
        <div id="main" class=" width2"> 
            <br>
            <?php the_content(); ?>
            <br>
                 <br>
                <input id="btntest" type="button" value="drucken" style="height: 25px; border:none;  background-color: #2d438e; color: #FFFFFF;"/>
                <br>
                 <br>
                  <br>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
