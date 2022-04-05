<?php
$opt           = get_option( 'hovard_opt' );
$blog_title    = ! empty( $opt['blog_title'] ) ? $opt['blog_title'] : '';
$blog_subtitle = ! empty( $opt['blog_subtitle'] ) ? $opt['blog_subtitle'] : '';
?>
<div>
	<?php if ( $blog_subtitle ): ?>
        <h6 class="font-ibmplexmono font-medium text-subtitle2 text-sienna tracking-l1 inline-block mb-2.5 pr-10 relative before:absolute before:right-0 before:top-1/2 before:-translate-y-1/2 before:w-7.5 before:h-0.5 before:bg-oceangreen before:inline-block">
			<?php echo esc_html( $blog_subtitle ); ?>
        </h6>
	<?php
	endif;;
	if ( $blog_title ):
		?>
        <h2 class="font-rufina font-bold text-title2 text-shaft dark:text-white w-full lg:w-4/5 xl:w-1.1/2 mb-10 xl:mb-12.5 animate__animated animate__fadeInUp">
			<?php echo esc_html( $blog_title ); ?>
        </h2>
	<?php endif; ?>
</div>