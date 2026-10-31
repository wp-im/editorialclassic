<?php
/**
 * Customizer settings.
 *
 * @package Tiny_Editorial_Text_Only
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Customizer options.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function tiny_editorial_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'tiny_editorial_theme_options',
		array(
			'title'       => esc_html__( 'Editorial Classic Options', 'editorialclassic' ),
			'priority'    => 160,
			'description' => esc_html__( 'Simple options for the header, footer, and text-first reading layout.', 'editorialclassic' ),
		)
	);

	$settings = array(
		'tiny_editorial_header_cta_label'                 => array(
			'label'    => __( 'Header CTA label', 'editorialclassic' ),
			'default'  => __( 'Subscribe', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_header_cta_url'                   => array(
			'label'    => __( 'Header CTA URL', 'editorialclassic' ),
			'default'  => '',
			'type'     => 'url',
			'sanitize' => 'esc_url_raw',
		),
		'tiny_editorial_footer_about'                     => array(
			'label'    => __( 'Footer description', 'editorialclassic' ),
			'default'  => __( 'A quiet editorial theme for publications, schools, studios, and long-form websites.', 'editorialclassic' ),
			'type'     => 'textarea',
			'sanitize' => 'sanitize_textarea_field',
		),
		'tiny_editorial_footer_address'                   => array(
			'label'    => __( 'Footer address', 'editorialclassic' ),
			'default'  => '',
			'type'     => 'textarea',
			'sanitize' => 'sanitize_textarea_field',
		),
		'tiny_editorial_footer_phone'                     => array(
			'label'    => __( 'Footer phone', 'editorialclassic' ),
			'default'  => '',
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_footer_email'                     => array(
			'label'    => __( 'Footer email', 'editorialclassic' ),
			'default'  => '',
			'type'     => 'email',
			'sanitize' => 'sanitize_email',
		),
		'tiny_editorial_footer_hours'                     => array(
			'label'    => __( 'Footer hours', 'editorialclassic' ),
			'default'  => '',
			'type'     => 'textarea',
			'sanitize' => 'sanitize_textarea_field',
		),
		'tiny_editorial_footer_copyright'                 => array(
			'label'    => __( 'Footer copyright text', 'editorialclassic' ),
			'default'  => '',
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_related_count'                    => array(
			'label'    => __( 'Related posts count', 'editorialclassic' ),
			'default'  => '3',
			'type'     => 'number',
			'sanitize' => 'absint',
		),
		'tiny_editorial_home_editorial_latest_title'      => array(
			'label'    => __( 'Home Editorial: latest stories title', 'editorialclassic' ),
			'default'  => __( 'Latest Stories', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_editorial_essay_label'       => array(
			'label'    => __( 'Home Editorial: essays label', 'editorialclassic' ),
			'default'  => __( 'Category', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_editorial_essay_title'       => array(
			'label'    => __( 'Home Editorial: essays title', 'editorialclassic' ),
			'default'  => __( 'Essays & Literature', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_editorial_review_label'      => array(
			'label'    => __( 'Home Editorial: reviews label', 'editorialclassic' ),
			'default'  => __( 'Category', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_editorial_review_title'      => array(
			'label'    => __( 'Home Editorial: reviews title', 'editorialclassic' ),
			'default'  => __( 'Critical Reviews', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_editorial_issue_kicker'      => array(
			'label'    => __( 'Home Editorial: issue kicker', 'editorialclassic' ),
			'default'  => __( 'Current Issue', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_editorial_issue_title'       => array(
			'label'    => __( 'Home Editorial: issue title', 'editorialclassic' ),
			'default'  => __( 'Table of Contents', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_editorial_issue_description' => array(
			'label'    => __( 'Home Editorial: issue description', 'editorialclassic' ),
			'default'  => __( 'A selection of featured articles curated for this issue.', 'editorialclassic' ),
			'type'     => 'textarea',
			'sanitize' => 'sanitize_textarea_field',
		),
		'tiny_editorial_home_stream_marquee_label'        => array(
			'label'    => __( 'Home Stream: marquee label', 'editorialclassic' ),
			'default'  => __( 'Editor\'s Pick', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_stream_leads_title'          => array(
			'label'    => __( 'Home Stream: leads title', 'editorialclassic' ),
			'default'  => __( 'Top Stories', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_stream_more_title'           => array(
			'label'    => __( 'Home Stream: more reading title', 'editorialclassic' ),
			'default'  => __( 'More to Read', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_mosaic_grid_label'           => array(
			'label'    => __( 'Home Mosaic: grid label', 'editorialclassic' ),
			'default'  => __( 'Latest', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_mosaic_grid_title'           => array(
			'label'    => __( 'Home Mosaic: grid title', 'editorialclassic' ),
			'default'  => __( 'Recent Stories', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_mosaic_spotlight_label'      => array(
			'label'    => __( 'Home Mosaic: spotlight label', 'editorialclassic' ),
			'default'  => __( 'In Depth', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_mosaic_spotlight_title'      => array(
			'label'    => __( 'Home Mosaic: spotlight title', 'editorialclassic' ),
			'default'  => __( 'Essays & Analysis', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_mosaic_archive_label'        => array(
			'label'    => __( 'Home Mosaic: archive label', 'editorialclassic' ),
			'default'  => __( 'More Reading', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
		'tiny_editorial_home_mosaic_archive_title'        => array(
			'label'    => __( 'Home Mosaic: archive title', 'editorialclassic' ),
			'default'  => __( 'From the Archive', 'editorialclassic' ),
			'type'     => 'text',
			'sanitize' => 'sanitize_text_field',
		),
	);

	foreach ( $settings as $id => $args ) {
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => $args['default'],
				'sanitize_callback' => $args['sanitize'],
			)
		);
		$wp_customize->add_control(
			$id,
			array(
				'label'       => $args['label'],
				'section'     => 'tiny_editorial_theme_options',
				'type'        => $args['type'],
				'input_attrs' => 'tiny_editorial_related_count' === $id ? array(
					'min' => 1,
					'max' => 6,
				) : array(),
			)
		);
	}

	$home_category_controls = array(
		'tiny_editorial_home_essay_category'  => __( 'Editorial home: Essays category', 'editorialclassic' ),
		'tiny_editorial_home_review_category' => __( 'Editorial home: Reviews category', 'editorialclassic' ),
	);

	foreach ( $home_category_controls as $id => $label ) {
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => 0,
				'sanitize_callback' => 'absint',
			)
		);
		$wp_customize->add_control(
			$id,
			array(
				'label'       => $label,
				'section'     => 'tiny_editorial_theme_options',
				'type'        => 'dropdown-categories',
				'description' => esc_html__( 'Leave unselected to show a configuration note instead of mixing unrelated latest posts.', 'editorialclassic' ),
			)
		);
	}

	$checkboxes = array(
		'tiny_editorial_show_header_cta'    => array( __( 'Show header CTA', 'editorialclassic' ), false ),
		'tiny_editorial_show_breadcrumbs'   => array( __( 'Show breadcrumbs', 'editorialclassic' ), true ),
		'tiny_editorial_show_related_posts' => array( __( 'Show related posts on single posts', 'editorialclassic' ), true ),
		'tiny_editorial_show_author_box'    => array( __( 'Show author box on single posts', 'editorialclassic' ), true ),
		'tiny_editorial_show_scroll_top'    => array( __( 'Show scroll-to-top button', 'editorialclassic' ), true ),
		'tiny_editorial_smooth_scroll'      => array( __( 'Enable smooth scroll-to-top behavior', 'editorialclassic' ), true ),
	);

	foreach ( $checkboxes as $id => $data ) {
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => (bool) $data[1],
				'sanitize_callback' => 'tiny_editorial_sanitize_checkbox',
			)
		);
		$wp_customize->add_control(
			$id,
			array(
				'label'   => $data[0],
				'section' => 'tiny_editorial_theme_options',
				'type'    => 'checkbox',
			)
		);
	}
}
add_action( 'customize_register', 'tiny_editorial_customize_register' );

/**
 * Sanitize checkboxes.
 *
 * @param mixed $checked Checkbox value.
 * @return bool
 */
function tiny_editorial_sanitize_checkbox( $checked ) {
	return isset( $checked ) && true === wp_validate_boolean( $checked );
}
