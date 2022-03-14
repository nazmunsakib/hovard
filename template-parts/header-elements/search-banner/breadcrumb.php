<?php
if ( is_singular('docs') || is_post_type_archive('docs') ) {
    $breadcrumb_container = Docy_helper()->page_width() == 'full-width' ? 'container-fluid pl-60 pr-60' : 'container custom_container';
} else {
    $breadcrumb_container = 'container';
    if ( is_singular('docs') || is_post_type_archive('docs') ) {
        $breadcrumb_container = 'container custom_container';
    }
}
?>

<section class="page_breadcrumb">
    <div class="<?php echo esc_attr($breadcrumb_container) ?>">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <nav aria-label="breadcrumb">
                    <?php docy_post_breadcrumbs(); ?>
                </nav>
            </div>
            <div class="col-lg-3 col-md-4">
                <span class="date">
                    <i class="<?php echo is_rtl() ? 'icon_quotations' : 'icon_clock_alt'; ?>"></i>
                    <?php esc_html_e( 'Updated on', 'docy' ); ?>
                    <?php docy_modified_date(); ?>
                </span>
            </div>
        </div>
    </div>
</section>