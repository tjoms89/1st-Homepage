
<div class="col-md-12" style="background:#c0c6dd;"> 
    <h3>Neuigkeiten <br> Übersicht</h3>
     <ul class="ulsidebar" style="padding-left:0px; text-align: left;">
        <?php wp_get_archives('type=postbypost&limit=15','format => custom','before => <li><a href="', 'after ="> </a></li>'); ?>
     </ul>
</div>
