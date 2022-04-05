<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hovard
 */

// Theme settings options
$opt = get_option('hovard_opt' );

/**
* Header Nav-bar Layout
 */
$header_type = function_exists('get_field') ? get_field('hovard_header_type' ) : '';
if ( is_404() || is_singular('post') || is_search() || $header_type == '' && !is_singular('docs') ) {
    $header_type = 'black';
}
if ( !isset($header_type) && is_singular('docs') || is_home() ) {
    $header_type = 'white';
}
if( class_exists('bbPress') ) {
    if ( is_post_type_archive( array('forum', 'topic') ) || is_singular('forum') || is_singular('topic') ) {
        $header_type = 'white';
    }
}

$page_header_layout = function_exists('get_field' ) ? get_field('header_layout' ) : '';
$is_sticky_header_doc = function_exists('get_field') ? get_Field('is_sticky_header') : '';
$is_sticky_body_wrapper = $is_sticky_header_doc == '1' ? 'sticky_menu' : '';

$sticky_header_id = $is_sticky_header_doc == '1' ? 'stickyTwo' : 'sticky' ;

if ( is_single() && !is_singular('docs') && !is_singular('forum') && !is_singular('topic') ) {
    $menu_type = 'menu_two';
} elseif ( is_home() ) {
    $menu_type = 'menu_one';
} else {
    $menu_type = 'menu_one';
}

$menu_display_none = is_singular('docs') ? 'display_none ' : '';

$nav_color = $header_type == 'black' ? ' dk_menu' : '';
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset' ); ?>">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class('doc full-width-doc sticky-nav-doc onepage-doc'); ?> data-spy="scroll" data-target=".navbar" data-offset="-120">
        <?php
        if ( function_exists('wp_body_open') ) {
            wp_body_open();
        }

        /**
         * Preloader
         */
        $is_preloader = isset($opt['is_preloader']) ? $opt['is_preloader'] : '';
        if ( $is_preloader == '1' ) {
            get_template_part('template-parts/header-elements/preloader');
        }
        ?>

        <div class="body_wrapper sticky_menu">

            <nav class="navbar navbar-expand-lg menu_one sticky-nav display_none <?php hovard_helper()->navbar_type() ?>" id="<?php echo esc_attr($sticky_header_id) ?>">
                <div class="container-fluid pl-60 pr-60">
                    <?php hovard_helper()->logo(); ?>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'hovard'); ?>">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
                        if ( has_nav_menu('main_menu') ) {
                            wp_nav_menu( array (
                                'menu' => 'main_menu',
                                'theme_location' => 'main_menu',
                                'container' => null,
                                'menu_class' => "navbar-nav menu ml-auto",
                                'walker' => new Hovard_Nav_Walker(),
                                'depth' => 4
                            ));
                        }
                        get_template_part('template-parts/header-elements/search-form' );
                        get_template_part('template-parts/header-elements/action-button' );
                        ?>
                    </div>
                </div>
            </nav>

            <?php
            /**
             * Page Title-bar
             */
            get_template_part('template-parts/header-elements/titlebar');

            /**
             * Mobile menu
             */
            get_template_part( 'template-parts/header-elements/mobile-menu' );