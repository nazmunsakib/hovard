<?php
/**
 * The template for displaying elementor template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hovard
 */
get_header();
while ( have_posts() ) : the_post(); ?>
	<div class="md:w-720 lg:w-900 2xl:w-1045 mx-6 md:mx-auto py-18.5 xl:py-25">
		<div class="elementor -title">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="elementor-template-preview">
			<?php the_content(); ?>
		</div>
	</div>
<?php
endwhile; // End of the loop.
get_footer();