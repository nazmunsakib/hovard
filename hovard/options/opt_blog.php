<?php
Redux::set_section('hovard_opt', array(
	'title'     => esc_html__( 'Blog Pages', 'hovard' ),
	'id'        => 'blog_page',
	'icon'      => 'dashicons dashicons-admin-post',
));

/**
 * Post single
 */
Redux::set_section('hovard_opt', array(
	'title'     => esc_html__( 'Blog Heading', 'hovard' ),
	'id'        => 'blog_single_opt',
	'icon'      => '',
	'subsection' => true,
	'fields'    => array(
		array(
			'title'     => esc_html__( 'Title', 'hovard' ),
			'id'        => 'blog_title',
			'type'      => 'text',
		),
		array(
			'title'     => esc_html__( 'Sub Title', 'hovard' ),
			'id'        => 'blog_subtitle',
			'type'      => 'text',
		),
	)
));