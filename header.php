<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	
	<title><?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>
	<meta name="title" content="<?php Options::out( 'title' ) ?>">
	<meta name="description" content="<?php Options::out( 'tagline' ) ?>">
	
	<link rel="alternate" type="application/atom+xml" title="Atom" href="<?php $theme->feed_alternate(); ?>">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>">
	
	<link rel="shortcut icon" href="/images/favicon.ico">
	
	<link rel="stylesheet" href="<?php Site::out_url( 'theme' ); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php Site::out_url( 'theme' ); ?>/css/style.css">
	
	<?php $theme->header(); ?>
</head>
