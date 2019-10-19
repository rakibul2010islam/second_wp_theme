<?php get_header(); ?>

<div>
	<div class="main-column">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post();?>
				<?php get_template_part('content', get_post_format()); ?>
			<?php endwhile; ?>

			<?php echo paginate_links(); ?>
		<?php else: ?>
			<?php echo wpautop("No posts found"); ?>
		<?php endif; ?>
	</div>

</div>

<?php get_footer(); ?>
