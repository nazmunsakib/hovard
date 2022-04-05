<div <?php post_class( 'search-post-item col-span-1 relative z-10' ); ?>>
    <div class="b_top_post_content ">
		<?php
		if ( is_sticky() ) {
			echo '<p class="sticky-label">' . esc_html__( 'Featured', 'docy' ) . '</p>';
		}
		?>

        <a href="<?php the_permalink(); ?>">
            <h3 class="title font-rufina font-bold text-title6 xl:text-title6 text-shaft dark:text-white mb-6"><?php the_title() ?></h3>
        </a>
		<?php echo strip_shortcodes( Hovard_helper()->excerpt( 'blog_excerpt', false ) ); ?>
    </div>
</div>