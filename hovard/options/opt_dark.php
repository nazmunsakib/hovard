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
    )
));