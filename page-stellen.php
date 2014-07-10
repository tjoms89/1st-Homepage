<?php get_header(); ?>
<div id="intro-small" class="work">
    <div class="row">
        <div class="col-md-12">
            <div class="background5"><h1>Stellenangebote</h1></div>
        </div>
    </div>
</div>
<div id="posts">

    <?php query_posts('category_name=work'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-12">
                <h2><a href="<?php the_permalink(); ?>">
                        <div class="title"><?php the_title(); ?></div></a>
                        <div class="content"><?php the_content(); ?></div></h2><p><em>
                        <div class="time"><?php the_time('d.m.y G:i'); ?></div></em></p>
                <hr></div>
        
    
        <?php endwhile;
    else: ?>  
        <p><br><b><?php _e('Derzeit haben wir keine konkreten Stellenangebote ausgeschrieben. Falls ihr jedoch der Meinung sind besonders gut zu uns passen, freuen wir uns immer über eine Initiativbewerbung an Sven Ladewig'); ?></b></p>
<?php endif; ?>
       
</div>

        <div id="sidebar">
        <h2> Kontakt </h2>
        <div class="thumbnail" style="text-align: center;">	 	 
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sven_ladewig.jpg" alt="BILD" width="150" height="100" class="alignnone size-thumbnail ">		 	 
            <div class="caption">	 	 
                <h3>Sven Ladewig</h3>	 	 
                <p style="font-weight: bold;">Geschäftsführer</p>
                <p style="font-weight: bold;">Leiter Vertrieb / Marketing   <p>
                <p style="font-weight: bold;">Leiter Consulting <p>
                    <br>
                <p>Tel.: +49  461 487-3424</p>
                <p>Fax: +49  461 487-2424</p>
                <p>Mobil: +49  171/5533629</p>
                <p><a href="mailto:sven.ladewig@it-power.org">sven.ladewig@it-power.org</a></p>
            </div></div> 

        </div>



<?php get_footer(); ?>