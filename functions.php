<?php 

function load_scripts()
{  
	// register scripts 
	
        wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ) );
        wp_enqueue_script( 'custom-script' );
        
        wp_register_script( 'backstretch', get_stylesheet_directory_uri() . '/assets/js/jquery.backstretch.min.js', 'jquery', '1.0', true);
        wp_enqueue_script( 'backstretch' );
        
        wp_register_script( 'fonts', '//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js', 'jquery', '1.0', true);
        wp_enqueue_script( 'fonts' );

        wp_register_script( 'modern', get_stylesheet_directory_uri() . '/assets/js/respond.js');
        wp_enqueue_script( 'modern' );
        
        wp_register_script( 'media', get_stylesheet_directory_uri() . '/assets/js/css3-mediaqueries.js');
        wp_enqueue_script( 'media' );
        
        wp_register_script( 'html5', get_stylesheet_directory_uri() . '/assets/js/html5shiv.js');
        wp_enqueue_script( 'html5' );
}

function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/itplogon.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function add_parent_class_nav( $css_class, $page, $depth, $args )
{
    if (!empty($args['has_children']))
        $css_class[] = 'expand';
    return $css_class;
}
add_filter( 'page_css_class', 'add_parent_class_nav', 10, 4 );

add_action( 'wp_enqueue_scripts', 'load_scripts' );


?>