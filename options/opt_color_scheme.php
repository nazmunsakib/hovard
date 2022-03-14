<?php

// Color option
Redux::set_section( 'hovard_opt', array(
	'title'  => esc_html__( 'Color Scheme', 'hovard' ),
	'id'     => 'color',
	'icon'   => 'dashicons dashicons-admin-appearance',
	'fields' => array(
		array(
			'id'               => 'accent_solid_color_opt',
			'type'             => 'color',
			'title'            => esc_html__( 'Accent Color', 'hovard' ),
			'default'          => '#4c4cf1',
			'output_variables' => true,
		),
		array(
			'id'               => 'secondary_color_opt',
			'type'             => 'color',
			'title'            => esc_html__( 'Secondary Color', 'hovard' ),
			'subtitle'         => esc_html__( 'Normally used in Titles, Gradient Colors', 'hovard' ),
			'default'          => '#1d2746',
			'output_variables' => true,
		),
		array(
			'id'               => 'paragraph_color_opt',
			'type'             => 'color',
			'title'            => esc_html__( 'Paragraph Color', 'hovard' ),
			'subtitle'         => esc_html__( 'Normally used in meta content, paragraph, doc lists, subtitles, icon', 'hovard' ),
			'default'          => '#425466',
			'output_variables' => true,
		),
		array(
			'id'               => 'gradient_bg_color',
			'type'             => 'color_gradient',
			'title'            => esc_html__( 'Background Gradient Color', 'hovard' ),
			'subtitle'         => esc_html__( 'This color applied to Post Single, Forum pages, Search Results page', 'hovard' ),
			'validate'         => 'color',
			'default'          => array(
				'from' => '#FFFBF2',
				'to'   => '#EDFFFD',
			),
			'output_variables' => true,
		),
		array(
			'id'       => 'is_box_shadow',
			'type'     => 'switch',
			'title'    => esc_html__( 'Container Box Shadow', 'hovard' ),
			'subtitle' => esc_html__( 'This color applied to Post Single, Forum pages, Search Results page', 'hovard' ),
			'on'       => esc_html__( 'Show', 'hovard' ),
			'off'      => esc_html__( 'Hide', 'hovard' ),
			'default'  => true,
		),
	)
) );