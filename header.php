<!DOCTYPE html>     

<html class="no-js"> 
    <head>
        <meta charset="utf-8"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>

        <title>IT-Power</title>
        <meta name="description" content="IT-Power Homepage"></meta>
        <meta name="author" content="Thomas Kleinert"></meta>

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap-theme.min.css"></link>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/tab.css"></link>

        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"></link>
        
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon-144x144-precomposed.png"/>
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">

        <!-- check if adminbar is showing and do some padding if its showing -->
        <?php if (is_admin_bar_showing()) { ?>
            <style>
                .navbar { top: 28px !important; }
            </style>
        <?php } ?>
        <?php wp_enqueue_script("jquery"); ?> 
        <?php wp_head(); ?>

    </head>

    <body>
        <!-- Mobile Navbar -->
        <div id="expandnav" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header"> 

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo get_permalink(get_page_by_path('homepage')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/itplogo5.png" alt="logo" width="235" height="30" class="alignnew"/></a>

            </div>

            <div id="subnav" style="overflow:visible;">
            </div>

            <!-- Collapsed Navbar for use on Desktops -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul id="mainnav" class="nav navbar-nav">   
                    <?php

                    $args = array(
                        'authors' => '',
                        'child_of' => 0,
                        'date_format' => get_option('date_format'),
                        'depth' => 0,
                        'echo' => 1,
                        'exclude' => '',
                        'include' => '',
                        'link_after' => '',
                        'link_before' => '',
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'show_date' => '',
                        'sort_column' => 'menu_order',
                        'title_li' => '',
                        'walker' => ''
                        
                    );
                    
                    wp_list_pages( $args );
                    ?>
                    
                </ul>
                <!--      
                <div class="col-xs-5 col-sm-3 pull-right">
                    <form class="navbar-form" role="search" style="border: none !important;" > 
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                            </div>
                        </div>
                    </form>
                </div>-->

            </div>
        </div>



