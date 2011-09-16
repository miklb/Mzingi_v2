<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
	<aside>
		<?php Plugins::act( 'theme_sidebar_top' ); ?>
		<?php $theme->area( 'sidebar' ); ?>
		<?php Plugins::act( 'theme_sidebar_bottom' ); ?>
	</aside>