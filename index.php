
<?php get_header(); ?>
<div class="span-10 first">
	<?php if (have_posts()) : ?>	
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>" style="margin-bottom:20px;">
				<div class="white_box">
					<div class="space20">
						<h2 class="title">
							<a href="<?php the_permalink() ?>" rel="bookmark" 
								title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php the_title(); ?>
								<div class="entry">
	                                <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignleft post_thumbnail")); } ?>
									<?php the_content(''); ?>
	                                <div class="readmorecontent">
										<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More &raquo;</a>
									</div>
								</div>
								
								
							</a>
						</h2>
						
						<hr />
						<p class="small grey">
							<?php the_time('F jS, Y') ?>
						</p>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<div style="float:left;" class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div style="float:right;" class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		
	<?php else : ?>		
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>
	<?php endif; ?>
</div>
<div class="span-8 last">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
