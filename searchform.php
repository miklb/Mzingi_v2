<!-- searchform -->
<?php Plugins::act( 'theme_searchform_before' ); ?>
     <form method="get" id="searchform" action="<?php URL::out('display_search'); ?>">
      <input type="search" id="s" name="criteria" value="<?php if ( isset( $criteria ) ) { echo htmlentities($criteria, ENT_COMPAT, 'UTF-8'); } else { _e('Search'); } ?>"><br> <input type="submit" id="searchsubmit" value="<?php _e('Submit'); ?>">
     </form>
<?php Plugins::act( 'theme_searchform_after' ); ?>