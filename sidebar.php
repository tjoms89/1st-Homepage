<!--
<div class="col-md-12" style="background:#c0c6dd;"> 
    <h3>Neuigkeiten <br> Übersicht</h3>
     <ul class="ulsidebar" style="padding-left:0px; text-align: left;">
<?php // wp_get_archives('type=postbypost&limit=15','format => custom','before => <li><a href="', 'after ="> </a></li>'); ?>
     </ul>
</div> -->
<?php
global $wpdb;
$limit = 0;
$year_prev = null;
$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,	YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC");
foreach ($months as $month) :
    $year_current = $month->year;
    if ($year_current != $year_prev) {
        if ($year_prev != null) {
            ?>

        <?php } ?>

        <li class="archive-year"><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/"><?php echo $month->year; ?></a></li>
        <?php echo $month->post_count; ?>
    <?php } ?>
    <li><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><span class="archive-month"><?php echo date_i18n("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></span></a></li>
    <?php
    $year_prev = $year_current;

    if (++$limit >= 18) {
        break;
    }

endforeach;
?>
