<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package hovard
 */

get_header();
$blog_column = is_active_sidebar( 'sidebar_widgets' ) ? '8' : '12';
$blog_layout = !empty($opt['blog_layout']) ? $opt['blog_layout'] : 'list';
?>
<section class="doc_blog_classic_area sec_pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-<?php echo esc_attr($blog_column) ?>">
                <div class="search-main">
                    <div class="searchbar-tabs mb-5">
                        <a href="?s=<?php the_search_query(); ?>" class="tab-item <?php hovard_is_search_tab_active('all') ?>" value="all">
                            <?php esc_html_e('All', 'hovard'); ?>
                        </a>
                        <?php if ( class_exists('WeDocs') ) : ?>
                            <a href="?s=<?php the_search_query(); ?>&post_type=docs" class="tab-item <?php hovard_is_search_tab_active('docs') ?>" value="docs">
                                <?php esc_html_e('Docs', 'hovard'); ?>
                            </a>
                        <?php endif; ?>
                        <?php if ( class_exists('bbPress') ) : ?>
                            <a href="?bbp_search=<?php the_search_query(); ?>" class="tab-item <?php hovard_is_search_tab_active('forum') ?>" value="forum">
                                <?php esc_html_e('Forum', 'hovard'); ?>
                            </a>
                        <?php endif; ?>
                        <a href="?s=<?php the_search_query(); ?>&post_type=post" class="tab-item <?php hovard_is_search_tab_active('post') ?>" value="blog">
                            <?php esc_html_e('Blog', 'hovard'); ?>
                        </a>
                    </div>
                    <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) : the_post();
                            get_template_part('template-parts/contents/content', 'search');
                        endwhile;
                    }
                    else {
                        get_template_part( 'template-parts/contents/content', 'none' );
                    }
                    Hovard_helper()->pagination();
                    ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php
get_footer();