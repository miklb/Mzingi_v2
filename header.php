<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
	<meta charset="<?php echo $charset; ?>">

	<title><?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>
	<meta name="title" content="<?php Options::out( 'title' ) ?>">
	<meta name="description" content="<?php Options::out( 'tagline' ) ?>">

	<link rel="shortcut icon" href="<?php Site::out_url( 'theme' ); ?>/images/favicon.ico">
	
	<meta name="viewport" content="initial-scale=1.0,width=device-width">
	
	<?php echo $theme->header(); ?>
	
</head>
<body class="<?php echo $theme->body_class(); ?>">
	<div id="container"><!--start main wrapper-->
		<header id="masthead">
			<hgroup>
				<h1><a href="<?php Site::out_url( 'habari'); ?>" title="<?php Options::out( 'title' ); ?>"> <?php Options::out( 'title' ); ?></a></h1>
				<h2><?php Options::out( 'tagline' ); ?></h2>
			</hgroup>
			<nav>
				<ul>
					<li><a href="<?php Site::out_url( 'habari' ); ?>"><?php _e('Home'); ?></a></li>
					<?php
					// List Pages
					foreach ( $pages as $page ) {
						echo '<li><a href="' . $page->permalink . '" title="' . $page->title . '">' . $page->title . '</a></li>';
					}
					?>
				</ul>
			</nav>
		</header>