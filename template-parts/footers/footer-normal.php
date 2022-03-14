<?php
$opt = get_option('docy_opt' );
$copyright_text = !empty($opt['copyright_txt']) ? $opt['copyright_txt'] : esc_html__( '© 2021 Spider-Themes. All rights reserved', 'docy' );
$right_content = !empty($opt['right_content']) ? $opt['right_content'] : '';
$footer_visibility = function_exists('get_field' ) ? get_field('footer_visibility' ) : '1';
$footer_background_color = function_exists('get_field' ) ? get_field('footer_background_color' ) : '';
$has_bg = !empty($footer_background_color) ? 'has_bg_color' : '';
$footer_visibility = isset($footer_visibility) ? $footer_visibility : '1';

$is_preset_footer = isset( $opt['is_footer_columns_preset'] ) ? $opt['is_footer_columns_preset'] : '';
$is_preset_footer = $is_preset_footer == '1' ? 'preset_footer' : '';
?>
<footer class="doc_footer_area <?php echo !is_active_sidebar('footer_widgets') ? 'no_footer_widgets' : ''; ?>">
    <?php if ( is_active_sidebar('footer_widgets') ) : ?>
        <div class="doc_footer_top <?php echo esc_attr($has_bg) ?>">
            <div class="container">
                <div class="row doc_service_list_widget <?php echo esc_attr($is_preset_footer) ?>">
                    <?php dynamic_sidebar('footer_widgets') ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="doc_footer_bottom">
        <div class="container d-flex justify-content-between">
            <ul class="doc_footer_menu list-unstyled wow fadeInUp" data-wow-delay="0.2s">
                <?php
                $footer_btm_links = !empty($opt['footer_btm_links']) ? $opt['footer_btm_links'] : '';
                if ( !empty($footer_btm_links) ) {
                    foreach ($footer_btm_links as $footer_btm_link) {
                        echo "<li><a href='{$footer_btm_link['url']}'>{$footer_btm_link['title']}</a></li>";
                    }
                }
                ?>
            </ul>
            <?php
            $copyright_text = !empty($opt['copyright_txt']) ? $opt['copyright_txt'] : esc_html__('© 2021 Spider-Themes. All rights reserved', 'docy');
            echo wp_kses_post(wpautop($copyright_text));
            ?>
        </div>
    </div>
</footer>