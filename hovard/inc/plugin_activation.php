<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'hovard_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function hovard_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
        array(
            'name'          => esc_html__( 'Elementor', 'hovard' ),
            'slug'          => 'elementor',
            'required'      => true,
        ),

        array(
            'name'          => esc_html__( 'Hovard Core', 'hovard' ), // The plugin name.
            'slug'          => 'hovard-core', // The plugin name.
            'source'        => get_template_directory_uri() . '/inc/tgm/hovard-core.zip' , // The plugin source.
            'required'      => true, // If false, the plugin is only 'recommended' instead of required.
        ),

        array(
            'name'          => esc_html__( 'Advanced Custom Fields-pro', 'hovard' ), // The plugin name.
            'slug'          => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
            'source'        => 'https://wordpress-theme.spider-themes.net/3rd-plugins/advanced-custom-fields-pro.zip', // The plugin source.
            'required'      => true, // If false, the plugin is only 'recommended' instead of required.
        ),

		array(
			'name'          => esc_html__( 'Redux Framework', 'hovard' ),
			'slug'          => 'redux-framework',
			'required'      => true,
		),

        array(
            'name'          => esc_html__( 'One Click Demo Import', 'hovard' ),
            'slug'          => 'one-click-demo-import',
            'required'      => false,
        ),

		array(
			'name'          => esc_html__( 'Pro Elements for Elementor', 'hovard' ), // The plugin name.
			'slug'          => 'elementor-pro-elements', // The plugin slug (typically the folder name).
			'source'        => 'https://wordpress-theme.spider-themes.net/3rd-plugins/pro-elements.zip', // The plugin source.
			'required'      => true,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}