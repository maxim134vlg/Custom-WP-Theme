<?php

// Theme support functions

function adv_theme_support()
{	
	// Featured Image
	add_theme_support( 'post-thumbnails' );

	//Header video
	add_theme_support( 'custom-header', array(
	'video' => true,
) );

	// Navigation
	register_nav_menus( array (
		'primary' => __('Primary menu'),
		'footer'  => __('Footer menu')
	));

	// Post Format Support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action( 'after_setup_theme', 'adv_theme_support' );

// Widget location
function init_widget($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id'   => 'sidebar',
		'before_widget' => '<div class="block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Showcase',
		'id'   => 'showcase',
		'before_widget' => '<div class="showcase">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Box 1',
		'id'   => 'box1',
		'before_widget' => '<div class="box box1">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Box 2',
		'id'   => 'box2',
		'before_widget' => '<div class="box box2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Box 3',
		'id'   => 'box3',
		'before_widget' => '<div class="box box3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
}

add_action('widgets_init', 'init_widget');

// Excerpt length

function adv_set_excerpt_length(){
	return 20;
}

add_filter( 'excerpt_length', 'adv_set_excerpt_length' );

// Child pages function

function get_top_parent(){
	global $post;
	if($post->$parent_post){
		$ancestors = get_post_ancestors( $post->ID );
		return $ancestors[0];
	}
	return $post->ID;
}