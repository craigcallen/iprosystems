<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6466298541731',
	'title' => 'Weekly Ads',
	'fields' => array(
		array(
			'key' => 'field_646629cddee7b',
			'label' => 'Weekly Ads Files',
			'name' => 'arg_weekly_ads_files',
			'aria-label' => '',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'hide_field' => '',
			'hide_label' => '',
			'hide_instructions' => '',
			'hide_required' => '',
			'acfe_save_meta' => 0,
			'uploader' => 'basic',
			'return_format' => 'url',
			'preview_style' => 'default',
			'upload_folder' => '',
			'button_label' => 'Add Weekly Ads',
			'stylised_button' => 1,
			'file_count' => 0,
			'multiple' => 0,
			'max' => '',
			'acfe_settings' => '',
			'acfe_validate' => '',
			'min_size' => '',
			'max_size' => 8,
			'mime_types' => 'pdf',
			'instruction_placement' => '',
			'acfe_permissions' => '',
			'library' => 'all',
			'placeholder' => 'Select',
			'min' => '',
		),
		array(
			'key' => 'field_646e3dc68a08d',
			'label' => 'Weekly Ad Start Date',
			'name' => 'arg_weekly_ad_start_date',
			'aria-label' => '',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'hide_field' => '',
			'hide_label' => '',
			'hide_instructions' => '',
			'hide_required' => '',
			'acfe_save_meta' => 0,
			'display_format' => 'm/d/Y',
			'return_format' => 'Y-m-d',
			'first_day' => 0,
			'placeholder' => '',
			'min_date' => '',
			'max_date' => '',
			'no_weekends' => 0,
			'acfe_settings' => '',
			'acfe_validate' => '',
			'instruction_placement' => '',
			'acfe_permissions' => '',
		),
		array(
			'key' => 'field_64662ac1dee7d',
			'label' => 'Weekly Ad End Date',
			'name' => 'arg_weekly_ad_end_date',
			'aria-label' => '',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'acfe_save_meta' => 0,
			'display_format' => 'F j, Y',
			'return_format' => 'Y-m-d',
			'first_day' => 0,
			'placeholder' => '',
			'min_date' => '',
			'max_date' => '',
			'no_weekends' => 0,
		),
		array(
			'key' => 'field_6571fb6a93743',
			'label' => 'Weekly Ad Drop Day',
			'name' => 'arg_weekly_ad_drop_day',
			'aria-label' => '',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'hide_field' => '',
			'hide_label' => '',
			'hide_instructions' => '',
			'hide_required' => '',
			'acfe_save_meta' => 0,
			'choices' => array(
				'Monday' => 'Monday',
				'Tuesday' => 'Tuesday',
				'Wednesday' => 'Wednesday',
				'Thursday' => 'Thursday',
				'Friday' => 'Friday',
				'Saturday' => 'Saturday',
				'Sunday' => 'Sunday',
			),
			'default_value' => '',
			'return_format' => 'array',
			'acfe_settings' => '',
			'acfe_validate' => '',
			'allow_null' => 1,
			'other_choice' => 0,
			'instruction_placement' => '',
			'acfe_permissions' => '',
			'layout' => 'horizontal',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_646aa440c9ec8',
			'label' => 'Weekly Ad Location',
			'name' => 'arg_weekly_ad_location',
			'aria-label' => '',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_save_meta' => 0,
			'post_type' => array(
				0 => 'location',
			),
			'post_status' => '',
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
			),
			'return_format' => 'object',
			'acfe_add_post' => 0,
			'acfe_edit_post' => 1,
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => true,
				'acfe_bidirectional_related' => array(
					0 => 'field_646aa502f6f2a',
					1 => 'field_646aa440c9ec8',
				),
			),
			'min' => '',
			'max' => '',
			'elements' => '',
			'bidirectional_target' => array(
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'weekly-ad',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 1,
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 1,
	'acfe_display_title' => 'Weekly Ads • Powered by Alliance Retail Group',
	'acfe_permissions' => '',
	'acfe_meta' => array(
		'653c06f7a0848' => array(
			'acfe_meta_key' => '',
			'acfe_meta_value' => '',
		),
	),
	'acfe_note' => '',
	'modified' => 1701970680,
));

endif;