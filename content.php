<article class="post">

	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('small-thumbnail'); ?> </a>
	</div>

	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

	<p class="post-info">
		<?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | posted in
		
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

	<p>

		<?php if(is_search() OR is_archive()): ?>
			<?php echo get_the_excerpt(); ?>
		<?php else: ?>
			<?php the_content(); ?>
		<?php endif; ?>
		
		<a href="<?php the_permalink(); ?>">Read More &raquo</a>
	</p>
	
</article>