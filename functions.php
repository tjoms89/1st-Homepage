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


function add_print_query_vars($vars) {
    // add my_print to the valid list of variables
    $new_vars = array('my_print');
    $vars = $new_vars + $vars;
    return $vars;
}

add_filter('query_vars', 'add_print_query_vars');

add_action("template_redirect", 'my_template_redirect_2322');

// Template selection
function my_template_redirect_2322()
{
    global $wp;
    global $wp_query;
    if (isset($wp->query_vars["my_print"]))
    {
        include(TEMPLATEPATH . '/my_print_template.php');
        die();

    }
}



function add_parent_class_nav( $css_class, $page, $depth, $args )
{
    if (!empty($args['has_children']))
        $css_class[] = 'expand';
    return $css_class;
}
add_filter( 'page_css_class', 'add_parent_class_nav', 10, 4 );

add_action( 'wp_enqueue_scripts', 'load_scripts' );


?>