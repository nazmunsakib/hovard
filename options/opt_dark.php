<?php
// Color option
Redux::set_section('hovard_opt', array(
    'title'     => esc_html__( 'Dark Mode', 'hovard' ),
    'id'        => 'dark_mode_opt',
    'icon'      => 'dashicons dashicons-star-half',
    'fields'    => array(
        array(
            'title'     => esc_html__( 'Dark Mode Switcher', 'hovard' ),
            'subtitle'  => esc_html__( 'Show/Hide the Dark Mode Switcher on the Header navigation bar.', 'hovard' ),
            'id'        => 'is_dark_switcher',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'hovard' ),
            'off'       => esc_html__( 'Hide', 'hovard' ),
            'default'   => '',
        ),
        array(
            'title'     => esc_html__( 'Active Dark Mode', 'hovard' ),
            'subtitle'  => esc_html__( 'Activate the Dark Mode by default.', 'hovard' ),
            'id'        => 'is_dark_default',
            'type'      => 'switch',
            'default'   => '',
            'required'  => array('is_dark_switcher', '!=', '1')
        ),
    )
));