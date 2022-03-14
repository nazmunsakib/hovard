<?php

// Footer settings
Redux::set_section('hovard_opt', array(
	'title'     => esc_html__( 'Footer', 'hovard' ),
	'id'        => 'hovard_footer',
	'icon'      => 'dashicons dashicons-arrow-down-alt2',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Footer Style', 'hovard' ),
            'id'        => 'footer_style',
            'type'      => 'select',
            'options'   => array(
                'normal' => esc_html__( 'Default', 'hovard' ),
                'simple' => esc_html__( 'Simple', 'hovard' ),
            ),
            'default' => 'normal'
        ),

        array(
            'id'            => 'is_footer_columns_preset',
            'type'          => 'switch',
            'title'         => esc_html__( 'Preset Columns', 'hovard' ),
            'subtitle'      => esc_html__( 'If you enable this switcher, the Footer Widget columns will set as preset (33.33% + 22.22% + 22.22% + 22.22%) on the demo of Hovard.', 'hovard' ),
            'on'            => esc_html__( 'Yes', 'hovard' ),
            'off'           => esc_html__( 'No', 'hovard' ),
            'default'       => true,
            'required'      => array( 'footer_style', '=', 'normal' )
        ),

        array(
            'title'     => esc_html__('Footer Column', 'hovard'),
            'id'        => 'footer_column',
            'type'      => 'select',
            'default'   => '3',
            'options'   => array(
                '6' => esc_html__('Two Column', 'hovard'),
                '4' => esc_html__('Three Column', 'hovard'),
                '3' => esc_html__('Four Column', 'hovard'),
            ),
            'required' => array(
                array(
                    'footer_style', '=', 'normal'
                ),
                array(
                    'is_footer_columns_preset', '=', ''
                ),
            )
        ),

        array(
            'title'     => esc_html__( 'Padding', 'hovard' ),
            'subtitle'  => esc_html__( 'Padding around the footer columns (Top Right Bottom Left)', 'hovard' ),
            'id'        => 'footer_column_padding',
            'type'      => 'spacing',
            'output'    => array( '.footer_area .f_widget' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
            'required' => array( 'footer_style', '=', 'normal' )
        ),

        array(
            'title'     => esc_html__( 'Ornament Illustration', 'hovard' ),
            'subtitle'  => esc_html__( 'This is for beautiful design purpose. You can replace the default illustration or delete it from here.', 'hovard' ),
            'id'        => 'fs_illustration',
            'type'      => 'media',
            'default'   => array(
                'url' => HOVARD_DIR_IMG.'/footer/leaf_footter.png'
            ),
            'required' => array( 'footer_style', '=', 'simple' )
        ),
    )
));


// Footer settings
Redux::set_section('hovard_opt', array(
	'title'     => esc_html__( 'Font colors', 'hovard' ),
	'id'        => 'hovard_footer_font_colors',
	'icon'      => '',
	'subsection'=> true,
	'fields'    => array(
        array(
            'title'     => esc_html__( 'Widget Title Color', 'hovard' ),
            'id'        => 'widget_title_color',
            'type'      => 'color',
            'output'    => array('.f_widget .f_title, .f_widget h2' )
        ),
        array(
            'title'     => esc_html__( 'Normal Font color', 'hovard' ),
            'id'        => 'footer_top_normal_font_color',
            'type'      => 'color_rgba',
            'output'    => array('.doc_service_list_widget ul li a' )
        ),
        array(
            'title'     => esc_html__( 'Hover Font color', 'hovard' ),
            'id'        => 'footer_top_hover_font_color',
            'type'      => 'color_rgba',
            'output'    => array('.footer_top .f_widget ul li a:hover, .footer_top .widget.widget_nav_menu ul li a:hover' )
        ),
	)
));

// Footer background
Redux::set_section('hovard_opt', array(
	'title'     => esc_html__( 'Background', 'hovard' ),
	'id'        => 'hovard_footer_background',
	'icon'      => '',
	'subsection'=> true,
	'fields'    => array(

        array(
            'title'     => esc_html__( 'Background Color', 'hovard' ),
            'id'        => 'footer_top_bg_color',
            'type'      => 'color',
            'output'    => array('.doc_footer_top' ),
            'mode'      => 'background'
        ),

        array(
            'title'     => esc_html__( 'Bottom Background Color', 'hovard' ),
            'subtitle'  => esc_html__( 'Footer bottom background color', 'hovard' ),
            'id'        => 'footer_btm_bg_color',
            'type'      => 'color',
            'output'    => array('.doc_footer_bottom' ),
            'mode'      => 'background'
        ),
	)
));

// Footer settings
Redux::set_section('hovard_opt', array(
    'title'     => esc_html__( 'Footer Bottom', 'hovard' ),
    'id'        => 'hovard_footer_btm',
    'icon'      => '',
    'subsection'=> true,
    'fields'    => array(
        array(
            'title'     => esc_html__( 'Copyright Text', 'hovard' ),
            'id'        => 'copyright_txt',
            'type'      => 'editor',
            'default'   => '© 2021 All Rights Reserved by Spider-Themes',
            'args'    => array (
                'wpautop'       => true,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'teeny'         => false,
                'quicktags'     => false,
            )
        ),
        array(
            'title'         => esc_html__( 'Links', 'hovard' ),
            'id'            => 'footer_btm_links',
            'type'          => 'slides',
            'content_title' => esc_html__( 'Links', 'hovard' ),
            'show' => array(
                'title' => true,
                'description' => false,
                'url' => true,
            ),
        ),
    )
));