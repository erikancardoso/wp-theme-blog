<?php
function wpdevs_customizer ($wp_customize){
    // Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __('Copyright Setting', 'wp-devs'),
            'description' => __('Copyright Setting', 'wp-devs'),
        )
    );
    $wp_customize->add_setting(
        'sec_copyright',
        array(
            'type' => 'theme_mod',
            'default' => __('Copyright X - All rights reserved.','wp-devs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'sec_copyright',
        array(
            'label' => __('Copyright Information', 'wp-devs'),
            'description' => __('Please, type your copyright here', 'wp-devs'),
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );
    // Hero Section
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __('Hero Section', 'wp-devs'),
        )
    );
    // Hero title
    $wp_customize->add_setting(
        'sec_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some title', 'wp-devs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'sec_hero_title',
        array(
            'label' => __('Hero Title', 'wp-devs'),
            'description' => __('Please, type your title here', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );
    // subtitle
    $wp_customize->add_setting(
        'sec_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'wp-devs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'sec_hero_subtitle',
        array(
            'label' => __('Hero Subtitle', 'wp-devs'),
            'description' => __('Please, type your subtitle here', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );
    // Button Text
    $wp_customize->add_setting(
        'sec_hero_button_text',
        array(
            'type' => 'theme_mod',
            'default' => __('Learn More', 'wp-devs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'sec_hero_button_text',
        array(
            'label' => __('Button Text', 'wp-devs'),
            'description' => __('Please, type your button text here', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );
    // Button Link
    $wp_customize->add_setting(
        'sec_hero_button_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        'sec_hero_button_link',
        array(
            'label' => __('Button link', 'wp-devs'),
            'description' => __('Please, type your button link here', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );
    // Hero Height
    $wp_customize->add_setting(
        'sec_hero_height',
        array(
            'type' => 'theme_mod',
            'default' => 800,
            'sanitize_callback' => 'absint'
        )
    );
    $wp_customize->add_control(
        'sec_hero_height',
        array(
            'label' => __('Hero Height', 'wp-devs'),
            'description' => __('Please, type your hero here', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'number'
        )
    );
    // Hero background
    $wp_customize->add_setting(
        'sec_hero_background',
        array(
            'type' => 'theme_mod',
            'sanitize_callback'=> 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'sec_hero_background',
        array(
            'label'    => __('Hero Image Background', 'wp-devs'),
            'section'  => 'sec_hero',
            'mime_type' => 'image',
        )
    ) );
    // 3. Blog
    $wp_customize->add_section(
        'sec_blog',
        array(
            'title' => __( 'Blog Section', 'wp-devs' )
        ) );

    // Posts per page
    $wp_customize->add_setting(
        'set_per_page',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        ) );

    $wp_customize->add_control(
        'set_per_page',
        array(
            'label' => __( 'Posts per page', 'wp-devs' ),
            'description' => __( 'How many items to display in the post list?', 'wp-devs' ),
            'section' => 'sec_blog',
            'type' => 'number'
        ) );

    // Post categories to include
    $wp_customize->add_setting(
        'set_category_include',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ) );

    $wp_customize->add_control(
        'set_category_include',
        array(
            'label' => __( 'Post categories to include', 'wp-devs' ),
            'description' => __( 'Comma separated values or single category ID', 'wp-devs' ),
            'section' => 'sec_blog',
            'type' => 'text'
        ) );

    // Post categories to exclude
    $wp_customize->add_setting(
        'set_category_exclude',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ) );

    $wp_customize->add_control(
        'set_category_exclude',
        array(
            'label' => __( 'Post categories to exclude', 'wp-devs' ),
            'description' => __( 'Comma separated values or single category ID', 'wp-devs' ),
            'section' => 'sec_blog',
            'type' => 'text'
        ) );
}
add_action('customize_register', 'wpdevs_customizer');



