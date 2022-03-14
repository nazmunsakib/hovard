<?php
Redux::set_section('hovard_opt', array(
	'title'     => esc_html__( 'Forums', 'hovard' ),
	'id'        => 'forums_opt',
	'icon'      => 'dashicons dashicons-buddicons-forums',
));

/**
 * Forum archive settings
 */
Redux::set_section('hovard_opt', array(
	'title'     => esc_html__( 'Forum Archive', 'hovard' ),
	'id'        => 'forum_archive_opt',
	'icon'      => '',
	'subsection' => true,
	'fields'     => array(
        array(
            'title'     => esc_html__( 'Top Call to Action', 'hovard' ),
            'id'        => 'is_forum_top_c2a',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'hovard' ),
            'off'       => esc_html__( 'Hide', 'hovard' ),
            'default'   => '1',
        ),

        /**
         * Top Call to Action
         */
        array(
            'title'     => esc_html__( 'Top Call to Action Controls', 'hovard' ),
            'id'        => 'forum_top_c2a-start',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array('is_forum_top_c2a', '=', '1')
        ),

        array(
            'title'     => esc_html__( 'Left Featured Image', 'hovard' ),
            'id'        => 'forum_top_c2a_logo',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => HOVARD_DIR_IMG.'/forum/answer.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Title', 'hovard' ),
            'id'        => 'forum_top_c2a_title',
            'type'      => 'text',
            'default'   => esc_html__( 'Can’t find an answer?', 'hovard' )
        ),

        array(
            'title'     => esc_html__( 'Subtitle', 'hovard' ),
            'id'        => 'forum_top_c2a_subtitle',
            'type'      => 'text',
            'default'   => esc_html__( 'Make use of a qualified tutor to get the answer', 'hovard' )
        ),

        array(
            'title'     => esc_html__( 'Button Title', 'hovard' ),
            'id'        => 'forum_top_c2a_btn_title',
            'type'      => 'text',
            'default'   => esc_html__( 'Ask a Question', 'hovard' )
        ),
        array(
            'title'     => esc_html__( 'Button URL', 'hovard' ),
            'id'        => 'forum_top_c2a_btn_url',
            'type'      => 'text',
            'default'   => '#'
        ),

        array(
            'id'     => 'forum_top_c2a-end',
            'type'   => 'section',
            'indent' => false,
        ),

        /**
         * Bottom Call to Action
         */
        array(
            'title'     => esc_html__( 'Bottom Call to Action', 'hovard' ),
            'id'        => 'is_forum_btm_c2a',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'hovard' ),
            'off'       => esc_html__( 'Hide', 'hovard' ),
            'default'   => '1',
        ),
        array(
            'title'     => esc_html__( 'Bottom Call to Action', 'hovard' ),
            'subtitle'  => esc_html__( 'Control here the bottom Call to Action area of the Forum archive pages.', 'hovard' ),
            'id'        => 'forum_btm_c2a-start',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array('is_forum_btm_c2a', '=', '1')
        ),
        array(
            'title'     => esc_html__( 'Left Featured Image', 'hovard' ),
            'id'        => 'forum_btm_c2a_logo',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => HOVARD_DIR_IMG.'/forum/chat-smile.png'
            )
        ),
        array(
            'title'     => esc_html__( 'Background Image', 'hovard' ),
            'id'        => 'forum_btm_c2a_bg',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => array(
                'url'   => HOVARD_DIR_IMG.'/forum/overlay_bg.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Title', 'hovard' ),
            'id'        => 'forum_btm_c2a_title',
            'type'      => 'text',
            'default'   => esc_html__( 'New to Communities?', 'hovard' )
        ),

        array(
            'title'     => esc_html__( 'Button Title', 'hovard' ),
            'id'        => 'forum_btm_c2a_btn_title',
            'type'      => 'text',
            'default'   => esc_html__( 'Join the community ', 'hovard' )
        ),
        array(
            'id'     => 'forum_btm_c2a-end',
            'type'   => 'section',
            'indent' => false,
        ),
	)
));

/**
 * Forum topics archive
 */
Redux::set_section('hovard_opt', array(
	'title'         => esc_html__( 'Topics Archive', 'hovard' ),
	'id'            => 'topics_archive_opt',
	'icon'          => '',
	'subsection'    => true,
	'fields'        => array(
		array(
			'title'     => esc_html__( 'Forums', 'hovard' ),
			'id'        => 'is_forums_in_topics',
			'type'      => 'switch',
			'on'        => esc_html__( 'Show', 'hovard' ),
			'off'       => esc_html__( 'Hide', 'hovard' ),
			'default'   => '1',
		),
		array(
			'title'         => esc_html__( 'Forums', 'hovard' ),
			'desc'          => esc_html__( 'Forums to show above the topics list.', 'hovard' ),
			'id'            => 'forums_ppp_in_topics',
			'type'          => 'slider',
			'default'       => 4,
			'min'           => 4,
			'step'          => 1,
			'max'           => 50,
			'display_value' => 'label',
		),
	)
));


/**
 * Forum topics details
 */
Redux::set_section('hovard_opt', array(
    'title'         => esc_html__( 'Topic Details', 'hovard' ),
    'id'            => 'topic_details_opt',
    'icon'          => '',
    'subsection'    => true,
    'fields'        => array(
        array(
            'title'     => esc_html__( 'Replies Order', 'hovard' ),
            'id'        => 'reply_order',
            'type'      => 'select',
            'default'   => 'DESC',
            'options'   => array(
                'ASC'   => esc_html__('Ascending', 'hovard'),
                'DESC'   => esc_html__('Descending', 'hovard'),
            )
        ),
	    array(
		    'title'     => esc_html__( 'Private Reply', 'hovard' ),
			'subtitle'  => esc_html__( 'When disabled, all the private replies will be public. ','hovard'),
		    'id'        => 'is_private_reply',
		    'type'      => 'switch',
		    'on'        => esc_html__( 'Enable', 'hovard' ),
		    'off'       => esc_html__( 'Disable', 'hovard' ),
		    'default'   => '1',
	    ),
	    array(
		    'title'     => esc_html__( 'Solved Topics', 'hovard' ),
		    'subtitle'  => esc_html__( 'You can turn topics into solved','hovard'),
		    'id'        => 'is_solved_topic',
		    'type'      => 'switch',
		    'on'        => esc_html__( 'Enable', 'hovard' ),
		    'off'       => esc_html__( 'Disable', 'hovard' ),
		    'default'   => '1',
	    ),
	)
));

Redux::set_section('hovard_opt', array(
    'title'         => esc_html__( 'Users', 'hovard' ),
    'id'            => 'forum_users',
    'icon'          => '',
    'subsection'    => true,
    'fields'        => array(
        array(
	        'title'     => esc_html__( 'Keymaster Icon', 'hovard' ),
	        'id'          => 'keymaster_icon',
	        'type'      => 'media',
	        'compiler'  => true,
	        'default'   => [
	        	'url'       => HOVARD_DIR_IMG.'/icons/keymaster.svg'
	        ]
        ),
	    array(
		    'title'     => esc_html__( 'Moderator Icon', 'hovard' ),
	        'id'          => 'moderator_icon',
	        'type'      => 'media',
	        'compiler'  => true,
		    'default'   => [
			    'url'       => HOVARD_DIR_IMG.'/icons/moderator.svg'
		    ]
        ),
	    array(
		    'title'     => esc_html__( 'Participant Icon', 'hovard' ),
	        'id'          => 'participant_icon',
	        'type'      => 'media',
	        'compiler'  => true,
		    'default'   => [
			    'url'       => HOVARD_DIR_IMG.'/icons/participants.svg'
		    ]
        ),
	    array(
		    'title'     => esc_html__( 'Blocked Icon', 'hovard' ),
	        'id'          => 'blocked_icon',
	        'type'      => 'media',
	        'compiler'  => true,
		    'default'   => [
			    'url'       => HOVARD_DIR_IMG.'/icons/block-user.svg'
		    ]
        )
    )
));
