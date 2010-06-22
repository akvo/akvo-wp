<div style="float:left; width:207px; background-color:cyan;">
	<p>&nbsp;</p>
	<div class="space10">
		<ul>
			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>
			<li><h2><?php _e('Recent Posts'); ?></h2>
		               <ul>
				<?php wp_get_archives('type=postbypost&limit=5'); ?>  
		               </ul>
			</li>
		</ul>
	</div>
</div>
<div style="float:left; width:207px; margin-left:11px; background-color:orange;">
	<p>&nbsp;</p>
	<ul>
		<li>
			<?php wp_list_categories('hide_empty=1&show_count=0&depth=1&title_li=<h2>Categories</h2>'); ?>
		</li>
		<h2>Archives</h2>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
</div>
<div class="clear"></div>