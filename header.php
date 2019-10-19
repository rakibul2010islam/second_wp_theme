<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<style type="text/css">
		.logo {
		   background: #FFF url(<?php echo $variable_holding_img_url; ?>);
		}
	</style>
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	
	<div class="container">

		<header>

			<div class="site-info">
				<div class="header-info">
					<div><a href="<?php echo home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a></div>
					<div><h4><?php bloginfo('description'); ?></h4></div>
				</div>
				
				<div class="hd-search">
					<?php get_search_form(); ?>
				</div>
			</div>

			<nav class="site-nav">
				<?php 
					$args = array(
						'theme_location' => 'primary'
					);
				 ?>
				<?php wp_nav_menu( $args ); ?>				
			</nav>		
		</header>
	
