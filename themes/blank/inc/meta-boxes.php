<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit: 
 * @link http://www.deluxeblogtips.com/2010/04/how-to-create-meta-box-wordpress-post.html
 */

/********************* META BOX DEFINITIONS ***********************/

$prefix = 'lucseguin_';

global $meta_boxes, $pagenow;

$meta_boxes = array();

/* ---------------------------------------------------------------------- */
/*	Contenu dans la citation haut de page
/* ---------------------------------------------------------------------- */

$meta_boxes[] = array(
	'id'       => 'citation_wysiwyg',
	'title'    => __('Citation', 'lucseguin'),
	'pages'    => array('page'),
	'context'  => 'normal',
	'priority' => 'high',
	'fields'   => array(
		array(
			'id'   => $prefix . 'citation_content',
			'type' => 'wysiwyg',
			'std'  => '',
			'desc' => ''
		)
	)
);

/* ---------------------------------------------------------------------- */
/*	Contenu dans la bande bleu
/* ---------------------------------------------------------------------- */

$meta_boxes[] = array(
	'id'       => 'bandebleu_wysiwyg',
	'title'    => __('Bande bleu', 'lucseguin'),
	'pages'    => array('page'),
	'context'  => 'normal',
	'priority' => 'high',
	'fields'   => array(
		array(
			'id'   => $prefix . 'bandbleu_content',
			'type' => 'wysiwyg',
			'std'  => '',
			'desc' => ''
		)
	)
);

/* ---------------------------------------------------------------------- */
/*	Contenu dans la boite orange À savoir
/* ---------------------------------------------------------------------- */

$meta_boxes[] = array(
	'id'       => 'asavoir_wysiwyg',
	'title'    => __('À savoir', 'lucseguin'),
	'pages'    => array('page'),
	'context'  => 'normal',
	'priority' => 'high',
	'fields'   => array(
		array(
			'id'   => $prefix . 'asavoir_content',
			'type' => 'wysiwyg',
			'std'  => '',
			'desc' => ''
		)
	)
);

/* ---------------------------------------------------------------------- */
/*	Contenu de la suite sous la bande bleu si nécessaire
/* ---------------------------------------------------------------------- */

$meta_boxes[] = array(
	'id'       => 'suite_wysiwyg',
	'title'    => __('Suite', 'lucseguin'),
	'pages'    => array('page'),
	'context'  => 'normal',
	'priority' => 'high',
	'fields'   => array(
		array(
			'id'   => $prefix . 'suite_content',
			'type' => 'wysiwyg',
			'std'  => '',
			'desc' => ''
		)
	)
);


/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function lucseguin_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded
//  before (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'lucseguin_register_meta_boxes' );