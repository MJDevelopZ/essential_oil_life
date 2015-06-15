<?php 

/*Enqueue Parent Theme Style Sheet*/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

//Custom post types function
function create_custom_post_types(){
//Create an about page custom post type
	register_post_type( 'about',
		array(
			'labels' => array(
			'name' => __( 'About' ),
			'singular_name' => __('About')
				),//closes array from line 14
			'public' => true,
			'has_archive' => true,
			'rewrite' => array( 'slug' => 'about' ),
		)//closes array from line 13
	);//closes register_post_type

//Create a custom post type for Contact Form
	register_post_type( 'contact',
		array(
			'labels' => array(
			'name' => __('Contact Us'),
			'singular_name' => __('Contact Us')
			), //closes array from line 27
			'public' => true,
			'has_archive' => true,
			'rewrite' => array( 'slug' => 'contact-us' ),
		)//closes array from line 26
	);//closes register_post_type

}

//Hook this custom post type fun++ction into the theme
add_action( 'init', 'create_custom_post_types');

