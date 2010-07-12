<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
<div class="span-18" style="margin-bottom:20px;">
	<div id="breadcrum_back">
		<ul id="breadcrum">
			<li><a href="/"><span>Home</span></a></li>
			<li><a href="<?php bloginfo('wpurl'); ?>"><span>Blog</span></a></li>
			<li id="last_breadcrum_item"><?php the_title(); ?></li>
		</ul>
		<div class="clear"></div>
	</div>
</div>

<div class="span-18" style="margin-bottom:20px;">
	<div class="span-10 first">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class="white_box">
				<div class="space20">
					<h2 class="title">
						<a href="<?php the_permalink() ?>" rel="bookmark" 
							title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
					<?php if (current_user_can('edit_post', $post->ID)) {
					?>
						<hr style="margin:0;"/>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					<?php } ?>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
	
	<div class="span-8 last">
	<?php get_sidebar(); ?>
	</div>
	<?php get_footer(); ?>
</div>
