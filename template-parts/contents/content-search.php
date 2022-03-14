<?php
$thumb_size = is_active_sidebar( 'sidebar_widgets' ) ? 'docy_770x400' : 'full';
$opt = get_option('docy_opt');
$blog_continue_read = !empty($opt['blog_continue_read']) ? $opt['blog_continue_read'] : esc_html__( 'Continue Reading', 'docy' );
$post_title_length = isset($opt['post_title_length']) ? $opt['post_title_length'] : '';
$is_post_meta = isset($opt['is_post_meta']) ? $opt['is_post_meta'] : '1';
$is_post_author = isset($opt['is_post_author']) ? $opt['is_post_author'] : '1';
$post_author_id = get_post_field( 'post_author', get_the_ID() );
?>

<div <?php post_class('search-post-item mb-5'); ?>>
    <div class="b_top_post_content">
        <?php
        if ( is_sticky() ) {
            echo '<p class="sticky-label">'.esc_html__( 'Featured', 'docy' ).'</p>';
        }
        docy_post_breadcrumbs();
        ?>

        <a href="<?php the_permalink(); ?>">
            <h3 class="title"><?php the_title() ?></h3>
        </a>
        <?php echo strip_shortcodes(Docy_helper()->excerpt( 'blog_excerpt', false)); ?>
    </div>
</div>