<?php get_header(); ?>

<div>
	<div class="main-column">
		<div class="left-column">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post();?>
					<?php get_template_part('content', get_post_format()); ?>
				<?php endwhile; ?>

				<?php echo paginate_links(); ?>
			<?php else: ?>
				<?php echo wpautop("No posts found"); ?>
			<?php endif; ?>
		</div>

		<div class="right-column">
			<?php if(is_active_sidebar('sidebar1')): ?>
					<?php dynamic_sidebar('sidebar1'); ?>
			<?php endif; ?>
		</div>
	</div>

</div>

<?php get_footer(); ?>
