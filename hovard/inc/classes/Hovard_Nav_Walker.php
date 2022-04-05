<?php
/**
 * WP Bootstrap Navwalker
 *
 * @package WP-Bootstrap-Navwalker
 */

class Hovard_Nav_Walker extends Walker_Nav_Menu {

    /**
     * Start Level.
     *
     * @see Walker::start_lvl()
     * @since 3.0.0
     *
     * @access public
     * @param mixed $output Passed by reference. Used to append additional content.
     * @param int   $depth (default: 0) Depth of page. Used for padding.
     * @param array $args (default: array()) Arguments.
     * @return void
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        if ($depth == 0) {
            $output .= '<i  class=" ti-arrow-circle-down text-subtitle5 text-subtitle5 " aria-hidden="true" data-toggle="dropdown"></i>';
            $output .= "\n$indent<ul role=\"menu\" class=\"pt-2.5 dropdown-menu menu-depth-2nd\" x-show=\"open\" x-transition x-cloak >\n";
        }
        if ($depth == 1) {
            $output .= '<i class="arrow_carrot-down_alt2 ti-arrow-circle-down mobile_dropdown_icon" aria-hidden="true" data-toggle="dropdown"></i>';
            $output .= ''."\n$indent<ul role=\"menu\" class=\" dropdown-menu dropdown-submenu menu-depth-3rd pt-2.5\" x-show=\"open\" x-transition x-cloak >\n";
        }
        if ($depth == 2) {
	        $output .= '<i class="arrow_carrot-down_alt2 ti-arrow-circle-down mobile_dropdown_icon" aria-hidden="true" data-toggle="dropdown"></i>';
            $output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu dropdown-submenu menu-depth-4th pt-2.5\" x-show=\"open\" x-transition x-cloak >\n";
        }
        if ( $depth == 3 ) {
	        $output .= '<i class="arrow_carrot-down_alt2 ti-arrow-circle-down mobile_dropdown_icon" aria-hidden="true" data-toggle="dropdown"></i>';
            $output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu dropdown-submenu menu-depth-5th pt-2.5\" x-show=\"open\" x-transition x-cloak >\n";
        }
    }

    /**
     * Start El.
     *
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @access public
     * @param mixed $output Passed by reference. Used to append additional content.
     * @param mixed $item Menu item data object.
     * @param int   $depth (default: 0) Depth of menu item. Used for padding.
     * @param array $args (default: array()) Arguments.
     * @param int   $id (default: 0) Menu item ID.
     * @return void
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $url = $item->url;
        $url_hash = strpos($url, '#' );

        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $content = get_post($item->mega_menu);
        $value = '';
        $class_names = $value;
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

	    $x_data = '';
        if ( $args->has_children ) {
            $class_names .= 'mb-7.5 dropdown submenu';
			$x_data = ' x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false" ';
        }

        if ( in_array( 'current-menu-item', $classes, true ) ) {
            $class_names .= ' active';
        }
        if ( in_array( 'menu-item', $classes, true ) ) {
            $class_names .= ' mb-7.5 nav-item';
        }

        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
        $output .= $indent . '<li itemscope="itemscope" ' . $id . $value . $class_names . $x_data . '>';
        $atts = array();
        if ( empty( $item->attr_title ) ) {
            $atts['title']  = ! empty( $item->title )   ? strip_tags( $item->title ) : '';
        } else {
            $atts['title'] = $item->attr_title;
        }
        $atts['target'] = ! empty( $item->target )	? $item->target	: '';
        $atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';
        // If item has_children add atts to a.
        if ( $args->has_children && 0 === $depth || $args->has_children && 1 === $depth  ) {
            $atts['class'] = 'flex items-center justify-center gap-2.5 font-rufina font-bold text-title14 text-white px-5 ease-in-out duration-300 hover:bg-white hover:text-sienna';
            $atts['data-toggle'] = 'dropdown';
            $atts['role'] = 'button';
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
            $atts['href'] = !empty( $item->url ) ? $item->url : '';
        } else {
            $atts['class'] = 'flex items-center justify-center gap-2.5 font-rufina font-bold text-title14 text-white px-5 ease-in-out duration-300 hover:bg-white hover:text-sienna';
            $atts['href'] = !empty( $item->url ) ? $item->url : '';
        }
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $item_output = $args->before;
        /*
         * Glyphicons/Font-Awesome
         * ===========
         * Since the the menu item is NOT a Divider or Header we check the see
         * if there is a value in the attr_title property. If the attr_title
         * property is NOT null we apply it as the class name for the glyphicon.
         */
        /*
             * Glyphicons
             * ===========
             * Since the the menu item is NOT a Divider or Header we check the see
             * if there is a value in the attr_title property. If the attr_title
             * property is NOT null we apply it as the class name for the glyphicon.
             */
        if ( ! empty( $item->attr_title ) )
            $item_output .= '<a'. $attributes .'>';
        else
            $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= ( $args->has_children && 1 === $depth ) ? ' <span class="arrow_carrot-right"></span> </a>' : esc_attr( $item->attr_title ) . '&nbsp;</a>';
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

    }

    /**
     * Traverse elements to create list from elements.
     *
     * Display one element if the element doesn't have any children otherwise,
     * display the element and its children. Will only traverse up to the max
     * depth and no ignore elements under that depth.
     *
     * This method shouldn't be called directly, use the walk() method instead.
     *
     * @see Walker::start_el()
     * @since 2.5.0
     *
     * @access public
     * @param mixed $element Data object.
     * @param mixed $children_elements List of elements to continue traversing.
     * @param mixed $max_depth Max depth to traverse.
     * @param mixed $depth Depth of current element.
     * @param mixed $args Arguments.
     * @param mixed $output Passed by reference. Used to append additional content.
     * @return null Null on failure with no changes to parameters.
     */
    public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element ) {
            return; }
        $id_field = $this->db_fields['id'];
        // Display this element.
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] ); }
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
}
