<?php get_header(); ?>

<div>
	<div class="main-column">
		<div class="left-column">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post();?>
					<article class="post">				
						
						<nav class="site-nav">
							<ul>
								<?php 
									$args = array(
										'child_of' => get_top_ancestor_id(),
										'title_li' => ''

									);

								 ?>

								<?php wp_list_pages( $args ); ?>
							</ul>
						</nav>						

						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>
