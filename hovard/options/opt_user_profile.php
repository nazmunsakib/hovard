<?php

// User Profile Info
Redux::set_section( 'hovard_opt', array(
	'title'            => esc_html__( 'User Info', 'hovard' ),
	'id'               => 'user_profile_infos',
	'customizer_width' => '400px',
	'icon'             => 'dashicons dashicons-arrow-up-alt2',
	'fields'           => array(
		array(
			'title'    => esc_html__( 'User Profile Image', 'hovard' ),
			'subtitle' => esc_html__( 'Set the User Profile image here', 'hovard' ),
			'id'       => 'user_img',
			'type'     => 'media',
			'url'      => true,
		),
	)
) );
