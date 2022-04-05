<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package hovard
 */

// Search form
function hovard_search_form($is_button=true) {
    ?>
    <div class="hovard-search">
        <form class="form-wrapper" action="<?php echo esc_url(home_url( '/')); ?>" _lpchecked="1">
            <input type="text" id="search" placeholder="<?php esc_attr_e( 'Search ...', 'hovard' ); ?>" name="s">
            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
        </form>
        <?php if ( $is_button==true) { ?>
        <a href="<?php echo esc_url(home_url( '/')); ?>" class="home_btn"> <?php esc_html_e( 'Back to home Page', 'hovard' ); ?> </a>
        <?php } ?>
    </div>
    <?php
}

// Get comment count text
function hovard_comment_count( $post_id ) {
    $comments_number = get_comments_number($post_id);
    if ( $comments_number == 0) {
        $comment_text = esc_html__( 'No Comments', 'hovard' );
    } elseif( $comments_number == 1) {
        $comment_text = esc_html__( '1 Comment', 'hovard' );
    } elseif( $comments_number > 1) {
        $comment_text = $comments_number.esc_html__( ' Comments', 'hovard' );
    }
    echo esc_html($comment_text);
}

/**
 * Get a specific html tag from content
 * @return a specific HTML tag from the loaded content
 */
function hovard_get_html_tag( $tag = 'blockquote', $content = '' ) {
    $dom = new DOMDocument();
    $dom->loadHTML($content);
    $divs = $dom->getElementsByTagName( $tag );
    $i = 0;
    foreach ( $divs as $div ) {
        if ( $i == 1 ) {
            break;
        }
        echo "<h4 class='c_head'>{$div->nodeValue}</h4>";
        ++$i;
    }
}

/**
 * Get the page id by page template
 * @param string $template
 * @return int
 */
function hovard_get_page_template_id( $template = 'page-job-apply-form.php' ) {
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => $template
    ));
    foreach ( $pages as $page ) {
        $page_id = $page->ID;
    }
    return $page_id;
}


/**
 * Decode Hovard
 */
function hovard_decode_du( $str ) {
	$str = str_replace('cZ5^9o#!', 'wordpress-theme.spider-themes.net', $str);
	$str = str_replace('aI7!8B4H', 'resources', $str);
	$str = str_replace('^93|3d@', 'https', $str);
	$str = str_replace('t7Cg*^n0', 'hovard', $str);
	$str = str_replace('3O7%jfGc', '.zip', $str);
	return urldecode($str);
}

/**
 * Get titlebar excerpt
 */
function hovard_titlebar_excerpt() {
    if ( !is_search() ) {

        if ( is_tag() ) {
            echo wpautop(tag_description(get_queried_object()->term_id));
        } elseif ( is_category() ) {
            echo wpautop(category_description(get_queried_object()->term_id));
        } else {
            echo has_excerpt() ? wpautop(get_the_excerpt()) : '';
        }
    }
}

/**
 * estimated reading time
 **/
function hovard_reading_time() {
	$content = get_post_field( 'post_content', get_the_ID() );
	$word_count = str_word_count( strip_tags( $content ) );
	$readingtime = ceil($word_count / 200);
	if ( $readingtime == 1 ) {
		$timer = esc_html__( " minute", 'hovard' );
	} else {
		$timer = esc_html__( " minutes", 'hovard' );
	}
	$totalreadingtime = $readingtime . $timer;
	echo esc_html($totalreadingtime);
}