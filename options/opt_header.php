<?php
// Header Section
Redux::set_section( 'hovard_opt', array(
    'title'            => esc_html__( 'Header', 'hovard' ),
    'id'               => 'header_sec',
    'customizer_width' => '400px',
    'icon'             => 'dashicons dashicons-arrow-up-alt2',
));

// Header Layout
Redux::set_section( 'hovard_opt', array(
    'title'            => esc_html__( 'Layout & Settings', 'hovard' ),
    'id'               => 'header_layout',
    'customizer_width' => '400px',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Header Width', 'hovard' ),
            'subtitle'  => esc_html__( 'Set the default Header width here. It will apply on the theme\'s Header globally.', 'hovard' ),
            'id'        => 'header_width',
            'type'      => 'select',
            'options'   => array(
                'boxed' => esc_html__('Boxed', 'hovard'),
                'full-width' => esc_html__('Full Width', 'hovard'),
            ),
            'default' => 'boxed'
        ),

        array(
            'title'     => esc_html__( 'Sticky Navbar', 'hovard' ),
            'id'        => 'is_sticky_header',
            'type'      => 'switch',
            'default'   => true
        ),

        array(
            'title'     => esc_html__( 'Sticky Appearance', 'hovard' ),
            'subtitle'  => esc_html__( 'Set the sticky appearance based on scrolling states.', 'hovard' ),
            'id'        => 'sticky_appearance',
            'type'      => 'select',
            'options'   => array(
                'stick_all' => esc_html__('Stick all Time', 'hovard'),
                'stick_up' => esc_html__('Stick on Up Scrolling', 'hovard'),
            ),
            'default' => 'stick_up',
            'required'  => array( 'is_sticky_header', '=', '1' )
        ),

        array(
            'title'     => esc_html__( 'Header Layout', 'hovard' ),
            'id'        => 'header_layout',
            'type'      => 'image_select',
            'options'   => array(
                'default' => array(
                    'alt' => esc_html__( 'Default', 'hovard' ),
                    'img' => HOVARD_DIR_IMG.'/headers/default.jpg'
                ),
                'search' => array(
                    'alt' => esc_html__( 'Search Form', 'hovard' ),
                    'img' => HOVARD_DIR_IMG.'/headers/search-form.jpg'
                ),
            ),
            'default' => 'default',
        ),

        array(
            'title'     => esc_html__( 'Navbar Position', 'hovard' ),
            'subtitle'  => esc_html__( 'The Navbar Position will apply globally except the blog single page.', 'hovard' ),
            'desc'      => esc_html__( 'The Static position recommended with disabling the Search Banner', 'hovard' ),
            'id'        => 'navbar_position',
            'type'      => 'button_set',
            'options'   => array(
                'absolute' => esc_html__( 'Absolute', 'hovard' ),
                'static' => esc_html__( 'Static', 'hovard' ),
            ),
            'default' => 'absolute'
        ),

        array(
            'title'     => esc_html__( 'Search Form', 'hovard' ),
            'id'        => 'is_search_form',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'hovard' ),
            'off'       => esc_html__( 'Hide', 'hovard' ),
            'default'   => true
        ),
    )
));


// Logo
Redux::set_section( 'hovard_opt', array(
    'title'            => esc_html__( 'Logo', 'hovard' ),
    'id'               => 'logo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Black Logo', 'hovard' ),
            'subtitle'  => esc_html__( 'Upload here the black version of your logo.', 'hovard' ),
            'id'        => 'main_logo',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => HOVARD_DIR_IMG.'/logo.png'
            )
        ),

        array(
            'title'     => esc_html__( 'White Logo', 'hovard' ),
            'subtitle'  => esc_html__( 'Upload here the white version of your logo.', 'hovard' ),
            'id'        => 'sticky_logo',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => HOVARD_DIR_IMG.'/logo-w.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Black Retina Logo', 'hovard' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo size.', 'hovard' ),
            'id'        => 'retina_logo',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => HOVARD_DIR_IMG.'/logo-2x.png'
            )
        ),

        array(
            'title'     => esc_html__( 'White Retina Logo', 'hovard' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo size.', 'hovard' ),
            'id'        => 'retina_sticky_logo',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => HOVARD_DIR_IMG.'/logo-w2x.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Logo dimensions', 'hovard' ),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', 'hovard' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => '.navbar-brand>img'
        ),

        array(
            'title'     => esc_html__( 'Padding', 'hovard' ),
            'subtitle'  => esc_html__( 'Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'hovard' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( '.header_area .navbar-brand' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );

/**
 * Action button
 */
Redux::set_section( 'hovard_opt', array(
    'title'            => esc_html__( 'Action Button', 'hovard' ),
    'id'               => 'menu_action_btn_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Button Visibility', 'hovard' ),
            'id'        => 'is_menu_btn',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'hovard' ),
            'off'       => esc_html__( 'Hide', 'hovard' ),
        ),

        array(
            'title'     => esc_html__( 'Button label', 'hovard' ),
            'subtitle'  => esc_html__( 'Leave the button label field empty to hide the menu action button.', 'hovard' ),
            'id'        => 'menu_btn_label',
            'type'      => 'text',
            'default'   => esc_html__( 'Get Started', 'hovard' ),
            'required'  => array( 'is_menu_btn', '=', '1' )
        ),

        array(
            'title'     => esc_html__( 'Button URL', 'hovard' ),
            'id'        => 'menu_btn_url',
            'type'      => 'text',
            'default'   => '#',
            'required'  => array( 'is_menu_btn', '=', '1' )
        ),

        array(
            'title'     => esc_html__( 'Button URL Target', 'hovard' ),
            'id'        => 'menu_btn_target',
            'type'      => 'select',
            'options'   => array(
            	'_blank' => esc_html__( 'Blank (Open in new tab)', 'hovard' ),
            	'_self' => esc_html__( 'Self (Open in the same tab)', 'hovard' ),
            ),
            'default'   => '_self',
            'required'  => array( 'is_menu_btn', '=', '1' )
        ),

	    array(
		    'title'     => esc_html__( 'Button padding', 'hovard' ),
		    'subtitle'  => esc_html__( 'Padding around the menu action button.', 'hovard' ),
		    'id'        => 'menu_btn_padding',
		    'type'      => 'spacing',
		    'output'    => array( '.nav_btn' ),
		    'mode'      => 'padding',
		    'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
		    'units_extended' => 'true',
		    'required'  => array( 'is_menu_btn', '=', '1' )
	    ),

        /**
         * Button colors
         * Style will apply on the Non sticky mode and sticky mode of the header
         */
        array(
            'title'     => esc_html__( 'Button Colors', 'hovard' ),
            'subtitle'  => esc_html__( 'Button style attributes on normal (non sticky) mode.', 'hovard' ),
            'id'        => 'button_colors',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array( 'is_menu_btn', '=', '1' ),
        ),

        array(
            'title'     => esc_html__( 'Font color', 'hovard' ),
            'id'        => 'menu_btn_font_color',
            'type'      => 'color',
            'output'    => array( '.right-nav .nav_btn' ),
        ),
        
        array(
            'title'     => esc_html__( 'Border Color', 'hovard' ),
            'id'        => 'menu_btn_border_color',
            'type'      => 'color',
            'mode'      => 'border-color',
            'output'    => array( '.right-nav .nav_btn' ),
        ),
        
        array(
            'title'     => esc_html__( 'Background Color', 'hovard' ),
            'id'        => 'menu_btn_bg_color',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.right-nav .nav_btn' ),
        ),

        // Button color on hover stats
        array(
            'title'     => esc_html__( 'Hover Font Color', 'hovard' ),
            'subtitle'  => esc_html__( 'Font color on hover stats.', 'hovard' ),
            'id'        => 'menu_btn_hover_font_color',
            'type'      => 'color',
            'output'    => array( '.right-nav .nav_btn:hover' ),
        ),
        array(
            'title'     => esc_html__( 'Hover Border Color', 'hovard' ),
            'subtitle'  => esc_html__( 'Border color on hover stats.', 'hovard' ),
            'id'        => 'menu_btn_hover_border_color',
            'type'      => 'color',
            'mode'      => 'border-color',
            'output'    => array( '.right-nav .nav_btn:hover' ),
        ),
        array(
            'title'     => esc_html__( 'Hover background color', 'hovard' ),
            'subtitle'  => esc_html__( 'Background color on hover stats.', 'hovard' ),
            'id'        => 'menu_btn_hover_bg_color',
            'type'      => 'color',
            'output'    => array(
                'background' => '.right-nav .nav_btn:hover',
                'border-color' => '.navbar_fixed .navbar .nav_btn:hover'
            ),
        ),

        array(
            'id'     => 'button_colors-end',
            'type'   => 'section',
            'indent' => false,
        ),

        /*
         * Button colors on sticky mode
         */
        array(
            'title'     => esc_html__( 'Sticky Button Style', 'hovard' ),
            'subtitle'  => esc_html__( 'Button colors on sticky mode.', 'hovard' ),
            'id'        => 'button_colors_sticky',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array( 'is_menu_btn', '=', '1' ),
        ),
        array(
            'title'     => esc_html__( 'Border color', 'hovard' ),
            'subtitle'  => esc_html__( 'Border color on header sticky mode.', 'hovard' ),
            'id'        => 'menu_btn_border_color_sticky',
            'type'      => 'color',
            'mode'      => 'border-color',
            'output'    => array( '.navbar.navbar_fixed .right-nav .nav_btn.tp_btn' ),
        ),
        array(
            'title'     => esc_html__( 'Font color', 'hovard' ),
            'subtitle'  => esc_html__( 'Font color on header sticky mode.', 'hovard' ),
            'id'        => 'menu_btn_font_color_sticky',
            'type'      => 'color',
            'output'    => array( '.navbar_fixed.navbar .right-nav .nav_btn.tp_btn' ),
        ),
        array(
            'title'     => esc_html__( 'Background color', 'hovard' ),
            'subtitle'  => esc_html__( 'Background color on header sticky mode.', 'hovard' ),
            'id'        => 'menu_btn_bg_color_sticky',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.navbar_fixed.navbar .right-nav .nav_btn.tp_btn' ),
        ),

        // Button color on hover stats
        array(
            'title'     => esc_html__( 'Hover font color', 'hovard' ),
            'subtitle'  => esc_html__( 'Font hover color on Header sticky mode.', 'hovard' ),
            'id'        => 'menu_btn_hover_font_color_sticky',
            'type'      => 'color',
            'output'    => array( '.navbar.navbar_fixed .right-nav .nav_btn.tp_btn:hover' ),
        ),
        array(
            'title'     => esc_html__( 'Hover background color', 'hovard' ),
            'subtitle'  => esc_html__( 'Background hover color on Header sticky mode..', 'hovard' ),
            'id'        => 'menu_btn_hover_bg_color_sticky',
            'type'      => 'color',
            'output'    => array(
                'background' => '.navbar.navbar_fixed .right-nav .nav_btn.tp_btn:hover',
            ),
        ),
        array(
            'title'     => esc_html__( 'Hover border color', 'hovard' ),
            'subtitle'  => esc_html__( 'Background hover color on Header sticky mode..', 'hovard' ),
            'id'        => 'menu_btn_hover_border_color_sticky',
            'type'      => 'color',
            'output'    => array(
                'border-color' => '.navbar.navbar_fixed .right-nav .nav_btn.tp_btn:hover',
            ),
        ),

        array(
            'id'     => 'button_colors-sticky-end',
            'type'   => 'section',
            'indent' => false,
        ),
    )
));

/**
 * Title-bar banner
 */
Redux::set_section( 'hovard_opt', array(
    'title'            => esc_html__( 'Title-bar', 'hovard' ),
    'id'               => 'title_bar_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Ornaments', 'hovard' ),
            'id'        => 'is_banner_ornaments',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'hovard' ),
            'off'       => esc_html__( 'Hide', 'hovard' ),
            'default'   => '1',
        ),

        array(
            'title'     => esc_html__( 'Left Ornament', 'hovard' ),
            'subtitle'  => esc_html__( 'Upload here the default left ornament image', 'hovard' ),
            'id'        => 'banner_left_ornament',
            'type'      => 'media',
            'compiler'  => true,
            'required'  => array( 'is_banner_ornaments', '=', '1' ),
            'default'   => array(
                'url' => HOVARD_DIR_IMG.'/leaf_left.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Right Ornament', 'hovard' ),
            'subtitle'  => esc_html__( 'Upload here the default right ornament image', 'hovard' ),
            'id'        => 'banner_right_ornament',
            'type'      => 'media',
            'compiler'  => true,
            'required'  => array( 'is_banner_ornaments', '=', '1' ),
            'default'   => array(
                'url' => HOVARD_DIR_IMG.'/leaf_right.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Title-bar padding', 'hovard' ),
            'subtitle'  => esc_html__( 'Padding around the Title-bar.', 'hovard' ),
            'id'        => 'title_bar_padding',
            'type'      => 'spacing',
            'output'    => array( '.breadcrumb_area_three' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

        array(
            'id'       => 'titlebar_align',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Alignment', 'hovard' ),
            'options' => array(
                'left' => esc_html__( 'Left', 'hovard' ),
                'center' => esc_html__( 'Center', 'hovard' ),
                'right' => esc_html__( 'Right', 'hovard' )
            ),
            'default' => 'center'
        ),
    )
));

/**
 * Search Banner
 */
Redux::set_section('hovard_opt', array(
	'title' => esc_html__( 'Search Banner', 'hovard' ),
	'id' => 'search_banner_header_opt',
	'subsection' => true,
	'icon' => '',
	'fields' => array(
		array(
			'id'        => 'search_banner_note',
			'type'      => 'info',
			'style'     => 'success',
			'title'     => esc_html__( 'Important Note:', 'hovard' ),
			'icon'      => 'dashicons dashicons-info',
			'desc'      => esc_html__( 'Search Banner located on the Doc details page and Blog page.', 'hovard' )
		),

        array(
            'title'     => esc_html__( 'Search Banner', 'hovard' ),
            'id'        => 'is_search_banner',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'hovard' ),
            'off'       => esc_html__( 'Hide', 'hovard' ),
            'default'   => true
        ),

        array(
            'title'     => esc_html__( 'Search Keywords', 'hovard' ),
            'id'        => 'is_keywords',
            'type'      => 'switch',
            'on'        => esc_html__( 'Yes', 'hovard' ),
            'off'       => esc_html__( 'No', 'hovard' ),
            'required'  => array('is_search_banner', '=', '1'),
        ),

        array(
            'title'     => esc_html__( 'Search Banner Design', 'hovard' ),
            'id'        => 'select_search_banner',
            'type'      => 'image_select',
            'options'   => array(
                'light' => array(
                    'alt' => esc_html__( 'Simple Light', 'hovard' ),
                    'img' => HOVARD_DIR_IMG.'/search-banners/simple-light.jpg'
                ),
                'aesthetic' => array(
                    'alt' => esc_html__( 'Aesthetic', 'hovard' ),
                    'img' => HOVARD_DIR_IMG.'/search-banners/gradient.jpg'
                ),
            ),
            'default' => 'light',
            'required'  => array('is_search_banner', '=', '1'),
        ),

        array(
            'title'         => esc_html__( 'Focus Search by /', 'hovard' ),
            'subtitle'      => esc_html__( 'If you enable this setting, your website visitors can focus (enter the mouse cursor) on the search form by pressing the "/" key of the keyboard.', 'hovard' ),
            'id'            => 'is_focus_search',
            'type'          => 'switch',
            'on'            => esc_html__( 'Yes', 'hovard' ),
            'off'           => esc_html__( 'No', 'hovard' ),
            'default'       => 1,
            'required'  => array('is_search_banner', '=', '1'),
        ),

        array(
            'title'     => esc_html__( 'Search Keywords', 'hovard' ),
            'id'        => 'is_keywords',
            'type'      => 'switch',
            'on'        => esc_html__( 'Yes', 'hovard' ),
            'off'       => esc_html__( 'No', 'hovard' ),
            'required'  => array('is_search_banner', '=', '1'),
        ),

        array(
            'title'     => esc_html__( 'Keywords Label', 'hovard' ),
            'id'        => 'keywords_label',
            'type'      => 'text',
            'default'   => esc_html__( 'Popular Searches', 'hovard'),
            'required'  => array('is_keywords', '=', '1'),
        ),

        array(
            'title'     => esc_html__( 'Keywords', 'hovard' ),
            'id'        => 'doc_keywords',
            'type'      => 'multi_text',
            'add_text'  =>  esc_html__( 'Add Keyword', 'hovard'),
            'required'  => array('is_keywords', '=', '1'),
        ),

		array(
			'id'            => 'banner_search_placeholder',
			'type'          => 'text',
			'title'         => esc_html__( 'Search Placeholder', 'hovard' ),
			'default'       => esc_html__('Search ("/" to focus)', 'hovard'),
            'required'  => array('is_search_banner', '=', '1'),
		),

		array(
			'title'     => esc_html__( 'Padding', 'hovard' ),
			'subtitle'  => esc_html__( 'Padding around the Search Banner. Input the padding as clockwise (Top Right Bottom Left)', 'hovard' ),
			'id'        => 'sbnr_padding',
			'type'      => 'spacing',
			'output'    => array( '.sbnr-global' ),
			'mode'      => 'padding',
			'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
			'units_extended' => 'true',
            'required'  => array('is_search_banner', '=', '1'),
		),

        array(
            'title'     => esc_html__( 'Background', 'hovard' ),
            'id'        => 'sbnr_light_bg',
            'type'      => 'background',
            'default'   => array(
                'background-image' => HOVARD_DIR_IMG.'/banner-bg.png'
            ),
            'output' => '.doc_banner_area.search-banner-light',
            'required' => array('select_search_banner', '=', 'light'),
        ),

        array(
            'title'     => esc_html__( 'Background Image', 'hovard' ),
            'id'        => 'sbnr_bg_image2',
            'type'      => 'media',
            'default'   => array(
                'url' => HOVARD_DIR_IMG.'/search-banners/banner-bg.jpeg'
            ),
            'required' => array('select_search_banner', '=', 'aesthetic')
        ),

		array(
			'title'     => esc_html__( 'Left Leaf Image', 'hovard' ),
			'id'        => 'sbanner_left_image',
			'type'      => 'media',
			'default'   => array(
				'url' => HOVARD_DIR_IMG.'/v.svg'
			),
            'required' => array('select_search_banner', '=', 'aesthetic')
		),

		array(
			'title'     => esc_html__( 'Right Leaf Image', 'hovard' ),
			'id'        => 'sbanner_right_image',
			'type'      => 'media',
			'default'   => array(
				'url' => HOVARD_DIR_IMG.'/home_one/b_leaf.svg'
			),
            'required' => array('select_search_banner', '=', 'aesthetic')
		),

		array(
			'title'     => esc_html__( 'Man Image', 'hovard' ),
			'id'        => 'sbanner_man_image',
			'type'      => 'media',
			'default'   => array(
				'url' => HOVARD_DIR_IMG.'/home_one/b_man_two.png'
			),
            'required' => array('select_search_banner', '=', 'aesthetic')
		),

		array(
			'title'     => esc_html__( 'Flower Image', 'hovard' ),
			'id'        => 'sbanner_flower_image',
			'type'      => 'media',
			'default'   => array(
				'url' => HOVARD_DIR_IMG.'/home_one/flower.png'
			),
            'required' => array('select_search_banner', '=', 'aesthetic')
		),

		array(
			'title'     => esc_html__( 'Background Shape Image', 'hovard' ),
			'subtitle'  => esc_html__( 'We used here a transparent image that are containing stars. So you can use here similar transparent image or any other image.', 'hovard' ),
			'id'        => 'sbanner_bg_image',
			'type'      => 'media',
			'default'   => array(
				'url' => HOVARD_DIR_IMG.'/home_one/banner_bg.png'
			),
            'required' => array('select_search_banner', '=', 'aesthetic')
		),

		array(
			'title'     => esc_html__( 'Wave Shape 01', 'hovard' ),
			'subtitle'  => esc_html__( 'We used here a transparent wave shape image. You can use here similar transparent shape image or any other image.', 'hovard' ),
			'id'        => 'sbanner_shape1',
			'type'      => 'media',
			'default'   => array(
				'url' => HOVARD_DIR_IMG.'/shap_01.png'
			),
            'required' => array('select_search_banner', '=', 'aesthetic')
		),

		array(
			'title'     => esc_html__( 'Wave Shape 02', 'hovard' ),
			'subtitle'  => esc_html__( 'We used here a transparent wave shape image. You can use here similar transparent shape image or any other image.', 'hovard' ),
			'id'        => 'sbanner_shape2',
			'type'      => 'media',
			'default'   => array(
				'url' => HOVARD_DIR_IMG.'/shap_02.png'
			),
            'required' => array('select_search_banner', '=', 'aesthetic')
		),
	)
));