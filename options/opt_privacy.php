<?php
Redux::set_section( 'hovard_opt', array(
    'title'            => esc_html__( 'Privacy', 'hovard' ),
    'id'               => 'privacy_opt',
    'icon'             => 'dashicons dashicons-businessperson',
    'fields'           => array(
        array(
            'id'            => 'is_privacy_bar',
            'type'          => 'switch',
            'title'         => esc_html__( 'Privacy Bar', 'hovard' ),
            'subtitle'      => esc_html__( 'Turn on to enable a privacy bar at the bottom of the page.', 'hovard' ),
            'on'            => esc_html__( 'On', 'hovard' ),
            'off'           => esc_html__( 'Off', 'hovard' ),
            'default'       => '',
        ),

        /**
         * Privacy Bar Styling
         */
	    array(
		    'required'      => array( 'is_privacy_bar', '=', '1' ),
		    'title'         => esc_html__( 'Privacy Bar Text', 'hovard' ),
		    'id'            => 'privacy_bar_txt',
		    'type'          => 'editor',
		    'default'       => esc_html__( 'By using this website, you automatically accept that we use cookies.', 'hovard' ),
		    'args'          => array (
			    'wpautop'       => true,
			    'media_buttons' => false,
			    'textarea_rows' => 10,
			    'teeny'         => false,
			    'quicktags'     => false,
		    )
	    ),
	    array(
		    'required'      => array( 'is_privacy_bar', '=', '1' ),
		    'title'         => esc_html__( 'Privacy Bar Button Text', 'hovard' ),
		    'id'            => 'privacy_bar_btn_txt',
		    'type'          => 'text',
		    'default'       => esc_html__( 'Understood', 'hovard' ),
	    ),
        array(
            'required'      => array( 'is_privacy_bar', '=', '1' ),
            'id'            => 'privacy_bar_padding',
            'title'         => esc_html__( 'Privacy Bar Padding', 'hovard' ),
            'type'          => 'spacing',
            'output'        => array( '.cookieAcceptBar' ),
            'mode'          => 'padding',
            'units'         => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
        array(
            'required'      => array( 'is_privacy_bar', '=', '1' ),
            'id'            => 'privacy_bar_bg',
            'title'         => esc_html__( 'Privacy Bar Background Color', 'hovard' ),
            'type'          => 'color',
            'output'        => array( '.cookieAcceptBar' ),
            'mode'          => 'background-color',
        ),
    )
));