<?php



/* ---------------------------------------------------------------------- */
/*	Galeries
/* ---------------------------------------------------------------------- */

function napoleon_register_post_type_galeries() {

	$labels = array(
		'name'               => __( 'Galeries', 'napoleon' ),
		'singular_name'      => __( 'Galerie', 'napoleon' ),
		'add_new'            => __( 'Ajouter', 'napoleon' ),
		'add_new_item'       => __( 'Ajouter', 'napoleon' ),
		'edit_item'          => __( 'Éditer', 'napoleon' ),
		'new_item'           => __( 'Nouveau', 'napoleon' ),
		'view_item'          => __( 'Voir', 'napoleon' ),
		'search_items'       => __( 'Recherche', 'napoleon' ),
		'not_found'          => __( 'Aucun élément', 'napoleon' ),
		'not_found_in_trash' => __( 'Aucun élément', 'napoleon' ),
		'parent_item_colon'  => __( 'Parent:', 'napoleon' ),
		'menu_name'          => __( 'Les galeries', 'napoleon' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => true,
		'supports'            => array( 'title', 'thumbnail', 'editor', 'page-attributes'  ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => false,
		'exclude_from_search' => true,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array( 'slug' => 'les-galeries' ),
		'capability_type'     => 'page',
		'menu_position'       => null
		// 'menu_icon'           => TPL_URL . 'images/admin/icon-contacts.png'
	);

	register_post_type( 'les-galeries', apply_filters( 'napoleon_register_post_type_galeries', $args ) );

} 
add_action('init', 'napoleon_register_post_type_galeries');