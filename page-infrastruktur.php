<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="cabos">
            <div class="row">
                <div class="background5">
                    <h1>IT-Infrastruktur</h1>
                </div>

            </div>
        </div>
        </div>
        <div id="main"> <!--
            <div class="domtab">
                <ul class="domtabs">
                    <li><a href="#t1">Allgemein</a></li>
                    <li><a href="#t2">Thema 1</a></li>
                    <li><a href="#t3">Thema 2</a></li>
                    <li><a href="#t4">Thema 3</a></li>
                    <li><a href="#t5">Thema n</a></li>
                </ul>

                <div>
                    <h2><a name="t1" id="t1">Allgemein</a></h2>
                    <p><a href="#top">back to menu</a></p>

                </div>

                <div>
                    <h2><a name="t2" id="t2">Thema 1</a></h2>
                    <p><a href="#top">back to menu</a></p> 
                </div>
                <div>
                    <h2><a name="t3" id="t3">Thema 2</a></h2>
                    <p><a href="#top">back to menu</a></p> 
                </div>
                <div>
                    <h2><a name="t4" id="t4">Thema 3</a></h2>
                    <p> Text zum Thema kommt hier hin <br><br>
                        <b> Text1 </b><br>
                        TexttexttextTexttexttextTexttexttextTexttexttextTexttexttexttextTexttexttexttextTexttexttexttextTexttexttext<br>
                        TexttexttextTexttexttextTexttexttextTexttexttextTexttexttext
                    </p>
                    <p><a href="#top">back to menu</a></p> 
                </div>
                <div>
                    <h2><a name="t5" id="t5">Thema n</a></h2>
                    <p><a href="#top">back to menu</a></p> 
                </div>

            </div>
        </div> -->
            <?php the_content(); ?>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
