<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="shortcut icon" href="http://www.akvo.org/images/favicon.ico" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" type="text/css" href="http://sandbox.akvo.org/rsr/media/css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://sandbox.akvo.org/rsr/media/css/global.css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://sandbox.akvo.org/rsr/media/css/style_rsr.css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://sandbox.akvo.org/rsr/media/css/tabs.css" media="screen" />
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="http://sandbox.akvo.org/rsr/media/css/ie.css" media="screen" />
<![endif]-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">

</style>

<?php wp_head(); ?>
</head>
	<body>
		<div id="wrapper">

			<div id="header" class="clearfix">
				<a href="/"><img src="/rsr/media/img/logo_akvo_250.png" alt="Akvo.org" id="header_logo" /></a>
				<?php
					// <img src="http://sandbox.akvo.org/rsr/media/img/logo_akvo_250.png" alt="Akvo.org" id="header_logo" />
				?>
				</div> <!-- #header -->

<div id="navigation" class="clearfix">			
	<ul id="navlist">
		<li><a href="/rsr">Home</a></li>
		<li><a href="/wiki">Akvopedia</a></li>
		<li><a href="/rsr/projects">Projects</a></li>
		<li><a href="/web/partners">Partners</a></li>
		<li><a href="/web/get_involved">Get involved</a></li>
		<li><a href="/blog" class="active">Blog</a></li>
		<li><a href="/web/what_we_do/">About</a></li>	
	</ul>
</div> <!-- #navigation -->

			<div id="breadcrumbs" class="clearfix">
				<a href="/">Home</a> > Latest blog posts</em>
			</div>
			
			<div id="content">
				
				<?php get_sidebar('left'); ?>
				