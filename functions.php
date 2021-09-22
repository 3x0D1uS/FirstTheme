<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'reboot', get_template_directory_uri().'/css/bootstrap-reboot.css');
	wp_enqueue_style( 'slic-css', get_template_directory_uri().'/css/slick.css');
	wp_enqueue_style( 'firsttheme', get_template_directory_uri().'/css/main.css');
	wp_enqueue_style( 'kaushan', 'https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
	wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}
add_action( 'after_setup_theme', 'firsttheme_setup' );
function firsttheme_setup(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    register_nav_menus(
        array(
            'menu-1' => 'Primary',
            'footer' => 'Footer Menu',
        )
    );
}
add_action( 'after_setup_theme', 'gutenberg_setup_theme' );
function gutenberg_setup_theme(){
	add_theme_support( 'editor-styles' );
	add_editor_style('css/main.css');                   
}
add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('games', array(
		'labels'             => array(
			'name'               => 'Games', // Основное название типа записи
			'singular_name'      => 'Games', // отдельное название записи типа Book
			'add_new'            => 'Add new game',
			'add_new_item'       => 'Add new game',
			'edit_item'          => 'Edit game',
			'new_item'           => 'New game',
			'view_item'          => 'View game',
			'search_items'       => 'Search game',
			'not_found'          => 'Game not found',
			'not_found_in_trash' => 'Game not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Games'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => '6',
        'menu_icon'          => 'dashicons-games',   
		'supports'           => array('title','editor','thumbnail','comments')
	) );
}
?>