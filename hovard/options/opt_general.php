<?php
Redux::set_section('hovard_opt', array(
	'title'     => esc_html__( 'General', 'hovard' ),
	'id'        => 'general_settings',
	'icon'      => 'dashicons dashicons-admin-generic',
));

Redux::set_section( 'hovard_opt', array(
	'title'            => esc_html__( 'Copyright', 'hovard' ),
	'id'               => 'hovard_general_opt',
	'icon'             => '',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'        => 'copyright_text',
			'type'      => 'text',
			'title'     => esc_html__( 'Copyright Text', 'hovard' ),
		),
	)
));





