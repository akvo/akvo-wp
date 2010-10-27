<?php	
	// No one except hackers value the wordpress version number
	remove_action('wp_head', 'wp_generator');
	
	// Register the sidebars
	if ( function_exists('register_sidebar') )
	    register_sidebars(2, array(
			'before_widget' => '',
			'after_widget' => '</div></div><br />',
			'before_title' => '<h2>',
			'after_title' => '</h2><div class="white_box"><div class="space20">',
		));
		
	function widget_akvo_search() {
	?>
		<h2>Search for</h2>
		<div class="white_box">
			<div class="space20">
				<form role="search" method="get" id="search_form" name="search_form" action="<?php echo get_bloginfo('url'); ?>">
					<input type="text" value="" name="s" id="s" style="width:155px;" />
					<div style="text-align:right">
					    <?php /*
						<a class="awesome aqua small" href="javascript:" onclick="this.blur();">
						    Search
						</a>
						*/?>
						<input type="submit" name="submit" value="search" id="search" style="">
					</div>
					<!-- <input type="submit" id="searchsubmit" value="Search" /> -->
				</form>
			</div>
		</div>
		<br />
	<?php
	}
	if ( function_exists('register_sidebar_widget') )
	    register_sidebar_widget(__('Akvo search'), 'widget_akvo_search');
	
		
?>