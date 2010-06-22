<?php get_header(); ?>

				<div id="blog_center">
					<div id="blog_content">
	
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
			
						<div class="post" id="post-<?php the_ID(); ?>">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<div class="date"><?php the_time('j F Y') ?> by <?php the_author();?></div>
							<div class="entry">
								<?php the_content('Read the rest of this entry &raquo;'); ?>
							</div>
							<div class="postmeta">
								<div class="tags"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> <?php edit_post_link('Edit', '', ' | '); ?></div>
								<div class="comments"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></div>
							</div>							
						</div>
						
						<div style="clear: both"></div>
						<div class="ruler"></div>
						
						<?php endwhile; ?>
			
						<div id="prevnext">
							<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
							<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
						</div>
					
						<?php else : ?>

						<div class="post">
							<h2 class="center">Not Found</h2>
							<p class="center">Sorry, but you are looking for something that isn't here.</p>
							<?php include (TEMPLATEPATH . "/searchform.php"); ?>
						</div>
						
				<?php endif; ?>
					</div>	
				</div>					

<?php get_footer(); ?>
