<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hovard
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$is_comments = have_comments() ? 'have_comments' : 'no_comments';
?>

<?php if ( have_comments() ) : ?>
    <div class="comment_inner <?php echo esc_attr($is_comments); ?>" id="comments">
        <h2 class="c_head"> <?php hovard_comment_count( get_the_ID() ) ?> </h2>
        <ul class="comment_box list-unstyled">
            <?php
            wp_list_comments(
                array(
                    'style'         => 'ul',
                    'short_ping'    => true,
                    'walker'        => new Hovard_Walker_Comment,
                )
            );
            the_comments_navigation();
            ?>
        </ul>
    </div>
    <?php
endif;
?>


<div class="blog_comment_box <?php echo esc_attr($is_comments) ?>">
    <?php
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments alert alert-warning"><?php esc_html_e( 'Comments are closed.', 'hovard' ); ?></p>
        <?php
    endif;
    ?>

    <?php
    $commenter      = wp_get_current_commenter();
    $req            = get_option( 'require_name_email' );
    $aria_req       = ( $req ? " aria-required='true'" : '' );
    $label          = '<label class="floating-label">';
    $fields =  array(
        'author' => '<div class="col-span-1"> <input type="text" class="font-ibmplexmono font-normal text-para text-emperor bg-transparent placeholder:text-emperor w-full block border border-iron rounded-sm2 focus:border-oceangreen focus-visible:border-oceangreen focus-visible:outline-none px-5 pt-3 pb-3.5" name="author" id="name" placeholder="'.esc_html__('Your Name', 'hovard').'" value="'.esc_attr($commenter['comment_author']).'" '.$aria_req.'></div>',
        'email'	=> '<div class="col-span-1"> <input type="email" class="font-ibmplexmono font-normal text-para text-emperor bg-transparent placeholder:text-emperor w-full block border border-iron rounded-sm2 focus:border-oceangreen focus-visible:border-oceangreen focus-visible:outline-none px-5 pt-3 pb-3.5" name="email" id="email" placeholder="'.esc_html__('Email Here', 'hovard').'" value="'.esc_attr($commenter['comment_author_email']).'" '.$aria_req.'> </div>',
    );
    $comments_args = array(
	    'fields'                => apply_filters( 'comment_form_default_fields', $fields ),
        'class_form'            => 'get_quote_form row',
        'class_submit'          => 'comment-btn font-ibmplexmono font-medium text-subtitle text-white inline-block rounded-sm2 bg-sienna px-7.5 py-3.5 mt-2.5',
        'title_reply_before'    => '<h2 class="c_head font-rufina font-bold text-title12 mb-9">',
        'title_reply'           => esc_html__( 'Leave A Reply', 'hovard' ),
        'title_reply_after'     => '</h2>',
        'comment_notes_before'  => '<div class="grid grid-cols-2 gap-5 ">',
        'comment_field'         => '<div class="col-span-2"><textarea name="comment" id="comment" class="font-ibmplexmono font-normal text-para text-emperor bg-transparent placeholder:text-emperor w-full min-h-[200px] block border border-iron rounded-md focus:border-oceangreen focus-visible:border-oceangreen focus-visible:outline-none p-5 pt-2.5 message" placeholder="'.esc_html__('Write your comment', 'hovard').'"></textarea> </labe></div>',
        'comment_notes_after'   => '</div>',
    );
    comment_form($comments_args);
    ?>
</div>

