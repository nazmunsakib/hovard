<?php
$opt         = get_option( 'hovard_opt' );
$blog_layout = ! empty( $opt['blog_layout'] ) ? $opt['blog_layout'] : '';
if ( $blog_layout ):
	?>
    <article <?php post_class( 'hovard-blog-post col-span-1 relative z-10' ); ?> >
		<?php
		$info_box_margin_top = '';
		if ( has_post_thumbnail() ):
			?>
            <span class="absolute top-0 left-0 inline-block bg-sienna font-rufina font-bold text-title10 text-white py-2.5 px-7.5"><?php echo esc_html( get_the_date() ); ?> </span>
            <a href="<?php the_permalink(); ?>">
				<?php
				$info_box_margin_top = '-mt-22.5';
				the_post_thumbnail( 'hovard_845x830' );
				?>
            </a>
		<?php endif; ?>
        <div class="post-info-box bg-white shadow-custom7 rounded-tl-lg2 rounded-bl-lg2 ml-5  relative z-10 px-9 py-7.5 <?php echo esc_attr( $info_box_margin_top ); ?>">
    <span class="font-ibmplexmono font-medium text-para text-oceangreen tracking-l1 inline-block">
       <?php the_category( ",", " ", get_the_ID() ); ?>
    </span>

            <h4 class="font-rufina font-bold text-subtitle8 text-shaft duration-300 ease-in-out mt-1.5 hover:text-sienna">
                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
            </h4>

            <ul class="flex flex-wrap gap-0 xsm:gap-2 md:gap-6 mt-2.5">
                <li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor"><i
                            class="ti-comments text-oceangreen mr-2.5"></i><?php echo esc_html( get_comments_number() );
					echo esc_html__( ' Comment', 'hovard' ); ?></li>
                <li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor"><i
                            class="ti-time text-oceangreen mr-2.5"></i><?php hovard_reading_time(); ?></li>
            </ul>
			<?php if ( ! get_the_title() ): ?>
                <a href="<?php the_permalink(); ?>"
                   class="read-more-btn"><?php esc_attr_e( 'Read More', 'hovard' ); ?></a>
			<?php endif; ?>
        </div>
    </article>
<?php
endif;
?>

<article <?php post_class( 'hovard-blog-post-list relative z-10 bg-white shadow-custom7 rounded-lg2 rounded-lg2 z-10 px-9 py-7.5' ); ?> >
    <div class="lis-post-thumb ">
		<?php
		if ( has_post_thumbnail() ):
			?>
            <a href="<?php the_permalink(); ?>">
				<?php
				the_post_thumbnail( 'hovard_845x830' );
				?>
            </a>
		<?php endif; ?>
    </div>

    <div class="list-post-info-box relative z-10 ">
        <span class="blog-post-cat font-ibmplexmono font-medium text-para text-oceangreen tracking-l1 inline-block">
           <?php the_category( ", ", " ", get_the_ID() ); ?>
        </span>
        <h4 class="font-rufina font-bold text-subtitle8 text-shaft duration-300 ease-in-out mt-1.5 hover:text-sienna">
            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
        </h4>
        <ul class="blog-post-meta flex flex-wrap gap-0 xsm:gap-2 md:gap-6 mt-2.5">
            <li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor"><i
                        class="ti-comments text-oceangreen mr-2.5"></i><?php echo esc_html( get_comments_number() );
				echo esc_html__( ' Comment', 'hovard' ); ?></li>
            <li class="flex items-center font-ibmplexmono font-normal text-para4 text-emperor"><i
                        class="ti-time text-oceangreen mr-2.5"></i><?php hovard_reading_time(); ?></li>
        </ul>
		<?php the_excerpt(); ?>

		<?php if ( ! get_the_title() ): ?>
            <a href="<?php the_permalink(); ?>" class="read-more-btn"><?php esc_attr_e( 'Read More', 'hovard' ); ?></a>
		<?php endif; ?>
    </div>

</article>

