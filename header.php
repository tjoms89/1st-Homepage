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
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/domtab.css"></link>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/tab.css"></link>

        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"></link>

        

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
                <a class="navbar-brand" href="<?php echo get_permalink(get_page_by_path('homepage')); ?>">IT-Power</a>
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
                    
                    <?php /*
                    <li><a href="<?php echo get_permalink(get_page_by_path('news')); ?>">News</a></li>
                    <li class="expand"><a href="<?php echo get_permalink(get_page_by_path('unternehmen')); ?>">Unternehmen</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo get_permalink(get_page_by_path('unternehmen/consulting')); ?>">Consulting</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_path('unternehmen/Output Management')); ?>">Output Management</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_path('unternehmen/softwareengineering')); ?>">Softwareengineering</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_path('unternehmen/infrastruktur')); ?>">IT-Infrastruktur</a></li> 
                        </ul>
                    </li>

                    <li><a href="<?php echo get_permalink(get_page_by_path('kunden')); ?>">Kunden</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('partner')); ?>">Partner</a></li>

                    <li class="expand"><a href="<?php echo get_permalink(get_page_by_path('karriere')); ?>">Karriere</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo get_permalink(get_page_by_path('karriere/stellen')); ?>">Stellenangebote</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_path('karriere/mentor')); ?>">Mentorenprogramm</a></li>
                        </ul>
                    </li>
                    
                   <li><a href="<?php echo get_permalink(get_page_by_path('kontakt')); ?>">Kontakt</a></li>
                   <li><a href="<?php echo get_permalink(get_page_by_path('uber')); ?>">Über uns</a></li>

                </ul>


                <?php /*  wp_list_pages(array('include' => '15','depth' => 1,'title_li' => '')); ?>
                  <?php wp_list_pages(array('include' => '12, 24, 26, 28, 19','depth' => 0,'title_li' => '')); ?>
                  <?php wp_list_pages(array('include' => '17','depth' => 1,'title_li' => '')); ?>
                  <?php wp_list_pages(array('include' => '30','depth' => 1,'title_li' => '')); */ ?>
                </ul>

            </div>
        </div>



