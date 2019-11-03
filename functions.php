<?php 
	// Linking the stylesheet
	function theme_resources(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', 'theme_resources');

	// Customize excerpt word count length
	function custom_excerpt_length(){
		return 78;
	}

	add_filter('excerpt_length', 'custom_excerpt_length');


	// Theme Setup
	function core_setup(){
		// Navigation Menus
		register_nav_menus(array(
			'primary' => __( 'Primary Menu'),
			'footer' => __( 'Footer Menu'),
		));

		// Add featured image support
		add_theme_support('post-thumbnails');
		add_image_size('front-thumbnail', 300, 150, true);
		add_image_size('banner-image', 920, 210, array('left', 'top'));

		// Add Post Format Support
		add_theme_support('post-formats', array('aside', 'gallery', 'link'));
	}

	add_action('after_setup_theme', 'core_setup');

	// Add homepage centered background image
	function homepage_image($wp_customize){
		$wp_customize->add_section('homepage-image-section', array(
			'title' => 'Homepage Image And Featured Text'
		));

		$wp_customize->add_setting('homepage-image-setting');

		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'homepage-image-control', array(
			'label' => 'Image',
			'section' => 'homepage-image-section',
			'settings' => 'homepage-image-setting',
			'width' => '1280px',
			'height' => '720px'
		)));

		// Below image texts and links

		$wp_customize->add_setting('image-headline', array(
			'default' => 'Example Headline Text!'
		));

		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'image-headline-control', array(
			'label' => 'Headline',
			'section' => 'homepage-image-section',
			'settings' => 'image-headline'
		)));

		$wp_customize->add_setting('image-text-area', array(
			'default' => 'Example Paragraph Text!'
		));

		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'image-text-area-control', array(
			'label' => 'Text',
			'section' => 'homepage-image-section',
			'settings' => 'image-text-area',
			'type' => 'textarea'
		)));

		$wp_customize->add_setting('image-readmore-link');

		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'image-readmore-link-control', array(
			'label' => 'Link',
			'section' => 'homepage-image-section',
			'settings' => 'image-readmore-link',
			'type' => 'dropdown-pages'
		)));



	}

	add_action('customize_register', 'homepage_image');

	// Adding Widget on Blog page
	function init_widgets(){
		register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'sidebar1',
			'before_widget' => '<div class="widget-item">',
			'after_widget' => '</div>'
		));
	}

	add_action('widgets_init', 'init_widgets');


 ?>