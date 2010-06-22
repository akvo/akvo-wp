
				<div id="blog_right">
					<div class="sidebar" id="right">
						<!-- 
						Search (no widget) block
						Search isn't a widget because WP's search widget doesn't have a title attribute 
						-->
						<ul>
							<li><h2>Search blog</h2>
							<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
							<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
							</form>
							</li>
						</ul>
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) : ?>						
						<!-- sidebar sample with NO widgets
						<ul>						
							<li><h2>Sidebar (no widget)</h2>
								<ul>
								<li><a href="#">Item 1</a><br />Does the box title have a white border around it?</li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>						
								</ul>
							</li>
						</ul>
						<ul>
						<li class="widget"><h2 class="widgettitle">Sidebar Widget</h2>
								<ul>
								<li><a href="#">The TH Interview: Vinay Gupta on Opensource Disaster Relief and Pod Ambiance : TreeHugger</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>						
								</ul>
						</li>
						</ul>
						-->
						<?php endif; ?>
					</div>
				</div>
				