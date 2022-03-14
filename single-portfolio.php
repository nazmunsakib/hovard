<?php
/**
 * The template for displaying all single portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-( custom post type )
 *
 * @package hovard
 */
get_header();
?>

<div class="portfolio-single-wrap w-3/4 bg-texture3 px-7.5 py-7.5 ml-[270px]" >

	<!-- Portfolio details Area -->
	<div class="pt-20 pb-10">
        <?php
        while ( have_posts() ): the_post();
        ?>

            <h2 class="font-rufina font-bold text-title6 text-shaft mb-14 w-3/5"><?php the_title(); ?></h2>

            <?php the_content(); ?>

            <ul class="flex items-center justify-between">

                <?php if ( get_previous_post_link() ): ?>
                    <li class="group flex items-center gap-2.5 font-ibmplexmono font-medium text-subtitle text-emperor duration-300 ease-out hover:text-sienna">
                        <span><img class="duration-300 ease-out group-hover:img-sienna" src="<?php echo  esc_url( get_template_directory_uri() ); ?>/assets/img/prev-link-icon.png" alt="Icon" /></span>
                        <span><?php echo get_previous_post_link( '%link', esc_html__('Previous Project', 'hovard') ); ?></span>
                    </li>
                <?php
                endif;

                if ( get_next_post_link() ):
                ?>
                    <li class="group flex items-center gap-2.5 font-ibmplexmono font-medium text-subtitle text-emperor duration-300 ease-out hover:text-sienna">
                        <span><?php echo get_next_post_link( '%link', esc_html__('Next Project', 'hovard') ); ?></span>
                        <span><img class="duration-300 ease-out group-hover:img-sienna" src="<?php  echo  esc_url( get_template_directory_uri() ); ?>/assets/img/next-link-icon.png" alt="Icon" /></span>
                    </li>
                <?php
                endif;
                ?>

            </ul>

        <?php
        endwhile;
        ?>

	</div>
	<!-- Portfolio details Area -->

</div>

<?php
get_footer();
?>
