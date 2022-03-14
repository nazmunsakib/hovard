<?php
$thumb_size = is_active_sidebar( 'sidebar_widgets' ) ? 'docy_770x400' : 'full';
$opt = get_option('docy_opt');
$blog_continue_read = !empty($opt['blog_continue_read']) ? $opt['blog_continue_read'] : esc_html__( 'Continue Reading', 'docy' );
$post_title_length = isset($opt['post_title_length']) ? $opt['post_title_length'] : '';
$is_post_meta = isset($opt['is_post_meta']) ? $opt['is_post_meta'] : '1';
$is_post_author = isset($opt['is_post_author']) ? $opt['is_post_author'] : '1';
$post_author_id = get_post_field( 'post_author', get_the_ID() );
?>

<div <?php post_class('shadow-sm blog_classic_item'); ?>>
    <?php
    if ( !is_search() ) {
        the_post_thumbnail($thumb_size);
    }
    ?>
    <div class="b_top_post_content">
        <?php
        if ( is_sticky() ) {
            echo '<p class="sticky-label">'.esc_html__( 'Featured', 'docy' ).'</p>';
        }

        include ('post-tag.php');
        ?>

        <a href="<?php the_permalink(); ?>">
            <h3 class="title"><?php the_title() ?></h3>
        </a>
        <?php echo strip_shortcodes(Docy_helper()->excerpt( 'blog_excerpt', false)); ?>
        <div class="d-flex justify-content-between p_bottom">
            <a href="<?php the_permalink(); ?>" class="learn_btn">
                <?php echo esc_html($blog_continue_read) ?>
                <i class="<?php docy_arrow_left_right() ?>"></i>
            </a>
            <?php
            if ( $is_post_author == '1' ) {
                if ( $is_post_meta == '1' ) {
                    ?>
                    <div class="media d-flex post_author">
                        <div class="round_img">
                            <?php Docy_helper()->post_author_avatar(); ?>
                        </div>
                        <div class="media-body author_text">
                            <a href="<?php echo get_author_posts_url($post_author_id) ?>">
                                <h4><?php echo get_the_author_meta('display_name') ?></h4>
                            </a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>