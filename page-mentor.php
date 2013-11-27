<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="boat">
            <div class="row">
                <div class="background5">
                    <h1>Mentorenprogramm</h1>
                </div>
            </div>
        </div>
        </div>
        <div id="main">
            <div class="domtab">
                <ul class="domtabs">
                    <li><a href="#t1">Test 1</a></li>
                    <li><a href="#t2">Test 2</a></li>
                </ul>

                <div>
                    <h2><a name="t1" id="t1">Proof 1</a></h2>
                    <p>Test to prove that more than one menu is possible</p>
                    <p><a href="#top">back to menu</a></p>

                </div>

                <div>
                    <h2><a name="t2" id="t2">Proof 2</a></h2>
                    <p>Test to prove that more than one menu is possible</p>
                    <p><a href="#top">back to menu</a></p> 
                </div>

            </div>
        </div>
        </div>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
