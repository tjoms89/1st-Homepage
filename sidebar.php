<?php /*! © 2014 by IT-Power GmbH (http://www.it-power.org); All rights reserved */

/**
 * Sidebar
 *
 * @author Thomas Kleinert <thomas.kleinert@it-power.org>
 * @since 12/24/2014
 * @version @===version===@
 */ ?>
<div class="col-md-12" style="border:2px solid #2d438e;">

     <ul class="ulsidebar" id="ticker">
        <?php  wp_get_archives('type=postbypost&limit=10','format => custom','before => <li><a href="', 'after ="> </a></li>'); ?>
     </ul>

</div> 

