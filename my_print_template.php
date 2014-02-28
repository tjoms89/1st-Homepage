<?php /*
    define('WP_USE_THEMES', false);
    query_posts('p='.$_GET['pid']);
    if (have_posts()){
        while ( have_posts() ) { the_post();
            the_content();
        }
    }else{
    echo 'nichts gefunden';
    }
?>
*/
if (have_posts()) : while (have_posts()) : the_post(); ?>

<p> the_content(); </p>

<?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>
