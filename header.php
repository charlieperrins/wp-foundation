<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>WP TITLE HERE</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" />
	<script src="<?php bloginfo('template_url'); ?>/js/vendor/custom.modernizr.js"></script>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favico.gif">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/cp-ico.png">
</head>
<body>


	<header class="page-header">
		<div class="row">			
			<div class="large-12 columns">
				<h1 class="page-logo"><a href="<? bloginfo('url'); ?>">CHARLIE PERRINS<small>.COM</small></a></h1>
			</div>
		</div>				
	</header>

	<div class="page-wrapper">

		<div class="row">
			<nav class="page-nav large-12 columns">
				<ul class="inline-list">
				<?php wp_list_pages('title_li='); ?>
				</ul>
			</nav>
		</div>