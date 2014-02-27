<?php
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