<?php get_header(); ?>

<?php if(have_posts()): ?>
	<h2>
		<?php if(is_category()): ?>
			<?php single_cat_title(); ?>
		
		<?php elseif(is_tag()): ?>
			<?php single_tag_title();?>
		
		<?php elseif(is_author()): ?>
			<?php
				the_post();
				echo 'Author Archives: ' . get_the_author();
				rewind_posts();
			?>
		
		<?php elseif(is_day()): ?>
			<?php echo 'Daily Archieves: ' . get_the_date();?>
		
		<?php elseif(is_month()): ?>
			<?php echo 'Monthly Archieves: ' . get_the_date('F Y');?>
		
		<?php elseif(is_year()): ?>
			<?php echo 'Yearly Archieves: ' . get_the_date('Y');?>
		
		<?php else: ?>
			<?php echo 'Archives: ';?>
		
		<?php endif; ?>
	</h2>

	<?php while(have_posts()): the_post();?>

		<?php get_template_part('content', get_post_format()); ?>

	<?php endwhile; ?>

	<?php echo paginate_links(); ?>
<?php else: ?>
	<?php echo wpautop("No posts found"); ?>
<?php endif; ?>

<?php get_footer(); ?>
