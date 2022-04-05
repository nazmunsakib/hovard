<?php
$user_desc = get_the_author_meta( 'description' );
$user_name = get_the_author_meta( 'display_name' );
$user_url = get_the_author_meta( 'user_url' );
$user_id = get_the_author_meta( 'ID' );
?>
<!-- Tag Area -->
<div class="flex flex-wrap gap-4 md:gap-0 md:items-center md:justify-between pt-10 pb-12">

	<ul class="flex flex-wrap gap-2.5">
		<?php
		if ( has_tag() ) :
			?>

			<li class="font-rufina font-bold text-subtitle5 text-shaft dark:text-white"><?php echo esc_html__('Tags:', 'hovard'); ?></li>
			<?php the_tags('<li class="font-ibmplexmono font-normal text-para7 text-emperor dark:text-silver"> ', ', ', '</li>' ); ?>

		<?php
		endif;
		?>
	</ul>

	<ul class="flex items-center gap-3">
		<li class="font-rufina font-bold text-subtitle5 text-shaft"><?php echo esc_html__('Share:', 'hovard'); ?></li>
		<li class="text-para7 text-emperor dark:text-silver duration-300 ease-in-out hover:text-sienna dark:hover:text-sienna">
			<a href="#"><i class="ti-facebook"></i></a>
		</li>
		<li class="text-para7 text-emperor dark:text-silver duration-300 ease-in-out hover:text-sienna dark:hover:text-sienna">
			<a href="#"><i class="ti-twitter-alt"></i></a>
		</li>
		<li class="text-para7 text-emperor dark:text-silver duration-300 ease-in-out hover:text-sienna dark:hover:text-sienna">
			<a href="#"><i class="ti-pinterest"></i></a>
		</li>
		<li class="text-para7 text-emperor dark:text-silver duration-300 ease-in-out hover:text-sienna dark:hover:text-sienna">
			<a href="#"><i class="ti-linkedin"></i></a>
		</li>
	</ul>

</div>
<!-- Tag Area -->

<!-- Author Area -->
<div class="flex flex-wrap gap-7.5 border-b border-t border-iron dark:border-silver py-10">
	<div class="md:w-[16%] xl:w-[12%]">
		<?php echo get_avatar( $user_id ); ?>
	</div>
	<div class="md:w-3/4 xl:w-[84%]">
		<h4 class="font-rufina font-bold text-title10 text-shaft dark:text-white mb-2.5"><?php echo esc_html( $user_name ); ?></h4>

		<p class="font-ibmplexmono font-normal text-para text-emperor dark:text-silver mb-5">
			<?php echo esc_html( $user_desc ); ?>
		</p>

		<ul class="flex items-center gap-5">
			<li class="text-para7 text-emperor dark:text-silver duration-300 ease-in-out hover:text-sienna dark:hover:text-sienna">
				<a href="#"><i class="ti-facebook"></i></a>
			</li>
			<li class="text-para7 text-emperor dark:text-silver duration-300 ease-in-out hover:text-sienna dark:hover:text-sienna">
				<a href="#"><i class="ti-twitter-alt"></i></a>
			</li>
			<li class="text-para7 text-emperor dark:text-silver duration-300 ease-in-out hover:text-sienna dark:hover:text-sienna">
				<a href="#"><i class="ti-linkedin"></i></a>
			</li>
			<li class="text-para7 text-emperor dark:text-silver duration-300 ease-in-out hover:text-sienna dark:hover:text-sienna">
				<a href="#"><i class="ti-vimeo-alt"></i></a>
			</li>
		</ul>
	</div>
</div>
<!-- Author Area -->