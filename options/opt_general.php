<?php
Redux::set_section('hovard_opt', array(
	'title'     => esc_html__( 'General', 'hovard' ),
	'id'        => 'general_settings',
	'icon'      => 'dashicons dashicons-admin-generic',
));

Redux::set_section( 'hovard_opt', array(
	'title'            => esc_html__( 'Preloader', 'hovard' ),
	'id'               => 'preloader_opt',
	'icon'             => '',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'        => 'is_preloader',
			'type'      => 'switch',
			'title'     => esc_html__( 'Pre-loader', 'hovard' ),
			'on'        => esc_html__( 'Enable', 'hovard' ),
			'off'       => esc_html__( 'Disable', 'hovard' ),
			'default'   => true,
		),

		array(
			'title'     => esc_html__( 'Enable Pre-loader on', 'hovard' ),
			'id'        => 'preloader_pages',
			'type'      => 'select',
			'options'   => [
				'all' => esc_html__( 'All Pages', 'hovard' ),
				'specific_pages' => esc_html__( 'Specific Pages', 'hovard' ),
			],
			'default'   => 'all',
			'required' => array (
				array ( 'is_preloader', '=', '1' ),
			)
		),

		array(
			'title'     => esc_html__( 'Page IDs', 'hovard' ),
			'subtitle'  => esc_html__( "Input the multiple page IDs in comma separated format.", 'hovard' ),
			'desc'      => sprintf(esc_html__('%s How to find page ID %s', 'hovard'), '<a href="https://is.gd/xM75oQ" target="_blank">', '</a>' ),
			'id'        => 'preloader_page_ids',
			'type'      => 'text',
			'required' => array (
				array ( 'is_preloader', '=', '1' ),
				array ( 'preloader_pages', '=', 'specific_pages' ),
			)
		),

		/**
		 * Preloader Logo
		 */
		array(
			'required'      => array( 'is_preloader', '=', '1' ),
			'id'            => 'preloader_logo',
			'type'          => 'media',
			'title'         => esc_html__( 'Pre-loader Logo', 'hovard' ),
			'compiler'      => true,
			'default'       => array(
				'url' => HOVARD_DIR_IMG . '/spinner_logo.png'
			)
		),
		array(
			'required'      => array( 'is_preloader', '=', '1' ),
			'id'            => 'logo_title',
			'type'          => 'text',
			'title'         => esc_html__( 'Logo Title', 'hovard' ),
			'default'       => get_bloginfo( 'name' )
		),
		array(
			'required'      => array( 'is_preloader', '=', '1' ),
			'title'         => esc_html__( 'Logo Title Color', 'hovard' ),
			'id'            => 'preloader_logo_title_color',
			'type'          => 'color',
			'output'        => array( '#preloader .round_spinner h4' ),
		),

		/**
		 * Preloader Title
		 */
		array(
			'required'      => array( 'is_preloader', '=', '1' ),
			'id'            => 'preloader_title',
			'type'          => 'text',
			'title'         => esc_html__( 'Preloader Title', 'hovard' ),
			'default'       => 'Did You Know?'
		),
		array(
			'required'      => array( 'is_preloader', '=', '1' ),
			'title'         => esc_html__( 'Preloader Title Color', 'hovard' ),
			'id'            => 'preloader_title_color',
			'type'          => 'color',
			'output'        => array( '#preloader .head' ),
		),

		/**
		 * Preloader Quotes
		 */
		array(
			'required'      => array( 'is_preloader', '=', '1' ),
			'id'            => 'preloader_quotes',
			'type'          => 'multi_text',
			'title'         => esc_html__( 'Quotes', 'hovard' ),
			'subtitle'      => esc_html__( 'The quotes will display randomly under the title.', 'hovard' ),
			'default'       => 'Did You Know?'
		),
		array(
			'required'      => array( 'is_preloader', '=', '1' ),
			'title'         => esc_html__( 'Preloader Quotes Color', 'hovard' ),
			'id'            => 'preloader_quotes_color',
			'type'          => 'color',
			'output'        => array( '#preloader p' ),
		),
	)
));


/**
 * Back to Top settings
 */
Redux::set_section('hovard_opt', array(
	'title'     => esc_html__( 'Back to Top', 'hovard' ),
	'id'        => 'back_to_top_btn',
	'icon'      => '',
	'subsection' => true,
	'fields'    => array(
		array(
			'title'     => esc_html__( 'Back to Top Button', 'hovard' ),
			'subtitle'  => esc_html__( 'Show/hide back to top button globally settings', 'hovard' ),
			'id'        => 'is_back_to_top_btn_switcher',
			'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'hovard' ),
            'off'       => esc_html__( 'Hide', 'hovard' ),
            'default'   => '1',
		),

        /**
         * Button Normal Colors
         */
        array(
            'id' => 'normal_color_start',
            'type' => 'section',
            'title' => esc_html__( 'Normal Color', 'hovard' ),
            'indent' => true,
            'required' => array( 'is_back_to_top_btn_switcher', '=', 1 )
        ),
        array(
            'title'     => esc_html__( 'Icon Color', 'hovard' ),
            'id'        => 'back_to_top_btn_icon_color',
            'type'      => 'color',
            'output'    => array(
                'color' => '#back-to-top::after'
            ),
        ),
        array(
            'title'     => esc_html__( 'Background Color', 'hovard' ),
            'id'        => 'back_to_top_btn_bg_color',
            'type'      => 'color_rgba',
            'output'    => array(
                'background-color' => '#back-to-top'
            ),
        ),
        array(
            'id' => 'normal_color_end',
            'type' => 'section',
            'indent' => true
        ),

        /**
         * Button Hover Colors
         */
        array(
            'id' => 'hover_color_start',
            'type' => 'section',
            'title'     => esc_html__( 'Hover Color', 'hovard' ),
            'indent' => true,
            'required' => array( 'is_back_to_top_btn_switcher', '=', 1 )
        ),
        array(
            'title'     => esc_html__( 'Icon Color', 'hovard' ),
            'id'        => 'back_to_top_btn_icon_hover_color',
            'type'      => 'color',
            'output'    => array(
                'color' => '#back-to-top:hover::after'
            ),
        ),
        array(
            'title'     => esc_html__( 'Background Color', 'hovard' ),
            'id'        => 'back_to_top_btn_bg_hover_color',
            'type'      => 'color_rgba',
            'output'    => array(
                'background-color' => '#back-to-top:hover'
            ),
        ),
        array(
            'id' => 'hover_color_end',
            'type' => 'section',
            'indent' => true
        ),
	)
));


/**
 * Ajax Search settings
 */
Redux::set_section('hovard_opt', array(
	'title'     => esc_html__( 'Ajax Search', 'hovard' ),
	'id'        => 'ajax_search_opt',
	'icon'      => '',
	'subsection' => true,
	'fields'    => array(
        array(
            'title'     => esc_html__( 'Ajax Search Result Limit', 'hovard' ),
            'subtitle'  => esc_html__( 'This will limit the doc sections and articles in Ajax live search results. Input -1 for show all results.', 'hovard' ),
            'id'        => 'doc_result_limit',
            'type'      => 'text',
            'default'   => '-1',
        ),
        array(
            'id'        => 'is_ajax_search_tab',
            'type'      => 'switch',
            'title'     => esc_html__( 'Tab Filters', 'hovard' ),
            'subtitle'  => esc_html__( 'If you disable it, the docs search will show by default.', 'hovard' ),
            'on'        => esc_html__( 'Enable', 'hovard' ),
            'off'       => esc_html__( 'Disable', 'hovard' ),
            'default'   => true,
        ),
	)
));