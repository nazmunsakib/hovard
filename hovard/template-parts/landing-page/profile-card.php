<?php
$opt              = get_option( 'hovard_opt' );
$copywright_text  = ! empty( $opt['copyright_text'] ) ? $opt['copyright_text'] : '';
$user_image       = function_exists( 'get_field' ) ? get_field( 'user_image' ) : '';
$user_name        = function_exists( 'get_field' ) ? get_field( 'user_name' ) : '';
$user_designation = function_exists( 'get_field' ) ? get_field( 'user_designation_' ) : '';
$user_bio         = function_exists( 'get_field' ) ? get_field( 'user_bio' ) : '';
?>

<!-- Profile Card -->
<div class="lg:bg-none lg:dark:bg-none lg:shadow-none bg-texture3 dark:bg-darkTexture2 shadow-custom7 fixed top-0 md:left-6 left-4 md:right-6 right-4 flex justify-between px-7.5 py-4.5 z-60">

    <button
            class="lg:hidden dark:text-white rotate-90 z-60 duration-300 ease-in-out"
            :class="{ 'rotate-0 !top-15': sidebarOpen }"
            @click="sidebarOpen = !sidebarOpen"
    >
        <i class="ti-more"></i>
    </button>

    <!-- Toggle switch begins -->
    <div class="lg:fixed lg:top-1/2 2xl:left-[14%] xl:left-[3%] lg:-left-[5%] lg:-rotate-90">
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
                    class="m-0 w-35 h-7.5 bg-iron rounded-3xl overflow-hidden relative transition-all duration-500 block
                before:content-[attr(data-on)] before:absolute before:top-1.5 before:right-5
                after:content-[attr(data-off)] after:w-17.5 after:h-6.5 after:bg-white after:rounded-3xl after:absolute after:left-0.5 after:top-0.5 after:text-center after:transition-all after:duration-500 after:shadow-sm after:py-1
                dark:bg-[#3c3c3c] dark:text-white dark:after:content-[attr(data-on)] dark:before:content-[attr(data-off)] dark:after:left-17 dark:after:bg-shaft dark:before:right-auto dark:before:left-5"
            ></label>
        </label>
    </div>
    <!-- Toggle switch ends -->

</div>

<div
        class="w-67.5 bg-texture2 dark:bg-texture6 text-center py-15 px-6 fixed lg:top-20 xl:top-25 lg:bottom-20 xl:bottom-25 overflow-y-auto no-scrollbar lg:translate-x-0 transition-all duration-300 z-60"
        :class="{ '-translate-x-80': !sidebarOpen }"
>
    <img class="w-37 h-37 mx-auto rounded-1/2 ring-4 ring-white bg-cloud mb-9"
         src="<?php echo esc_url( $user_image ); ?>" alt="User"/>

    <h1 class="font-playfair font-bold text-white text-title mb-5"><?php echo esc_html( $user_name ); ?></h1>

    <h2 class="font-ibmplexmono font-normal text-white text-subtitle mb-10"><?php echo esc_html( $user_designation ); ?></h2>

    <p class="font-ibmplexmono font-normal text-white text-para mb-10">
		<?php echo wp_kses_post( $user_bio ); ?>
    </p>

    <ul class="flex items-center justify-center gap-2">
		<?php
		hovard_helper()->social_links();
		?>
    </ul>

    <p class="font-ibmplexmono font-normal text-white text-para mt-30"><?php echo wp_kses_post( $copywright_text ); ?></p>
</div>
<!-- Profile Card -->