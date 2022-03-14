<?php
Redux::set_section( 'hovard_opt', array(
    'title'            => esc_html__( 'Custom Code', 'hovard' ),
    'id'               => 'custom_code_opt',
    'icon'             => 'dashicons dashicons-editor-code',
    'fields'           => array(
	    array(
		    'id'       => 'custom_css',
		    'type'     => 'ace_editor',
		    'title'    => esc_html__( 'CSS Code', 'hovard' ),
		    'subtitle' => esc_html__( 'Paste your CSS code here.', 'hovard' ),
		    'mode'     => 'css',
		    'theme'    => 'monokai',
	    ),
	    array(
		    'id'       => 'custom_js',
		    'type'     => 'ace_editor',
		    'title'    => esc_html__( 'JS Code', 'hovard' ),
		    'subtitle' => esc_html__( 'Paste your JS code here.', 'hovard' ),
		    'mode'     => 'javascript',
		    'theme'    => 'chrome',
		    'default'  => "jQuery(document).ready(function(){\n\n});"
	    ),
    )
));