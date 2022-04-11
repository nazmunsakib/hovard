<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hovard
 */
get_header();
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
        <article class="blog_info bg-texture3 dark:bg-darkTexture2 px-7.5 lg:px-10 xl:px-15 2xl:px-20 pb-12.5 lg:pb-15 xl:pb-20 pt-10 lg:pt-12.5 xl:pt-17.5 relative z-10">

            <!-- Blog Area -->
            <div class="font-ibmplexmono font-normal text-para text-emperor ">
                <div class="single-blog-content blog_body anchor-enabled font-ibmplexmono font-normal text-para text-emperor dark:text-silver mb-5">
					<?php
					while ( have_posts() ) : the_post();
						$user_name = get_the_author_meta( 'display_name' );
						$user_url  = get_the_author_meta( 'user_url' );
						the_post_thumbnail( 'large', [ 'class' => 'w-full' ] );

						?>

                        <div class="inline-block bg-oceangreen font-ibmplexmono font-medium text-para3 text-white rounded-[3px] py-1.5 px-4 mt-10 mb-7.5">
							<?php the_category( ", ", " ", get_the_ID() ); ?>
                        </div>

                        <h1 class="font-rufina font-bold text-title6 xl:text-title11 text-shaft dark:text-white mb-6"><?php the_title(); ?></h1>

                        <ul class="flex flex-wrap xsm:gap-6 mb-2.5">
                            <li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor dark:text-silver">
                                <a href="<?php echo esc_url( $user_url ); ?>"><i
                                            class="ti-user text-sienna mr-2.5"></i><?php echo esc_html( $user_name ); ?>
                                </a>
                            </li>
                            <li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor dark:text-silver">
                                <i
                                        class="ti-calendar text-sienna mr-2.5"></i><?php echo esc_html( get_the_date( 'F j, Y' ) ); ?>
                            </li>
                        </ul>
                    <div class="blog-content">
						<?php
						the_content();
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'hovard' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'hovard' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );

					endwhile;
					?>
                    </div>
                </div>
				<?php
				// Related posts
				if ( is_singular( 'post' ) ) {
					get_template_part( 'template-parts/single-post/author-info' );
					get_template_part( 'template-parts/single-post/related-posts' );
				}
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
            </div>
            <!-- Blog Area -->
        </article>
        <!-- Main Content -->
    </div>
    </div>
<?php
get_footer();
?>