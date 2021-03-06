<?php
/**
 * Hovard theme helper functions and resources
 */

class hovard_helper_Class {
    /**
	 * Hold an instance of hovard_helper_Class class.
	 * @var hovard_helper_Class
	 */
	protected static $instance = null;

	/**
	 * Main hovard_helper_Class instance.
	 * @return hovard_helper_Class - Main instance.
	 */
	public static function instance() {

		if (null == self::$instance) {
			self::$instance = new hovard_helper_Class();
		}

		return self::$instance;
	}

    /**
     * Website Logo
     */
    public function logo() {
        $opt = get_option( 'hovard_opt' );

        $header_type = function_exists('get_field') ? get_field('hovard_header_type' ) : '';
        $select_main_logo = function_exists('get_field') ? get_field('hovard_header_type') : '';

        // Main Logo
        $main_logo = isset($opt['main_logo']['url']) ? $opt['main_logo'] ['url'] : '';
        $retina_logo = !empty($opt['retina_logo']['url']) ? "srcset='{$opt['retina_logo']['url']} 2x'" : '';

        // Sticky Logo
        $sticky_logo = isset($opt['sticky_logo']['url']) ? $opt['sticky_logo']['url'] : '';
        $retina_sticky_logo = !empty($opt['retina_sticky_logo']['url']) ? "srcset='{$opt['retina_sticky_logo']['url']} 2x'" : '';

        $is_main_logo_white = '';
        $is_main_logo_black = '';
        if ( (hovard_is_aesthetic_default() && !is_page()) || (is_singular('post') && $header_type == 'default') ) {
            $select_main_logo = 'white';
        }

        if ( hovard_is_titlebar_default() ) {
            $select_main_logo = 'black';
        }

        if ( $select_main_logo == 'white' ) {
            $is_main_logo_white = 'main_logo';
        } elseif ( $select_main_logo == 'black' || hovard_navbar_position() == 'static' ) {
            $is_main_logo_black = $select_main_logo == 'black' ? 'main_logo' : '';
        } elseif ( $select_main_logo == 'default' || !isset($select_main_logo) ) {
            $is_main_logo_black = 'main_logo';
        }
        if ( hovard_navbar_position() == 'static' ) {
            $is_main_logo_black = 'main_logo';
        }
        ?>
        <a class="navbar-brand header_logo" href="<?php echo esc_url(home_url('/')); ?>">
            <?php
            if ( !empty($main_logo) ) : ?>
                <img class="first_logo sticky_logo <?php echo esc_attr($is_main_logo_black) ?>" src="<?php echo esc_url($main_logo) ?>" alt="<?php bloginfo('name'); ?>" <?php echo wp_kses_post($retina_logo) ?>>
                <?php if ( !empty($sticky_logo) ) : ?>
                    <img class="white_logo <?php echo esc_attr($is_main_logo_white) ?>" src="<?php echo esc_url($sticky_logo) ?>" alt="<?php bloginfo('name'); ?>" <?php echo wp_kses_post($retina_sticky_logo) ?>>
                <?php endif; ?>
                <?php
            else: ?>
                <h3> <?php echo get_bloginfo( 'name' ) ?> </h3>
                <?php
            endif;
        echo '</a>';
    }

    /**
    * Render the Navbar classes based on conditions
    */
    function navbar_type() {
        $opt = get_option('hovard_opt' );
        $header_type = function_exists('get_field') ? get_field('hovard_header_type' ) : '';
        $search_banner_opt = $opt['select_search_banner'] ?? 'light';

        if ( (hovard_is_aesthetic_default() && !is_page()) || (is_singular('post') && $header_type == 'default') ) {
            $header_type = 'white';
        }

        if ( !isset($header_type) && hovard_is_titlebar_default() ) {
            $header_type = 'black';
        }

        if ( is_home() && $search_banner_opt == 'light' ) {
            $header_type = 'black';
        }

        $nav_classes = $header_type == 'white' ? ' menu_purple' : ' dark_menu';
        echo esc_html($nav_classes);
    }

    // Banner Title
    function banner_title() {
        $opt = get_option('hovard_opt');
        if ( is_home() ) {
            $blog_title = !empty($opt['blog_title']) ? $opt['blog_title'] : esc_html__( 'Blog', 'hovard' );
            echo esc_html($blog_title);
        } elseif ( is_page() || is_single() ) {
            the_title();
        } elseif( is_category() ) {
            single_cat_title();
        } elseif( is_archive() ) {
            the_archive_title();
        } elseif( is_search() ) {
            esc_html_e( 'Search result for: ???', 'hovard' ); echo get_search_query().'???';
        } else {
            the_title();
        }
    }

    /**
     * Social Links
     **/

    function social_links() {
        $opt = get_option( 'hovard_opt' );
        ?>
        <?php if ( !empty($opt['facebook']) ) { ?>
            <li> <a  href="<?php echo esc_url($opt['facebook']);  ?>" class="block text-white bg-white/50 py-2.5 px-3.5 duration-300 ease-in-out hover:bg-white hover:text-sienna"><i class="ti-facebook" ></i></a> </li>
        <?php } ?>

        <?php if ( !empty($opt['twitter']) ) { ?>
            <li> <a href="<?php echo esc_url($opt['twitter']); ?>" class="block text-white bg-white/50 py-2.5 px-3.5 duration-300 ease-in-out hover:bg-white hover:text-sienna"><i class="ti-twitter" ></i></a> </li>
        <?php } ?>

        <?php if ( !empty($opt['instagram']) ) { ?>
            <li> <a href="<?php echo esc_url($opt['instagram']); ?>" class="block text-white bg-white/50 py-2.5 px-3.5 duration-300 ease-in-out hover:bg-white hover:text-sienna"><i class="ti-instagram" ></i></a> </li>
        <?php } ?>

        <?php if ( !empty($opt['linkedin']) ) { ?>
            <li> <a href="<?php echo esc_url($opt['linkedin']); ?>" class="block text-white bg-white/50 py-2.5 px-3.5 duration-300 ease-in-out hover:bg-white hover:text-sienna"><i class="ti-linkedin" ></i></a> </li>
        <?php } ?>

        <?php if ( !empty($opt['youtube']) ) { ?>
            <li> <a href="<?php echo esc_url($opt['youtube']); ?>" class="block text-white bg-white/50 py-2.5 px-3.5 duration-300 ease-in-out hover:bg-white hover:text-sienna"><i class="ti-youtube" ></i></a> </li>
        <?php } ?>

        <?php if ( !empty($opt['github']) ) { ?>
            <li> <a href="<?php echo esc_url($opt['github']); ?>" class="block text-white bg-white/50 py-2.5 px-3.5 duration-300 ease-in-out hover:bg-white hover:text-sienna"><i class="ti-github" ></i></a> </li>
        <?php } ?>

        <?php if ( !empty($opt['dribbble']) ) { ?>
            <li> <a href="<?php echo esc_url($opt['dribbble']); ?>" class="block text-white bg-white/50 py-2.5 px-3.5 duration-300 ease-in-out hover:bg-white hover:text-sienna"><i class="ti-dribbble" ></i></a> </li>
        <?php }
    }

    /**
    * @param $color
    * @param false $opacity
    * Convert hexdec color string to rgb(a) string
    *
    * @return string
    */
    function hex2rgba($color, $opacity = false) {

	    $default = 'rgb(0,0,0)';

        //Return default if no color provided
        if(empty($color))
              {return $default;}

        //Sanitize $color if "#" is provided
            if ($color[0] == '#' ) {
                $color = substr( $color, 1 );
            }

            //Check if color has 6 or 3 characters and get values
            if (strlen($color) == 6) {
                    $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
            } elseif ( strlen( $color ) == 3 ) {
                    $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
            } else {
                    return $default;
            }

            //Convert hexadec to rgb
            $rgb =  array_map('hexdec', $hex);

            //Check if opacity is set(rgba or rgb)
            if($opacity){
                if(abs($opacity) > 1)
                    {$opacity = 1.0;}
                $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
            } else {
                $output = 'rgb('.implode(",",$rgb).')';
            }

            //Return rgb(a) color string
            return $output;
    }

    /** Render Meta CSS value
    *
    * @param $handle
    * @param $css_items
    */
     function meta_css_render( $handle, $css_items ) {
         $dynamic_css = '';
         $opt = get_option( 'hovard_opt' );

         if ( function_exists('get_field') ) {
             $change_types = get_field('change_types', 'option');
             $toc_titles = get_field('titles');

             $keys = array_keys($css_items);
             for ( $i = 0; $i < count($css_items); $i++ ) {
                 $split_id = explode('__', $keys[$i]);
                 $meta_id = $split_id[0];
                 $append = !empty($split_id[1]) ? $split_id[1] : '';
                 $meta_value = get_field($meta_id);
                 if ( !empty($meta_value) ) {
                     $css_i = 1;
                     foreach ( $css_items[$keys[$i]] as $property => $selector ) {
                         $css_output = "$selector {";
                         $css_output .= "$property: $meta_value$append;";
                         $css_output .= "}";
                         $dynamic_css .= $css_output;
                         $css_i++;
                     }
                 }
             }

             /** Post Banner Image **/
             $banner_image = get_field('banner_image');
             if ( !empty($banner_image['url']) ) {
                $dynamic_css .= ".tip_banner_area, .doc_banner_area{background: url({$banner_image['url']}) no-repeat;}";
             }

             if ( !empty($opt['custom_css']) ) {
                $dynamic_css .= $opt['custom_css'];
             }

             if ( !empty($change_types) ) {
                 foreach ( $change_types as $change) {
                     $change_type_class = $change['type'] ? hovard_get_slug($change['type']) : '';
                     $changelog_bg_color = !empty($change['background_color']) ? "background: {$change['background_color']};" : '';
                     $changelog_color = !empty($change['font_color']) ? "color: {$change['font_color']};" : '';
                     if ( !empty($changelog_color) || !empty($changelog_bg_color) ) {
                        $dynamic_css .= ".changelog_content span.$change_type_class { $changelog_bg_color $changelog_color }";
                     }
                 }
             }


         }

        wp_add_inline_style( $handle, $dynamic_css );
     }


    /** Render inline Css
    *
    * @param $css_handle
    */
     function hovard_inline_css( $css_handle) {
         $inline_css = '';
         $opt = get_option( 'hovard_opt' );

             $bg_pattern = !empty($opt['container_bg_pattern']['url']) ? $opt['container_bg_pattern']['url']: '';
             if ( $bg_pattern ){
                 $inline_css .= ".container-bg-pattern{ background-image: url({$bg_pattern}); }";
             }

        wp_add_inline_style( $css_handle, $inline_css );
     }


    /** Render inline Css
    *
    * @param $bg_css_handle
    */
     function hovard_inline_bg_css( $bg_css_handle) {
         $bg_texture = get_template_directory_uri()."/assets/img/bg-texture.png";
         $dark_texture = get_template_directory_uri()."/assets/img/bg-texture-dark.png";
         $bg_texture3 = get_template_directory_uri()."/assets/img/bg-texture-3.png";
         $dark_texture2 = get_template_directory_uri()."/assets/img/bg-texture-dark-2.png";
         $bg_texture2 = get_template_directory_uri()."/assets/img/bg-texture-2.png";
         $bg_texture6 = get_template_directory_uri()."/assets/img/bg-texture6.png";

         $inline_css = ".bg-texture{ background-image: url({$bg_texture}); }\n";
         $inline_css .= ".dark .dark\:bg-darkTexture{ background-image: url({$dark_texture}); }\n";
         $inline_css .= ".bg-texture3{ background-image: url({$bg_texture3}); }\n";
         $inline_css .= ".dark .dark\:bg-darkTexture2{ background-image: url({$dark_texture2}); }\n";
         $inline_css .= ".container-bg-pattern{ background-image: url({$bg_texture2}); }\n";
         $inline_css .= ".bg-texture2{ background-image: url({$bg_texture2}); }\n";
         $inline_css .= ".dark .dark\:bg-texture6{ background-image: url({$bg_texture6}); }\n";

        wp_add_inline_style( $bg_css_handle, $inline_css );
     }

     /**
     * Pagination
     **/
    function pagination() {
        the_posts_pagination(array(
            'screen_reader_text' => ' ',
            'prev_text'          => '<i class="ti-arrow-left"></i>',
            'next_text'          => '<i class="ti-arrow-right"></i>'
        ));
    }

    /**
    * Day link to archive page
    **/
    function day_link() {
        $archive_year   = get_the_time( 'Y' );
        $archive_month  = get_the_time( 'm' );
        $archive_day    = get_the_time( 'd' );
        echo get_day_link( $archive_year, $archive_month, $archive_day);
    }

    /**
     * Post's excerpt text
     *
     * @param $settings_key
     * @param bool $echo
     *
     * @return string
     **/
    function excerpt($settings_key, $echo = true) {
        $opt = get_option( 'hovard_opt' );
        $blog_layout_opt = !empty( $opt['blog_layout'] ) ? $opt['blog_layout'] : 'list';
        $blog_layout = !empty( $_GET['blog_layout'] ) ? $_GET['blog_layout'] : $blog_layout_opt;
        $excerpt_limit = !empty( $opt[$settings_key] ) ? $opt[$settings_key] : 40;
        if ( $blog_layout == 'grid' || $blog_layout == 'blog_category' ) {
            $excerpt_limit = 15;
        }
        $post_excerpt = get_the_excerpt();
        $excerpt = (strlen(trim($post_excerpt)) != 0) ? wp_trim_words(get_the_excerpt(), $excerpt_limit, '') : wp_trim_words(get_the_content(), $excerpt_limit, '');
        if(  $echo == true ) {
            echo wp_kses_post(wpautop($excerpt));
        } else {
            return wp_kses_post(wpautop($excerpt));
        }
    }

    /**
     * Post author avatar
     **/
     function post_author_avatar( $size = 50, $default = '', $alt = '', $args = null ) {
         $post_author_id = get_post_field( 'post_author', get_the_ID() );
         echo get_avatar($post_author_id, $size, $default, $alt, $args);
     }

    /**
    * Get the first category name
    *
    * @param string $term
    */
    function first_category($term = 'category') {
        $cats = get_the_terms(get_the_ID(), $term);
        $cat  = is_array($cats) ? $cats[0]->name : '';
        echo esc_html($cat);
    }

    /**
    * Get the first category link
    *
    * @param string $term
    */
    function first_category_link($term='category') {
        $cats = get_the_terms(get_the_ID(), $term);
        $cat  = is_array($cats) ? get_category_link($cats[0]->term_id) : '';
        echo esc_url($cat);
    }

    /**
     * Limit latter
    *
    * @param $string
    * @param $limit_length
    * @param string $suffix
     */
    function limit_latter($string, $limit_length, $suffix = '...' ) {
        if (strlen($string) > $limit_length) {
            echo strip_shortcodes(substr($string, 0, $limit_length) . $suffix);
        }
        else {
            echo strip_shortcodes(esc_html($string));
        }
    }

    /**
    * Doc Layout
    * @return mixed|string
    */
    function doc_layout() {
        $opt = get_option('hovard_opt' );
        $page_doc_layout = function_exists('get_field') ? get_field('doc_layout') : 'default';
        if ( $page_doc_layout == 'default' || $page_doc_layout == '' ) {
            $doc_layout = !empty($opt['doc_layout']) ? $opt['doc_layout'] : 'both_sidebar';
        } else {
            $doc_layout = $page_doc_layout;
        }

        return $doc_layout;
    }

    /**
    * Doc width
    * @return mixed|string
    */
    function page_width() {
        $opt = get_option('hovard_opt' );
        $page_doc_width = function_exists('get_field') ? get_field('doc_width') : 'default';
        if ( $page_doc_width == 'default' || $page_doc_width == '' ) {
            $header_width = isset($opt['header_width']) ? $opt['header_width'] : 'boxed';
        } else {
            $header_width = $page_doc_width;
        }

        return $header_width;
    }

    /**
    * Image from Theme Settings
    *
    * @param $settins_key
    * @param string $class
    * @param string $alt
    */
    function image_from_settings( $settings_key = '', $class = '', $alt = '' ) {
        $opt = get_option('hovard_opt' );
        $page_image = function_exists('get_field') ? get_field($settings_key) : '';
        $sett_image = !empty($opt[$settings_key]) ? $opt[$settings_key] : '';
        $image = $page_image == '' ? $sett_image : $page_image;
        if ( !empty($image['id']) ) {
            echo wp_get_attachment_image($image['id'], 'full', '', array('class' => $class));
        }
        elseif ( !empty($image['url']) && empty($image['id']) ) {
            $class = !empty($class) ? "class='$class'" : '';
            echo "<img src='{$image['url']}' $class alt='$alt'>";
        }
    }
}


/**
 * Instance of hovard_helper_Class class
 */
function hovard_helper() {
    return hovard_helper_Class::instance();
}