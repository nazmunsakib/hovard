<?php
// Register Widget areas
add_action('widgets_init', function() {
    register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'hovard' ),
        'description'   => esc_html__( 'Place widgets in sidebar widgets area.', 'hovard' ),
        'id'            => 'sidebar_widgets',
        'before_widget' => '<div id="%1$s" class="widget sidebar_widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="c_head">',
        'after_title'   => '</h3>'
    ));

});
