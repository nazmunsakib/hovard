<?php
// Header Section
Redux::set_section( 'hovard_opt', array(
    'title'            => esc_html__( 'Header', 'hovard' ),
    'id'               => 'header_sec',
    'customizer_width' => '400px',
    'icon'             => 'dashicons dashicons-arrow-up-alt2',
));

// Logo
Redux::set_section( 'hovard_opt', array(
    'title'            => esc_html__( 'Logo', 'hovard' ),
    'id'               => 'logo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Logo', 'hovard' ),
            'subtitle'  => esc_html__( 'Upload here the black version of your logo.', 'hovard' ),
            'id'        => 'main_logo',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => HOVARD_DIR_IMG.'/logo.png'
            )
        ),
        array(
            'title'     => esc_html__( ' Retina Logo', 'hovard' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo size.', 'hovard' ),
            'id'        => 'retina_logo',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => HOVARD_DIR_IMG.'/logo-w2x.png'
            )
        ),
    )
) );
