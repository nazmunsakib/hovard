<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hovard
 */

get_header();

$opt          = get_option( 'hovard_opt' );
$user_img     = ! empty( $opt['user_img']['url'] ) ? $opt['user_img']['url'] : '';
$page_wrapper = ! empty( $opt['user_img']['url'] ) ? 'md:w-720 lg:w-900 2xl:w-1045 mx-6 md:ml-auto md:mr-auto xl:mr-25 py-18.5 xl:py-25' : 'md:w-720 lg:w-900 2xl:w-1045 mx-6 md:mx-auto py-18.5 xl:py-25';
?>

<?php if ( $user_img ): ?>
    <div class="xl:block hidden fixed top-0 bottom-0 left-0 lg:w-400 2xl:w-660">
        <img src="<?php echo esc_url( $user_img ); ?>" alt="<?php esc_attr_e('User', 'hovard'); ?>"/>
    </div>
<?php
endif;

while ( have_posts() ) : the_post();
	?>
    <div class="<?php echo esc_attr( $page_wrapper ); ?>">
        <!-- Main Content -->
        <div class="bg-texture3 dark:bg-darkTexture2 px-7.5 lg:px-10 xl:px-15 2xl:px-20 pb-12.5 lg:pb-15 xl:pb-20 pt-10 lg:pt-12.5 xl:pt-17.5 relative z-10">
			<?php if ( ! is_front_page() ): ?>
                <h1 class="entry-title font-rufina font-bold text-title2 text-shaft dark:text-white w-full lg:w-4/5 xl:w-1.1/2 mb-10 xl:mb-12.5"><?php the_title(); ?></h1>
			<?php
			endif;
			?>
            <div class="page-content font-ibmplexmono font-normal text-para text-emperor dark:text-silver">
				<?php the_content(); ?>
            </div>
			<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'hovard' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'hovard' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
        </div>
    </div>
<?php
endwhile; // End of the loop.
wp_reset_postdata();

get_footer();

