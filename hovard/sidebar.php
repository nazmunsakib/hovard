<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hovard
 */

if ( ! is_active_sidebar( 'sidebar_widgets' ) ) {
	return;
}
?>


<div class="blog_sidebar pl-40">
    <?php dynamic_sidebar( 'sidebar_widgets' ); ?>
</div>
