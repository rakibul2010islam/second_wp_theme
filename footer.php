		<nav class="site-nav">
			<?php 
				$args = array(
					'theme_location' => 'footer'
				);
			?>
			<?php wp_nav_menu( $args ); ?>
		</nav>

		<?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?>

	</div>
	
	<!-- Required to display the Wordpress bar on top -->
	
	<?php wp_footer(); ?>
</body>
</html>