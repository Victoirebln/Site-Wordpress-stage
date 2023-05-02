<?php

if ( class_exists("Kirki")){

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'web_developer_elementor_enable_logo_text',
	'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'web-developer-elementor' ) . '</h3>',
	'priority'    => 10,
] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'web_developer_elementor_display_header_title',
	'label'       => esc_html__( 'Site Title Enable / Disable Button', 'web-developer-elementor' ),
	'section'     => 'title_tagline',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'web-developer-elementor' ),
		'off' => esc_html__( 'Disable', 'web-developer-elementor' ),
	],
] );

Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'web_developer_elementor_display_header_text',
	'label'       => esc_html__( 'Tagline Enable / Disable Button', 'web-developer-elementor' ),
	'section'     => 'title_tagline',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'web-developer-elementor' ),
		'off' => esc_html__( 'Disable', 'web-developer-elementor' ),
	],
] );

	// HEADER SECTION

	Kirki::add_section( 'web_developer_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'web-developer-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'web-developer-elementor' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'web_developer_elementor_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'web-developer-elementor' ),
		'section'     => 'web_developer_elementor_section_header',
		'default'     => 0,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'web-developer-elementor'),
			'off' => esc_html__( 'Disable', 'web-developer-elementor'),
		],
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_developer_elementor_menu_color',
		'label'       => __( 'Menu Color', 'web-developer-elementor' ),
		'type'        => 'color',
		'section'     => 'web_developer_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_developer_elementor_menu_hover_color',
		'label'       => __( 'Menu Hover Color', 'web-developer-elementor' ),
		'type'        => 'color',
		'default'     => '#ffb424',
		'section'     => 'web_developer_elementor_section_header',
		'transport' => 'auto',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a:hover', '#main-menu ul li a:hover', '#main-menu li:hover > a','#main-menu a:focus','#main-menu li.focus > a','#main-menu ul li.current-menu-item > a','#main-menu ul li.current_page_item > a','#main-menu ul li.current-menu-parent > a','#main-menu ul li.current_page_ancestor > a','#main-menu ul li.current-menu-ancestor > a'),
				'property' => 'color',
			),

		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_developer_elementor_submenu_color',
		'label'       => __( 'Submenu Color', 'web-developer-elementor' ),
		'type'        => 'color',
		'section'     => 'web_developer_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#1a1b29',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a', '#main-menu ul.sub-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_developer_elementor_submenu_hover_color',
		'label'       => __( 'Submenu Hover Color', 'web-developer-elementor' ),
		'type'        => 'color',
		'section'     => 'web_developer_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'web_developer_elementor_submenu_hover_background_color',
		'label'       => __( 'Submenu Hover Background Color', 'web-developer-elementor' ),
		'type'        => 'color',
		'section'     => 'web_developer_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#ffb424',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_developer_elementor_enable_button_heading',
		'section'     => 'web_developer_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( ' Header Button', 'web-developer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Button Text', 'web-developer-elementor' ),
		'settings' => 'web_developer_elementor_header_button_text',
		'section'  => 'web_developer_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button URL', 'web-developer-elementor' ),
		'settings' => 'web_developer_elementor_header_button_url',
		'section'  => 'web_developer_elementor_section_header',
		'default'  => '',
	] );

	//ADDITIONAL SETTINGS

	Kirki::add_section( 'web_developer_elementor_additional_setting', array(
	    'title'          => esc_html__( 'Additional Settings', 'web-developer-elementor' ),
	    'description'    => esc_html__( 'Additional Settings of themes', 'web-developer-elementor' ),
	    'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_developer_elementor_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'web-developer-elementor' ),
		'section'     => 'web_developer_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'toggle',
	'settings'    => 'web_developer_elementor_scroll_enable_setting',
	'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'web-developer-elementor' ),
	'section'     => 'web_developer_elementor_additional_setting',
	'default'     => '0',
	'priority'    => 10,
    ] );

	// POST SECTION

	Kirki::add_section( 'web_developer_elementor_blog_post', array(
		'title'          => esc_html__( 'Post Settings', 'web-developer-elementor' ),
		'description'    => esc_html__( 'Here you can add post information.', 'web-developer-elementor' ),
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_developer_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'web-developer-elementor' ),
		'section'     => 'web_developer_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_developer_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'web-developer-elementor' ),
		'section'     => 'web_developer_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'web_developer_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'web-developer-elementor' ),
		'section'     => 'web_developer_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_developer_elementor_length_setting_heading',
		'section'     => 'web_developer_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'web-developer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'web_developer_elementor_length_setting',
		'section'     => 'web_developer_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
					'step' => 1,
				],
	] );
 
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'web-developer-elementor' ),
		'settings'    => 'web_developer_elementor_single_post_tag',
		'section'     => 'web_developer_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'web-developer-elementor' ),
		'settings'    => 'web_developer_elementor_single_post_category',
		'section'     => 'web_developer_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	// FOOTER SECTION

	Kirki::add_section( 'web_developer_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'web-developer-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'web-developer-elementor' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_developer_elementor_footer_text_heading',
		'section'     => 'web_developer_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'web-developer-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'web_developer_elementor_footer_text',
		'section'  => 'web_developer_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_developer_elementor_footer_enable_heading',
		'section'     => 'web_developer_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'web-developer-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'web_developer_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'web-developer-elementor' ),
		'section'     => 'web_developer_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'web-developer-elementor' ),
			'off' => esc_html__( 'Disable', 'web-developer-elementor' ),
		],
	] );
}
