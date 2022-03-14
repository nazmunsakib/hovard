<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hovard
 */
get_header();
?>
    <div class="single-blog-area w-3/4 bg-texture3 px-7.5 py-7.5 ml-[270px]"  x-show="page === 'blog-single'">
        <!-- Blog Area -->
        <div class="font-ibmplexmono font-normal text-para text-emperor pt-20 pb-12.5">
            <div class="single-blog-content">
	            <?php

	            while ( have_posts() ) : the_post();
		            $user_desc = get_the_author_meta( 'description' );
		            $user_name = get_the_author_meta( 'display_name' );
		            $user_url = get_the_author_meta( 'user_url' );
		            $user_id = get_the_author_meta( 'ID' );

		            the_post_thumbnail( 'large', ['class' => 'w-full'] );

		            ?>

                    <div class="inline-block bg-oceangreen font-ibmplexmono font-medium text-para3 text-white rounded-[3px] py-1.5 px-4 mt-10 mb-7.5">
			            <?php the_category(", ", " ", get_the_ID() ); ?>
                    </div>

                    <h2 class="font-rufina font-bold text-title11 text-shaft mb-6"><?php the_title(); ?></h2>

                    <ul class="flex gap-6 mb-2.5">
                        <li class="flex capitalize items-center font-ibmplexmono font-normal text-para4 text-emperor">
                            <a href="<?php echo esc_url( $user_url ); ?>"><i class="ti-user text-sienna mr-2.5"></i><?php echo esc_html( $user_name ); ?></a>
                        </li>
                        <li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor"><i class="ti-calendar text-sienna mr-2.5"></i><?php echo esc_html( get_the_date('F j, Y') ); ?></li>
                    </ul>

                <?php

		            the_content();

	            endwhile;
	            ?>
            </div>

            <!-- Tag Area -->
            <div class="flex items-center justify-between pt-10 pb-12">

                <ul class="flex gap-2.5">
	                <?php
	                if ( has_tag() ) :
                    ?>

                    <li class="font-rufina font-bold text-subtitle5 text-shaft"><?php echo esc_html__('Tags:', 'hovard'); ?></li>
                    <?php the_tags('<li class="font-ibmplexmono font-normal text-para7 text-emperor"> ', ', ', '</li>' ); ?>

	                <?php
                    endif;
                    ?>
                </ul>

                <ul class="flex items-center gap-3">
                    <li class="font-rufina font-bold text-subtitle5 text-shaft"><?php echo esc_html__('Share:', 'hovard'); ?></li>
                    <li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
                        <a href="#"><i class="ti-facebook"></i></a>
                    </li>
                    <li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                    </li>
                    <li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </li>
                    <li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
                        <a href="#"><i class="ti-linkedin"></i></a>
                    </li>
                </ul>

            </div>
            <!-- Tag Area -->

            <!-- Author Area -->
            <div class="flex gap-7.5 border-b border-t border-iron py-10">
                <div>
	                <?php echo get_avatar( $user_id ); ?>
                </div>
                <div>
                    <h4 class="font-rufina font-bold text-title10 text-shaft mb-2.5"><?php echo esc_html( $user_name ); ?></h4>

                    <p class="font-ibmplexmono font-normal text-para text-emperor mb-5">
	                    <?php echo esc_html( $user_desc ); ?>
                    </p>

                    <ul class="flex items-center gap-5">
                        <li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
                            <a href="#"><i class="ti-facebook"></i></a>
                        </li>
                        <li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                        </li>
                        <li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
                            <a href="#"><i class="ti-linkedin"></i></a>
                        </li>
                        <li class="text-para7 text-emperor duration-300 ease-in-out hover:text-sienna">
                            <a href="#"><i class="ti-vimeo-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Author Area -->

			<?php
			// Related posts
			if ( is_singular('post') ) {
				get_template_part( 'template-parts/single-post/related-posts' );
			}

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

        </div>
        <!-- Blog Area -->
    </div>

<?php
get_footer();
?>