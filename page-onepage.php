<?php
/**
 * Template Name: Onepage Doc
 */

get_header('onepage');

wp_enqueue_script('hovard-onepage');
?>

<?php
$opt = get_option('hovard_opt');

$parent = function_exists('get_field') ? get_field('doc_id') : '';

$children = wp_list_pages(array(
	'title_li' => '',
	'order' => 'menu_order',
	'child_of' => $parent,
	'echo' => false,
	'post_type' => 'docs',
	'walker' => new Hovard_Walker_Docs_Onepage(),
));

$doc_width = function_exists('get_field') ? get_field('doc_width') : '';
$doc_column = $doc_width == 'full-width' ? '2' : '3';
?>

<section class="doc_documentation_area onepage_doc_area page_wrapper" id="sticky_doc">
	<div class="overlay_bg"></div>
	<div class="container-fluid pl-60 pr-60">
		<div class="row doc-container">
			<div class="col-xl-3 col-xxl-2 doc_mobile_menu doc-sidebar display_none">
                <aside class="doc_left_sidebarlist">
                    <h3 class="nav_title">
                        <?php echo get_post_field( 'post_title', $parent, 'display' ); ?>
                    </h3>
                    <?php
                    if ( $children ) :
                        ?>
                        <div class="scroll">
                            <ul class="list-unstyled nav-sidebar doc-nav">
                                <?php
                                echo wp_list_pages(array(
                                    'title_li' => '',
                                    'order' => 'menu_order',
                                    'child_of' => $parent,
                                    'echo' => false,
                                    'post_type' => 'docs',
                                    'walker' => new Hovard_Walker_Docs_Onepage(),
                                    'depth' => 2
                                ));
                                ?>
                            </ul>
                        </div>
                    <?php
                    endif;
                    ?>
                </aside>
			</div>
			<div class="col-xl-6 col-xxl-8">
				<div class="documentation_info" id="post">
                    <?php
                    $sections = get_children( array(
	                    'post_parent'    => $parent,
	                    'post_type'      => 'docs',
	                    'post_status'    => 'publish',
	                    'orderby'        => 'menu_order',
	                    'order'          => 'ASC',
	                    'posts_per_page' => !empty($settings['show_section_count']) ? $settings['show_section_count'] : -1,
                    ));

                    $i = 0;
                    foreach ( $sections as $doc_item ) {
	                    $child_sections = get_children( array(
		                    'post_parent'    => $doc_item->ID,
		                    'post_type'      => 'docs',
		                    'post_status'    => 'publish',
		                    'orderby'        => 'menu_order',
		                    'order'          => 'ASC',
		                    'posts_per_page' => -1,
	                    ));
                        ?>
                        <article class="documentation_body doc-section onepage-doc-sec" id="<?php echo sanitize_title($doc_item->post_title) ?>" itemscope itemtype="http://schema.org/Article">
                            <div class="shortcode_title">
                                <h2> <?php echo wp_kses_post($doc_item->post_title) ?> </h2>
                            </div>
                            <div class="doc-content">
	                            <?php
	                            $parent_content = \Elementor\Plugin::instance()->frontend->get_builder_content($doc_item->ID);
	                            echo !empty($parent_content) ? $parent_content : apply_filters('the_content', $doc_item->post_content);
	                            ?>
                            </div>

                            <?php
                            if ( $child_sections ) : ?>
                                <div class="articles-list mt-5">
                                    <h4> <?php esc_html_e('Articles', 'hovard'); ?></h4>
                                    <ul class="article_list tag_list">
                                        <?php
                                        foreach ( $child_sections as $child_section ) {
                                            ?>
                                            <li>
                                                <a href="#<?php echo sanitize_title($child_section->post_title) ?>">
                                                    <i class="icon_document_alt"></i><?php echo wp_kses_post($child_section->post_title) ?>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <div class="border_bottom"></div>
                            <?php
                            foreach ( $child_sections as $child_section ) :
                                ?>
                                <div class="child-doc onepage-doc-sec" id="<?php echo sanitize_title($child_section->post_title) ?>">
                                    <div class="shortcode_title">
                                        <h2> <?php echo wp_kses_post($child_section->post_title) ?> </h2>
                                    </div>
                                    <div class="doc-content">
                                        <?php
                                        $child_content = \Elementor\Plugin::instance()->frontend->get_builder_content($child_section->ID);
                                        echo !empty($child_content) ? $child_content : apply_filters('the_content', $child_section->post_content);
                                        ?>
                                    </div>
                                    <div class="border_bottom"></div>
                                </div>
                                <?php
                            endforeach;
                            ?>
                        </article>
                        <?php
                    ++$i;
                    }
                    ?>
				</div>
			</div>
			<div class="col-xl-3 col-xxl-2 doc_right_mobile_menu">
				<div class="open_icon" id="right">
					<i class="arrow_carrot-left"></i>
					<i class="arrow_carrot-right"></i>
				</div>
				<div class="doc_rightsidebar scroll">
                    <div class="pageSideSection">
                        <?php
                        $is_os_dropdown = isset($opt['is_os_dropdown']) ? $opt['is_os_dropdown'] : '1';
                        if ( $is_os_dropdown == '1' ) :
                            wp_enqueue_style( 'bootstrap-select' );
                            wp_enqueue_script( 'bootstrap-select' );
                            if ( !empty($opt['os_options'][0]['title']) ) :
                                ?>
                                <select id="mySelect" name="os">
                                    <?php
                                    foreach ( $opt['os_options'] as $option ) { ?>
                                        <option value="<?php echo sanitize_title($option['title']) ?>" data-content="<?php echo esc_attr($option['url']).' ' . esc_html($option['title']) ?>"> </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            <?php
                            endif;
                        endif;
                        ?>
                        <div id="font-switcher" class="d-flex justify-content-between align-items-center">
                            <?php
                            $is_font_switcher = isset($opt['is_font_switcher']) ? $opt['is_font_switcher'] : '1';
                            if ( $is_font_switcher == '1' ) :
                                wp_enqueue_style( 'hovard-font-size' );
                                wp_enqueue_script( 'hovard-font-size' );
                                ?>
                                <div id="rvfs-controllers" class="fontsize-controllers group">
                                    <div class="btn-group">
                                        <button id="switcher-small" class="rvfs-decrease btn" title="<?php esc_attr_e('Decrease font size', 'hovard'); ?>">A-</button>
                                        <button id="switcher-default" class="rvfs-reset btn" title="<?php esc_attr_e('Default font size', 'hovard'); ?>">A</button>
                                        <button id="switcher-large" class="rvfs-increase btn" title="<?php esc_attr_e('Increase font size', 'hovard'); ?>">A+</button>
                                    </div>
                                </div>
                                <?php
                            endif;
                            $is_print_icon = isset($opt['is_print_icon']) ? $opt['is_print_icon'] : '1';
                            if ( $is_print_icon == '1' ) : ?>
                            <a href="#" class="print"><i class="icon_printer"></i></a>
                            <?php endif; ?>
                        </div>
                        <?php
                        $sidebar_content = function_exists('get_field') ? get_field('right_sidebar_content') : '';
                        if ( !empty($sidebar_content) ) {
                            echo '<div class="onepage-sidebar mt-5 doc_sidebar">';
                            echo do_shortcode( $sidebar_content );
                            echo '</div>';
                        }
                        ?>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();