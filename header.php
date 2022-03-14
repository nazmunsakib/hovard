<?php
/**
 * The header for our theme
 *
 * This is the template that displays all the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hovard
 */

// Theme settings options
$opt = get_option('hovard_opt' );
$my_theme = wp_get_theme( 'hovard' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- Theme Version -->
        <meta name="hovard-version" content="<?php echo esc_attr($my_theme->Version) ?>">
        <!-- Charset Meta -->
        <meta charset="<?php bloginfo('charset' ); ?>">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); hovard_has_scrollspy() ?> >
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

        <div class="body_wrapper <?php //hovard_sticky_navbar() ?>">
            <div class="click_capture"></div>

            <nav>

            </nav>

            <?php
            /**
             * Mobile menu
             */
            if ( is_singular('docs') ) {
                get_template_part( 'template-parts/header-elements/doc-mobile-menu' );
            } else {
                get_template_part( 'template-parts/header-elements/mobile-menu' );
            }

            /**
             * Page Title-bar
             */
            get_template_part( 'template-parts/header-elements/titlebar' );

            /**
             * Search banner area
             */

            if ( hovard_is_search_banner() == '1' ) {
                get_template_part('template-parts/header-elements/search-banner/sbnr', hovard_search_banner());
            }