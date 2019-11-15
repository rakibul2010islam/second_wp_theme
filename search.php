<?php get_header(); ?>

<?php if(have_posts()): ?>
	
	<h2>Search Results for: <?php the_search_query(); ?></h2>

	<?php while(have_posts()): the_post();?>
		<?php get_template_part('content', get_post_format()); ?>
	<?php endwhile; ?>

	<?php echo paginate_links(); ?>
<?php else: ?>
	<?php echo wpautop("No posts found"); ?>
<?php endif; ?>

<?php get_footer(); ?>
