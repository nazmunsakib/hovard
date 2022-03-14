<?php
/**
 * Doc Settings
 */
Redux::set_section( 'hovard_opt', array(
	'title'            => esc_html__( 'Doc Settings', 'hovard' ),
	'id'               => 'hovard_doc_sec',
	'customizer_width' => '400px',
	'icon'             => 'dashicons dashicons-media-document',
	'fields'           => array(
		array(
			'id'       => 'doc_slug',
			'type'     => 'text',
			'title'    => esc_html__( 'Slug', 'hovard' ),
			'subtitle' => esc_html__( 'You can change the doc post type slug from here. The default slug is docs. After changing the slug, go to Settings > Permalinks and click on the Save Changes button.', 'hovard' ),
		),
		array(
			'title'         => esc_html__( 'Section Excerpt', 'hovard' ),
			'subtitle'      => esc_html__( 'Define here the Doc section excerpt limit in word count to show. Use -1 to show the full excerpt.', 'hovard' ),
			'desc'          => esc_html__( 'Note: If the excerpt leaves empty, the excerpt will be automatically taken from the doc post content.', 'hovard' ),
			'id'            => 'doc_sec_excerpt_limit',
			'type'          => 'slider',
			'default'       => 8,
			"min"           => 1,
			"step"          => 1,
			"max"           => 500,
			'display_value' => 'text'
		),
	)
) );


/**
 * Right Sidebar
 */
Redux::set_section( 'hovard_opt', array(
	'title'      => esc_html__( 'Right Sidebar', 'hovard' ),
	'id'         => 'doc_right_sidebar_opt',
	'subsection' => true,
	'icon'       => '',
	'fields'     => array(
		array(
			'title'    => esc_html__( 'Select Dropdown', 'hovard' ),
			'subtitle' => __( 'You can display conditional contents using the [conditional_data] shortcode in documentation based on the dropdown value. See the shortcode usage tutorial <a href="https://tinyurl.com/yd46mfax" target="_blank">here</a>.', 'hovard' ),
			'id'       => 'is_os_dropdown',
			'type'     => 'switch',
			'on'       => esc_html__( 'Show', 'hovard' ),
			'off'      => esc_html__( 'Hide', 'hovard' ),
			'default'  => '1',
		),

		array(
			'title'         => esc_html__( 'Dropdown Options', 'hovard' ),
			'subtitle'      => esc_html__( 'Use the ionicons (https://ionicons.com) name in the icon field.', 'hovard' ),
			'id'            => 'os_options',
			'type'          => 'slides',
			'content_title' => esc_html__( 'Option', 'hovard' ),
			'show'          => array(
				'title'       => true,
				'description' => false,
				'url'         => true,
			),
			'placeholder'   => array(
				'title' => esc_html__( 'Title', 'hovard' ),
				'url'   => esc_html__( 'Icon', 'hovard' ),
			),
			'required'      => array( 'is_os_dropdown', '=', '1' )
		),

		array(
			'title'   => esc_html__( 'Font Size Switcher', 'hovard' ),
			'id'      => 'is_font_switcher',
			'type'    => 'switch',
			'on'      => esc_html__( 'Show', 'hovard' ),
			'off'     => esc_html__( 'Hide', 'hovard' ),
			'default' => '1',
		),

		array(
			'title'   => esc_html__( 'Print Icon', 'hovard' ),
			'id'      => 'is_print_icon',
			'type'    => 'switch',
			'on'      => esc_html__( 'Show', 'hovard' ),
			'off'     => esc_html__( 'Hide', 'hovard' ),
			'default' => '1',
		),
	)
) );


/**
 * Doc Footer
 */
Redux::set_section( 'hovard_opt', array(
	'title'      => esc_html__( 'Layout', 'hovard' ),
	'id'         => 'doc_layout_opt',
	'subsection' => true,
	'icon'       => '',
	'fields'     => array(
		array(
			'title'   => esc_html__( 'Doc Layout', 'hovard' ),
			'id'      => 'doc_layout',
			'type'    => 'image_select',
			'options' => array(
				'both_sidebar' => array(
					'alt' => esc_html__( 'Both Sidebar', 'hovard' ),
					'img' => HOVARD_DIR_IMG . '/layouts/both_sidebar.jpg'
				),
				'left_sidebar' => array(
					'alt' => esc_html__( 'Left Sidebar', 'hovard' ),
					'img' => HOVARD_DIR_IMG . '/layouts/sidebar_left.jpg'
				),
			),
			'default' => 'both_sidebar'
		),

		array(
			'title'   => esc_html__( 'Doc Footer', 'hovard' ),
			'id'      => 'doc_footer',
			'type'    => 'image_select',
			'options' => array(
				'simple' => array(
					'alt' => esc_html__( 'Simple Footer', 'hovard' ),
					'img' => HOVARD_DIR_IMG . '/footer/footer-simple.png'
				),
				'normal' => array(
					'alt' => esc_html__( 'Widgets Footer', 'hovard' ),
					'img' => HOVARD_DIR_IMG . '/footer/footer-normal.png'
				),
			),
			'default' => 'simple'
		)
	)
) );


/**
 * Feedback area
 */
Redux::set_section( 'hovard_opt', array(
	'title'      => esc_html__( 'Feedback Area', 'hovard' ),
	'id'         => 'doc_feedback_opt',
	'subsection' => true,
	'icon'       => '',
	'fields'     => array(
		array(
			'title'   => esc_html__( 'Feedback Area', 'hovard' ),
			'id'      => 'is_feedback_area',
			'type'    => 'switch',
			'on'      => esc_html__( 'Show', 'hovard' ),
			'off'     => esc_html__( 'Hide', 'hovard' ),
			'default' => '1',
		),

		array(
			'title'    => esc_html__( 'Still Stuck', 'hovard' ),
			'id'       => 'still_stuck_text',
			'type'     => 'text',
			'default'  => esc_html__( 'Still stuck?', 'hovard' ),
			'required' => array( 'is_feedback_area', '=', '1' )
		),

		array(
			'title'    => esc_html__( 'Help form link text', 'hovard' ),
			'id'       => 'help_form_link_text',
			'type'     => 'text',
			'default'  => esc_html__( 'How can we help?', 'hovard' ),
			'required' => array( 'is_feedback_area', '=', '1' )
		),

		array(
			'title'    => esc_html__( 'Feedback Label', 'hovard' ),
			'id'       => 'doc_feedback_label',
			'type'     => 'text',
			'default'  => esc_html__( 'Was this page helpful?', 'hovard' ),
			'required' => array( 'is_feedback_area', '=', '1' )
		),

		array(
			'title'    => esc_html__( 'Feedback Modal', 'hovard' ),
			'subtitle' => esc_html__( 'Customize the feedback modal form here.', 'hovard' ),
			'id'       => 'feedback_modal_form',
			'type'     => 'section',
			'indent'   => true,
			'required' => array( 'is_feedback_area', '=', '1' )
		),

		array(
			'title'    => esc_html__( 'Form Title', 'hovard' ),
			'id'       => 'feedback_form_title',
			'type'     => 'text',
			'default'  => esc_html__( 'How can we help?', 'hovard' ),
			'required' => array( 'is_feedback_area', '=', '1' )
		),

		array(
			'title'    => esc_html__( 'Form Subtitle', 'hovard' ),
			'id'       => 'feedback_form_subtitle',
			'type'     => 'textarea',
			'required' => array( 'is_feedback_area', '=', '1' )
		),

		array(
			'id'     => 'feedback_modal_form-end',
			'type'   => 'section',
			'indent' => false,
		),
	)
) );


/**
 * Related Docs
 */
Redux::set_section( 'hovard_opt', array(
	'title'      => esc_html__( 'Related & Recent Docs', 'hovard' ),
	'id'         => 'doc_related_recent_opt',
	'subsection' => true,
	'icon'       => '',
	'fields'     => array(
		array(
			'title'    => esc_html__( 'Related Docs', 'hovard' ),
			'subtitle' => esc_html__( 'Related docs match by the doc tags.', 'hovard' ),
			'id'       => 'is_related_docs',
			'type'     => 'switch',
			'on'       => esc_html__( 'Show', 'hovard' ),
			'off'      => esc_html__( 'Hide', 'hovard' ),
			'default'  => '1',
		),

		array(
			'title'    => esc_html__( 'Title', 'hovard' ),
			'id'       => 'related_docs_title',
			'type'     => 'text',
			'default'  => 'Related articles',
			'required' => array( 'is_related_docs', '=', '1' ),
		),

		array(
			'id'   => 'recent_related_divide',
			'type' => 'divide',
		),

		array(
			'title'   => esc_html__( 'Recently Viewed Docs', 'hovard' ),
			'id'      => 'is_recent_docs',
			'type'    => 'switch',
			'on'      => esc_html__( 'Show', 'hovard' ),
			'off'     => esc_html__( 'Hide', 'hovard' ),
			'default' => '1',
		),

		array(
			'title'    => esc_html__( 'Title', 'hovard' ),
			'id'       => 'recent_docs_title',
			'type'     => 'text',
			'default'  => 'Recently viewed articles',
			'required' => array( 'is_recent_docs', '=', '1' ),
		),

		array(
			'id'   => 'recent_related_divide2',
			'type' => 'divide',
		),

		array(
			'title'    => esc_html__( 'Show More Toggle', 'hovard' ),
			'subtitle' => esc_html__( 'Enable show more toggle for Related & Recent docs.', 'hovard' ),
			'id'       => 'is_more_toggle',
			'type'     => 'switch',
			'on'       => esc_html__( 'Show', 'hovard' ),
			'off'      => esc_html__( 'Hide', 'hovard' ),
			'default'  => '1',
		),

		array(
			'title'         => esc_html__( 'Show Posts', 'hovard' ),
			'id'            => 'more_toggle_ppp',
			'type'          => 'slider',
			'default'       => 4,
			"min"           => 1,
			"step"          => 1,
			"max"           => 20,
			'display_value' => 'text',
		),
	)
) );

/**
 * Single Doc
 */
Redux::set_section( 'hovard_opt', array(
	'title'      => esc_html__( 'Single Doc', 'hovard' ),
	'id'         => 'doc_single_opt',
	'icon'       => '',
	'subsection' => true,
	'fields'     => array(
		array(
			'title'   => esc_html__( 'Estimated Reading Time', 'hovard' ),
			'id'      => 'is_doc_read_time',
			'type'    => 'switch',
			'on'      => esc_html__( 'Show', 'hovard' ),
			'off'     => esc_html__( 'Hide', 'hovard' ),
			'default' => '1',
		),

		array(
			'title'   => esc_html__( 'Views', 'hovard' ),
			'id'      => 'is_doc_views',
			'type'    => 'switch',
			'on'      => esc_html__( 'Show', 'hovard' ),
			'off'     => esc_html__( 'Hide', 'hovard' ),
			'default' => '1',
		),
	)
) );

