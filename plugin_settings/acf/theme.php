<?php

/******************************
*
* Theme specific custom fields
* 
******************************/

//custom-home-page.php
register_field_group(array(
	'key' => 'home-page',
	'title' => 'Home Page',
	'menu_order' => 0,
	'options' => array(),
	'fields' => array (
		array (
			'key' => 'homepage-heading',
			'label' => 'Main page heading',
			'name' => 'homepage-heading',
			'type' => 'text',
		),
		array (
			'key' => 'homepage-body',
			'label' => 'Main page body text',
			'name' => 'homepage-body',
			'type' => 'textarea',
		),
		array (
			'key' => 'homepage-subsection-1-header',
			'label' => 'Subsection One Header',
			'name' => 'homepage-subsection-1-header',
			'type' => 'text',
		),
		array (
			'key' => 'homepage-subsection-1-body',
			'label' => 'Subsection One Body text',
			'name' => 'homepage-subsection-1-body',
			'type' => 'textarea',
		),
		array (
			'key' => 'homepage-subsection-1-link',
			'label' => 'Subsection One page link',
			'name' => 'homepage-subsection-1-link',
			'type' => 'page_link'
		),
		array (
			'key' => 'homepage-subsection-2-header',
			'label' => 'Subsection Two Header',
			'name' => 'homepage-subsection-2-header',
			'type' => 'text',
		),
		array (
			'key' => 'homepage-subsection-2-body',
			'label' => 'Subsection Two Body text',
			'name' => 'homepage-subsection-2-body',
			'type' => 'textarea',
		),
		array (
			'key' => 'homepage-subsection-2-link',
			'label' => 'Subsection Two page link',
			'name' => 'homepage-subsection-2-link',
			'type' => 'page_link',
			'return_format' => array('post_type' => '','taxonomy' => '','allow_null' => 0,'multiple' => 0),
		),
		array (
			'key' => 'homepage-subsection-3-header',
			'label' => 'Subsection Three Header',
			'name' => 'homepage-subsection-3-header',
			'type' => 'text',
		),
		array (
			'key' => 'homepage-subsection-3-body',
			'label' => 'Subsection Three Body text',
			'name' => 'homepage-subsection-3-body',
			'type' => 'textarea',
		),
		array (
			'key' => 'homepage-subsection-3-link',
			'label' => 'Subsection Three page link',
			'name' => 'homepage-subsection-3-link',
			'type' => 'page_link',
			'return_format' => array('post_type' => '','taxonomy' => '','allow_null' => 0,'multiple' => 0),
		),
		array (
			'key' => 'homepage-subsection-3-image',
			'label' => 'Subsection Three Image',
			'name' => 'homepage-subsection-3-image',
			'type' => 'image',
		),
		array (
			'key' => 'home-hero-project-name',
			'label' => 'Hero project name',
			'name' => 'home-hero-project-name',
			'type' => 'text',
		),
		array (
			'key' => 'home-hero-project-link',
			'label' => 'Hero project link',
			'name' => 'home-hero-project-link',
			'type' => 'page_link',
			'return_format' => array('post_type' => '','taxonomy' => '','allow_null' => 0,'multiple' => 0),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'custom-home-page.php',
			),
		),
	),
));	

// single-casestudies.php
register_field_group(array(
	'key' => 'case-studies',
	'title' => 'Case Studies',
	'menu_order' => 1,
	'options' => array(),
	'fields' => array (
		array (
			'key' => 'case_study_location',
			'label' => 'Location',
			'name' => 'case_study_location',
			'type' => 'text',
		),
		array (
			'key' => 'case_study_subheading',
			'label' => 'Body heading',
			'name' => 'case_study_subheading',
			'type' => 'textarea',
		),
		array (
			'key' => 'case_study_body_text',
			'label' => 'Body text heading',
			'name' => 'case_study_body_text',
			'type' => 'textarea',
		),
		array (
			'key' => 'case_study_quote_body',
			'label' => 'Quote from client',
			'name' => 'case_study_quote_body',
			'type' => 'textarea',
		),
		array (
			'key' => 'case_study_quote_author',
			'label' => 'Client name and occupation',
			'name' => 'case_study_quote_author',
			'type' => 'text',
		),
		array (
			'key' => 'case_study_main_image',
			'label' => 'Main image - 1800px X 700px (min) - Filesize ~600Kb',
			'name' => 'case_study_main_image',
			'type' => 'image',
			'return_format' => 'url',
		),
		array (
			'key' => 'case_study_second_image',
			'label' => 'Second image - 900px X 500px (min) - Filesize ~400Kb',
			'name' => 'case_study_second_image',
			'type' => 'image',
			'return_format' => 'url',
		),
		array (
			'key' => 'case_study_third_image',
			'label' => 'Third image - 900px X 500px (min) - Filesize ~400Kb',
			'name' => 'case_study_third_image',
			'type' => 'image',
		),
		array (
			'key' => 'case_study_fourth_image',
			'label' => 'Fourth image - 900px X 500px (min) - Filesize ~400Kb',
			'name' => 'case_study_fourth_image',
			'type' => 'image',
		),
		array (
			'key' => 'case_study_fifth_image',
			'label' => 'Fifth image - 900px X 500px (min) - Filesize ~400Kb',
			'name' => 'case_study_fifth_image',
			'type' => 'image',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'casestudies',
			),
		),
	),
));	

// custom-about-page.php
register_field_group(array(
	'key' => 'about-us',
	'title' => 'about-us',
	'menu_order' => 2,
	'options' => array(),
	'fields' => array (
		array (
			'key' => 'about_body_text',
			'label' => 'Body text',
			'name' => 'about_body_text',
			'type' => 'textarea',
		),
		array (
			'key' => 'about_quote_body',
			'label' => 'Quote from client',
			'name' => 'about_quote_body',
			'type' => 'textarea',
		),
		array (
			'key' => 'about_quote_author',
			'label' => 'Client name and occupation',
			'name' => 'about_quote_author',
			'type' => 'text',
		),
		array (
			'key' => 'about_subsection_meettheteam_header',
			'label' => 'Meet the team header text',
			'name' => 'about_subsection_3_header',
			'type' => 'text',
		),
		array (
			'key' => 'about_subsection_meettheteam_body',
			'label' => 'Meet the team Body text',
			'name' => 'about_subsection_3_body',
			'type' => 'textarea',
		),
		array (
			'key' => 'about_subsection_meettheteam_link',
			'label' => 'Meet the team page link',
			'name' => 'about_subsection_3_link',
			'type' => 'page_link',
			'return_format' => array('post_type' => '','taxonomy' => '','allow_null' => 0,'multiple' => 0),
		),
		array (
			'key' => 'about_subsection_meettheteam_image',
			'label' => 'Meet the team Image',
			'name' => 'about_subsection_3_image',
			'type' => 'image',
		),
		array (
			'key' => 'about_subsection_1_header',
			'label' => 'Subsection One Header',
			'name' => 'about_subsection_1_header',
			'type' => 'text',
		),
		array (
			'key' => 'about_subsection_1_body',
			'label' => 'Subsection One Body text',
			'name' => 'about_subsection_1_body',
			'type' => 'textarea',
		),
		array (
			'key' => 'about_subsection_1_link',
			'label' => 'Subsection One Link',
			'name' => 'about_subsection_1_link',
			'type' => 'page_link'
		),
		array (
			'key' => 'about_subsection_2_header',
			'label' => 'Subsection Two Header',
			'name' => 'about_subsection_2_header',
			'type' => 'text',
		),
		array (
			'key' => 'about_subsection_2_body',
			'label' => 'Subsection Two Body text',
			'name' => 'about_subsection_2_body',
			'type' => 'textarea',
		),
		array (
			'key' => 'about_subsection_2_link',
			'label' => 'Subsection Two Link',
			'name' => 'about_subsection_2_link',
			'type' => 'page_link'
		),
		array (
			'key' => 'about_video_link',
			'label' => 'Youtube video embed link',
			'name' => 'about_video_link',
			'type' => 'text'
		),

	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'custom-about-page.php',
			),
		),
	),
));	

// custom-category-page.php
register_field_group(array(
	'key' => 'category',
	'title' => 'category',
	'menu_order' => 3,
	'options' => array(),
	'fields' => array (
		array (
			'key' => 'category_body_text',
			'label' => 'Body text',
			'name' => 'category_body_text',
			'type' => 'textarea',
		),
		array (
			'key' => 'category_quote_body',
			'label' => 'Quote from client',
			'name' => 'category_quote_body',
			'type' => 'textarea',
		),
		array (
			'key' => 'category_quote_author',
			'label' => 'Client name and occupation',
			'name' => 'category_quote_author',
			'type' => 'text',
		),
		array (
			'key' => 'show_category_1_option',
			'label' => 'Show Project 1?',
			'name' => 'show_project_1',
			'type' => 'radio',
			'required' => 1,
			'choices' => array (
				0 => 'Do not show project',
				1 => 'Show Project',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
		),
		array (
			'key' => 'show_category_1',
			'label' => 'Select Project',
			'name' => 'project_in_cat_1',
			'type' => 'post_object',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'show_category_1_option',
						'operator' => '==',
						'value' => 1,
					),
				),
				'allorany' => 'all',
			),
			'post_type' => array (
				0 => 'all',
			),
			'allow_null' => 0,
			'multiple' => 0,
		),

		array (
			'key' => 'show_category_2_option',
			'label' => 'Show Project 2?',
			'name' => 'show_project_2',
			'type' => 'radio',
			'required' => 1,
			'choices' => array (
				0 => 'Do not show project',
				1 => 'Show Project',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
		),
		array (
			'key' => 'show_category_2',
			'label' => 'Select Project',
			'name' => 'project_in_cat_2',
			'type' => 'post_object',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'show_category_2_option',
						'operator' => '==',
						'value' => 1,
					),
				),
				'allorany' => 'all',
			),
			'post_type' => array (
				0 => 'all',
			),
			'allow_null' => 0,
			'multiple' => 0,
		),
		array (
			'key' => 'show_category_3_option',
			'label' => 'Show Project 3?',
			'name' => 'show_project_3',
			'type' => 'radio',
			'required' => 1,
			'choices' => array (
				0 => 'Do not show project',
				1 => 'Show Project',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
		),
		array (
			'key' => 'show_category_3',
			'label' => 'Select Project',
			'name' => 'project_in_cat_3',
			'type' => 'post_object',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'show_category_3_option',
						'operator' => '==',
						'value' => 1,
					),
				),
				'allorany' => 'all',
			),
			'post_type' => array (
				0 => 'all',
			),
			'allow_null' => 0,
			'multiple' => 0,
		),





	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'custom-category-page.php',
			),
		),
	),
));	

// custom-whatwedo-page.php
register_field_group(array(
	'key' => 'whatwedo',
	'title' => 'What we do',
	'menu_order' => 3,
	'options' => array(),
	'fields' => array (
		array (
			'key' => 'whatwedo_body_text',
			'label' => 'Body text',
			'name' => 'whatwedo_body_text',
			'type' => 'textarea',
		),
		array (
			'key' => 'whatwedo_quote_body',
			'label' => 'Quote from client',
			'name' => 'whatwedo_quote_body',
			'type' => 'textarea',
		),
		array (
			'key' => 'whatwedo_quote_author',
			'label' => 'Client name and occupation',
			'name' => 'whatwedo_quote_author',
			'type' => 'text',
		)
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'custom-whatwedo-page.php',
			),
		),
	),
));	

//single-awards.php 
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_conditional-logic',
		'title' => 'Conditional Logic',
		'fields' => array (
			array (
				'key' => 'award_name',
				'label' => 'Award / Nomination',
				'name' => 'award_name',
				'type' => 'text'
			),
			array (
				'key' => 'award_date',
				'label' => 'Date project awarded',
				'name' => 'award_date',
				'type' => 'date_picker'
			),
			array (
				'key' => 'field_55d2033622299',
				'label' => 'Show Link',
				'name' => 'show_link',
				'type' => 'radio',
				'required' => 1,
				'choices' => array (
					'Show link' => 'Show link',
					'Do not show link' => 'Do not show link',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_55d2032122298',
				'label' => 'Awarded project',
				'name' => 'awarded_project',
				'type' => 'post_object',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55d2033622299',
							'operator' => '==',
							'value' => 'Show link',
						),
					),
					'allorany' => 'all',
				),
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'awards',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

//single-press.php 
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'press-post-type',
		'title' => 'Press post type',
		'fields' => array (
			array (
				'key' => 'press_date',
				'label' => 'Publication Date',
				'name' => 'press_date',
				'type' => 'date_picker'
			),
			array (
				'key' => 'press_image',
				'label' => 'Publication Image / Cover',
				'name' => 'press_image',
				'type' => 'image'
			),
			array (
				'key' => 'press_link',
				'label' => 'PDF / File',
				'name' => 'press_link',
				'type' => 'file'
			)
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'press',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

// custom-whatwedo-page.php
register_field_group(array(
	'key' => 'portfolio',
	'title' => 'Portfolio',
	'menu_order' => 3,
	'options' => array(),
	'fields' => array (
		array (
			'key' => 'body_text',
			'label' => 'Body text',
			'name' => 'body_text',
			'type' => 'textarea',
		),
		array (
			'key' => 'quote_body',
			'label' => 'Quote from client',
			'name' => 'quote_body',
			'type' => 'textarea',
		),
		array (
			'key' => 'quote_author',
			'label' => 'Client name and occupation',
			'name' => 'quote_author',
			'type' => 'text',
		)
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'custom-portfolio-page.php',
			),
		),
	),
));	







?>