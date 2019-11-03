		<div class="footer-background">
			<div class="footer-content">

				<nav class="site-nav">
					<?php 
						$args = array(
							'theme_location' => 'footer'
						);
					?>
					<?php wp_nav_menu( $args ); ?>
				</nav>

				<div class="copyright"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></div>
			</div>
		</div>

	</div>
	
	<!-- Required to display the Wordpress bar on top -->
	
	<?php wp_footer(); ?>
</body>
</html>