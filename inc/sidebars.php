<?php
// Register Widget areas
add_action('widgets_init', function() {
    $opt = get_option('hovard_opt');
    register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'hovard' ),
        'description'   => esc_html__( 'Place widgets in sidebar widgets area.', 'hovard' ),
        'id'            => 'sidebar_widgets',
        'before_widget' => '<div id="%1$s" class="widget sidebar_widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="c_head">',
        'after_title'   => '</h3>'
    ));

    if ( class_exists( 'bbPress' ) ) {
        register_sidebar(array(
            'name'          => esc_html__( 'Forum Sidebar', 'hovard' ),
            'description'   => esc_html__( 'Add widgets here for the Forum Archive Sidebar area', 'hovard' ),
            'id'            => 'forum_archive_sidebar',
            'before_widget' => '<div id="%1$s" class="widget sidebar_widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="c_head">',
            'after_title'   => '</h3>'
        ));
    }

    $footer_column = !empty($opt['footer_column']) ? $opt['footer_column'] : '3';
    register_sidebar(array(
        'name'          => esc_html__( 'Footer Widgets', 'hovard' ),
        'description'   => esc_html__( 'Add widgets here for Footer widgets area', 'hovard' ),
        'id'            => 'footer_widgets',
        'before_widget' => '<div id="%1$s" class="footer_widget col-lg-'.$footer_column.' col-md-6">
                            <div class="widget f_widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="f_title">',
        'after_title'   => '</h3>'
    ));
});
