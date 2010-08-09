<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="shortcut icon" href="http://www.akvo.org/images/favicon.ico" />
	<title>
		<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<link rel="alternate" type="application/rss+xml" 
		title="Akvo blog posts" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="application/rss+xml" 
		title="Akvo blog comments" href="<?php bloginfo('comments_rss2_url'); ?>" />
			
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
	<div id="header">
		<div id="header_container" class="container">
			<ul id="main_nav">
				<li>
					<a id="main_nav_left" href="/">
						<span>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/main_nav_akvo_logo.png" width="82" height="20" alt="Akvo.org" />
						</span>
					</a>
				</li>
				<li>
					<a href="/rsr/projects/">
						<span>Projects</span>
					</a>
				</li>
				<li>
					<a href="/rsr/organisations/">
						<span>Partners</span>
					</a>
				</li>
				<li>
					<a href="/wiki/">
						<span>Akvopedia</span>
					</a>
				</li>
				<li>
					<a href="/web/get_involved/">
						<span>About</span>
					</a>
				</li>
				<li>
					<a href="/blog/" class="active">
						<span>Blog</span>
					</a>
				</li>
				<?php/*
				<li>
					<span id="main_nav_language">
						<span class="small" style="margin-left:20px; margin-top:9px; display:block; ">
							Site language: English
						</span>
					</span>
				</li>
				
				<li>
					<a id="grid_toggle" href="#">
						<span>My Akvo</span>
					</a>
				</li>
				<li id="mainnav_account_item">
					<a id="main_nav_account" href="#">
						<span>Sign in</span>
					</a>
				</li>
				*/?>
			</ul>
		</div>
	</div>
	<div id="main_container" class="container">
			
	
	
