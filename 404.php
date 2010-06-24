
<?php get_header(); ?>
<div class="span-18" style="margin-bottom:20px;">
	<div id="breadcrum_back">
		<ul id="breadcrum">
			<li><a href="/"><span>Home</span></a></li>
			<li><a href="<?php bloginfo('wpurl'); ?>"><span>Blog</span></a></li>
			<li id="last_breadcrum_item">Error 404 - Page Not Found</li>
		</ul>
		<div class="clear"></div>
	</div>
</div>
<div class="span-18" style="margin-bottom:20px;">
<div class="span-10 first">
	<div class="white_box">
		<div class="space20">
			<h2 class="title">Error 404 - Page Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>
<div class="span-8 last">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
