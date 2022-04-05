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
$user_img     = ! empty( $opt['user_img'] ) ? $opt['user_img'] : '';
$page_wrapper = ! empty( $opt['user_img']['url'] ) ? 'md:w-720 lg:w-900 2xl:w-1045 mx-6 md:ml-auto md:mr-auto xl:mr-25 py-18.5 xl:py-25' : 'md:w-720 lg:w-900 2xl:w-1045 mx-6 md:mx-auto py-18.5 xl:py-25';
if ( $user_img['url'] ):
	?>
    <div class="xl:block hidden fixed top-0 bottom-0 left-0 lg:w-400 2xl:w-660">
        <img src="<?php echo esc_url( $user_img['url'] ); ?>" alt="User"/>
    </div>
<?php
endif;
while ( have_posts() ) : the_post();
	?>
    <div class="<?php echo esc_attr( $page_wrapper ); ?>">
        <!-- Main Content -->
        <div class="bg-texture3 dark:bg-darkTexture2 px-7.5 lg:px-10 xl:px-15 2xl:px-20 pb-12.5 lg:pb-15 xl:pb-20 pt-10 lg:pt-12.5 xl:pt-17.5 relative z-10">

            <h1 class="font-rufina font-bold text-title6 text-shaft dark:text-white mb-6.5 lg:mb-9 xl:mb-14 md:w-3/5"><?php the_title(); ?></h1>
            <div class="font-ibmplexmono font-normal text-para text-emperor dark:text-silver">
				<?php the_content(); ?>
            </div>
            <div class="grid grid-cols-9 gap-7.5 items-center pt-9 pb-6.5 lg:pb-9 xl:pb-14">
                <div class="col-span-9 md:col-span-3">
                    <ul>
						<?php
						if ( function_exists( 'get_field' ) && have_rows( 'project_info' ) ):
							while ( have_rows( 'project_info' ) ): the_row();
								?>
                                <li class="font-ibmplexmono font-normal text-para text-emperor dark:text-silver mb-2.5 last:mb-0">
                                    <span class="font-medium text-shaft dark:text-white">
                                        <?php echo esc_html( get_sub_field( 'info_label' ) ); ?>:
                                    </span>
									<?php echo esc_html( get_sub_field( 'info_content' ) ); ?>
                                </li>
							<?php
							endwhile;
						endif
						?>
                        <li class="font-ibmplexmono font-normal text-para text-emperor dark:text-silver mb-2.5 last:mb-0">
	                        <?php hovard_social_share(); ?>
                        </li>
                    </ul>
                </div>
                <div class="col-span-9 md:col-span-6 font-ibmplexmono font-normal text-para text-emperor dark:text-silver relative before:w-[1px] before:h-full before:bg-iron before:absolute before:hidden md:before:block md:before:-left-5 xl:before:-left-10">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <ul class="flex items-center justify-between">
				<?php if ( get_previous_post_link() ): ?>
                    <li class="group flex items-center gap-2.5 font-ibmplexmono font-medium text-subtitle text-emperor duration-300 ease-out hover:text-sienna dark:text-silver dark:hover:text-sienna">
                        <span><img class="duration-300 ease-out group-hover:img-sienna"
                                   src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/prev-link-icon.png"
                                   alt="Icon"/></span>
                        <span><?php echo get_previous_post_link( '%link', esc_html__( 'Previous Project', 'hovard' ) ); ?></span>
                    </li>
				<?php
				endif;
				if ( get_next_post_link() ):
					?>
                    <li class="group flex items-center gap-2.5 font-ibmplexmono font-medium text-subtitle text-emperor duration-300 ease-out hover:text-sienna dark:text-silver dark:hover:text-sienna">
                        <span><?php echo get_next_post_link( '%link', esc_html__( 'Next Project', 'hovard' ) ); ?></span>
                        <span><img class="duration-300 ease-out group-hover:img-sienna"
                                   src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/next-link-icon.png"
                                   alt="Icon"/></span>
                    </li>
				<?php
				endif;
				?>
            </ul>
        </div>
    </div>
<?php
endwhile; // End of the loop.
wp_reset_postdata();
get_footer();

