<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>
		<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
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
					<a href="#">
						<span>Akvopedia</span>
					</a>
				</li>
				<li>
					<a href="/rsr/organisations/">
						<span>Partners</span>
					</a>
				</li>
				<li>
					<a href="/rsr/projects/">
						<span>Projects</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>Get involved</span>
					</a>
				</li>
				<li>
					<a href="/blog/" class="active">
						<span>Blog</span>
					</a>
				</li>
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
				<li>
					<a id="main_nav_account" href="#">
						<span>Sign in</span>
					</a>
					<?php
					/*
					
					{% if not user.username %}
						<a id="main_nav_account" href="{% url signin %}?next={{request.path}}">
							<span>{% trans 'Sign in' %}</span>
						</a>
					{% else %}
						<a id="main_nav_account" href="{% url akvo.rsr.views.signout %}" title="{{user.username}}">
							<span>{% trans 'Account' %}</span>
							{# <span>{% trans 'Sign out' %}</span> #}
						</a>
					{% endif %}
					*/
					?>
				</li>
			</ul>
		</div>
	</div>
	<div id="main_container" class="container">
			<div class="span-18" style="margin-bottom:20px;">
				<div id="breadcrum_back">
					<ul id="breadcrum">
						<li><a href="/"><span>Home</span></a></li>
						<li id="last_breadcrum_item">Blog</li>
					</ul>
					<div class="clear"></div>
				</div>
			</div>
			<div class="span-18" style="margin-bottom:20px;">
	
	
