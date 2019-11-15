<?php get_header(); ?>

<div>
	<div class="main-column">
		<div class="left-column">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post();?>
					<article class="post">				
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>
