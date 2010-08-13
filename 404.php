
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
	<div class="white_box" style="min-height:400px;">
		<div class="space20">
			<h1 class="title">Error 404 - Page Not Found</h1>
			<br />
			<h3>
				Sorry, but you are looking for something that isn't here.
				Maybe you want to head to the <a href="<?php echo get_bloginfo('url'); ?>">front page</a> of the blog.
			</h3>
		</div>
	</div>
</div>
<div class="span-8 last">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
