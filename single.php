<?php get_header(); ?>

<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post();?>
		<article class="post singlepost">
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

			<p class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | posted in
				
				<?php 
					$categories = get_the_category();
					$separator = ", ";
					$output = '';

					if($categories){

						foreach($categories as $category){
							$output .= '<a href="' . get_category_link($category->term_id) .'">' . $category->cat_name . '</a>' . $separator;
						}

						echo trim($output, $separator);
					}

				 ?>
			</p>
			
			<?php the_post_thumbnail('banner-image'); ?>

			<?php the_content(); ?>
		</article>

		<div class="about-author">
			<div class="about-author-image">
				<div><?php echo get_avatar(get_the_author_meta('ID'), 200); ?></div>
				<div class="nickname"><?php echo get_the_author_meta('nickname'); ?></div>
			</div>

			<?php $otherAuthorPosts = new WP_Query(array(
				'author' => get_the_author_meta('ID'),
				'posts_per_page' => 2,
				'post__not_in' => array(get_the_ID())

			)); ?>

			<?php if($otherAuthorPosts->have_posts()): ?>
				<div class="about-author-text">
					<h3>About the Author</h3>
					<?php echo wpautop(get_the_author_meta('description')); ?>

					<div class="other-posts-by">
						<h4>Other Posts By <?php echo get_the_author_meta('nickname'); ?></h4>
						
						<ul>
							<?php while($otherAuthorPosts->have_posts()): ?>
								<?php $otherAuthorPosts->the_post(); ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; ?>
						</ul>
					</div>

					<?php wp_reset_postdata(); ?>
					
					<div class="view-post">
						<?php if(count_user_posts(get_the_author_meta('ID')) > 2): ?>
							<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">View all posts by <?php echo get_the_author_meta('nickname'); ?></a>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>

	<?php endwhile; ?>
<?php else: ?>
	<?php echo wpautop("No posts found"); ?>
<?php endif; ?>

<?php get_footer(); ?>
