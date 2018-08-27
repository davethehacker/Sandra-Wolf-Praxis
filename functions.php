<?php

add_theme_support( 'post-thumbnails' );

function register_my_menus() {
  register_nav_menus(
    array('menu' => __( 'Header Menu' ) )
  );
}
add_action ('init', 'register_my_menus');

add_theme_support( 'custom-header' );

// Register Custom Post Type
function custom_post_type() {
	$labels = array(
		'name'                => 'Kurse',
		'singular_name'       => 'Kurs',
		'menu_name'           => 'Kurse',
		'parent_item_colon'   => 'Parent Item:',
	);
	$args = array(
		'label'               => 'course',
		'description'         => 'Alle Gruppenkurse',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'        => false,
		'taxonomies' => array('category'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-calendar-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'course', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );

?>
<?php

remove_action('wp_head', 'wp_generator');
