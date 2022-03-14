<?php

// Navbar styling
Redux::set_section( 'hovard_opt', array(
    'title'            => esc_html__( 'Menu', 'hovard' ),
    'id'               => 'menu_opt',
    'icon'             => 'el el-lines',
));

/**
 * Main Menu styling
 */
Redux::set_section( 'hovard_opt', array(
    'title'            => esc_html__( 'Classic Menu', 'hovard' ),
    'id'               => 'main_menu_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'title'     => esc_html__( 'Navbar Meu Alignment', 'hovard' ),
            'id'        => 'menu_align',
            'type'      => 'button_set',
            'options'   => array(
                'left' => esc_html__( 'Left', 'hovard' ),
                'center' => esc_html__( 'Center', 'hovard' ),
                'right' => esc_html__( 'Right', 'hovard' ),
            ),
            'default' => 'right'
        ),

        // Noraml menu settings section
        array(
            'id'        => 'normal_menu_start',
            'type'      => 'section',
            'title'     => esc_html__( 'Normal menu colors', 'hovard' ),
            'subtitle'  => esc_html__( 'The following settings will only apply on the normal header mode..', 'hovard' ),
            'indent'    => true
        ),

        array(
            'title'         => esc_html__( 'Item Color', 'hovard' ),
            'subtitle'      => esc_html__( 'This is the menu item font color.', 'hovard' ),
            'id'            => 'menu_normal_font_color',
            'type'          => 'color',
            'output'        => array (
                'color'      => '.menu > .nav-item > .nav-link',
            ),
        ),

        array(
            'title'     => esc_html__( 'Item Hover Color', 'hovard' ),
            'subtitle'  => esc_html__( 'Menu item\'s font color on hover stats.', 'hovard' ),
            'id'        => 'menu_normal_hover_font_color',
            'output'    => array(
                'color'             => '.menu > .nav-item:hover .nav-link, .menu > .nav-item.submenu .dropdown-menu .nav-item:hover > .nav-link, .menu > .nav-item.submenu .dropdown-menu .nav-item:hover > .nav-link h5',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__( 'Item Active Color', 'hovard' ),
            'subtitle'  => esc_html__( 'Menu item\'s font color on active stats.', 'hovard' ),
            'id'        => 'menu_normal_item_active_color',
            'output'    => array(
                'color' => '.menu > .nav-item.active .nav-link, .menu > .nav-item.submenu .dropdown-menu .nav-item:focus > .nav-link, .menu > .nav-item.submenu .dropdown-menu .nav-item.active > .nav-link',
                'background-color'  => '.menu > .nav-item.submenu .dropdown-menu .nav-item .nav-link:before',
            ),
            'type'      => 'color',
        ),

        array(
            'id'     => 'normal_menu_end',
            'type'   => 'section',
            'indent' => false,
        ),

        // Sticky menu settings section
        array(
            'id'        => 'sticky_menu_start',
            'type'      => 'section',
            'title'     => esc_html__( 'Sticky menu colors', 'hovard' ),
            'subtitle'  => esc_html__( 'The following settings will only apply on the sticky header mode..', 'hovard' ),
            'indent'    => true
        ),

        array(
            'title'         => esc_html__( 'Menu Color', 'hovard' ),
            'subtitle'      => esc_html__( 'Menu item font color on sticky menu mode.', 'hovard' ),
            'id'            => 'sticky_menu_font_color',
            'output'        => array (
                'color'     => '.navbar_fixed.menu_one .menu > .nav-item > .nav-link',
            ),
            'type'          => 'color',
        ),

        array(
            'title'     => esc_html__( 'Menu Hover Color', 'hovard' ),
            'subtitle'  => esc_html__( 'Menu item hover font color on header sticky mode', 'hovard' ),
            'id'        => 'menu_sticky_hover_font_color',
            'output'    => array(
                'color' => '.navbar_fixed.menu_one .menu > .nav-item:hover > .nav-link',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__( 'Menu Active Color', 'hovard' ),
            'subtitle'  => esc_html__( 'Menu item active font color on header sticky mode', 'hovard' ),
            'id'        => 'menu_sticky_active_font_color',
            'output'    => array(
                'color' => 'navbar_fixed.menu_one .menu > .nav-item.active > .nav-link',
            ),
            'type'      => 'color',
        ),

        array(
            'id'     => 'sticky_menu_end',
            'type'   => 'section',
            'indent' => false,
        ),


        // Dropdown menu settings section
        array(
            'id'        => 'dropdown_menu_start',
            'type'      => 'section',
            'title'     => esc_html__( 'Dropdown menu colors', 'hovard' ),
            'subtitle'  => esc_html__( 'The following settings will only apply on the dropdown header mode..', 'hovard' ),
            'indent'    => true
        ),

        array(
            'title'         => esc_html__( 'Menu Color', 'hovard' ),
            'id'            => 'dropdown_menu_font_color',
            'output'        => array (
                'color'     => '.menu > .nav-item.submenu .dropdown-menu .nav-item .nav-link',
            ),
            'type'          => 'color',
        ),

        array(
            'title'     => esc_html__( 'Menu Hover/Active Color', 'hovard' ),
            'id'        => 'dropdown_menu_hover_font_color',
            'output'    => array(
                'color' => '.menu > .nav-item.submenu .dropdown-menu .nav-item:hover > .nav-link, .menu > .nav-item.submenu .dropdown-menu .nav-item:focus > .nav-link, .menu > .nav-item.submenu .dropdown-menu .nav-item.active > .nav-link',
                'background-color'  => '.menu > .nav-item.submenu .dropdown-menu .nav-item .nav-link:before',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__( 'Background Color', 'hovard' ),
            'id'        => 'dropdown_menu_bg_color',
            'output'    => array(
                'background-color' => '.menu > .nav-item.submenu .dropdown-menu, .menu > .nav-item.submenu .dropdown-menu:before',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__( 'Border Color', 'hovard' ),
            'id'        => 'dropdown_menu_border_color',
            'output'    => array(
                'border-color' => '.menu > .nav-item.submenu .dropdown-menu, .menu > .nav-item.submenu .dropdown-menu:before',
            ),
            'type'      => 'color',
        ),

        array(
            'id'     => 'dropdown_menu_end',
            'type'   => 'section',
            'indent' => false,
        ),

        // Menu item padding and margin options
        array(
            'title'     => esc_html__( 'Menu item padding', 'hovard' ),
            'subtitle'  => esc_html__( 'Padding around menu item. Default is 37px 0px 37px 0px. You can reduce the top and bottom padding to make the menu bar height smaller.', 'hovard' ),
            'id'        => 'menu_item_padding',
            'type'      => 'spacing',
            'output'    => array( '.navbar_fixed.menu_one .menu > .nav-item' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

        array(
            'title'     => esc_html__( 'Menu item margin', 'hovard' ),
            'subtitle'  => esc_html__( 'Margin around menu item.', 'hovard' ),
            'id'        => 'menu_item_margin',
            'type'      => 'spacing',
            'output'    => array( '.menu > .nav-item + .nav-item' ),
            'mode'      => 'margin',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
));


/**
 * Main Menu styling
 */
Redux::set_section( 'hovard_opt', array(
    'title'            => esc_html__( 'Dual Title Menu', 'hovard' ),
    'id'               => 'dual_menu_menu_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        // Dual Menu Item Title Settings
        array(
            'id'        => 'dual_menu_item_title_start',
            'type'      => 'section',
            'title'     => esc_html__( 'Menu Items title settings', 'hovard' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Dropdown Item Hover/Active Color', 'hovard' ),
            'id'        => 'dual_menu_item_title_active_color',
            'output'    => array(
                'color' => '.menu > .nav-item.submenu .dropdown-menu .nav-item:hover > .nav-link h5',
            ),
            'type'      => 'color',
        ),

        array(
            'id'     => 'dual_menu_item_title_end',
            'type'   => 'section',
            'indent' => false,
        ),

        // Dual Menu Item Subtitle Settings
        array(
            'id'        => 'dual_menu_item_subtitle_start',
            'type'      => 'section',
            'title'     => esc_html__( 'Menu Items subtitle settings', 'hovard' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Dropdown Items Hover/Active Color', 'hovard' ),
            'id'        => 'dual_menu_item_subtitle_active_color',
            'output'    => array(
                'color' => '.menu > .nav-item.submenu .dropdown-menu .nav-item:hover > .nav-link p',
            ),
            'type'      => 'color',
        ),
        array(
            'id'     => 'dual_menu_item_subtitle_end',
            'type'   => 'section',
            'indent' => false,
        ),
    )
));