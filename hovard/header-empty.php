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
<body <?php body_class(); ?>
        x-data="{ page: 'about', 'darkMode': true, sidebarOpen: false }"
        x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{'dark': darkMode === true}"
>
<?php
if ( function_exists('wp_body_open') ) {
	wp_body_open();
}
?>
<div class="overflow-hidden ">