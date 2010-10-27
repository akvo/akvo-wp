
<?php get_header(); ?>
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
<div class="span-10 first">
	<?php if (have_posts()) : ?>	
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>" style="margin-bottom:40px;">
				<div class="white_box">
					<div class="space20">
						<a href="<?php the_permalink() ?>" rel="bookmark" 
							title="Permanent Link to <?php the_title_attribute(); ?>">
							<h1 class="title" style="margin-bottom:5px;">
								<?php the_title(); ?>
							</h1>
						</a>
						<p class="grey" style="font-weight:bold;">
							<?php the_time('F jS, Y') ?> by <?php the_author() ?>
						</p>
						<div class="entry">
							<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignleft post_thumbnail")); } ?>
							
							<?php the_content('Read the rest of this entry &raquo;'); ?>
							<?php /* the_content(''); */?>
						</div>
						<hr style="margin: 1px 0px 4px 0px;"/>
						<div style="float:left; width:390px;">
							<p class="small grey" style="margin:0;">
								Posted in <?php the_category(', ') ?>.
							</p>
						</div>
						<div style="float:right; width:100px; text-align:right;">
							<p class="small grey" style="margin:0;">
							<?php if (current_user_can('edit_post', $post->ID)) {  
								edit_post_link('Edit', '', ''); } ?>
							</p>
						</div>
						<div class="clear"></div>
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
