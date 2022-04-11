<?php
$opt              = get_option( 'hovard_opt' );
$logo             = ! empty( $opt['main_logo']['url'] ) ? $opt['main_logo']['url'] : '';
$retina_logo      = ! empty( $opt['retina_logo']['url'] ) ? $opt['retina_logo']['url'] : '';
$copywright_text  = ! empty( $opt['copyright_text'] ) ? $opt['copyright_text'] : '';
$is_dark_switcher = ! empty( $opt['is_dark_switcher'] ) ? $opt['is_dark_switcher'] : '';
?>
<!-- Sidebar -->
<div class="flex xl:flex-col-reverse items-center gap-2.5 xl:mt-2.5">
	<?php if ( $is_dark_switcher ) : ?>
        <!-- Toggle switch begins -->
        <div class="xl:rotate-90 xl:fixed xl:top-1/2 xl:right-14.5">
            <label class="text-para8 font-ibmplexmono font-medium text-shaft inline-block m-0 relative">
                <input
                        type="checkbox"
                        name="color_mode"
                        id="color_mode"
                        :value="darkMode"
                        @change="darkMode = !darkMode"
                        class="cursor-pointer w-full h-6.5 opacity-0 absolute top-0 z-10 m-0"
                />
                <label
                        for="color_mode"
                        data-on="Dark"
                        data-off="Light"
                        class="btn-color-mode-switch-inner m-0 w-35 h-7.5 bg-iron rounded-3xl overflow-hidden relative transition-all duration-500 block
                    before:content-[attr(data-on)] before:absolute before:top-1.5 before:right-5
                    after:content-[attr(data-off)] after:w-17.5 after:h-6.5 after:bg-white after:rounded-3xl after:absolute after:left-0.5 after:top-0.5 after:text-center after:transition-all after:duration-500 after:shadow-sm after:py-1
                    dark:bg-[#3c3c3c] dark:text-white dark:after:content-[attr(data-on)] dark:before:content-[attr(data-off)] dark:after:left-17 dark:after:bg-shaft dark:before:right-auto dark:before:left-5"
                ></label>
            </label>
        </div>
        <!-- Toggle switch ends -->
	<?php endif; ?>

    <button class="bg-sienna w-12.5 h-12.5 rounded-1/2 flex items-center justify-center"
            @click="sidebarOpen = !sidebarOpen">
            <span class="block">
              <span class="block h-[3px] w-6 bg-white my-1 duration-300 ease-in-out"
                    :class="{ 'rotate-45 translate-y-2': sidebarOpen }"></span>
              <span class="block h-[3px] w-3.5 bg-white my-1 duration-300 ease-in-out"
                    :class="{ 'rotate-45 opacity-0 !w-6': sidebarOpen }"></span>
              <span class="block h-[3px] w-5 bg-white my-1 duration-300 ease-in-out"
                    :class="{ '-rotate-45 -translate-y-1.5 !w-6': sidebarOpen }"></span>
            </span>
    </button>
</div>

<aside class="side-menu py-12.5 pb-11 fixed right-0 top-25 bottom-0 bg-texture2 text-center overflow-y-auto no-scrollbar transition-all duration-300 z-50"
       :class="{ 'translate-x-full': !sidebarOpen }">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo inline-block mb-12.5 lg:mb-24">
		<?php if ( $logo ): ?>
            <img src="<?php echo esc_url( $logo ); ?>" srcset="<?php echo esc_url( $retina_logo ); ?> 2x"
                 alt="<?php esc_attr_e( 'Logo', 'hovard' ); ?>">
		<?php else: ?>
            <h3><?php bloginfo( 'name' ); ?></h3>
		<?php endif; ?>
    </a>

    <nav>
		<?php
		if ( has_nav_menu( 'main_menu' ) ) {
			wp_nav_menu( array(
				'menu'           => 'main_menu',
				'theme_location' => 'main_menu',
				'container'      => null,
				'walker'         => new Hovard_Nav_Walker(),
				'depth'          => 4
			) );
		}
		?>
    </nav>

    <ul class="flex gap-3.5 mt-25 lg:mt-44 mb-8 px-10 lg:px-19">
		<?php
		hovard_helper()->social_links();
		?>
    </ul>

    <p class="font-ibmplexmono font-normal text-white text-para"><?php echo wp_kses_post( $copywright_text ); ?></p>
</aside>
<!-- Sidebar -->