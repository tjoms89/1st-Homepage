<?php $search_terms = htmlspecialchars( $_GET["s"] ); ?>

<form role="form" action="<?php bloginfo('url'); ?>/" id="searchform" method="get">
    <label for="s" class="sr-only">Suche</label>
    <div class="input-group">
        <input type="text" style="background-color: #2d438e; color: #FFFFFF; border: 1px solid #FFFFFF;" class="form-control" id="s" name="s" placeholder="Suche auf it-power.org"<?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
        <span class="input-group-btn">
            <button type="submit" class="btn" style="background-color: #2d438e !important; background-image: none; color: #FFFFFF !important; border: 1px solid #FFFFFF !important;" ><i class="icon-search">Suche</i></button>
        </span>
    </div> <!-- .input-group -->
</form>