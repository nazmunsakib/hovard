<?php

/**
 * Docs Search results
 */
add_action( 'wp_ajax_hovard_search_data_fetch', 'hovard_search_data_fetch' );
add_action( 'wp_ajax_nopriv_hovard_search_data_fetch', 'hovard_search_data_fetch' );
function hovard_search_data_fetch() {
    $opt = get_option('hovard_opt');
    $is_ajax_search_tab = isset($opt['is_ajax_search_tab']) ? $opt['is_ajax_search_tab'] : '';
    global $post;

    if ( class_exists('WeDocs') || class_exists('bbPress') ) :
        if ( $is_ajax_search_tab == '1' ) :
            ?>
            <div class="searchbar-tabs mb-5">
                <?php if ( class_exists('WeDocs') ) : ?>
                    <button type="button" id="search-docs" class="tab-item active" value="docs" onclick="searchDocTab()">
                        <?php esc_html_e('Docs', 'hovard') ?>
                    </button>
                <?php endif; ?>
                <?php if ( class_exists('bbPress') ) : ?>
                    <button type="button" id="search-forum" class="tab-item" value="forum" onclick="searchForumTab()">
                        <?php esc_html_e('Forum', 'hovard') ?>
                    </button>
                <?php endif; ?>
                <button type="button" id="search-blog" class="tab-item" value="blog" onclick="searchBlogTab()">
                    <?php esc_html_e('Blog', 'hovard') ?>
                </button>
            </div>
            <?php
        endif;
    endif;

    $the_query      = new WP_Query([
        'posts_per_page' => 5,
        'post_type'      => 'docs',
        'post_parent'    => 0,
        'fields'         => 'ids',
    ]);
    $unique_parents = array();
    $unique_sections = array();

    echo '<div id="doc-search-results">';

    if ( isset( $_GET[ 'wpml_lang' ] ) ) {
        do_action('wpml_switch_language', $_GET['wpml_lang']);
    }

    if ( $the_query->have_posts() ) :
        $i = 1;
        $search_result_limit = !empty($opt['doc_result_limit']) ? $opt['doc_result_limit'] : 3;
        while ( $the_query->have_posts() ) : $the_query->the_post();
            $parent_title = get_the_title( wp_get_post_parent_id( $post->ID ) );
            $parent_id    = get_the_ID();
            $child_query  = new WP_Query( array( 'post_type' => 'docs', 'post_parent' => $parent_id, 'posts_per_page' => $search_result_limit ) );
            if ( $child_query->have_posts() ) :
                while ( $child_query->have_posts() ) : $child_query->the_post();
                    $parent_of_parent_id  = get_the_ID();
                    $doc_sec_title = get_the_title( $parent_of_parent_id );
                    $child_of_child_query   = new WP_Query( array(
                        'post_type'         => 'docs',
                        's'                 => $_POST['keyword'],
                        'post_parent'       => $parent_of_parent_id,
                        'posts_per_page'    => $search_result_limit,
                    ));
                    if ( $child_of_child_query->have_posts() ) :
                        while ( $child_of_child_query->have_posts() ) : $child_of_child_query->the_post();
                            ?>
                            <div class="search-result-item <?php echo !in_array( $parent_title, $unique_parents ) ? 'parent-doc' : ''; ?>">
                                <?php
                                if ( !in_array( $parent_title, $unique_parents ) ) :
                                    $unique_parents[] = $parent_title;
                                    ?>
                                    <div class="doc-item">
                                        <a href="<?php echo get_the_permalink( $the_query->post->post_parent ); ?>">
                                            <?php echo wp_kses_post($parent_title); ?>
                                        </a>
                                    </div>
                                <?php
                                endif;
                                ?>
                                <div class="doc-list <?php echo !in_array( $doc_sec_title, $unique_sections ) ? 'doc-sec-unique' : ''; ?>">
                                    <span class="doc-section">
                                        <?php
                                        if ( !in_array( $doc_sec_title, $unique_sections ) ) :
                                            $unique_sections[] = $doc_sec_title;
                                            ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php echo wp_kses_post($doc_sec_title); ?>
                                            </a>
                                        <?php endif; ?>
                                    </span>
                                    <span class="doc-article">
                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                    </span>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                endwhile;
            endif;
        endwhile;
    endif;


    echo '</div>';
    if ( class_exists('bbPress') ) {
        echo '<div id="forum-search-results"></div>';
    }
    echo '<div id="blog-search-results"></div>';
    die();
}

/**
 * Docs Search results
 */
add_action( 'wp_ajax_hovard_forum_search_results', 'hovard_forum_search_results' );
add_action( 'wp_ajax_nopriv_hovard_forum_search_results', 'hovard_forum_search_results' );
function hovard_forum_search_results() {
    $opt = get_option('hovard_opt');
    $search_result_limit = !empty($opt['doc_result_limit']) ? $opt['doc_result_limit'] : 5;

    // Forums query
    $forums = new WP_Query( array(
        'post_type'         => 'forum',
        's'                 => $_POST['keyword'],
        'posts_per_page'    => $search_result_limit,
    ));

    if ( $forums->have_posts() ) :
        ?>
        <div class="search-result-item parent-doc">
            <div class="doc-item">
                <a href=""> <?php esc_html_e('Forums', 'hovard') ?> </a>
            </div>
            <?php
            while ( $forums->have_posts() ) : $forums->the_post();
                ?>
                <div class="doc-list ">
                    <span class="doc-article">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title() ?>
                        </a>
                    </span>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <?php
    endif;

    // Topics query
    $topics = new WP_Query( array(
        'post_type'         => 'topic',
        's'                 => $_POST['keyword'],
        'posts_per_page'    => 5,
    ));

    if ( $topics->have_posts() ) :
        ?>
        <div class="search-result-item parent-doc">
            <div class="doc-item">
                <a href=""> <?php esc_html_e('Topics', 'hovard') ?> </a>
            </div>
            <?php
            while ( $topics->have_posts() ) : $topics->the_post();
                ?>
                <div class="doc-list ">
                    <span class="doc-article">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title() ?>
                        </a>
                    </span>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <?php
    endif;

    die();
}

/**
 * Blog Search results
 */
add_action( 'wp_ajax_hovard_blog_search_results', 'hovard_blog_search_results' );
add_action( 'wp_ajax_nopriv_hovard_blog_search_results', 'hovard_blog_search_results' );
function hovard_blog_search_results() {
    $opt = get_option('hovard_opt');
    $search_result_limit = !empty($opt['doc_result_limit']) ? $opt['doc_result_limit'] : 5;

    // Forums query
    $posts = new WP_Query( array(
        'post_type'         => 'post',
        's'                 => $_POST['keyword'],
        'posts_per_page'    => $search_result_limit,
    ));

    if ( $posts->have_posts() ) :
        ?>
        <div class="search-result-item parent-doc">
            <?php
            while ( $posts->have_posts() ) : $posts->the_post();
                ?>
                <div class="doc-list ">
                    <span class="doc-article">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title() ?>
                        </a>
                    </span>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <?php
    endif;
    die();
}


/**
 * Loading Post
 *
 * @return string
 */
add_action( 'wp_ajax_hovard_loading_post', 'hovard_loading_post' );
add_action( 'wp_ajax_nopriv_hovard_loading_post', 'hovard_loading_post' );

/**
 * Loading forum posts
 */
function hovard_loading_post() {
    global $wpdb;

    $nonce = sanitize_text_field( $_POST['nonce'] );
    $type = sanitize_text_field( $_POST['type'] );
    $post_in = sanitize_text_field( $_POST['a_t_id'] );
    $count = sanitize_text_field( $_POST['count'] );
    $parent = sanitize_text_field( $_POST['parent'] );
    if ( !wp_verify_nonce( $nonce, 'hovard-nonce' ) ) {
        die( '-1' );
    }
    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
    $q = [
        'post_type'           => 'topic',
        'post_parent'         => $parent,
        'order'               => 'DESC',
        'orderby'             => 'post_date',
        'post_status'         => 'publish',
        'posts_per_page'      => -1,
        'ignore_sticky_posts' => 1,
    ];
    if ( $type == 'author' ) {
        $auth_ids = [
            'author' => $post_in,
        ];
        $q = array_merge( $q, $auth_ids );
    } elseif ( $type == 'tag' ) {
        $tax_query[] = [
            'taxonomy' => 'topic-tag',
            'field'    => 'term_id',
            'terms'    => $post_in,
        ];
    }
    $tax_query[] = [
        'taxonomy' => 'post_format',
        'field'    => 'slug',
        'terms'    => ['post-format-quote', 'post-format-link'],
        'operator' => 'NOT IN',
    ];
    if ( !empty( $tax_query ) ) {
        $tax_query = array_merge( ['relation' => 'AND'], $tax_query );
        $q = array_merge( $q, ['tax_query' => $tax_query] );
    }
    $query = new WP_Query( $q );

    if ( $query->have_posts() ):
        echo '<div class="community-posts-wrapper bb-radius">';
        while ( $query->have_posts() ): $query->the_post();
            global $post;
            $author_id = $post->post_author;
            $parent_post_id = $parent;
            $favoriters = get_post_meta( get_the_ID(), '_bbp_favorite', true );
            $favorite_count = !empty( $favoriters ) ? $favoriters[0] : '0';
            $get_reply = get_post_meta( get_the_ID(), '_bbp_reply_count', true );
            $_reply_count = isset( $get_reply ) && !empty( $get_reply ) ? $get_reply : 0;
            ?>
            <div class="community-post style-two hovard <?php the_author_meta('user_nicename', $author_id ); ?> bug">
                <div class="post-content">
                    <div class="author-avatar">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ) ?>
                    </div>
                    <div class="entry-content">
                        <?php the_title( sprintf( '<a href="%s" rel="bookmark"> <h3 class="post-title">', esc_url( get_permalink() ) ), '</h3></a>' );?>
                        <ul class="meta">
                            <li>
                                <?php echo get_the_post_thumbnail(bbp_get_topic_forum_id(), array(40, 40)); ?>
                                <a href="<?php echo get_permalink( bbp_get_topic_forum_id() ); ?>">
                                    <?php echo get_the_title( bbp_get_topic_forum_id() ); ?>
                                </a>
                            </li>
                            <li><i class="icon_calendar"></i> <?php bbp_topic_post_date(get_the_ID()); ?> </li>
                        </ul>
                    </div>
                </div>
                <div class="post-meta-wrapper">
                    <ul class="post-meta-info">
                        <li><a href="#"><i class="icon_chat_alt"></i><?php echo esc_html( $_reply_count ); ?></a></li>
                        <li><a href="#"><i class="icon_star"></i><?php echo esc_html( $favorite_count ); ?></a></li>
                    </ul>
                </div>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();

        echo '</div>';
    else:
        echo '<div class="community-post-error bug">';
        echo '<div class="error-content">';
        echo '<svg height="40" class="hovard-error error-icon" viewBox="0 0 24 24" version="1.1" width="40" aria-hidden="true"><path d="M12 7a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0112 7zm1 9a1 1 0 11-2 0 1 1 0 012 0z"></path><path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zM2.5 12a9.5 9.5 0 1119 0 9.5 9.5 0 01-19 0z"></path></svg>';
        echo '<h3 class="error">' . esc_html__( 'Oops! No results matched your search.', 'hovard' ) . '</h3>';
        echo '<p class="error">' . esc_html__( 'You could search again.', 'hovard' ) . '</p>';
        echo '</div>';
        echo '</div>';
    endif;
    die;
}

/**
 * Loading Post
 *
 * @return string
 */
add_action( 'wp_ajax_hovard_open_post', 'hovard_open_post' );
add_action( 'wp_ajax_nopriv_hovard_open_post', 'hovard_open_post' );

function hovard_open_post() {
    global $wpdb;

    $is_queried_obj = is_singular('forum') ? get_queried_object_id() : false;
    $nonce = sanitize_text_field( $_POST['nonce'] );
    $type = sanitize_text_field( $_POST['type'] );
    $post_in = sanitize_text_field( $_POST['a_t_id'] );
    $count = sanitize_text_field( $_POST['count'] );
    $parent = sanitize_text_field( $_POST['parent'] );
    $userid = sanitize_text_field( $_POST['userid'] );

    if ( !wp_verify_nonce( $nonce, 'hovard-nonce' ) ) {
        die( '-1' );
    }
    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
    $q = [
        'post_type'           => 'topic',
        'post_parent'         => $parent,
        'order'               => 'DESC',
        'orderby'             => 'post_date',
        'posts_per_page'      => get_option( '_bbp_topics_per_page', 10 ),
        'ignore_sticky_posts' => 1,
        'author'              => $userid
    ];
    if ( $type == 'open' ) {
        $status = [
            'post_status' => 'publish',
        ];
        $q = array_merge( $q, $status );
    } elseif ( $type == 'closed' ) {
        $status = [
            'post_status' => 'closed',
        ];
        $q = array_merge( $q, $status );
    }
    $tax_query[] = [
        'taxonomy' => 'post_format',
        'field'    => 'slug',
        'terms'    => ['post-format-quote', 'post-format-link'],
        'operator' => 'NOT IN',
    ];
    if ( !empty( $tax_query ) ) {
        $tax_query = array_merge( ['relation' => 'AND'], $tax_query );
        $q = array_merge( $q, ['tax_query' => $tax_query] );
    }
    $query = new WP_Query( $q );
    if ( $query->have_posts() ):
        echo '<div class="community-posts-wrapper bb-radius">';
        while ( $query->have_posts() ): $query->the_post();
            global $post;
            $author_id = $post->post_author;
            //$parent_post_id = get_post_meta( get_the_ID(), '_bbp_topic_id', true );
            $parent_post_id = $parent;
            $favoriters = get_post_meta( get_the_ID(), '_bbp_favorite', true );
            $favorite_count = !empty( $favoriters ) ? $favoriters[0] : '0';
            $get_reply = get_post_meta( get_the_ID(), '_bbp_reply_count', true );
            $_reply_count = isset( $get_reply ) && !empty( $get_reply ) ? $get_reply : 0;
            ?>

            <div class="community-post style-two hovard <?php the_author_meta( 'user_nicename', $author_id ); ?>">
                <div class="post-content">
                    <div class="author-avatar">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ) ?>
                    </div>
                    <div class="entry-content">
                        <?php the_title( sprintf( '<a href="%s" rel="bookmark"> <h3 class="post-title">', get_permalink() ), '</h3></a>' );?>
                        <ul class="meta">
                            <li>
                                <?php echo get_the_post_thumbnail(bbp_get_topic_forum_id(), array(40, 40)); ?>
                                <a href="<?php echo get_permalink( bbp_get_topic_forum_id() ); ?>">
                                    <?php echo get_the_title( bbp_get_topic_forum_id() ); ?>
                                </a>
                            </li>
                            <li><i class="icon_calendar"></i> <?php bbp_topic_post_date(get_the_ID()); ?> </li>
                        </ul>
                    </div>
                </div>
                <div class="post-meta-wrapper">
                    <ul class="post-meta-info">
                        <li><a href="#"><i class="icon_chat_alt"></i><?php echo esc_html( $_reply_count ); ?></a></li>
                        <li><a href="#"><i class="icon_star"></i><?php echo esc_html( $favorite_count ); ?></a></li>
                    </ul>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();

        echo '</div>';
    else:
        echo '<div class="community-post-error bug">';
        echo '<div class="error-content">';
        echo '<svg height="40" class="hovard-error error-icon" viewBox="0 0 24 24" version="1.1" width="40" aria-hidden="true"><path d="M12 7a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0112 7zm1 9a1 1 0 11-2 0 1 1 0 012 0z"></path><path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zM2.5 12a9.5 9.5 0 1119 0 9.5 9.5 0 01-19 0z"></path></svg>';
        echo '<h3 class="error">' . esc_html__( 'Oops! No results matched your search.', 'hovard' ) . '</h3>';
        echo '<p class="error">' . esc_html__( 'You could search again.', 'hovard' ) . '</p>';
        echo '</div>';
        echo '</div>';
    endif;
    die;
}

add_action( 'wp_ajax_hovard_loading_sort_post', 'hovard_loading_sort_post' );
add_action( 'wp_ajax_nopriv_hovard_loading_sort_post', 'hovard_loading_sort_post' );

function hovard_loading_sort_post() {
    global $wpdb;

    $nonce = sanitize_text_field( $_POST['nonce'] );
    $sort = sanitize_text_field( $_POST['sort'] );
    $parent = sanitize_text_field( $_POST['parent'] );

    if ( !wp_verify_nonce( $nonce, 'hovard-nonce' ) ) {
        die( '-1' );
    }

    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
    $q = [
        'post_type'           => 'topic',
        'post_parent'         => $parent,
        'post_status' => 'publish',
        'posts_per_page'      => get_option( '_bbp_topics_per_page', 10 ),
        'ignore_sticky_posts' => 1,
    ];
    if ( $sort == 'newest_posts' ) {
        $newest_posts = [
            'order' => 'DESC',
        ];
        $q = array_merge( $q, $newest_posts );
    } elseif ( $sort == 'oldest_posts' ) {
        $oldest_posts = [
            'order' => 'ASC',
        ];
        $q = array_merge( $q, $oldest_posts );
    } elseif ( $sort == 'comment_count' ) {
        $comment_count = [
            'meta_key' => '_bbp_reply_count',
            'orderby'  => 'meta_value_num',
            'order'    => 'DESC',
        ];
        $q = array_merge( $q, $comment_count );
    } elseif ( $sort == 'comment_date' ) {
        $comment_count = [
            'meta_key' => '_bbp_reply_count',
            'meta_type' => 'NUMERIC',
            'orderby'  => 'meta_value_num',
            'order'    => 'ASC',
        ];
        $q = array_merge( $q, $comment_count );
    } elseif ( $sort == 'recent_updated_post' ) {
        $post_date = [
            'orderby' => 'post_modified',
            'order'   => 'DESC',
        ];
        $q = array_merge( $q, $post_date );
    } elseif ( $sort == 'last_recent_updated_post' ) {
        $post_modified = [
            'orderby' => 'post_modified',
            'order'   => 'ASC',
        ];
        $q = array_merge( $q, $post_modified );
    }
    $tax_query[] = [
        'taxonomy' => 'post_format',
        'field'    => 'slug',
        'terms'    => ['post-format-quote', 'post-format-link'],
        'operator' => 'NOT IN',
    ];
    if ( !empty( $tax_query ) ) {
        $tax_query = array_merge( ['relation' => 'AND'], $tax_query );
        $q = array_merge( $q, ['tax_query' => $tax_query] );
    }
    $query = new WP_Query( $q );
    if ( $query->have_posts() ):
        echo '<div class="community-posts-wrapper bb-radius">';
        while ( $query->have_posts() ): $query->the_post();
            global $post;

            $author_id = $post->post_author;
            $parent_post_id = $parent;
            $favoriters = get_post_meta( get_the_ID(), '_bbp_favorite', true );
            $favorite_count = ! empty( $favoriters ) ? $favoriters[0] : '0';
            $get_reply      = get_post_meta( get_the_ID(), '_bbp_reply_count', true );
            $_reply_count = isset( $get_reply ) && !empty( $get_reply ) ? $get_reply : 0;
            ?>
            <div class="community-post style-two hovard <?php the_author_meta( 'user_nicename', $author_id ); ?> bug">
                <div class="post-content">
                    <div class="author-avatar">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ) ?>
                    </div>
                    <div class="entry-content">
                        <?php the_title( sprintf( '<a href="%s" rel="bookmark"> <h3 class="post-title">', esc_url( get_permalink() ) ), '</h3></a>' );?>
                        <ul class="meta">
                            <li><img src="<?php echo get_the_post_thumbnail_url( $parent_post_id ); ?>" alt="<?php echo get_the_title( $parent_post_id ); ?>"><a
                                        href="<?php echo get_permalink( $parent_post_id ); ?>"><?php echo get_the_title( $parent_post_id ); ?></a>
                            </li>
                            <li><i class="icon_calendar"></i> <?php bbp_topic_post_date(get_the_ID()); ?> </li>
                        </ul>
                    </div>
                </div>
                <div class="post-meta-wrapper">
                    <ul class="post-meta-info">
                        <li><a href="#"><i class="icon_chat_alt"></i><?php echo esc_html( $_reply_count ); ?></a></li>
                        <li><a href="#"><i class="icon_star"></i><?php echo esc_html( $favorite_count ); ?></a></li>
                    </ul>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();

        echo '</div>';
    else:
        echo '<div class="community-post-error bug">';
        echo '<div class="error-content">';
        echo '<svg height="40" class="hovard-error error-icon" viewBox="0 0 24 24" version="1.1" width="40" aria-hidden="true"><path d="M12 7a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0112 7zm1 9a1 1 0 11-2 0 1 1 0 012 0z"></path><path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zM2.5 12a9.5 9.5 0 1119 0 9.5 9.5 0 01-19 0z"></path></svg>';
        echo '<h3 class="error">' . esc_html__( 'Oops! No results matched your search.', 'hovard' ) . '</h3>';
        echo '<p class="error">' . esc_html__( 'You could search again.', 'hovard' ) . '</p>';
        echo '</div>';
        echo '</div>';
    endif;
    die;
}

add_action( 'wp_ajax_hovard_loading_pagination', 'hovard_loading_pagination' );
add_action( 'wp_ajax_nopriv_hovard_loading_pagination', 'hovard_loading_pagination' );

function hovard_loading_pagination() {
    global $wpdb;
    $nonce = sanitize_text_field( $_POST['nonce'] );
    $list = sanitize_text_field( $_POST['list'] );
    $parent = sanitize_text_field( $_POST['parent'] );
    if ( !wp_verify_nonce( $nonce, 'hovard-nonce' ) ) {
        die( '-1' );
    }
    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $q = [
        'post_type'           => 'topic',
        'post_parent'         => $parent,
        'order'               => 'DESC',
        'orderby'             => 'post_date',
        'posts_per_page'      => get_option( '_bbp_topics_per_page', 10 ),
        'ignore_sticky_posts' => 1,
        'paged'               => sanitize_text_field( $_POST['paged'] ),
        'page'                => sanitize_text_field( $_POST['paged'] ),

    ];

    $query = new WP_Query( $q );
    if ( $query->have_posts() ):
        echo '<div class="community-posts-wrapper bb-radius">';
        while ( $query->have_posts() ): $query->the_post();
            global $post;
            $author_id = $post->post_author;
            $parent_post_id = $parent;
            $favoriters = get_post_meta( get_the_ID(), '_bbp_favorite', true );
            $favorite_count = !empty( $favoriters ) ? $favoriters[0] : '0';
            $get_reply = get_post_meta( get_the_ID(), '_bbp_reply_count', true );
            $_reply_count = isset( $get_reply ) && !empty( $get_reply ) ? $get_reply : 0;
            ?>
            <div class="community-post style-two hovard <?php the_author_meta( 'user_nicename', $author_id ); ?> bug">
                <div class="post-content">
                    <div class="author-avatar">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ) ?>
                    </div>
                    <div class="entry-content">
                        <?php the_title( sprintf( '<a href="%s" rel="bookmark"> <h3 class="post-title">', get_permalink() ), '</h3></a>' );?>
                        <ul class="meta">
                            <li><img src="<?php echo get_the_post_thumbnail_url( $parent_post_id ); ?>" alt="<?php echo get_the_title( $parent_post_id ); ?>"><a
                                        href="<?php echo get_permalink( $parent_post_id ); ?>"><?php echo get_the_title( $parent_post_id ); ?></a>
                            </li>
                            <li><i class="icon_calendar"></i> <?php bbp_topic_post_date(get_the_ID()); ?> </li>
                        </ul>
                    </div>
                </div>
                <div class="post-meta-wrapper">
                    <ul class="post-meta-info">
                        <li><a href="#"><i class="icon_chat_alt"></i><?php echo esc_html( $_reply_count ); ?></a></li>
                        <li><a href="#"><i class="icon_star"></i><?php echo esc_html( $favorite_count ); ?></a></li>
                    </ul>
                </div>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        echo '</div>';

    else:
        echo '<div class="community-post-error bug">';
        echo '<div class="error-content">';
        echo '<svg height="40" class="hovard-error error-icon" viewBox="0 0 24 24" version="1.1" width="40" aria-hidden="true"><path d="M12 7a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0112 7zm1 9a1 1 0 11-2 0 1 1 0 012 0z"></path><path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zM2.5 12a9.5 9.5 0 1119 0 9.5 9.5 0 01-19 0z"></path></svg>';
        echo '<h3 class="error">' . esc_html__( 'Oops! No results matched your search.', 'hovard' ) . '</h3>';
        echo '<p class="error">' . esc_html__( 'You could search again.', 'hovard' ) . '</p>';
        echo '</div>';
        echo '</div>';
    endif;
    die;
}

add_action( 'wp_ajax_hovard_tooltip_post', 'hovard_tooltip_post' );
add_action( 'wp_ajax_nopriv_hovard_tooltip_post', 'hovard_tooltip_post' );

function hovard_tooltip_post() {
    global $wpdb;
    $slug_id = url_to_postid($_POST['slug_id']);
    $p_query = get_post( $slug_id );
    $featured_img_url = get_the_post_thumbnail_url($p_query->ID, 'full');
    $image_alt = get_post_meta($p_query->ID, '_wp_attachment_image_alt', TRUE);
    ?>


    <?php if (!empty($featured_img_url)): ?>
        <img src="<?php echo esc_url($featured_img_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
    <?php endif; ?>
    <div class="text">
        <h6>
            <a href="<?php echo esc_url(get_page_link($p_query->ID)); ?>">
                <?php echo wp_kses_post($p_query->post_title); ?>
            </a>
        </h6>
        <p><?php echo wp_trim_words( $p_query->post_content, 40, '...' ); ?></p>
    </div>


    <?php
    die();
}