<?php
// Theme settings options
$opt = get_option('hovard_opt' );

// Image sizes
add_image_size("hovard_795x544", 795, 544, true);
add_image_size("hovard_845x830", 845, 830, true);

// add category nick names in body and post class
function hovard_post_class( $classes ) {
    global $post;
    if ( !has_post_thumbnail() ) {
        $classes[] = 'no-post-thumbnail';
    }
    if ( is_sticky() && !in_array('sticky', $classes) ) {
        $classes[] = 'sticky';
    }
    return $classes;
}
add_filter( 'post_class', 'hovard_post_class' );



/**
 * Show post excerpt by default
 * @param $user_login
 * @param $user
 */
function hovard_show_post_excerpt( $user_login, $user ) {
    $unchecked = get_user_meta( $user->ID, 'metaboxhidden_post', true );
    $key = is_array($unchecked) ? array_search( 'postexcerpt', $unchecked ) : FALSE;
    if ( FALSE !== $key ) {
        array_splice( $unchecked, $key, 1 );
        update_user_meta( $user->ID, 'metaboxhidden_post', $unchecked );
    }
}
add_action( 'wp_login', 'hovard_show_post_excerpt', 10, 2 );

// filter to replace class on reply link
add_filter('comment_reply_link', function($class){
    $class = str_replace("class='comment-reply-link", "class='comment_reply", $class);
    return $class;
});

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function hovard_pingback_header() {
    if ( is_singular() && pings_open() ) {
        echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
    }
}
add_action( 'wp_head', 'hovard_pingback_header' );

// Move the comment field to bottom
add_filter( 'comment_form_fields', function ( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
});

// Remove WordPress admin bar default CSS
add_action('get_header', function() {
    remove_action('wp_head', '_admin_bar_bump_cb' );
});


// Elementor post type support
function hovard_add_cpt_support() {

    //if exists, assign to $cpt_support var
    $cpt_support = get_option( 'elementor_cpt_support' );

    //check if option DOESN'T exist in db
    if ( ! $cpt_support ) {
        $cpt_support = [ 'page', 'post', 'docs' ]; //create array of our default supported post types
        update_option( 'elementor_cpt_support', $cpt_support ); //write it to the database
    }

    //if it DOES exist, but header is NOT defined
    elseif( !in_array( 'docs', $cpt_support ) ) {
        $cpt_support[] = 'docs'; //append to array
        update_option( 'elementor_cpt_support', $cpt_support ); //update database
    }

    //otherwise do nothing, portfolio already exists in elementor_cpt_support option
}
add_action( 'after_switch_theme', 'hovard_add_cpt_support' );


if( function_exists('acf_add_options_sub_page') ) {
    acf_add_options_sub_page(array(
        'page_title' 	=> esc_html__( 'Changelogs Settings', 'hovard' ),
        'menu_title'	=> esc_html__( 'Settings', 'hovard'),
        'parent_slug'	=> 'edit.php?post_type=changelog',
    ));
}

