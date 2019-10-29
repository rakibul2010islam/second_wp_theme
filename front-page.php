<?php get_header(); ?>

<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post();?>
		<article class="post page">
			<div class="homepage-image" style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('homepage-image-setting')); ?>')">

				<div class="featured-texts">

					<h1><?php echo get_theme_mod('image-headline'); ?></h1>
					<p><?php echo wpautop(get_theme_mod('image-text-area')); ?></p>
					<a href="<?php echo get_permalink(get_theme_mod('image-readmore-link'))  ?>"><input type="button" value="Learn More"></a>

				</div>

			</div>
		</article>
	<?php endwhile; ?>

<?php endif; ?>

<div class="home-columns">

	<?php 

		$args = array( 'post_type'   => 'post', 'posts_per_page' => '4');
		$all_posts = new WP_Query( $args );

	 ?>

	<?php if($all_posts->have_posts()): ?>
		<?php while($all_posts->have_posts()): $all_posts->the_post();?>
			<?php if(has_post_thumbnail()): ?>
				<?php get_template_part('content', get_post_format()); ?>
			<?php endif; ?>
		<?php endwhile; ?>

		<?php echo paginate_links(); ?>
	<?php else: ?>
		<?php echo wpautop("No posts found"); ?>
	<?php endif; ?>

	<?php wp_reset_postdata(); ?>

</div>


<?php get_footer(); ?>
