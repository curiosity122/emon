<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'medical_clinic_lite_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'medical-clinic-lite' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'medical_clinic_lite_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'medical-clinic-lite' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'medical-clinic-lite' ),
			'off' => esc_html__( 'Disable', 'medical-clinic-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'medical_clinic_lite_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'medical-clinic-lite' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'medical-clinic-lite' ),
			'off' => esc_html__( 'Disable', 'medical-clinic-lite' ),
		],
	] );

	// Scroll Top

	Kirki::add_section( 'medical_clinic_lite_section_scroll', array(
	    'title'          => esc_html__( 'Additional Settings', 'medical-clinic-lite' ),
	    'description'    => esc_html__( 'Scroll To Top', 'medical-clinic-lite' ),
	    'panel'          => 'medical_clinic_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'medical_clinic_lite_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_section_scroll',
		'default'     => '1',
		'priority'    => 10,
	] );

	// COLOR SECTION

	Kirki::add_section( 'medical_clinic_lite_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'medical-clinic-lite' ),
	    'description'    => esc_html__( 'Theme Color Settings', 'medical-clinic-lite' ),
	    'panel'          => 'medical_clinic_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_global_colors',
		'section'     => 'medical_clinic_lite_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'medical_clinic_lite_global_color',
		'label'       => __( 'choose your Appropriate Color', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_section_color',
		'default'     => '#0da7bb',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'medical_clinic_lite_global_color_2',
		'label'       => __( 'Choose Your Second Color', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_section_color',
		'default'     => '#f95759',
	] );

	// PANEL

	Kirki::add_panel( 'medical_clinic_lite_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'medical-clinic-lite' ),
	) );

	// POST SECTION

	Kirki::add_section( 'medical_clinic_lite_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'medical-clinic-lite' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'medical-clinic-lite' ),
	    'panel'          => 'medical_clinic_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_enable_post_heading',
		'section'     => 'medical_clinic_lite_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'medical_clinic_lite_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'medical-clinic-lite' ),
			'off' => esc_html__( 'Disable', 'medical-clinic-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'medical_clinic_lite_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'medical-clinic-lite' ),
			'off' => esc_html__( 'Disable', 'medical-clinic-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'medical_clinic_lite_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'medical_clinic_lite_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'medical-clinic-lite' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'medical-clinic-lite' ),
	    'panel'          => 'medical_clinic_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_header_announcement_alert_text_heading',
		'section'     => 'medical_clinic_lite_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Alert Text', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'medical_clinic_lite_header_announcement_alert_text',
		'section'  => 'medical_clinic_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_header_announcement_text_heading',
		'section'     => 'medical_clinic_lite_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Announcement Text', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'medical_clinic_lite_header_announcement_text',
		'section'  => 'medical_clinic_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_phone_number_heading',
		'section'     => 'medical_clinic_lite_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'medical_clinic_lite_header_phone_number',
		'section'  => 'medical_clinic_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_phone_icon',
		'section'     => 'medical_clinic_lite_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon Here', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'medical_clinic_lite_dashicons_setting_1',
		'label'    => esc_html__( 'Select Appropriate Icon', 'medical-clinic-lite' ),
		'section'  => 'medical_clinic_lite_section_header',
		'default'  => 'dashicons dashicons-clock',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_opening_time_heading',
		'section'     => 'medical_clinic_lite_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Opening Time', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'medical_clinic_lite_opening_time',
		'section'  => 'medical_clinic_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'medical_clinic_lite_opening_time_text',
		'section'  => 'medical_clinic_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_phone_icon_2',
		'section'     => 'medical_clinic_lite_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon Here', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'medical_clinic_lite_dashicons_setting_2',
		'label'    => esc_html__( 'Select Appropriate Icon', 'medical-clinic-lite' ),
		'section'  => 'medical_clinic_lite_section_header',
		'default'  => 'dashicons dashicons-location',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_location_heading',
		'section'     => 'medical_clinic_lite_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Location', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'medical_clinic_lite_location',
		'section'  => 'medical_clinic_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'medical_clinic_lite_location_text',
		'section'  => 'medical_clinic_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_enable_socail_link',
		'section'     => 'medical_clinic_lite_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'medical_clinic_lite_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'medical-clinic-lite' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'medical-clinic-lite' ),
		'settings'     => 'medical_clinic_lite_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'medical-clinic-lite' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'medical-clinic-lite' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'medical-clinic-lite' ),
				'description' => esc_html__( 'Add the social icon url here.', 'medical-clinic-lite' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_header_appointment_button_heading',
		'section'     => 'medical_clinic_lite_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Appointment Button', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'medical-clinic-lite' ),
		'settings' => 'medical_clinic_lite_header_text_appointment_button',
		'section'  => 'medical_clinic_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'URL', 'medical-clinic-lite' ),
		'settings' => 'medical_clinic_lite_header_url_appointment_button',
		'section'  => 'medical_clinic_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	// SLIDER SECTION

	Kirki::add_section( 'medical_clinic_lite_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'medical-clinic-lite' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'medical-clinic-lite' ),
        'panel'          => 'medical_clinic_lite_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_enable_heading',
		'section'     => 'medical_clinic_lite_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'medical_clinic_lite_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'medical-clinic-lite' ),
			'off' => esc_html__( 'Disable', 'medical-clinic-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'medical_clinic_lite_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'medical-clinic-lite' ),
			'off' => esc_html__( 'Disable', 'medical-clinic-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'medical_clinic_lite_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'medical-clinic-lite' ),
			'off' => esc_html__( 'Disable', 'medical-clinic-lite' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_slider_heading',
		'section'     => 'medical_clinic_lite_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'medical_clinic_lite_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'medical_clinic_lite_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'medical-clinic-lite' ),
		'priority'    => 10,
		'choices'     => medical_clinic_lite_get_categories_select(),
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_slider_short_heading',
		'section'     => 'medical_clinic_lite_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Sub Title', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'medical_clinic_lite_slider_short_title',
		'section'  => 'medical_clinic_lite_blog_slide_section',
		'priority' => 10,
    ] );

	// ABOUT US SECTION

	Kirki::add_section( 'medical_clinic_lite_about_us_section', array(
        'title'          => esc_html__( 'About Us Settings', 'medical-clinic-lite' ),
        'description'    => esc_html__( 'You have to select page to show about us section.', 'medical-clinic-lite' ),
        'panel'          => 'medical_clinic_lite_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_about_us_section_enable_heading',
		'section'     => 'medical_clinic_lite_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable About Us Section', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'medical_clinic_lite_about_us_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_about_us_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'medical-clinic-lite' ),
			'off' => esc_html__( 'Disable', 'medical-clinic-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_about_us_section_title_heading',
		'section'     => 'medical_clinic_lite_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Secton Title', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'medical_clinic_lite_about_us_section_title',
		'section'  => 'medical_clinic_lite_about_us_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_about_us_page_heading',
		'section'     => 'medical_clinic_lite_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Page Dropdown', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'dropdown-pages',
		'settings'    => 'medical_clinic_lite_about_us',
		'section'     => 'medical_clinic_lite_about_us_section',
		'default'     => 42,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_about_excerpt_heading',
		'section'     => 'medical_clinic_lite_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'medical_clinic_lite_about_excerpt_number',
		'label'       => esc_html__( 'Number of text to show', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_about_us_section',
		'default'     => 60,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'medical_clinic_lite_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'medical-clinic-lite' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'medical-clinic-lite' ),
        'panel'          => 'medical_clinic_lite_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_footer_text_heading',
		'section'     => 'medical_clinic_lite_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'medical_clinic_lite_footer_text',
		'section'  => 'medical_clinic_lite_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'medical_clinic_lite_footer_enable_heading',
		'section'     => 'medical_clinic_lite_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'medical-clinic-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'medical_clinic_lite_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'medical-clinic-lite' ),
		'section'     => 'medical_clinic_lite_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'medical-clinic-lite' ),
			'off' => esc_html__( 'Disable', 'medical-clinic-lite' ),
		],
	] );	
}