<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hovard
 */

get_header();
$opt = get_option( 'hovard_opt' );

$single_wrapper = is_active_sidebar( "sidebar_widgets" ) ? "md:w-720 lg:w-900 2xl:w-1045 mx-6 md:ml-auto md:mr-auto xl:mr-25 py-18.5 xl:py-25" : 'md:w-720 lg:w-900 2xl:w-1045 mx-6 md:mx-auto py-18.5 xl:py-25';
if ( is_active_sidebar( "sidebar_widgets" ) ):
?>
<div class="flex">
    <div class="w-560 mx-25 py-25 xl:block hidden">
        <div class="blog_sidebar bg-texture3 dark:bg-darkTexture2 px-7.5 lg:px-10 xl:px-15 2xl:px-20 pb-12.5 lg:pb-15 xl:pb-20 pt-10 lg:pt-12.5 xl:pt-17.5 relative z-10">
			<?php get_sidebar(); ?>
        </div>
    </div>
	<?php
	endif;
	?>
    <div class="<?php echo esc_attr( $single_wrapper ); ?>">
        <!-- Main Content -->
        <div class="bg-texture3 dark:bg-darkTexture2 px-7.5 lg:px-10 xl:px-15 2xl:px-20 pb-12.5 lg:pb-15 xl:pb-20 pt-10 lg:pt-12.5 xl:pt-17.5 relative z-10">
			<?php
			if ( is_home() ) {
				get_template_part( 'template-parts/contents/blog-heading' );
			}
			$blog_layout = ( ! empty( $opt['blog_layout'] ) && 'gird' == $opt['blog_layout'] ) ? 'grid grid-cols-1 md:grid-cols-2 gap-x-7.5 gap-y-7.5 lg:gap-y-10 xl:gap-y-15' : '';
			?>
            <div class="<?php echo esc_attr( $blog_layout ); ?>">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/contents/content' );
				endwhile;
				wp_reset_postdata();
				?>
            </div>
            <div class="blog-nabigation col-span-1 md:col-span-2 text-center">
				<?php
				hovard_helper()->pagination();
				?>
            </div>
        </div>
        <!-- Main Content -->
    </div>
</div>
<?php
get_footer();
?>

