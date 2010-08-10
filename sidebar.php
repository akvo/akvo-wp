<div style="float:left; width:207px;">
	<ul id="sidebar1">
	<?php if ( !function_exists('dynamic_sidebar')
	        || !dynamic_sidebar(1) ) : ?>
	 <li id="about">
	  <h2>About</h2>
	  <p>This is my blog.</p>
	 </li>
	 <li id="links">
	  <h2>Links</h2>
	  <ul>
	   <li><a href="http://example.com">Example</a></li>
	  </ul>
	 </li>
	<?php endif; ?>
	</ul>
</div>
<div style="float:left; width:207px; margin-left:11px;">
	<ul id="sidebar2">
	<?php if ( !function_exists('dynamic_sidebar')
	        || !dynamic_sidebar(2) ) : ?>
	 <li id="about">
	  <h2>About</h2>
	  <p>This is my blog.</p>
	 </li>
	 <li id="links">
	  <h2>Links</h2>
	  <ul>
	   <li><a href="http://example.com">Example</a></li>
	  </ul>
	 </li>
	<?php endif; ?>
	</ul>
</div>
<div class="clear"></div>
	
<?php /* 
<div style="float:left; width:207px;">
	<p>&nbsp;</p>
	<div class="space10">
		<?php get_search_form(); ?>
		<h2>Recent Posts</h2>
		<ul class="small">
			<?php wp_get_archives('type=postbypost&limit=5'); ?>  
          </ul>
		<h2>Meta</h2>
		<ul class="small">
			<li><a href="<?php bloginfo('rss2_url'); ?>">Posts feed</a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments feed</a></li>
			<li><?php wp_loginout(); ?></li>
			<?php wp_register(); ?>
		</ul>
	</div>
</div>
<div style="float:left; width:207px; margin-left:11px;">
	<p>&nbsp;</p>
	<h2>Categories</h2>
	<ul class="small">
		<?php wp_list_categories('hide_empty=1&show_count=1&depth=1&title_li='); ?>
	</ul>
	
	<h2>Archives</h2>
	<ul class="small">
		<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
	</ul>
	
</div>
<div class="clear"></div>
*/?>