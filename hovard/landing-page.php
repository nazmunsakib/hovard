<?php
/**
 * Template Name: Landing Page
 */
get_header('empty');
$top_left_shape = function_exists('get_field') ? get_field('top_left_shape') : '';
$bottom_right_shape = function_exists('get_field') ? get_field('bottom_right_shape') : '';

?>
	<!-- Page Wrapper -->
	<div class="bg-texture dark:bg-darkTexture bg-fixed relative w-full min-h-screen">
		<!-- Start corner Image -->
		<img
			class="fixed top-0 left-0 xl:block hidden"
			x-intersect="$el.classList.add('animate__animated', 'animate__fadeInLeft')"
			src="<?php echo esc_url( $top_left_shape ); ?>"
			alt="shape"
		/>
		<img
			class="fixed bottom-0 right-0 xl:block hidden"
			x-intersect="$el.classList.add('animate__animated', 'animate__fadeInRight')"
			src="<?php echo esc_url( $bottom_right_shape ); ?>"
			alt="shape"
		/>
		<!-- End corner Image -->

		<div class="xl:w-1170 lg:w-960 md:w-720 md:mx-auto mx-4 xl:py-25 lg:py-20 py-15 flex">

			<?php get_template_part('template-parts/landing-page/profile-card');  ?>

			<!-- Main Content -->
			<div class="w-full lg:w-690 xl:w-900 bg-texture3 dark:bg-darkTexture2 px-7.5 py-7.5 lg:ml-[270px] z-50">
				<?php
				while ( have_posts() ) {
					the_post();
					the_content();
				}
				?>
			</div>
			<!-- Main Content -->

		</div>
	</div>
	<!-- Page Wrapper -->

<?php
get_footer('empty');
?>