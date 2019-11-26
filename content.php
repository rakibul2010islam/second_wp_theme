<article class="post <?php if(has_post_thumbnail() && (is_home() OR is_search() OR is_archive())): ?> newdisplay <?php endif; ?>">

	<?php if(is_home()): ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('blog-thumbnail'); ?> </a>
		</div>	
	<?php else: ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('front-thumbnail'); ?> </a>
		</div>
	<?php endif; ?>

	<div class="<?php if(has_post_thumbnail() && (is_home() OR is_search() OR is_archive())): ?> text-post <?php endif; ?>">

		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

		<p class="post-info">
			<?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
		</p>

		<p>

			<?php echo get_the_excerpt(); ?>
			
			<a href="<?php the_permalink(); ?>">Read More &raquo</a>
		</p>
	</div>
</article>