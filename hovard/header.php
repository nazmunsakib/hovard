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
$opt      = get_option( 'hovard_opt' );
$my_theme = wp_get_theme( 'hovard' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <!-- Theme Version -->
    <meta name="hovard-version" content="<?php echo esc_attr( $my_theme->Version ) ?>">
    <!-- Charset Meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
        x-data="{ 'darkMode': true, sidebarOpen: false }"
        x-init=" darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{'dark': darkMode === true}">
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();

	$logo        = ! empty( $opt['main_logo']['url'] ) ? $opt['main_logo']['url'] : '';
	$retina_logo = ! empty( $opt['retina_logo']['url'] ) ? $opt['retina_logo']['url'] : '';
}

?>
<!-- Page Wrapper -->
<div class="bg-texture dark:bg-darkTexture bg-fixed relative w-full min-h-screen overflow-hidden ">

    <header class="hovard-site-header xl:bg-none dark:xl:bg-none bg-texture3 dark:bg-darkTexture2 xl:shadow-none shadow-custom7 fixed top-0 xl:left-25 lg:left-15.5 left-6 xl:right-25 lg:right-15.5 right-6 flex justify-between z-50">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block">
            <img src="<?php echo esc_url( $logo ); ?>" srcset="<?php echo esc_url( $retina_logo ); ?> 2x" alt="Logo">
        </a>
		<?php get_template_part( 'template-parts/header-elements/side-menu' ); ?>
    </header>