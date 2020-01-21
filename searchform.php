
<?php $search_terms = htmlspecialchars( $_GET["s"] ); ?>

<div class="search-form">
   <form role="form" action="<?php bloginfo('siteurl'); ?>/" id="searchform" method="get">
      <input type="checkbox" name="checkbox" value="checkbox"/>
      <input type="text" class="form-control" id="testo" name="s" <?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
      <button type="submit" class="btn btn-primary"></button>
   </form>
</div>
